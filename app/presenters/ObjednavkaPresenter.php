<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */



/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class ObjednavkaPresenter extends TemplatePresenter
{
	var $steps = array(
	1 => 'konfigurace',
	2 => 'kosik',
	3 => 'doprava',
	4 => 'podminky',
	5 => 'potvrzeni',
	6 => 'zaver');

	var $session;
	var $currStep;
	var $druhy = array('cpu','gpu','mb','ram','hdd','cool','fan','power');
	var $komponenty;
	var $stav;

	var $doprava;
	var $platba;

	public function startup()
	{
		parent::startup();
		$this->currStep = array_search($this->getAction(), $this->steps);
		$this->session = Environment::getSession('steps_'.$this->typ.$this->id); // unikatni session pro kazdej typ a id
		// pokud v něm neexistuje proměnná step
		$this->checkStep();
		$this->template->step = $this->session->step;
		$this->template->currstep = $this->currStep;
		$komponenty = $this->getParts($this->typ,$this->id);
		$komponenty= $this->optionsDefault($komponenty,$this->stav);
		$this->komponenty = $komponenty;
		$this->setSidebar($komponenty);
		//Debug::dump($this->session->items);

	}

	public function getModel()
	{
		return new DetailModel;
	}

	public function handlecancel()
	{
		$this->session->remove();
		$this->redirect('Detail:',array('typ' => $this->typ, 'id' => $this->id));
	}


	public function optionChecked($stav,$komponenty)
	{
		$druhy = $this->druhy;
		$checked = array();
		foreach($druhy as $druh)
		{
			//echo $druh."</br>";
			if(isset($komponenty[$druh]))
			{
				foreach($komponenty[$druh] as $key => $komponenta)
				{
					if($stav[$key] == 'vychozi_nezmenitelne' || $stav[$key] == 'vychozi_zmenitelne')
					{
						$checked[$key] = "checked";
					}
					else
					{
						$checked[$key] = "";
					}


				}
			}
		}
		return $checked;
	}

	public function optionsDefault($komponenty,$stav)
	{
		$druhy = $this->druhy;

		foreach($druhy as $druh)
		{
			//echo $druh."</br>";
			if(isset($komponenty[$druh]))
			{
				foreach($komponenty[$druh] as $key => $komponenta)
				{
					if($stav[$key] == 'vychozi_nezmenitelne')
					{
						unset($komponenty[$druh]);
						$komponenty[$druh][$key] = $komponenta;
					}
				}
			}
		}
		return $komponenty;
	}

	public function getParts($typ,$id)
	{
		$vychozi_zmenitelne = $this->model->fetchSeznamKomponent(NULL ,array('typ'=>$typ,'level' => $id),NULL,NULL,1,1)->fetchAll();
		$vychozi_nezmenitelne = $this->model->fetchSeznamKomponent(NULL ,array('typ'=>$typ,'level' => $id),NULL,NULL,1,2)->fetchAll();
		$dodatecne = $this->model->fetchSeznamKomponent(NULL ,array('typ'=>$typ,'level' => $id),NULL,NULL,2)->fetchAll();

		$komponenty = array();
		$stav = array();

		foreach($vychozi_zmenitelne as $value)
		{
			$komponenty[$value->druh][$value->id] = $value;
			$stav[$value->id] = 'vychozi_zmenitelne';
		}
		foreach($vychozi_nezmenitelne as $value)
		{

			$komponenty[$value->druh][$value->id] = $value;
			$stav[$value->id] = 'vychozi_nezmenitelne';

		}
		foreach($dodatecne as $value)
		{
			$komponenty[$value->druh][$value->id] = $value;
			$stav[$value->id] = 'dodatecne';
		}
		$this->stav = $stav;
		return $komponenty;
	}
	public function setSidebar($komponenty)
	{
		if(isset($this->session->items))
		{
			foreach($this->session->items as $item)
			{
				$sideitems[$item] = $this->model->getIdName(NULL,NULL,NULL,NULL,$item)->fetchSingle();
			}
			//Debug::dump($sideitems);
			$this->template->sideitems = $sideitems;
		}
		else
		{
			$komponenty = $this->getParts($this->typ,$this->id);
			$komponenty= $this->optionsDefault($komponenty,$this->stav);
			$checked = $this->optionChecked($this->stav,$komponenty);
			foreach($this->druhy as $druh)
			{
				if(isset($komponenty[$druh]))
				{
					foreach($komponenty[$druh] as $value)
					{
						if($checked[$value->id] == "checked")
						{
							$sideitems[$druh] = $value->jmeno;
						}
					}
				}
			}
			//Debug::dump($sideitems);
			$this->template->sideitems = $sideitems;
		}
	}

	public function actionKonfigurace($typ,$id)
	{

		//$this->template->komponenty = $result[$id];


		//Debug::dump($komponenty);

		//$this->setSidebar($komponenty);

		$this->template->komponenty= $this->komponenty;
		$this->template->stav= $this->stav;
		$this->template->checked= $this->optionChecked($this->stav,$this->komponenty);
		$this->template->druhy = array(
				'cpu' => "Procesor",
				'gpu'=> "Grafická karta",
				'mb'=> "Základní deska",
				'ram'=> "Operační pamět",
				'hdd'=> "Disk",
				'cool'=> "Chladič",
				'fan'=> "Ventilátor",
				'power' => "Zdroj"
				);

				/*******************

				*/

				//$this->komponenty = $this->komponenty;



				//$this->template->form = $form;

				//Debug::dump($this->template->form);
				//Debug::dump($dodatecne);
				//Debug::dump($komponenty);
				//foreach($komponenty[] as $value)
				{
					//echo
				}


	}

	public function DopravaSubmitted($form)
	{
		$this->session->doprava = $form->getValues();
		$this->setStep();
		$this->redirect("Objednavka:podminky",array('typ' => $this->typ, 'id' => $this->id));
	}

	public function KonfiguratorSubmitted($form)
	{
		$this->session->items = $form->getValues();
		$this->setStep();
		$this->redirect("Objednavka:kosik",array('typ' => $this->typ, 'id' => $this->id));
	}
	public function createComponentKonfigurator()
	{
		$komponenty = $this->komponenty;
		$stav = $this->stav;
		$form = new AppForm($this,'konfigurator');
		$form->onSubmit[] = callback($this, 'KonfiguratorSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		$form->getElementPrototype()->class = "niceform";
		//$form->
		//$form->class = 'niceforms';

		$renderer = $form->getRenderer();
		$renderer->wrappers['controls']['container'] = NULL;
		$renderer->wrappers['pair']['container'] = NULL;
		$renderer->wrappers['label']['container'] = NULL;
		$renderer->wrappers['control']['container'] = NULL;


		foreach($this->druhy as $druh)
		{
			$items = array ();
			if(isset($komponenty[$druh]))
			{
				foreach($komponenty[$druh] as $value)
				{
					$items[$value->id] =  $value->jmeno;
					if($stav[$value->id] == 'vychozi_nezmenitelne' || $stav[$value->id] == 'vychozi_zmenitelne')
					{
						$def = $value->id;
					}
				}
				$form->addRadioList($druh,NULL,$items)
				->addRule(Form::FILLED, 'Vsechny položky musí být vypněny!');
				$form->setDefaults(array($druh => $def));
			}
		}
		$form->addSubmit('done','Odeslat');
		if(isset($this->session->items))
		{
			$form->setDefaults($this->session->items);
		}
		return $form;
	}

	public function handleagree()
	{
		$this->setStep();
		$this->redirect("Objednavka:potvrzeni",array('typ' => $this->typ, 'id' => $this->id));
	}


	public function createComponentDoprava()
	{

		$form = new AppForm($this,'doprava');
		$form->onSubmit[] = callback($this, 'DopravaSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		$form->getElementPrototype()->class = "niceform";


		$renderer = $form->getRenderer();
		$renderer->wrappers['controls']['container'] = NULL;
		$renderer->wrappers['pair']['container'] = NULL;
		$renderer->wrappers['label']['container'] = NULL;
		$renderer->wrappers['control']['container'] = NULL;


		$doprava = explode(',',Environment::getConfig('doprava'));
		$platby = explode(',',Environment::getConfig('platby'));

		$form->addRadioList('doprava',NULL,$doprava)
		->addRule(Form::FILLED, 'Vsechny položky musí být vypněny!');
		$form->addRadioList('platby',NULL,$platby)
		->addRule(Form::FILLED, 'Vsechny položky musí být vypněny!');

		if(isset($this->session->doprava))
		{
			$form->setDefaults($this->session->doprava);
		}
		return $form;
	}
	public function renderKonfigurace()
	{

	}
	public function actionKosik()
	{
		$this->setStep();


	}
	public function renderKosik()
	{

	}
	public function actionDoprava()
	{


	}

	public function renderDoprava()
	{

	}


	public function actionPodminky()
	{
		//$this->setStep();
	}
	public function renderPodminky()
	{

	}
	public function actionPotvrzeni()
	{
		$doprava = explode(',',Environment::getConfig('doprava'));
		$platby = explode(',',Environment::getConfig('platby'));
		$this->doprava = $doprava[$this->session->doprava['doprava']];
		$this->platba = $platby[$this->session->doprava['platby']];
		$this->setStep();
	}
	public function renderPotvrzeni()
	{
		$this->template->doprava = $this->doprava;
		$this->template->platba = $this->platba;
	}
	public function actionZaver()
	{

	}
	public function renderZaver()
	{

	}

	public function checkStep()
	{
		if (!isset($this->session->step)) {  // Nenastavena session
			$this->session->step = 1;
			if($this->getAction() != $this->steps[1])
			{
				$this->redirect('Objednavka:'.$this->steps[1],array('typ' => $this->typ, 'id' => $this->id));
			}

		} else { // nastavena session
			if(array_search($this->getAction(), $this->steps) > $this->session->step)
			{
				$this->flashMessage("Nejdříve musíte vyplnit tuto část objednávky");
				$this->redirect('Objednavka:'.$this->steps[$this->session->step],array('typ' => $this->typ, 'id' => $this->id));

			}
		}
	}

	public function setStep() {
		if($this->session->step == $this->currStep)
		{
			$this->session->step++;
		}
	}








}

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
	2 => 'doprava',
	3 => 'kosik',
	4 => 'podminky',
	5 => 'potvrzeni',
	6 => 'zaver');

	var $session;
	var $currStep;
	var $druhy = array('cpu','gpu','mb','ram','hdd','cool','fan','power');
	var $komponenty;
	var $stav;
	var $color;

	var $doprava;
	var $platba;

	public function startup()
	{
		parent::startup();
		$this->currStep = array_search($this->getAction(), $this->steps);
		$this->session = Environment::getSession('steps_'.$this->typ.$this->id); // unikatni session pro kazdej typ a id
		// pokud v něm neexistuje proměnná step
		if($this->getAction() != 'buy'){
			$this->checkStep();
		}


		$this->template->step = $this->session->step;
		$this->template->currstep = $this->currStep;
		$this->template->sestava = $this->model->fetchSestavy('level',array('typ'=>$this->typ,'level'=>$this->id))->fetch();
		$komponenty = $this->getParts($this->typ,$this->id);
		$komponenty= $this->optionsDefault($komponenty,$this->stav);
		$this->komponenty = $komponenty;
		$this->setSidebar($komponenty);
		$this->session->sestava = $this->model->fetchSestavy('level',array('typ'=>$this->typ,'level'=>$this->id))->fetch();

		$cena = $this->session->sestava['cena'];
		$cena += $this->getPrize($komponenty);
		$this->session->cena = $cena;
		$this->template->cena = $cena;
		switch ($this->typ)
		{
			case 'game':
				$this->template->color = 'green';
				$this->color = 'green';
				break;
			case 'pro':
				$this->template->color = 'purple';
				$this->color = 'purple';
				break;
			case 'office':
				$this->template->color = 'blue';
				$this->color = 'blue';
				break;
			case 'home':
				$this->template->color = 'orange';
				$this->color = 'orange';
				break;
			default: 'green';
			$this->template->color = 'orange';
		}
		//echo $cena;
		/*foreach($this->komponenty as $item)
		 {
			$cena += $this->model->getIdPrize(NULL,NULL,NULL,NULL,$item)->fetchSingle();
			}
			$this->template->cena = $cena;*/
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
		//$vychozi_zmenitelne = $this->model->fetchStatus(array('typ'=>$typ,'level' => $id,'vychozi' => 'ano','zmenitelna' => 'ano'));
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

		//Debug::dump($stav);

		$this->stav = $stav;
		return $komponenty;
	}
	public function setSidebar($komponenty)
	{
		$sideitems = array();
		if(isset($this->session->items))
		{
			foreach($this->session->items as $item)
			{
				//Debug::dump($item);
				
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

	public function getPrize($komponenty)
	{
		$items = array();
		if(isset($this->session->items))
		{
			foreach($this->session->items as $item)
			{
				$items[$item] = $this->model->getIdPrize(NULL,NULL,NULL,NULL,$item)->fetchSingle();
			}
			//Debug::dump($sideitems);
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
							$items[$value->id] = $this->model->getIdPrize(NULL,NULL,NULL,NULL,$value->id)->fetchSingle();
						}
					}
				}
			}
			//Debug::dump($sideitems);

		}
		$cena = 0;
		foreach($items as $value)
		{
			$cena += $value;
		}
			
		return $cena;
	}

	public function actionBuy($typ,$id){


		//$items = $this->model->getName(NULL,array('typ'=>$typ,'level' =>$id),NULL,NULL)->fetchSingle();
		//Debug::dump($this->model->getDefComp(NULL,array('id_sestava'=>$id,'vychozi' => 'ano'),NULL,NULL)-> fetchPairs());
		//this->flashMessage($id);
		$id = $this->model->getId(NULL,array('typ'=>$typ,'level' =>$id),NULL,NULL)->fetchSingle();
		$this->session->items = $this->model->getDefComp(NULL,array('id_sestava'=>$id,'vychozi' => 'ano'),NULL,NULL)->fetchPairs();
		$this->session->step = 3;

		//Debug::dump($this->session);
		$this->setStep();
		$this->setStep();
		$this->redirect("Objednavka:doprava",array('typ' => $this->typ, 'id' => $this->id));
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
		$this->redirect("Objednavka:kosik",array('typ' => $this->typ, 'id' => $this->id));
	}

	public function KonfiguratorSubmitted($form)
	{
		$this->session->items = $form->getValues();
		$this->setStep();
		$this->redirect("Objednavka:doprava",array('typ' => $this->typ, 'id' => $this->id));
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
					$items[$value->id] =  $items[$value->id] =  Html::el()->setHtml($value->jmeno.'<span class="config-price">( + <span class="config-price-value">'.$value->cena.'</span> Kč )</span>')
					/*->setHtmlId($value->cena)*/;
					$ceny[$value->id] = $value->cena;
					if($stav[$value->id] == 'vychozi_nezmenitelne' || $stav[$value->id] == 'vychozi_zmenitelne')
					{
						//echo $stav[$value->id];
						$def = $value->id;
					} else {
						//$def = NULL;
					}
				}
					
					
				$form->addRadioList($druh,NULL,$items)
				//->addRule(Form::FILLED, 'Vsechny položky musí být vypněny!')
				->getControlPrototype()->onClick("aktualizujCenu();");//config-cont-box
				foreach($form[$druh]->items as $key => $option){
					//$option->setHtmlId = $ceny[$key];
					//echo $option->getHtmlId();
					//echo $ceny[$key];
					//Debug::dump($option);

				}
				//Debug::dump();
				//Debug::dump($form);
				//Debug::dump($form[$druh]);
				if(isset($def)){
					$form->setDefaults(array($druh => $def));
				}
			}
		}
		$form->addSubmit('done','pokračovat');
		$form['done']->getControlPrototype()->class = "button-green-mini button-mini-right";
		$form['done']->getControlPrototype()->style = "padding-top: 0px;";

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

	public function UdajeSubmitted($form)
	{
		$this->session->udaje = $form->getValues();
		$this->setStep();
		$this->redirect('Objednavka:podminky',array('typ' => $this->typ, 'id' => $this->id));
	}

	public function ButtonSubmitted($form)
	{
		$user = $this->getUser();

		$keys = array("jmeno", "prijmeni","email","ulice","mesto","psc","cp","ulice_d","mesto_d","cp_d","psc_d");
		foreach($keys as $key)
		{
			//echo $user->getIdentity()->$key.",";
			$this->session->udaje[$key] = $user->getIdentity()->$key;
		}
		//Debug::dump($this->session);
		$this->setStep();
		$this->redirect('Objednavka:podminky',array('typ' => $this->typ, 'id' => $this->id));
	}

	public function createComponentUdaje()
	{
		$form = new AppForm($this,'udaje');
		$form->onSubmit[] = callback($this, 'UdajeSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		$form->getElementPrototype()->class = "niceform";


		$renderer = $form->getRenderer();
		$renderer->wrappers['controls']['container'] = NULL;
		$renderer->wrappers['pair']['container'] = NULL;
		$renderer->wrappers['label']['container'] = NULL;
		$renderer->wrappers['control']['container'] = NULL;

		$form->addText('jmeno','Jméno:',50,50)
		->addRule(Form::FILLED, 'Zadejte jméno');

		$form->addText('prijmeni','Příjmení:',50,50)
		->addRule(Form::FILLED, 'Zadejte příjmení');

		$form->addText('email','E-mail:',50,50)
		->addRule(Form::FILLED, 'Zadejte email')
		->addRule(Form::EMAIL, 'Zadejte email');

		$form->addText('ulice','Ulice:',50,50)
		->addRule(Form::FILLED, 'Zadejte ulici');

		$form->addText('mesto','mesto:',50,50)
		->addRule(Form::FILLED, 'Zadejte mesto');

		$form->addText('cp','Čp:',50,50)
		->addRule(Form::FILLED, 'Zadejte číslo popisné');

		$form->addText('psc','Psč:',50,50)
		->addRule(Form::FILLED, 'Zadejte poštovní směrovací číslo');

		$form->addText('ulice_d','Ulice:',50,50);

		$form->addText('mesto_d','mesto:',50,50);

		$form->addText('cp_d','Čp:',50,50);

		$form->addText('psc_d','Psč:',50,50);

		//$form->addSubmit('submit','Submit');
		$form->addSubmit('done','pokračovat');
		$form['done']->getControlPrototype()->class = "button-green-mini button-mini-right";
		$form['done']->getControlPrototype()->style = "padding-top: 0px;";

		if(isset($this->session->udaje))
		{
			$form->setDefaults($this->session->udaje);
		}
		return $form;
	}

	public function createComponentButton()
	{
		$form = new AppForm($this,'button');
		$form->onSubmit[] = callback($this, 'ButtonSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		$form->getElementPrototype()->class = "niceform";


		$renderer = $form->getRenderer();
		$renderer->wrappers['controls']['container'] = NULL;
		$renderer->wrappers['pair']['container'] = NULL;
		$renderer->wrappers['label']['container'] = NULL;
		$renderer->wrappers['control']['container'] = NULL;

		$form->addSubmit('done','pokračovat');
		$form['done']->getControlPrototype()->class = "button-green-mini button-mini-right";
		$form['done']->getControlPrototype()->style = "padding-top: 0px;";
		return $form;
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

		$form->addSubmit('done','pokračovat');
		$form['done']->getControlPrototype()->class = "button-green-mini button-mini-right";
		$form['done']->getControlPrototype()->style = "padding-top: 0px;";

		//$user = $this->getUser();
		$identity = $this->getUser()->getIdentity();
		//Debug::dump($identity);
		if($this->getUser()->isAuthenticated())
		{
			$form->setDefaults(array('doprava' => $identity->doprava,'platby' => $identity->platby));
		}

		if(isset($this->session->doprava))
		{
			$form->setDefaults($this->session->doprava);
		}
		return $form;
	}
	public function renderKonfigurace()
	{

	}
	public function actionKosik($typ,$id)
	{



	}
	public function renderKosik()
	{
		$doprava = explode(',',Environment::getConfig('doprava'));
		$platby = explode(',',Environment::getConfig('platby'));

		$this->template->sestava = $this->session->sestava;
		$days = Environment::getConfig('doprava_'.$this->session->doprava['doprava']);
		$workdays = Environment::getConfig('doprava_'.$this->session->doprava['doprava'].'_workdays');
		if($workdays)
		{
			$date = strtotime("+".$days." day");
		}
		else
		{
			$date = $this->dateFromBusinessDays((int)('+'.$days));
		}
		//echo Environment::getConfig('doprava_'.$this->session->doprava['doprava'].'_workdays');
		$this->template->datum = date("d.m.Y", $date);
		$this->template->doprava = $doprava[$this->session->doprava['doprava']];

		$this->template->platba = $platby[$this->session->doprava['platby']];
		$this->session->doprava['doprava_cena'] = Environment::getConfig('doprava_'.$this->session->doprava['doprava'].'_cena');
		$this->session->doprava['platba_cena'] = Environment::getConfig('platba_'.$this->session->doprava['platby']);
		$this->template->doprava_cena = $this->session->doprava['doprava_cena'];
		$this->template->platba_cena =$this->session->doprava['platba_cena'];




		//$doprava_cena =


		//Debug::dump($this->session->doprava);
		// $this->template->datum = $date = date("m.d.y", strtotime("+1. day"));*/
	}
	public function actionDoprava($typ,$id)
	{


	}

	public function renderDoprava()
	{

	}

	public function handleConfirm()
	{
		$id = $this->model->createObjednavka($this->session->udaje,$this->session->sestava,($this->session->cena+$this->session->doprava['doprava_cena']));
		$this->model->insertItems($this->session->items,$id);
		$this->setStep();
		$this->redirect("Objednavka:zaver",array('typ' => $this->typ, 'id' => $this->id));
	}

	public function actionPodminky($typ,$id)
	{
		//$this->setStep();
	}
	public function renderPodminky()
	{

	}
	public function actionPotvrzeni($typ,$id)
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

		//Debug::dump($this->session->doprava);

		$this->template->doprava_cena = $this->session->doprava['doprava_cena'];
		//$this->template->platba = $this->platba;


	}
	public function actionZaver($typ,$id)
	{
	}
	public function renderZaver()
	{
		$this->session->remove();
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



	function dateFromBusinessDays($days, $dateTime=null) {
		$dateTime = is_null($dateTime) ? time() : $dateTime;
		$_day = 0;
		$_direction = $days == 0 ? 0 : intval($days/abs($days));
		$_day_value = (60 * 60 * 24);

		while($_day !== $days) {
			$dateTime += $_direction * $_day_value;

			$_day_w = date("w", $dateTime);
			if ($_day_w > 0 && $_day_w < 6) {
				$_day += $_direction * 1;
			}
		}

		return $dateTime;
	}




}

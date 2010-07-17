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
class ManagerPresenter extends TemplatePresenter
{
	var $sestavy;
	var $sestava;
	var $komponenty;
	var $komponenta;
	var $komponentyAll;
	var $komb;
	var $items;
	var $id;

	public function startup()
	{
		parent::startup();
		$user = $this->getUser();
		if(!$user->isInRole('administrator')){
			$this->redirect('Sestavy:default');
		}
		$this->template->trans = array("game"=> "Herní","pro"=>"Profi","office"=> "Kancelářský","home"=>"Domácí");
		$this->template->nadpis = "Manager";
	//	echo $this->getSignal();
	}



	public function getModel()
	{
		return new ManagerModel;
	}

	public function actionAddKomponent($ident)
	{

	}

	public function createComponentAddkomp() {
		$form = new AppForm($this,'addkomp');
		$form->onSubmit[] = callback($this, 'addKomponentSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		//$form->getElementPrototype()->class = "niceform";

		$form->addText('jmeno','Název:')
		->addRule(Form::FILLED, 'Zadejte název');
		$typy = explode(',',Environment::getConfig('typy'));
		$typy = array('Zadejte typ:') + $typy;
		$form->addSelect('druh','Typ:',$typy)
		->skipFirst()
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";
		$form->addText('cena','Cena:')
		->addRule(Form::FILLED, 'Zadejte cenu')
		->addRule(Form::INTEGER, 'cena musí být číslo');
		$form->addSubmit('done','Uložit');

		return $form;
	}


	public function createComponentEditKomp() {
		$form = new AppForm($this,'editKomp');
		$form->onSubmit[] = callback($this, 'editKompSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		//$form->getElementPrototype()->class = "niceform";

		$form->addText('jmeno','Název:')
		->addRule(Form::FILLED, 'Zadejte název');
		$typy = explode(',',Environment::getConfig('typy'));

		foreach($typy as $typ){
			$typy[$typ] = $typ;
		}

		$typy = array('' => 'Zadejte typ:') + $typy;
		$form->addSelect('druh','Typ:',$typy)
		->skipFirst()
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";
		$form->addText('cena','Cena:')
		->addRule(Form::FILLED, 'Zadejte cenu')
		->addRule(Form::INTEGER, 'cena musí být číslo');
		$form->addSubmit('done','Uložit');
		if(isset($this->komponenta) && is_array($this->komponenta))
		{
			//Debug::dump($this->komponenta);
			$form->setDefaults($this->komponenta);
		}
		return $form;
	}

	public function createComponentInsert() {
		$form = new AppForm($this,'insert');
		$form->onSubmit[] = callback($this, 'insertSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		//$form->getElementPrototype()->class = "niceform";

		$items = array();
		foreach($this->items as $item){
			$items[$item->druh][$item->id] = $item->jmeno;
		}
		//Debug::dump($items);

		$form->addSelect('id_komponenta','Komponenta:',$items)
		//->skipFirst()
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";

		$bar = array('ano'=>"Ano",'ne'=> "Ne");
		$form->addSelect('vychozi','Výchozí:',$bar)
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";
		$form->addSelect('zmenitelna','Změnitelná:',$bar)
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";
		$form->addSubmit('done','Přidat');

		return $form;
	}
	public function actionSestavy()
	{
		$this->sestavy = $this->model->fetchSestavy()->fetchAll();
	}

	public function actionKomponenty($id = NULL)
	{
		$this->komponentyAll = $this->model->fetchKomponentyAll()->fetchAll();
		//Debug::dump($this->komponentyAll);

		if(!is_null($id))
		{
			$this->komponenta = $this->model->fetchKomponenta($id)->fetch();
		}
	}

	public function renderKomponenty()
	{
		if(isset($this->komponenta)){
			$this->template->komponenta = $this->komponenta;
		}
		$this->template->komponentyAll = $this->komponentyAll;
	}



	public function actionEdit($id)
	{
		$this->items = $this->model->fetchItems()->fetchAll();
		$this->sestava = $this->model->fetchSestava($id)->fetch();
		$this->komponenty = $this->model->fetchKomponenty($id)->fetchAll();
		$this->id = $id;
	}

	public function actionEditKomb($id)
	{
		$this->komb = $this->model->fetchKomb($id)->fetch();
	}

	public function renderEditKomb($id)
	{
		//Debug::dump($this->komb);
	}

	public function createComponentEditKomb()
	{
		$form = new AppForm($this,'editKomb');
		$form->onSubmit[] = callback($this, 'EditKombSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		//$form->getElementPrototype()->class = "niceform";

		$bar = array('ano'=>"Ano",'ne'=> "Ne");
		$form->addSelect('vychozi','Výchozí:',$bar)
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";
		$form->addSelect('zmenitelna','Změnitelná:',$bar)
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";

		$form->addHidden('sestava')->setDefaultValue($this->getParam('sestava'));

		$form->addSubmit('done','Uložit');

		$form->setDefaults($this->komb);

		return $form;
	}

	public function renderEdit($ident)
	{
		$this->template->nadpis = "Upravit sestavu";
		$this->template->sestava = $this->sestava;
		$this->template->komponenty = $this->komponenty;
		//Debug::dump($this->komponenty);
	}



	public function handlermKombinace($komb)
	{
		$this->model->rmKombinace($komb);
		$this->flashMessage('Komponenta odstraněna ze sestavy');
		$this->redirect('this');
	}

	public function handlermKomponenta($id)
	{
		$this->model->rmKomponenta($id);
		$this->flashMessage('Komponenta byla odstraněna.');
		$this->redirect('Manager:komponenty');
	}

	public function renderSestavy($ident)
	{
		$this->template->nadpis = "Sestavy";
		$this->template->sestavy = $this->sestavy;
	}


	public function createComponentEdit() {

		$form = new AppForm($this,'edit');
		$form->onSubmit[] = callback($this, 'EditSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		//$form->getElementPrototype()->class = "niceform";

		$form->addText('nazev','Název:')
		->addRule(Form::FILLED, 'Zadejte název');

		//$typy = array('typ'=>'Typ:','game'=>'Herní','pro'=>'Profi','office'=>'Kancelářské','home'=>'Domácí');
		//$form->addSelect('typ','Typ:',$typy)
		//->skipFirst()
		//->addRule(Form::FILLED, 'Zadejte typ')
		//->getControlPrototype()->class = "optionsDivVisible";
		$form->addText('cena','Základní cena:')
		->addRule(Form::FILLED, 'Zadejte cenu')
		->addRule(Form::INTEGER, 'cena musí být číslo');
		$form->addTextArea('popis_o','O produktu',50,10);
		$form->addTextArea('popis_pro','Pro koho',50,10);

		$form->addText('case','Case (název souboru s img):');
		$form->addText('rozliseni','Rozlišení:');

		$bar = array(0,1,2,3,4,5);
		$form->addSelect('bar_game','Bar - herní:',$bar)
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";
		$form->addSelect('bar_pro','Bar - profi:',$bar)
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";
		$form->addSelect('bar_office','Bar - kancel.:',$bar)
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";
		$form->addSelect('bar_home','Bar - domácí:',$bar)
		->addRule(Form::FILLED, 'Zadejte typ')
		->getControlPrototype()->class = "optionsDivVisible";

		$form->addTextArea('sidebar','Sidebar text',50,10);

		$form->addText('subheader','Subheader:');

		$form->addSubmit('done','Uložit');

		$form->setDefaults($this->sestava);

		return $form;
	}

	public function EditKombSubmitted($form) {
		$data = $form->getValues();

		$this->model->editKomb($data,$this->getParam('id'));
		$this->flashMessage('Komponenta byla upravena!');
		//Debug::dump($data);
		$this->redirect('Manager:edit',array('id' => $data['sestava']));
	}

	public function insertSubmitted($form) {
		$data = $form->getValues();

		$this->model->addKomb($data,$this->id);
		$this->flashMessage('Komponenta byla přidána!');
		//Debug::dump($data);
		$this->redirect('Manager:edit',array('id' => $this->id));
	}




	public function addKomponentSubmitted($form) {
		//echo "OK";
		$data = $form->getValues();
		$this->model->addKomponent($data);
		//Debug::dump($data);
		$this->flashMessage('Komponenty byla přidána!');
		$this->redirect('komponenty');
	}

	public function editKompSubmitted($form) {
		$data = $form->getValues();
		$this->model->updateKomponent($data,$this->id);
		$this->flashMessage('Komponenty byla upravena!');
		$this->redirect('Manager:komponenty');
	}

	public function editSubmitted($form) {
		$data = $form->getValues();
		$this->model->editSestava($data,$this->sestava->id);
		$this->flashMessage('Sestava byla upravena!');
		$this->redirect('this');
	}

	public function renderAddKomponent($ident)
	{
		$this->template->nadpis = "Přidat komponentu";
	}


}

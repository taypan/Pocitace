<?php

final class RegistracePresenter extends TemplatePresenter

{

	var $stat;
	public function startup()
	{
		parent::startup();
		$this->template->typ = 'game';
		return;
	}
	public function getModel() {
		return new RegistraceModel;
	}

	public function handleGenNewPass($id,$hash)
	{
		if($hash == substr(sha256(sha256("New Pass SALT".$id)),25,30) && $this->model->isUser($id))
		{
			//echo strlen(sha256(sha256("New Pass SALT".$id)));
			$ofset = rand(1,50);
			$pass = substr(sha256(sha256("New Pass SALT".$id)),$ofset,8);
			//echo $pass;
			$this->model->changePass($pass,$id);
			$data = $this->model->getUserData($id)->fetch();
			Debug::dump($data);
			$this->sendChangedPass($pass,$data);
			//$this->flashMessage('Nové heslo Vám bylo zasláno na e-mail');
			$this->redirect('Registrace:passsend');
		}
		else
		{
			$this->flashMessage('Chyba při generování nového hesla. Zkuste to znovu,');
			$this->redirect('this');
		}
	}

	public function sendChangedPass($pass,$data){
		$mail = new Mail();
		$config = Environment::getConfig('email');
		$mail->setFrom($config->address, $config->name);
		$mail->addTo($data->email);
		$mail->setSubject('Změna hesla');
		//$hash = substr(sha256(sha256($id."qwsdfghnm")),33,33);
		//$link = $this->link('//Registrace:validate', array('id' => $id, 'hash' => $hash));
		$mail->setBody("Dobrý den,\nVaše heslo bylo změněno na:\n************\n$pass\n************\nDěkujeme za spolupráci.");
		$mail->send();

	}

	public function actionNewPass($id,$hash)
	{
		if($hash == substr(sha256(sha256("New Pass SALT".$id)),25,30))
		{
			$this->stat = TRUE;
		}
		else
		{
			$this->stat = FALSE;
		}
	}

	public function renderNewPass($id,$hash)
	{
		$this->template->stat = $this->stat;
		$this->template->id = $id;
		$this->template->hash = $hash;
	}

	public function  actionValidate($id,$hash)
	{
		if(substr(sha256(sha256($id."qwsdfghnm")),33,33) == $hash && $this->model->isUser($id)){
			$this->model->validate($id);
			$this->template->msg = "Účet je nyní aktivní.";
		}
		else
		{
			$this->template->msg = "Chyba při ověřování e-mailu. Zkuste se registrovat znovu. Pokud obtíže přetrvávají kontaktujte technickou podporu." ;
		}
	}

	public function renderComplete(){

	}

	public function actionForgotPass()
	{
			
	}
	public function renderForgotPass()
	{
			
	}


	public function ForgotPassSubmitted($form)
	{
		$data = $form->getValues();
		$email = $data['email'];
		$id = $this->model->getIdFromMail($email)->fetchSingle();
		$this->sendNewPassLink($id,$email);
		$this->redirect('Registrace:emailsend');		
	}

	public function sendNewPassLink($id,$email) {
		$mail = new Mail();
		$config = Environment::getConfig('email');
		$mail->setFrom($config->address, $config->name);
		$mail->addTo($email);
		$mail->setSubject('Nové heslo');
		$hash = substr(sha256(sha256("New Pass SALT".$id)),25,30);
		$link = $this->link('//Registrace:newpass', array('id' => $id, 'hash' => $hash));
		$mail->setBody("Dobrý den,\npro vygenerování nového hesla klikněte na následující odkaz:\n$link\nDěkujeme za spolupráci.");
		//echo "Dobrý den,\npro vygenerování nového hesla klikněte na následující odkaz:\n$link\nDěkujeme za spolupráci.";
		$mail->send();

	}

	public function createComponentForgotpass()
	{
		$form = new AppForm($this,'forgotpass');
		$form->onSubmit[] = callback($this, 'ForgotPassSubmitted');
		$form->addProtection('Vypršel ochranný časový limit, odešlete prosím formulář ještě jednou');
		$form->getElementPrototype()->class = "niceform";


		$renderer = $form->getRenderer();
		$renderer->wrappers['controls']['container'] = NULL;
		$renderer->wrappers['pair']['container'] = NULL;
		$renderer->wrappers['label']['container'] = NULL;
		$renderer->wrappers['control']['container'] = NULL;

		$form->addText('email','E-mail:',50,50)
		->addRule(Form::FILLED, 'Zadejte email')
		->addRule(Form::EMAIL, 'Zadejte email')
		->setDefaultValue('@')
		->addRule('MyValidators::isEmail', 'Zadaný e-mail se neshoduje s žádným v databázi.');

		//$form->addSubmit('submit','Submit');
		$form->addSubmit('done','Odeslat');
		$form['done']->getControlPrototype()->class = "button-green-mini";
		$form['done']->getControlPrototype()->style = "padding-top: 0px;";


		return $form;
	}

	public function createComponentRegistrace()
	{
		$form = new AppForm($this,'registrace');
		$form->onSubmit[] = callback($this, 'RegistaraceSubmitted');
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
		->addRule(Form::EMAIL, 'Zadejte email')
		->setDefaultValue('@')
		->addRule('MyValidators::emailTaken', 'Zadaný e-mail už někdo používá. Zvolte si jiný.');


		$form->addText('username','Uživatelské jméno:',50,50)
		->addRule(Form::FILLED, 'Zadejte uživatelské jméno')
		->addRule('MyValidators::usernameTaken', 'Uživatelské jméno je již zabrané. Zvolte si jiné.');

		$form->addPassword('password', 'Heslo:')
		->addRule(Form::FILLED, 'Zvolte si heslo')
		->addRule(Form::MIN_LENGTH, 'Zadané heslo je příliš krátké, zvolte si heslo alespoň o %d znacích', 5);

		$form->addPassword('password2', 'Heslo pro kontrolu:')
		->addRule(Form::FILLED, 'Zadejte heslo ještě jednou pro kontrolu')
		->addRule(Form::EQUAL, 'Zadané hesla se neshodují', $form['password']);

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

		$doprava = explode(',',Environment::getConfig('doprava'));
		$platby = explode(',',Environment::getConfig('platby'));

		$form->addRadioList('platby',NULL,$platby)
		->addRule(Form::FILLED, 'Vyberte preferovaný způsob platby!');
		$form->addRadioList('doprava',NULL,$doprava)
		->addRule(Form::FILLED, 'Vyberte preferovaný způsob dopravy!');


		//$form->addSubmit('submit','Submit');
		$form->addSubmit('done','registrovat');
		$form['done']->getControlPrototype()->class = "button-green-mini button-mini-right";
		$form['done']->getControlPrototype()->style = "padding-top: 0px;";


		return $form;
	}
	public function RegistaraceSubmitted($form) {
		$values = $form->getValues();
		$id = $this->model->createUser($values);
		$this->sendMail($id,$values);
		$this->redirect('Registrace:complete');
		//Debug::dump($values);

	}
	public function sendMail($id,$values) {
		$mail = new Mail();
		$config = Environment::getConfig('email');
		$mail->setFrom($config->address, $config->name);
		$mail->addTo($values['email']);
		$mail->setSubject('Potvrzení registrace');
		$hash = substr(sha256(sha256($id."qwsdfghnm")),33,33);
		$link = $this->link('//Registrace:validate', array('id' => $id, 'hash' => $hash));
		$mail->setBody("Dobrý den,\npro dokončení registrace klikněte na následující odkaz:\n$link\nDěkujeme za spolupráci.");
		$mail->send();

	}

}
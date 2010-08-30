<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */



/**
 * Login / logout presenters.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class LoginPresenter extends BasePresenter
{


	/**
	 * Login form component factory.
	 * @return mixed
	 */
	public function renderDefault(){
		$form = $this->getComponent('login');
		$this->template->form = $form;
	}

	public function renderLogout(){
		$this->getUser()->signOut();
		$flash = $this->flashMessage('Odhlášení proběhlo v pořádku');
		$this->redirect('Sestavy:');
	}

	protected function createComponentLogin()
	{
		$form = new AppForm;
		$form->addText('username', 'Jméno:');
		$form['username']->getControlPrototype()->class('text');
		$form->addPassword('password', 'Heslo:');
		$form['password']->getControlPrototype()->class('text');
		//$form->addCheckbox('remember', 'Remember me on this computer');
		$form->addSubmit('login','Přihlásit')
		->getControlPrototype()->style = "margin-top: -4px;background-color: transparent;width: 80px;"
		;//->getControlPrototype()->class = "button-green-mini button-mini-left-margin";
		$form->onSubmit[] = callback($this, 'loginFormSubmitted');

		return $form;
	}

	public function loginFormSubmitted($form)
	{
		try {
			$values = $form->values;
			/*if ($values['remember']) {
				$this->getUser()->setExpiration('+ 14 days', FALSE);
				} else {
				$this->getUser()->setExpiration('+ 20 minutes', TRUE);
				}*/
			$this->getUser()->setExpiration('+ 30 minutes', TRUE);
			$this->getUser()->authenticate($values['username'], $values['password']);
			$this->redirect('Sestavy:');

		} catch (AuthenticationException $e) {
			//$flash = $this->flashMessage($e->getMessage());
			$form->addError($e->getMessage());
		}
	}

}

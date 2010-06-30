<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */



/**
 * Base class for all application presenters.
 *
 * @author     John Doe
 * @package    MyApplication
 */
abstract class BasePresenter extends Presenter
{
	public $oldLayoutMode = FALSE;

	public function startup()
	{
		parent::startup();
		$user = $this->getUser();
		$logLink = Html::el("a");

		if ($user->isAuthenticated())
		{
			$logLink->href = $this->link("Login:logout");
			$logLink->setText("Odhlásit");
				
		}
		else
		{
			$logLink->href = $this->link("Login:");
			$logLink->setText("Přihlásit");	
		}
		
		$this->template->loginstatus = $logLink;
		return;
	}

}

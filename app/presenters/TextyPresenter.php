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
class TextyPresenter extends TemplatePresenter
{
	var $text;
	
	public function getModel()
	{
		return new TextyModel;
	}
	
	public function actionDefault($ident) {
		$where = array('identifikator' => $ident);
		$result = $this->model->getText(NULL,$where);
		$this->text = $result->fetch();
		
		//Debug::dump($text);
	}

	

	public function renderDefault($ident)
	{
		$this->template->text = $this->text;
	}


}

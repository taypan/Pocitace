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
abstract class TemplatePresenter extends BasePresenter
{

	var $typ;
	var $id;

	public function getSestavy($typ)
	{
		$result = array();
		for($i = 1;$i !=5;$i++){
			try{
				$result[$i] = $this->model->fetchSestavy(NULL ,array('typ'=>$typ,'level' => $i))->fetch();
			}
			catch (Exception $e)
			{
			}
		}
		return $result;
	}
	public function getCeny($sestavy,$komponenty)
	{
		$this->template->sestavy = $sestavy;
		$this->template->komponenty = $komponenty;


		$ceny = array(1=> NULL,2=> NULL,3=> NULL,4=> NULL);
		foreach($ceny as $key => $value)
		{
			$ceny[$key] =  $sestavy[$key]->cena;
			foreach($komponenty[$key] as $komponenta)
			{
				$ceny[$key] +=  $komponenta->cena;
			}
		}
		return $ceny;
	}

	public function startup()
	{
		parent::startup();
		$this->typ = $this->getParam('typ');
		$this->id = $this->getParam('id');
		$this->template->headerimg = $this->getHeaderImg();
		$this->template->slogan = $this->getHeaderSlogan();
		$this->template->user = $this->getUser();
		

		$this->template->typ = $this->getParam('typ');
		$this->template->id = $this->getParam('id');
		$this->template->dph = Environment::getConfig('dph');
		//$this->template->registerFilter('Nette\Templates\TemplateFilters::relativeLinks');
		return;
	}

	public function getKomponenty($typ,$i = NULL)
	{
		if (is_null($i))
		{
			$result = array();
			for($i = 1;$i !=5;$i++){
				try{
					$result[$i] = $this->model->fetchKomponenty(NULL ,array('typ'=>$typ,'level' => $i))->fetchAll();
				}
				catch (Exception $e)
				{
					//$this->flashMessage($e->getMessage());
				}
			}
		}
		else
		{
			try
			{
				$result[$i] = $this->model->fetchKomponenty(NULL ,array('typ'=>$typ,'level' => $i,'vychozi' => 'ano'))->fetchAll();
			}
			catch (Exception $e)
			{
				$this->flashMessage($e->getMessage());
			}
		}
		if(isset($result))
		{
			return $result;
		}
		else
		{
			return NULL;
		}

	}
	function getHeaderSlogan()
	{
		switch($this->getParam('typ')){
			case "game":
				return "Dokonalý herní zážitek";
			case "pro":
				return "Neomezená kreativita";
			case "office":
				return "Dokonalé pracovní prostředí";
			case "home":
				return "Dokonalé multimediální centrum";
			default:
				return "Dokonalý herní zážitek";
		}
	}

	function getHeaderImg()
	{
		switch($this->getParam('typ')){
			case "game":
				return "game_experienced_sub.jpg";
			case "pro":
				return "profi_ultimate_sub.jpg";
			case "office":
				return "office_ultimate_sub.jpg";
			case "home":
				return "home_ultimate_sub.jpg";
			default:
				return "game_experienced_sub.jpg";
		}
	}
}

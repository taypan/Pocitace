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
class SestavyPresenter extends TemplatePresenter
{
	public function getModel()
	{
		return new SestavyModel;
	}

	public function renderDefault($typ)
	{
		//---------------------

		//$path = "../app/templates/".$this->getName();
		//$this->template->setFile($path."/".$typ.".phtml");
		$this->template->sestavy = $this->getSestavy($typ);
		$this->template->komponenty = $this->getKomponenty($typ);
		
		$this->template->typ = $typ;
		$this->template->action = $this->getAction();
		$this->template->iterace = array(1,2,3,4);
		switch ($typ)
		{
			case 'game':
				$this->template->color = 'green';
				break;
			case 'pro':
				$this->template->color = 'purple';
				break;
			case 'office':
				$this->template->color = 'blue';
				break;
			case 'home':
				$this->template->color = 'orange';
				break;
			default: 'green';
				$this->template->color = 'orange';
		}
		
		//Debug::dump($this->template->color);
	}


	private function getSestavy($typ)
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

}

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
	var $sestavy;
	var $komponenty;
	var $ceny;
	
	public function getModel()
	{
		return new SestavyModel;
	}

	public function actionDefault($typ)
	{
		//$sestavy = $this->model->fetchSestavy(NULL,$where)->fetchAll();
		$this->sestavy = $this->model->fetchSestavy('level',array('typ' => $typ))->fetchAll();
		$sestavy[1] = $this->sestavy[0];
		$sestavy[2] = $this->sestavy[1];
		$sestavy[3] = $this->sestavy[2];
		$sestavy[4] = $this->sestavy[3];
		$this->sestavy = $sestavy;
		
		//$this->sestavy = array("Orange")+ $this->sestavy; 
		//Debug::dump($this->sestavy);
		foreach($this->sestavy as $key => $sestava)
		{
			
			$cena = $this->model->getCena(NULL, array('typ' => $typ,'level' => $key,'vychozi' => 'ano'))->fetchSingle();
			
			$this->ceny[$key] = $sestava->cena + $cena;
		}
		
		//Debug::dump($this->ceny);
		$where = array('typ' => $typ,'vychozi' => 'ano');
		$komps = $this->model->fetchKomps('druh',$where)->fetchAll();
		//Debug::dump($komps);
		
		$data = array();
		foreach($komps as $komponenta)
		{
			$data[$komponenta->level][$komponenta->id_komponenta] = $komponenta;
		}
		
		$this->komponenty = $data;
		
		
		

		//Debug::dump($data);
		
		
	}

	public function renderDefault($typ)
	{
		//---------------------

		//$path = "../app/templates/".$this->getName();
		//$this->template->setFile($path."/".$typ.".phtml");
		//$sestavy = $this->sestavy;
		//$komponenty = $this->getKomponenty($typ);
		//Debug::dump($this->komponenty);
		
		$this->template->komponenty = $this->komponenty;
		
		$this->template->sestavy = $this->sestavy;
		$this->template->ceny = $this->ceny;
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


}

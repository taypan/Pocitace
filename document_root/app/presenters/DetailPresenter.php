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
class DetailPresenter extends TemplatePresenter
{
	public function getModel()
	{
		return new DetailModel;
	}

	public function renderDefault($typ,$id)
	{
		//---------------------
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
			
		}
		try
		{

			//$result = $this->getKomponenty($typ,$id);
			//Debug::dump($result);
			$id_sestava = $this->model->getId(NULL,array('typ'=>$typ,'level' =>$id),NULL,NULL)->fetchSingle();
			$result = $this->model->getDefComp(NULL,array('id_sestava'=>$id_sestava,'vychozi' => 'ano'),NULL,NULL)->fetchAll();
			
			if(isset($result)){
				$this->template->komponenty = $result;
			}
			//Debug::dump($this->template->komponenty);
			$cena = 0;
			foreach($result as $value)
			{
				$cena += $value->cena;
			}
			$this->template->sestava = $this->model->fetchSestavy('level',array('typ'=>$typ,'level'=>$id))->fetch();
			$this->template->cena = $cena + $this->template->sestava->cena;
			//Debug::dump($this->template->sestava);
			//$this->template->sestava = $result;
		}
		catch (Exception $e)
		{
			//$this->flashMessage($e->getMessage());
		}
		//Debug::dump($result);


		$this->template->action = $typ.$id;
	}

	/*public	function getKomponenty($typ,$i = NULL)
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
		$this->flashMessage($e);
		}
		}
		}
		else
		{
		try
		{
		$result[$i] = $this->model->fetchKomponenty(NULL ,array('typ'=>$typ,'level' => $i))->fetchSingle();
		}
		catch (Exception $e)
		{
		$this->flashMessage($e);
		}
		}

		return $result;
		}*/
}

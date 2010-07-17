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
class KomponentsPresenter extends TemplatePresenter
{
	var $objGrid;

	public function getModel()
	{
		return new KomponentsModel;
	}

	public function actionDefault($ident) {
		$objGrid = new datagrid('phpmydatagrid.class.php','1');

		$objGrid -> friendlyHTML();

		$objGrid -> pathtoimages("../css/datagrid/images/");

		$objGrid -> closeTags(true);

		$objGrid -> form('komponents', true);

		$objGrid -> methodForm("get");

		$objGrid -> total("cena");

		$objGrid -> searchby("id,druh,jmeno,cena");

		//$objGrid -> linkparam("sess=".$_REQUEST["sess"]."&username=".$_REQUEST["username"]);

		$objGrid -> decimalDigits(2);

		$objGrid -> decimalPoint(",");

		$objGrid -> conectadb("localhost", "jirka", "jirka", "Omnique_shop");

		$objGrid -> tabla ("komponenty");

		$objGrid -> buttons(true,true,true,true);

		$objGrid -> keyfield("id");

		$objGrid -> salt("Some Code4Stronger(Protection)");

		$objGrid -> TituloGrid("phpMyDataGrid Sample page");

		//$objGrid -> FooterGrid("<div style='float:left'>&copy; 2007 Gurusistemas.com</div>");

		$objGrid -> datarows(5);

		$objGrid -> paginationmode('links');

		$objGrid -> orderby("id", "DESC");

		$objGrid -> noorderarrows();

		$objGrid -> FormatColumn("id", "ID", 5, 5, 1, "50", "center", "integer");
		$objGrid -> FormatColumn("jmeno", "Name", 30, 30, 0, "150", "left");
		$objGrid -> FormatColumn("cena", "Cena", 5, 5, 0, "50", "right");
		$objGrid -> FormatColumn("druh", "Status", 5, 5, 0, "60", "left", "select:1_Single:2_Married:3_Divorced");
		//$objGrid -> where ("active = '1'");

		$objGrid -> setHeader();

		//$objGrid -> ajax("silent");
		$this->objGrid = $objGrid;




		//Debug::dump($text);
	}



	public function renderDefault($ident)
	{
		$this->template->grid = $this->objGrid;
	}

	

}

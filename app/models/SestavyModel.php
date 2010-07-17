<?php
final class SestavyModel extends KompyAbsModel // DibiRow obstará korektní načtení dat
{
	public function __construct($arr = array())
	{
		parent::__construct($arr);
	}

	public function fetchSestavy($order = NULL, $where = NULL, $offset = NULL, $limit = NULL)
	{
		$result =  dibi::query(
            'SELECT cena,nazev FROM [sestavy]',
            '%if', isset($where), 'WHERE %and', isset($where) ? $where : array(), '%end',
            '%if', isset($order), 'ORDER BY %by', $order, '%end',
            '%if', isset($limit), 'LIMIT %i %end', $limit,
            '%if', isset($offset), 'OFFSET %i %end', $offset
		);
		if ($result->rowCount()==0) {
			throw new Exception("Položka neexistuje");
		}
		return $result;
	}




	public function fetchKomps($order = NULL, $where = NULL, $offset = NULL, $limit = NULL)
	{
		$result =  dibi::query(
            'SELECT jmeno,level,id_komponenta,vychozi,cena FROM [vwSum]',
            '%if', isset($where), 'WHERE %and', isset($where) ? $where : array(), '%end',
            '%if', isset($order), 'ORDER BY %by', $order, '%end',
            '%if', isset($limit), 'LIMIT %i %end', $limit,
            '%if', isset($offset), 'OFFSET %i %end', $offset
		);
		if ($result->rowCount()==0) {
			//throw new Exception("Položka neexistuje");
		}
		return $result;

		//SELECT * FROM komponenty,kombinace WHERE id IN (SELECT id FROM kombinace WHERE id_sestava = '1') JOIN left SELECT * FROM kombinace WHERE id_sestava = '1'
	}


	public function getCena($order = NULL, $where = NULL, $offset = NULL, $limit = NULL)
	{
		$result =  dibi::query(
            'SELECT SUM(cena) FROM [vwSum]',
            '%if', isset($where), 'WHERE %and', isset($where) ? $where : array(), '%end',
            '%if', isset($order), 'ORDER BY %by', $order, '%end',
            '%if', isset($limit), 'LIMIT %i %end', $limit,
            '%if', isset($offset), 'OFFSET %i %end', $offset
		);
		if ($result->rowCount()==0) {
			//throw new Exception("Položka neexistuje");
		}
		return $result;

		//SELECT * FROM komponenty,kombinace WHERE id IN (SELECT id FROM kombinace WHERE id_sestava = '1') JOIN left SELECT * FROM kombinace WHERE id_sestava = '1'
	}

}
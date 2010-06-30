<?php
final class DetailModel extends KompyAbsModel // DibiRow obstará korektní načtení dat
{
	public function __construct($arr = array())
	{
		parent::__construct($arr);
	}

	public function fetchSestavy($order = NULL, $where = NULL, $offset = NULL, $limit = NULL)
	{
		$result =  dibi::query(
            'SELECT * FROM [sestavy]',
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

	public function getIdName($order = NULL, $where = NULL, $offset = NULL, $limit = NULL,$id)
	{
		$where = array('id' => $id);
		$result =  dibi::query(
            'SELECT jmeno FROM [komponenty]',
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

}
<?php
final class TextyModel extends KompyAbsModel // DibiRow obstará korektní načtení dat
{
	public function __construct($arr = array())
	{
		parent::__construct($arr);
	}

	public function getText($order = NULL, $where = NULL, $offset = NULL, $limit = NULL)
	{
		$result =  dibi::query(
            'SELECT * FROM [texty]',
            '%if', isset($where), 'WHERE %and', isset($where) ? $where : array(), '%end',
            '%if', isset($order), 'ORDER BY %by', $order, '%end',
            '%if', isset($limit), 'LIMIT %i %end', $limit,
            '%if', isset($offset), 'OFFSET %i %end', $offset
		);
		if ($result->rowCount()==0) 
		{
			$where = array('identifikator' => 'empty');
			return $result =  dibi::query(
            'SELECT * FROM [texty]',
            '%if', isset($where), 'WHERE %and', isset($where) ? $where : array(), '%end',
            '%if', isset($order), 'ORDER BY %by', $order, '%end',
            '%if', isset($limit), 'LIMIT %i %end', $limit,
            '%if', isset($offset), 'OFFSET %i %end', $offset
		);
		}
		return $result;
	}

}
<?php
abstract class KompyAbsModel extends DibiRow
{
	public function __construct($arr = array())
	{
		parent::__construct($arr);
	}

	public function fetchSestavy($order = NULL, $where = NULL, $offset = NULL, $limit = NULL)
	{
		$result =  dibi::query(
            'SELECT * FROM [vwSestavy]',
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

	public function fetchKomponenty($order = NULL, $where = NULL, $offset = NULL, $limit = NULL)
	{

		$result =  dibi::query(
		'select id,jmeno, cena, druh from komponenty where id in 
		(select id_komponenta from kombinace where id_sestava in 
		('.'SELECT id FROM [sestavy]',
            '%if', isset($where), 'WHERE %and', isset($where) ? $where : array(), '%end',
            '%if', isset($order), 'ORDER BY %by', $order, '%end',
            '%if', isset($limit), 'LIMIT %i %end', $limit,
            '%if', isset($offset), 'OFFSET %i %end', $offset,')) order by druh'
            );
            if ($result->rowCount()==0) {
            	//throw new Exception("Položka neexistuje");
            }

            return $result;
	}

	public function fetchSeznamKomponent($order = NULL, $where = NULL, $offset = NULL, $limit = NULL,$vychozi = NULL, $zmenitelna = NULL)
	{
		if(isset($zmenitelna)){
			$string1 = "  (`zmenitelna` = ".$zmenitelna.") AND ";
		} else {
			$string1 = "";
		}
		if(isset($vychozi)){
			$string2 = " (`vychozi` = ".$vychozi.") AND ";
		} else {
			$string2 = "";
		}

		$result =  dibi::query(
		'select id,jmeno, cena, druh from komponenty where id in 
		(select id_komponenta from kombinace where '.$string2.$string1.' id_sestava in 
		('.'SELECT id FROM [sestavy]',
            '%if', isset($where), 'WHERE %and', isset($where) ? $where : array(), '%end',
            '%if', isset($order), 'ORDER BY %by', $order, '%end',
            '%if', isset($limit), 'LIMIT %i %end', $limit,
            '%if', isset($offset), 'OFFSET %i %end', $offset,')) order by druh'
            );
            if ($result->rowCount()==0) {
            //	throw new Exception("Položka neexistuje");
            }

            return $result;
	}
}
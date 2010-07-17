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
	public function getIdPrize($order = NULL, $where = NULL, $offset = NULL, $limit = NULL,$id)
	{
		$where = array('id' => $id);
		$result =  dibi::query(
            'SELECT cena FROM [komponenty]',
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

	public function createObjednavka($udaje,$sestava,$cena)
	{
		$udaje['status'] = 1;
		$udaje['cena'] = $cena;
		$udaje['nazev'] = $sestava->nazev;
		$udaje['vznik'] = date( 'Y-m-d H:i:s', time());

		$user = Environment::getUser();
		if($user->isAuthenticated())
		{
			$udaje['registrovan'] = 1;
		}
		else
		{
			$udaje['registrovan'] = 2;
		}
		dibi::query('INSERT INTO [objednavky]', $udaje);
		return dibi::insertId();
	}

	public function insertItems($items,$id) {
		foreach($items as $key => $value)
		{
			dibi::query('INSERT INTO objednavky_items (id ,objednavka,id_komponenty ,nazev ,typ)
		VALUES (NULL ,'.$id.', \''.$value.'\', (select jmeno from komponenty where id = '.$value.') , \''.$key.'\')');
		}
		


	}

}
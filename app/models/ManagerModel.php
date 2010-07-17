<?php
final class ManagerModel extends DibiRow // DibiRow obstará korektní načtení dat
{

	public function __construct($arr = array())
	{
		parent::__construct($arr);
	}

	public function addKomponent($data)
	{
		dibi::query('INSERT INTO [komponenty]', $data);
		return TRUE;
	}

	public function addKomb($data,$id)
	{
		$data['id_sestava'] = $id;
		dibi::query('INSERT INTO [kombinace]', $data);
		return TRUE;
	}

	public function fetchSestavy()
	{
		return dibi::query('SELECT * FROM sestavy');
	}

	public function fetchSestava($id)
	{
		return dibi::query("SELECT * FROM sestavy WHERE id = $id");
	}

	public function fetchItems()
	{
		return dibi::query("SELECT * FROM komponenty");
	}

	public function editSestava($data,$id)
	{
		dibi::query('UPDATE `sestavy` SET ', $data, 'WHERE `id`=%i', $id);
		return TRUE;
	}

	public function editKomb($data,$id)
	{
		unset($data['sestava']);
		dibi::query('UPDATE `kombinace` SET ', $data, 'WHERE `id`=%i', $id);
		return TRUE;
	}

	public function updateKomponent($data,$id)
	{
		//unset($data['sestava']);
		dibi::query('UPDATE `komponenty` SET ', $data, 'WHERE `id`=%i', $id);
		return TRUE;
	}



	public function fetchKomb($id)
	{
		return dibi::query("SELECT * FROM kombinace WHERE id =  $id");

		//SELECT * FROM komponenty,kombinace WHERE id IN (SELECT id FROM kombinace WHERE id_sestava = '1') JOIN left SELECT * FROM kombinace WHERE id_sestava = '1'
	}

	public function fetchKomponenty($id)
	{
		return dibi::query("SELECT * FROM  vwKompSestavy WHERE id_sestava =  $id");

		//SELECT * FROM komponenty,kombinace WHERE id IN (SELECT id FROM kombinace WHERE id_sestava = '1') JOIN left SELECT * FROM kombinace WHERE id_sestava = '1'
	}

	public function fetchKomponentyAll()
	{
		return dibi::query("SELECT * FROM  komponenty ORDER BY id DESC");

		//SELECT * FROM komponenty,kombinace WHERE id IN (SELECT id FROM kombinace WHERE id_sestava = '1') JOIN left SELECT * FROM kombinace WHERE id_sestava = '1'
	}

	public function fetchKomponenta($id)
	{
		return dibi::query("SELECT * FROM  komponenty WHERE id = $id");

		//SELECT * FROM komponenty,kombinace WHERE id IN (SELECT id FROM kombinace WHERE id_sestava = '1') JOIN left SELECT * FROM kombinace WHERE id_sestava = '1'
	}

	public function rmKombinace($komb)
	{
		return dibi::query("DELETE FROM kombinace WHERE id = $komb");
		//SELECT * FROM komponenty,kombinace WHERE id IN (SELECT id FROM kombinace WHERE id_sestava = '1') JOIN left SELECT * FROM kombinace WHERE id_sestava = '1'
	}

	public function rmKomponenta($id)
	{
		dibi::query("DELETE FROM kombinace WHERE id_komponenta = $id");
		return dibi::query("DELETE FROM komponenty WHERE id = $id");
		
		//SELECT * FROM komponenty,kombinace WHERE id IN (SELECT id FROM kombinace WHERE id_sestava = '1') JOIN left SELECT * FROM kombinace WHERE id_sestava = '1'
	}



}
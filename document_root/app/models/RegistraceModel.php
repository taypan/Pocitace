<?php
final class RegistraceModel extends KompyAbsModel // DibiRow obstará korektní načtení dat
{
	public function createUser($udaje)
	{
		//$user = Environment::getUser();
		$config = Environment::getConfig('salt');
		$salt1 = $config->one;
		$salt2 = $config->two;
		$salt3 = $config->three;
		$salt4 = $config->four;

		$udaje['password'] = sha256(sha256(sha256(sha256($udaje['password'].$salt1.$udaje['username']).$salt2).$salt3).$salt4);
		unset($udaje['password2']);
		$udaje['group'] = 'member';
		dibi::query('INSERT INTO [users]', $udaje);
		return dibi::insertId();
	}

	public function isUser($id)
	{

		$result =  dibi::query("SELECT id FROM users WHERE id = $id");
		if ($result->rowCount()==0) {
			return FALSE;
		} else {
			return TRUE;
		}

	}

	public function validate($id)
	{
		$data['valid'] = 'ano';
		dibi::query('UPDATE `users` SET ', $data, 'WHERE `id`=%i', $id);
		return TRUE;
	}

	public function changePass($pass,$id)
	{
		$config = Environment::getConfig('salt');
		$salt1 = $config->one;
		$salt2 = $config->two;
		$salt3 = $config->three;
		$salt4 = $config->four;

		$username = dibi::query("SELECT username FROM users WHERE id = $id")->fetchSingle();
		$data['password'] = sha256(sha256(sha256(sha256($pass.$salt1.$username).$salt2).$salt3).$salt4);
		dibi::query('UPDATE `users` SET ', $data, 'WHERE `id`=%i', $id);
		return TRUE;
	}

	public function getUserData($id)
	{
		return dibi::query("SELECT * FROM users WHERE id = $id");
	}
	
	public function getIdFromMail($email)
	{
		return dibi::query("SELECT id FROM users WHERE email = '$email'");
	}

}

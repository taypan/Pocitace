<?php

class MyValidators
{
	public static function usernameTaken($item){
		global $database;
		$username = $item->getValue();
		if(!get_magic_quotes_gpc()){
			$username = addslashes($username);
		}
		$q = "SELECT username FROM users WHERE username = '$username'";
		$result = dibi::query($q);

		if ($result->rowCount() == 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
			
		//return 0;
	}

	public static function emailTaken($item){
		global $database;
		$email = $item->getValue();
		if(!get_magic_quotes_gpc()){
			$email = addslashes($email);
		}
		$q = "SELECT email FROM users WHERE email = '$email'";
		$result = dibi::query($q);
		if ($result->rowCount() == 0)
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
		//return 0;
	}

}
<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */



/**
 * Users authenticator.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class UsersModel extends Object implements IAuthenticator
{

	/**
	 * Performs an authentication
	 * @param  array
	 * @return IIdentity
	 * @throws AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		$config = Environment::getConfig('salt');
		$salt1 = $config->one;
		$salt2 = $config->two;
		$salt3 = $config->three;
		$salt4 = $config->four;

		$username = $credentials[self::USERNAME];
		$password = sha256(sha256(sha256(sha256($credentials[self::PASSWORD].$salt1.$credentials[self::USERNAME]).$salt2).$salt3).$salt4);
		$row = dibi::fetch('SELECT * FROM users WHERE username=%s', $username);

		if (!$row) {
			throw new AuthenticationException("Uživatel '$username' nebyl nalezen.", self::IDENTITY_NOT_FOUND);
		}

		if ($row->password !== $password) {
			throw new AuthenticationException("Špatné heslo.", self::INVALID_CREDENTIAL);
		}

		unset($row->password);
		return new Identity($row->id, $row->group, $row);
	}

}

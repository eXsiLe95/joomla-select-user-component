<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26.03.2018
 * Time: 21:54
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * SelectUser Model
 *
 * @since  0.0.4
 */
class SelectUserModelSelectUser extends JModelItem
{
	/**
	 * @var string username
	 */
	protected $username;

	/**
	 * Get the username of the chosen user
	 *
	 * @return  string  The username to be displayed to the user
	 */
	public function getUsername()
	{
		if (!isset($this->username))
		{
			$this->username = 'John Doe';
		}

		return $this->username;
	}
}
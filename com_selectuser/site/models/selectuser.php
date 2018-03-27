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
		$userId = $this->getUserId();
		if(!isset($userId)) {
			return false;
		}
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select($db->quoteName('username'));
		$query->from($db->quoteName('#__users'));
		$query->where($db->quoteName('id') . ' = ' . $userId);
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();

		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = $message->username;
			}
		}


		if (!isset($this->username))
		{
			$this->username = $options[0];
		}

		return $this->username;
	}

	private function getUserId()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select($db->quoteName('userId'));
		$query->from($db->quoteName('#__selectuser'));
		$query->order($db->quoteName('id') . ' DESC');
		$query->setLimit('1');
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();

		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = $message->userId;
			}
		}

		return $options[0];
	}
}
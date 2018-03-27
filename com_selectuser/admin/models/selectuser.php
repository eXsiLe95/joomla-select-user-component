<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 27-Mar-18
 * Time: 09:40
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

/**
 * SelectUser Form Field class for the SelectUser component
 *
 * @since  0.0.7
 */
class SelectUserModelSelectUser extends JModelItem
{
	/**
	 * The field type
	 * @var         string
	 */
	protected $type = 'SelectUser';
	protected $options = array();

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	public function getUsers()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select($db->quoteName(array('id', 'username')));
		$query->from($db->quoteName('#__users'));
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();

		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = $message;
			}
		}

		$this->options = $options;

		return $this->options;
	}

	public function setUser($userId) {
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$columns = $db->quoteName('userId');
		$query->insert($db->quoteName('#__selectuser'));
		$query->columns($columns);
		$query->values($userId);;
		$db->setQuery((string) $query);
		$db->execute();
	}
}
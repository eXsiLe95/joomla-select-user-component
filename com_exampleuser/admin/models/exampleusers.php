<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 16:05
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ExampleUserList Model
 *
 * @since  0.0.7
 */
class ExampleUserModelExampleUsers extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		// Create the base select statement.
		$query->select('*')
			->from($db->quoteName('#__exampleuser'));

		return $query;
	}
}
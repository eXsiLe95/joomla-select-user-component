<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 14:43
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Example User Table class
 *
 * @since 0.0.6
 */
class ExampleUserTableExampleUser extends JTable
{
	/**
	 * Constructor
	 *
	 * @param JDatabaseDriver &$db A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__exampleuser', 'id', $db);
	}
}
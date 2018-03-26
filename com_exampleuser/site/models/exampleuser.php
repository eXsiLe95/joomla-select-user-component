<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 13:52
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ExampleUser Model
 *
 * @since 0.0.4
 */
class ExampleUserModelExampleUser extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $messages;

	/**
	 * Method to get a table object, load it if necessary
	 *
	 * @param   string $type   The table name. Optional
	 * @param   string $prefix The class prefix. Optional
	 * @param   array  $config Configuration array for model. Optional
	 *
	 * @return JTable A JTable object
	 *
	 * @since 0.0.6
	 */
	public function getTable($type = 'ExampleUser', $prefix = 'ExampleUserTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Get the message
	 *
	 * @return   string   The message to be displayed to the user
	 */
	public function getMessage()
	{
		if (!isset($this->message))
		{
			$jinput = JFactory::getApplication()->input;
			$id     = $jinput->get('id', 1, 'INT');

			// Get a TableExampleUser instance
			$table = $this->getTable();

			// Load the message
			$table->load($id);

			// Assign the message
			$this->messages[$id] = $table->greeting;
		}

		return $this->messages[$id];
	}
}

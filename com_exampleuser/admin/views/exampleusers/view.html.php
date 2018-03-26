<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 15:59
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ExampleUsers View
 *
 * @since  0.0.7
 */
class ExampleUserViewExampleUsers extends JViewLegacy
{
	/**
	 * Display the Example User view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}

		// Display the template
		parent::display($tpl);
	}
}

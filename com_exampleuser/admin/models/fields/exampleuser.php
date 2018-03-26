<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 14:32
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

/**
 * ExampleUser Form Field class for the ExampleUser component
 *
 * @since 0.0.6
 */
class JFormFieldExampleUser extends JFormFieldList
{
	/**
	 * The field type
	 *
	 * @var   string
	 */
	protected $type = 'ExampleUser';

	/**
	 * Method to get a list of options for a list input
	 *
	 * @return   array   An array of JHtml options
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,greeting');
		$query->from('#__exampleuser');
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();

		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = JHtml::_('select.option', $message->id, $message->greeting);
			}
		}

		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}

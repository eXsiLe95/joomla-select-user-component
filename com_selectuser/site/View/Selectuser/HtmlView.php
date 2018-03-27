<?php

namespace Joomla\Component\selectuser\Site\View\Selectuser;

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\MVC\View\HTMLView as BaseHtmlView;

/**
 * HTML View class for the SelectUser Component
 *
 * @since  0.0.1
 */
class HtmlView extends BaseHtmlView
{
	/**
	 * Display the Select User view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		$app = \JFactory::getApplication();
		$this->params = $app->getParams('com_selectuser');

		// Assign data to the view
		$this->username = $this->getModel()->getUsername();

		// Check for errors
		if(count($errors = $this->get('Errors')))
		{
			\JLog::add(implode('br />', $errors), \JLog::WARNING, 'jerror');

			return false;
		}

		// Display the view
		parent::display($tpl);
	}
}
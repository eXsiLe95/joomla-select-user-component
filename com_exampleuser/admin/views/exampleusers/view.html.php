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
	 * @param   string $tpl The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Get application
		$app = JFactory::getApplication();;
		$context = "exampleuser.list.admin.exampleuser";

		// Get data from the model
		$this->items            = $this->get('Items');
		$this->pagination       = $this->get('Pagination');
		$this->state            = $this->get('State');
		$this->filter_order     = $app->getUserStateFromRequest($context . 'filter_order', 'filter_order', 'greeting', 'cmd');
		$this->filter_order_Dir = $app->getUserStateFromRequest($context . 'filter_order_Dir', 'filter_order_Dir', 'asc', 'cmd');
		$this->filterForm       = $this->get('FilterForm');
		$this->activeFilters    = $this->get('ActiveFilters');


		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}

		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

		// Set the document
		$this->setDocument();
	}

	/**
	 * Add the page title and toolbar
	 *
	 * @return void
	 *
	 * @since 0.0.9
	 */
	protected function addToolBar()
	{
		$title = JText::_('COM_EXAMPLEUSER_MANAGER_EXAMPLEUSERS');;

		if ($this->pagination->total)
		{
			$title .= "<span>(" . $this->pagination->total . ")</span>";
		}

		JToolbarHelper::title(JText::_('exampleuser'));
		JToolbarHelper::deleteList(JText::_('exampleuser.delete'));
		JToolbarHelper::editList(JText::_('exampleuser.edit'));
		JToolbarHelper::addNew(JText::_('exampleuser.add'));
	}

	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() {
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_EXAMPLEUSER_ADMINISTRATION'));
	}
}

<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 16:40
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ExampleUser View
 *
 * @since  0.0.9
 */
class ExampleUserViewExampleUser extends JViewLegacy
{
	/**
	 * View form
	 *
	 * @var         form
	 */
	protected $form = null;

	/**
	 * Display the ExampleUser view
	 *
	 * @param   string $tpl The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

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
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   0.0.9
	 */
	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;

		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);

		$isNew = ($this->item->id == 0);

		if ($isNew)
		{
			$title = JText::_('COM_EXAMPLEUSER_MANAGER_EXAMPLEUSER_NEW');
		}
		else
		{
			$title = JText::_('COM_EXAMPLEUSER_MANAGER_EXAMPLEUSER_EDIT');
		}

		JToolbarHelper::title($title, 'exampleuser');
		JToolbarHelper::save('exampleuser.save');
		JToolbarHelper::cancel(
			'exampleuser.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}

	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument()
	{
		$isNew    = ($this->item->id < 1);
		$document = JFactory::getDocument();
		$document->setTitle($isNew ? JText::_('COM_EXAMPLEUSER_EXAMPLEUSER_CREATING') : JText::_('COM_EXAMPLEUSER_EXAMPLEUSER_EDITING'));
	}
}

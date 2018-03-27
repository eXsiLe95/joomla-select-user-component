<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 27-Mar-18
 * Time: 15:45
 */

namespace Joomla\Component\selectuser\Administrator\Controller;

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\MVC\Controller\BaseController;

class DisplayController extends BaseController
{

	protected $default_view = 'selectuser';

	public function display($cachable = false, $urlparams = array())
	{
		$app = \JFactory::getApplication();
		$userId = $app->input->getInt("selecteduser");

		var_dump($userId);

		//$userId = \JFactory::getApplication()->input->get('selecteduser');
		if(isset($userId)){
			$model = getModel('selectuser');
			$model->setUser($userId);
		}


		$view = \JFactory::getApplication()->input->getCmd('view', 'Selectuser');
		\JFactory::getApplication()->input->set('view', $view);
		parent::display($cachable, $urlparams);

		return $this;
	}

}
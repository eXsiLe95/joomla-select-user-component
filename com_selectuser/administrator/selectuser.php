<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26.03.2018
 * Time: 21:39
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by SelectUser
$controller = JControllerLegacy::getInstance('selectuser');

// Perform the Request task
$userId = \JFactory::getApplication()->input->get('selecteduser');
if(isset($userId)){
	$model = $controller->getModel('selectuser');
	$model->setUser($userId);
}
$controller->execute(\JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();
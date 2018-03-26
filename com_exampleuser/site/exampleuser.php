<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 11:42
 */

defined('_JEXEC') or die('Restricted access');

// No direct access to this file
$controller = JControllerLegacy::getInstance('ExampleUser');

// Perform the request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();

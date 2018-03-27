<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26.03.2018
 * Time: 21:36
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller
$controller = JControllerLegacy::getInstance('SelectUser');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
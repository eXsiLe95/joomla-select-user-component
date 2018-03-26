<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 11:42
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('ExampleUser');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();

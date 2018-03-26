<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 16:37
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ExampleUsers Controller
 *
 * @since  0.0.9
 */
class ExampleUserControllerExampleUsers extends JControllerAdmin
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string $name   The model name. Optional.
	 * @param   string $prefix The class prefix. Optional.
	 * @param   array  $config Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 *
	 * @since   1.6
	 */
	public function getModel($name = 'ExampleUser', $prefix = 'ExampleUserModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}

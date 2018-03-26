<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 13:07
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HTML view class for the Example User Component
 *
 * @since 0.0.1
 */
class ExampleUserViewExampleUser extends JViewLegacy
{
    /**
     * Display the Example User view
     *
     * @param    string   $tpl The name of the template file to parse; automatically searches through the template paths
     *
     * @return   void
     */
    function display($tpl = null)
    {
        // Assign data to the view
        $this->msg = 'Example User';

        // Display the view
        parent::display($tpl);
    }
}

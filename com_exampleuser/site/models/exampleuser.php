<?php
/**
 * Created by PhpStorm.
 * User: Xsile
 * Date: 26-Mar-18
 * Time: 13:52
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * ExampleUser Model
 *
 * @since 0.0.4
 */
class ExampleUserModelExampleUser extends JModelItem {
    /**
     * @var string message
     */
    protected $message;

    /**
     * Get the message
     *
     * @return   string   The message to be displayed to the user
     */
    public function getMessage() {
        if(!isset($this->message)) {
            $this->message = 'Example User';
        }

        return $this->message;
    }
}

<?php
/**
 * @version   
 * @package     HelloWorldLibrary
 * @author      Joomla! Coders Brazil - @JCoderBR ( http://jcbr.github.com )
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('LIB_HELLOWORLD_PATH') or die('Restricted access');

class LoadFacebook
{

    public static function getInstance()
    {
        require_once dirname(__FILE__) . DS . 'facebook.php';
        $instance = new HELLOWORLDFacebook;
        return $instance;
    }

}
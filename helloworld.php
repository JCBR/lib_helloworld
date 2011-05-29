<?php
/**
 * @version   
 * @package     HelloWorldLibrary
 * @author      Joomla! Coders Brazil - @JCoderBR ( http://jcbr.github.com )
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}
if (!defined('LIB_HELLOWORLD_PATH')) {
        define('LIB_HELLOWORLD_PATH', dirname(__FILE__));
}

require_once dirname(__FILE__) . DS . 'loader.php';
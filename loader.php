<?php
/**
 * @version   
 * @package     HelloWorldLibrary
 * @author      Joomla! Coders Brazil - @JCoderBR ( http://jcbr.github.com )
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('LIB_HELLOWORLD_PATH') or die('Restricted access');


abstract class HELLOWORLD
{

    public static $facebook = null;
    public static $twitter = null;

    
    /*
    * Return Facebook Object, creating if aready doesent exists
    */
    public static function getFacebook()
	{
		if (!self::$facebook) {
			jimport('helloworld.facebook.load');

			self::$facebook = LoadFacebook::getInstance();
		}
		return self::$facebook;
	}
        

    /*
    * Return Facebook Object, creating if aready doesent exists
    */
    public static function getTwitter()
	{
		if (!self::$twitter) {
			jimport('helloworld.twitter.load');

			self::$twitter = LoadTwitter::getInstance();
		}
		return self::$twitter;
	}
	
}
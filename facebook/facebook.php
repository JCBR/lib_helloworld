<?php
/**
 * @version   
 * @package     HelloWorldLibrary
 * @author      Joomla! Coders Brazil - @JCoderBR ( http://jcbr.github.com )
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('LIB_HELLOWORLD_PATH') or die('Restricted access');

class HELLOWORLDFacebook
{

	public function __construct()
	{
		
	}
    
        /*
         * http://developers.facebook.com/docs/reference/plugins/comments
        */

        public static function comment($mostra_na_pagina_inicial = FALSE, $url = NULL, $num_posts = 5, $width = 460){
            
                //@todo: implementar $mostra_na_pagina_inicial
                if ($url == NULL){$url = JURI::current(); }
                $facebook_coment ='<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="'.$url.'" num_posts="'.$num_posts.'" width="'.$width.'"></fb:comments>';
                return $facebook_coment;
        }
        

        public static function like($mostra_na_pagina_inicial = FALSE, $url = NULL, $send = TRUE, $width = 450, $show_faces = TRUE){
	
	//@todo: implementar $mostra_na_pagina_inicial

	if ($url == NULL){$url = JURI::current(); }
	if ( $send == TRUE){ $send = 'true'; } else { $send = 'false'; }
	if ( $show_faces == TRUE){ $show_faces = 'true'; } else { $show_faces = 'false'; }
	
	$facebook_like = '<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="'.$url.'" send="'.$send.'" width="'.$width.'" show_faces="'.$show_faces.'" font=""></fb:like>';
	
	return $facebook_like;	
}
        
        
}
<?php

class JQueryFancybox_HeadHelper extends App_ViewHelper_Abstract
{
    public function head( )
    {
        $b = $this->getView()->broker();
        
	$b->headLink()->append(
            $this->getView()->staticpath() . 'jquery-fancybox/jquery.fancybox-1.3.4.css' );
	
        $b->headScript()
            ->alias( 'jquery-fancybox' )
            ->append( $this->getView()->staticpath() . 'jquery-fancybox/jquery.fancybox-1.3.4.pack.js', 'jquery' );
    }
}

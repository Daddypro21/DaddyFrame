<?php
namespace app\core;
/**
 * Class Request ou Request CLass
 * @author Slime Ndema Massala 'Daddypro21' <sndempro@gmail.com>
 * @package app\core
 */

 class Request 
 {

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path,'?');
        if($position === false){
            return $path;
        }
        return substr($path,'0',$position);
        
    }
    public function getMehod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
 }
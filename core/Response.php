<?php
namespace app\core;
/**
 * Class Response ou Response CLass
 * @author Slime Ndema Massala 'Daddypro21' <sndempro@gmail.com>
 */

 class Response 
 {

    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
 }
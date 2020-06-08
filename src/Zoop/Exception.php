<?php

namespace Zoop;

class Exception extends \Exception {
    
    public $request;

    /**
     * Construtor
     * 
    */
    public function __construct(\Curl\Curl $request){

        $this->request = $request;

        $this->message = $request->response->error->message;
    }
}
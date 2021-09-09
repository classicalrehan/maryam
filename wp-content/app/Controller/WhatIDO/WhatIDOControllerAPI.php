<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WhatIDOControllerAPI
 *
 * @author mohdansari
 */
class WhatIDOControllerAPI {

    /**
     *
     * @var type 
     */
    protected static $instances;

    /**
     * 
     * @var type
     */
    protected $WPPostService;

    /**
     * 
     */
    private function __construct() {
        $this->WPPostService = WPPostService::getInstance();        
    }

    /**
     * 
     * @return type
     */
    public static function getInstance() {
        if (!isset(self::$instances)) {
            $class = __CLASS__;
            self::$instances = new $class();
        }
        return self::$instances;
    }

    /**
     * 
     * @param type $args
     * @return type
     */
    public function get($args) {
        return $this->WPPostService->get($args);
    }

}

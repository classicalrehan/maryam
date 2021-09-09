<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThemeOptionsController
 *
 * @author mohdansari
 */
class ThemeOptionsController {

    /**
     *
     * @var type 
     */
    protected static $instances;

    /**
     * 
     * @var type
     */
    protected $themeOptionsService;

    /**
     * 
     */
    private function __construct() {
        $this->themeOptionsService = ThemeOptionsService::getInstance();
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

    public function setup() {
        return $this->themeOptionsService->setup();
    }

}

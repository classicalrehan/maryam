<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResumeController
 *
 * @author mohdansari
 */
class ResumeController {

    /**
     *
     * @var type 
     */
    protected static $instances;

    /**
     * 
     */
    private function __construct() {        
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
    public function get($data,$settings=array()) {
        $view = new View();
        $view->data = $data;
        $view->settings = $settings;
        return $view->render('Resume/resume.phtml');
    }

}

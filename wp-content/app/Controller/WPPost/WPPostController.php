<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WPPostController
 *
 * @author rihan
 */
class WPPostController {

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
     */
    private function __construct() {
        $this->WPPostService = WPPostService::getInstance();
    }

    /**
     * 
     * @return type
     */
    public function get($post_type = array("post", "page"), $numberposts = -1, $post_status = "publish") {
        return $this->WPPostService->get($post_type, $numberposts, $post_status);
    }

}

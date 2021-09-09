<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WPPostService
 *
 * @author rihan
 */
class WPPostService {

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

    public static function getInstance() {
        if (!isset(self::$instances)) {
            $class = __CLASS__;
            self::$instances = new $class();
        }
        return self::$instances;
    }

    /**
     * 
     * @return type
     */
    public function get($post_type = array("post", "page"), $numberposts = -1, $post_status = "publish") {
        $args = array(
            'numberposts' => $numberposts,
            'post_type' => $post_type,
            'post_status' => $post_status,
        );

        return get_posts($args);
    }

}

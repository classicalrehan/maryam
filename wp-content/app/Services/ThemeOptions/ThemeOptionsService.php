<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThemeOptionsService
 *
 * @author mohdansari
 */
class ThemeOptionsService {

    /**
     *
     * @var type 
     */
    protected static $instances;

    /**
     * 
     * @var type
     */
    private $slug;

    /**
     * 
     * @var type
     */
    private $title;

    /**
     * 
     */
    private function __construct() {
        $this->slug = "wonder-mirza";
        $this->title = "Wonder Mirza";
        $this->setup();
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
        add_action('admin_menu', array($this, 'add_admin_page'));
        add_filter('simple_register_option_pages', array($this, 'misha_option_page'));
    }

    public function add_admin_page() {
        // add top level menu page
        add_menu_page(
                $this->title, //Page Title
                $this->title, //Menu Title
                'manage_options', //Capability
                $this->slug, //Page slug
                array($this, 'theme_setting'), //Callback to print html
                '',
                30
        );
        
    }

    

    public function theme_setting() {
        // check user capabilities
        if (!current_user_can('manage_options')) {
            return;
        }

        $view = new View();
        $view->data = $data;
        $view->settings = array_filter(get_object_vars($this));
        ;
        echo $view->render('ThemeOptions/theme-options.phtml');
    }

}

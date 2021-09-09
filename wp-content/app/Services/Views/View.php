<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author rihan
 */
class View {

    protected $template_dir = ABSPATH.'wp-content/app/Views/';
    protected $vars = array();

    public function __construct($template_dir = null) {
        if ($template_dir !== null) {
            // Check here whether this directory really exists
            $this->template_dir = $template_dir;
        }
    }

    public function render($template_file) {                
        ob_start();
        if (file_exists($this->template_dir . $template_file)) {
            include $this->template_dir . $template_file;
            return ob_get_clean();
        } else {
            throw new Exception('no template file ' . $template_file . ' present in directory ' . $this->template_dir);
        }
    }
    
    public function __set($name, $value) {
        $this->vars[$name] = $value;
    }

    public function __get($name) {
        return $this->vars[$name];
    }

}

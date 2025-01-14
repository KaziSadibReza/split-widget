<?php
/**
 * Plugin Name: Split Widget
 * Plugin URI: https://github.com/KaziSadibReza/split-widget
 * Description: This is a nested spit container elementor widget
 * Version: 1.0.0
 * Author: Kazi Sadib Reza
 * Author URI: https://github.com/KaziSadibReza
 * License: GPL3
 * Text Domain: split-widget
 */

namespace SplitWidget;

defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');

/**
 * Base class
 * 
 * @class Base The class holds the entire plugin
 */

final class Base{
    
/**
 * Plugin version
 *
 * @var string
 */

public $version = '1.0.0';

/**
 * [$_instance]
 * @var null
 */

private static $_instance = null;

/** 
 * [instance] Initializes a singleton instance
 * @return [Base]
 */

public static function instance(){
    if(is_null(self::$_instance)){
        self::$_instance = new self();
    }
    return self::$_instance;   
}

/**
 * Base class constructor
 * 
 * All hooks and action coll in this functions
 */

public function __construct(){
$this->define_constants();
add_action('plugins_loaded', array($this,'init_plugin'));
}

/**
 * Define the constants
 *
 * @return void
 */

public function define_constants(){
    define('SPLIT_WIDGET_VERSION', $this->version);
    define('SPLIT_WIDGET_FILE', __FILE__);
    define('SPLIT_WIDGET_PATH', dirname(SPLIT_WIDGET_FILE));
    define('SPLIT_WIDGET_INCLUDES', SPLIT_WIDGET_PATH.'/includes');
    define( 'SPLIT_WIDGET_URL', plugins_url( '', SPLIT_WIDGET_FILE ) );
    define( 'SPLIT_WIDGET_ASSETS', SPLIT_WIDGET_URL . '/assets' );
}


public function init_plugin(){
    if(\class_exists('Elementor\Plugin')){

    }
}


}
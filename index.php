<?php
/**
 * Plugin Name: Hello Attention Quiz
 * Plugin URI: https://github.com/monzuralam/hello-attention-quiz
 * Description: Custom Quiz Block for Gutenberg.
 * Author: Monzur Alam
 * Version: 1.0.0
 * Text Domain: haq
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'HAQ_URL', plugin_dir_url( __FILE__ ) );

class HelloAttentionQuiz{
    function __construct(){
        add_action('enqueue_block_editor_assets', array( $this, 'haq_admin_assets' ) );
        add_action('wp_enqueue_scripts', array( $this, 'haq_assets' ) );
    }

    function haq_admin_assets(){
        wp_enqueue_script( 'block', HAQ_URL . 'assets/js/block.js', array('wp-blocks'), time(), true );
    }

    function haq_assets(){
        wp_enqueue_style( 'style', HAQ_URL . 'assets/css/style.css', array(), time(), 'all' );
        wp_enqueue_script( 'main', HAQ_URL . 'assets/js/main.js', array('jquery'), time(), true );
    }
}
$helloAttentionQuiz = new HelloAttentionQuiz();
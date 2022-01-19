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
        add_action('init', array( $this, 'haq_admin_assets' ) );
        add_action('wp_enqueue_scripts', array( $this, 'haq_assets' ) );
    }

    function haq_admin_assets(){
        wp_enqueue_script( 'block', HAQ_URL . 'build/index.js', array('wp-blocks','wp-element'), time(), true );
        register_block_type('hello-attention-quiz/are-you-paying-attention', array(
            'editor_script'     =>  'block',
            'render_callback'   =>  array($this, 'haq_render_html')
        ));
    }

    function haq_render_html($attributes){
        ob_start();
        ?>
        <h3>Today the sky is <?php $attributes['skyColor'] ?>and the grass is <?php $attributes['grassColor'] ?>.</h3>
        <?php
        return ob_get_clean();
    }

    function haq_assets(){
        wp_enqueue_style( 'style', HAQ_URL . 'assets/css/style.css', array(), time(), 'all' );
        wp_enqueue_script( 'main', HAQ_URL . 'assets/js/main.js', array('jquery'), time(), true );
    }
}
$helloAttentionQuiz = new HelloAttentionQuiz();
<?php
/*
 Plugin Name: User Forms
 Plugin URI: http://localhost/rou_wordpress/wordpress
 Description: A  plugin for User Registration or login.
 Version: 1.1.0
 Author: ROU
 Author URI: http://localhost/rou_wordpress/wordpress
 Text Domain: User Registration or login
 Domain Path: /languages
 License: GPL2
 */

 // Activation Hook
	function user_forms() {
    	//Do something
	}

	register_activation_hook(__FILE__, 'user_forms');

	function user_form_plugin(){
	    add_menu_page('User Form', 'User Form', 'manage_options', 'user_form_plugin', 'user_form_plugin_options');
	}
	add_action('admin_menu','user_form_plugin');
	
	function user_form_plugin_options(){
    		//include(plugin_dir_path( __DIR__ ).'Redirect-URL-Plugin/admin/admin_settings.php');
	}

    add_shortcode('user_signup_form', 'user_signup_form');
    function user_signup_form(){
        include("includes/registrationForm.html");
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {

			global $wpdb;
				$table_name = $wpdb->prefix . 'users'; 

					$username = $_POST['username'];
				  	$fullname = $_POST['fullname'];
				  	$email = $_POST['email'];
					$phone = $_POST['phone'];
					$password = $_POST['password'];
			
			if (username_exists($username) == null && email_exists($email) == false) {
				$user_id = wp_create_user( $username, $password, $email );
				$user = get_user_by( 'id', $user_id );
				$user->add_role( 'subscriber' );
				
				$site_url = site_url();
			
				echo 'Registred Succesfully.Click here to <a href="'.$site_url.'/login"> Login</a>';
			}
	  	}
    }

	add_shortcode('user_login_form', 'user_login');
	function user_login(){
		include("includes/loginForm.html");
	}
?>
<?php
/**
 * ajax -> users -> delete
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

try {

	// check password
	$user->check_password($_POST['password_check']);

	// delete user
	$user->delete_user($user->_data['user_id']);

	// return & exit
	return_json();

} catch (Exception $e) {
	modal("ERROR", __("Error"), $e->getMessage());
}

?>
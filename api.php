<?php

$errors   = array();  	// array to hold validation errors
$data 	  = array(); 	// array to pass back data

// validate the variables ======================================================
$email    = $_POST['email'];
$password = $_POST['password'];

// Regex to validate password: the password must be at least 8 characters long and must contain at least one digit, one lowercase letter and one uppercase letter
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

if (empty( $email ))
	$errors['email'] = 'Email address is required.';
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // the email address must be valid
	$errors['email'] = 'Email address is malformed';

if (empty( $password )) {
	$errors['password'] = 'Password is required.';
} else {
	if ( !$uppercase )
		$errors['password'] = 'Password should include at least one uppercase letter';
	else if ( !$lowercase )
		$errors['password'] = 'Password should include at least one lowercase letter';
	else if ( !$number )
		$errors['password'] = 'Password should include at least one numerical digit';
	else if ( strlen($password) < 8 )
		$errors['password'] = 'Password should be at least 8 characters long';			
}

// return a response ===========================================================

// response if there are errors
if ( ! empty($errors)) {
	// if there are items in our errors array, return those errors
	$data['success'] = false;
	$data['errors']  = $errors;
} else {
	// if there are no errors, return a message
	$data['success'] = true;
	$data['message'] = 'Success!';
}

// return all our data to an AJAX call
echo json_encode($data);

?>
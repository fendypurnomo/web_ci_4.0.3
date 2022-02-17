<?php

$routes->group('/', function($routes) {
	$routes->add('authenticate', 'Administrator\Signin::authenticate');
	$routes->add('registerAccount', 'Administrator\Signup::createAccount');

	$routes->group('recoveryAccount', function($routes){
		$routes->add('checkEmail', 'Administrator\RecoveryAccount::checkEmail');
		$routes->add('checkOtp', 'Administrator\RecoveryAccount::checkOtp');
		$routes->add('resetPassword', 'Administrator\RecoveryAccount::resetPassword');
	});
});
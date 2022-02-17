<?php

$routes->add('signin', 'Template::AdministratorIndex');
$routes->add('signup', 'Template::AdministratorIndex');
$routes->get('signout', 'Administrator\Signout::index');
$routes->add('forgotPassword', 'Template::AdministratorIndex');

$routes->group('/', ['filter' => 'auth'], function ($routes) {
	$routes->add('administrator', 'Template::AdministratorDashboard');

	$routes->group('administrator', function ($routes) {
		$routes->add('(:segment)', 'Template::AdministratorDashboard');

		$routes->group('htmlCss', function ($routes) {
			$routes->add('(:segment)', 'Template::AdministratorDashboard');

			$routes->group('bootstrap', function ($routes) {
				$routes->group('layout', function ($routes) {
					$routes->add('(:segment)', 'Template::AdministratorDashboard');
				});
				$routes->group('content', function ($routes) {
					$routes->add('(:segment)', 'Template::AdministratorDashboard');
				});
				$routes->group('components', function ($routes) {
					$routes->add('(:segment)', 'Template::AdministratorDashboard');
				});
				$routes->group('utilities', function ($routes) {
					$routes->add('(:segment)', 'Template::AdministratorDashboard');
				});
			});

			$routes->group('icons', function ($routes) {
				$routes->add('(:segment)', 'Template::AdministratorDashboard');
			});
		});

		$routes->add('javascript/(:segment)', 'Template::AdministratorDashboard');
		$routes->add('serverSide/(:segment)', 'Template::AdministratorDashboard');
		$routes->add('xml/(:segment)', 'Template::AdministratorDashboard');
	});
});

$routes->get('partialAdmin', 'Administrator\Partials::views');
$routes->get('partialAdmin/(:segment)', 'Administrator\Partials::views/$1');
$routes->get('partialAdmin/(:segment)/(:segment)', 'Administrator\Partials::views/$1/$2');
$routes->get('partialAdmin/(:segment)/(:segment)/(:segment)', 'Administrator\Partials::views/$1/$2/$3');
$routes->get('partialAdmin/(:segment)/(:segment)/(:segment)/(:segment)', 'Administrator\Partials::views/$1/$2/$3/$4');
$routes->get('partialAdmin/(:segment)/(:segment)/(:segment)/(:segment)/(:segment)', 'Administrator\Partials::views/$1/$2/$3/$4/$5');

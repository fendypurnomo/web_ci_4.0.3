var app = angular
	.module("ngApp", [
		"ngAppFactories",
		"ngAppServies",
		"ngAppConstant",
		"ngAppDirectives",
		"ngRoute",
		"ngStorage",
		"ngDropify",
	])
	.config(config)
	.run(run)
	.controller("signoutCtrl", signoutCtrl);

function config($routeProvider, $locationProvider, $httpProvider) {
	$httpProvider.defaults.headers.post["Content-Type"] =
		"application/x-www-form-urlencoded";
	$httpProvider.defaults.transformRequest = {
		function(object) {
			var string = [];
			for (var key in object)
				string.push(key + "=" + encodeURIComponent(object[key]));
			return string.join("&");
		},
	};

	for (var path in routes) {
		$routeProvider.when(path, routes[path]);
	}
	$locationProvider.html5Mode(true);
}

function run($http, $rootScope, $location, $localStorage) {
	if ($localStorage.token) {
		$http.defaults.headers.common.Authorization =
			"Bearer " + $localStorage.token;
	}

	$rootScope.$on("$locationChangeStart", function (event, next, current) {
		var publicPages = ["/signin", "/signup", "/forgotPassword"];
		var restrictedPage = publicPages.indexOf($location.path()) === -1;
		if (restrictedPage && !$localStorage.token) {
			event.preventDefault();
			$location.path("/signin");
		}
		// if (!$localStorage.token) {
		// 	$location.path("/signin");
		// }
	});
}

function signoutCtrl($scope, $http, $window, $localStorage, appFactory) {
	$scope.signout = function (url) {
		appFactory.signout(url).then(function success() {
			delete $localStorage.token;
			$http.defaults.headers.common.Authorization = "";
			$window.location.href = "/signin";
		});
	};
}

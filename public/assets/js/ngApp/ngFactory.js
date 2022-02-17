angular.module("ngAppFactories", []).factory("appFactory", appFactory);

function appFactory($rootScope, $http) {
	initFlashMessage();

	function initFlashMessage() {
		$rootScope.$on("$locationChangeStart", function () {
			clearFlashMessage();
		});

		function clearFlashMessage() {
			var flash = $rootScope.flash;
			if (flash) {
				if (!flash.keepAfterLocationChange) {
					delete $rootScope.flash;
				} else {
					flash.keepAfterLocationChange = false;
				}
			}
		}
	}

	return {
		submit: function (url, data, token) {
			return $http.post(url, data, { headers: { "X-CSRF-TOKEN": token } });
		},
		signout: function (url) {
			return $http.get(url);
		},
		flashMessageSuccess: function (message, keepAfterLocationChange) {
			$rootScope.flash = {
				message: message,
				type: "success",
				keepAfterLocationChange: keepAfterLocationChange,
			};
		},
		flashMessageError: function (message, keepAfterLocationChange) {
			$rootScope.flash = {
				message: message,
				type: "error",
				keepAfterLocationChange: keepAfterLocationChange,
			};
		},
	};
}

app.controller("signinCtrl", signinCtrl);

function signinCtrl($scope, $http, $localStorage, appFactory, Token) {
	$scope.inputSignin = {};
	$scope.inputType = "password";
	$scope.showHideEye = "fa-eye";

	$scope.showHidePassword = function () {
		if ($scope.inputSignin.pass != null) {
			if ($scope.inputType == "password") {
				$scope.inputType = "text";
				$scope.showHideEye = "fa-eye-slash";
			} else {
				$scope.inputType = "password";
				$scope.showHideEye = "fa-eye";
			}
		}
	};

	$scope.submit = function (url) {
		$scope.spinner = "spinner";
		appFactory.submit(url, $scope.inputSignin, Token.value).then(
			function success(res) {
				Token.value = res.data.token.csrf;
				if (res.data.success) {
					$scope.signinForm.$errText = null;
					$localStorage.token = res.data.token.jwt;
					$http.defaults.headers.common.Authorization =
						"Bearer " + res.data.token.jwt;
					location.href = res.data.url;
				} else {
					$scope.errors = res.data.errText;
					$scope.spinner = null;
				}
			},
			function error(res) {
				console.log(res);
			}
		);
	};
}

app.controller("signupCtrl", signupCtrl);

function signupCtrl($scope, $location, appFactory, Token) {
	$scope.submit = function (url) {
		$scope.spinner = "spinner";
		appFactory.submit(url, $scope.inputSignup, Token.value).then(
			function success(res) {
				Token.value = res.data.token.csrf;
				if (res.data.success) {
					$scope.signupForm.$errText = null;
					appFactory.flashMessageSuccess(res.data.message, true);
					$location.path(res.data.url);
				} else {
					$scope.errors = res.data.errText;
					$scope.spinner = null;
				}
			},
			function error(res) {}
		);
	};
}

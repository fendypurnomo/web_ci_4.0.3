app.controller("forgotPasswordCtrl", forgotPasswordCtrl);

function forgotPasswordCtrl($scope, $location, appFactory, Token) {
	$scope.submit = function (url) {
		$scope.spinner = "spinner";
		appFactory.submit(url, $scope.inputForgotPassword, Token.value).then(
			function success(res) {
				Token.value = res.data.token.csrf;
				if (res.data.success) {
					$scope.forgotPasswordForm.$errText = null;
					appFactory.flashMessageSuccess(res.data.message, true);
					$location.path(res.data.url.path).search({
						step: res.data.url.step,
						code: res.data.url.code,
					});
				} else {
					$scope.errors = res.data.errText;
					$scope.spinner = null;
				}
			},
			function error(res) {}
		);
	};
}

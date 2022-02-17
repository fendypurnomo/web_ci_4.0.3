angular
	.module("ngAppServies", [])
	.service("userIsAuthService", userIsAuthService);

function userIsAuthService() {
	var userIsAuth = false;
	this.setUserAuth = function (value) {
		userIsAuth = value;
	};
	this.getUserAuth = function () {
		return userIsAuth;
	};
}

routes = {
	"/signin": {
		templateUrl: baseUrl + "/administrator/partials/signin",
		controller: "signinCtrl",
		requireAuth: false,
	},
	"/signup": {
		templateUrl: baseUrl + "/administrator/partials/signup",
		controller: "signupCtrl",
		requireAuth: false,
	},
	"/forgotPassword": {
		templateUrl: baseUrl + "/administrator/partials/forgotPassword",
		controller: "forgotPasswordCtrl",
		requireAuth: false,
	},
};

routes = {
	"/administrator": {
		templateUrl: baseUrl + "/partialAdmin",
		controller: "administratorCtrl",
		requireAuth: true,
	},
	"/administrator/:a": {
		templateUrl: function (params) {
			return baseUrl + "/partialAdmin/" + params.a;
		},
		controller: "administratorCtrl",
		requireAuth: true,
	},
	"/administrator/:a/:b": {
		templateUrl: function (params) {
			return baseUrl + "/partialAdmin/" + params.a + "/" + params.b;
		},
		controller: "administratorCtrl",
		requireAuth: true,
	},
	"/administrator/:a/:b/:c": {
		templateUrl: function (params) {
			return (
				baseUrl + "/partialAdmin/" + params.a + "/" + params.b + "/" + params.c
			);
		},
		controller: "administratorCtrl",
		requireAuth: true,
	},
	"/administrator/:a/:b/:c/:d": {
		templateUrl: function (params) {
			return (
				baseUrl +
				"/partialAdmin/" +
				params.a +
				"/" +
				params.b +
				"/" +
				params.c +
				"/" +
				params.d
			);
		},
		controller: "administratorCtrl",
		requireAuth: true,
	},
	"/administrator/:a/:b/:c/:d/:e": {
		templateUrl: function (params) {
			return (
				baseUrl +
				"/partialAdmin/" +
				params.a +
				"/" +
				params.b +
				"/" +
				params.c +
				"/" +
				params.d +
				"/" +
				params.e
			);
		},
		controller: "administratorCtrl",
		requireAuth: true,
	},
};

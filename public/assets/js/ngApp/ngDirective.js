angular
	.module("ngAppDirectives", [])
	.directive("autofocus", autoFocus)
	.directive("formValidate", formValidate)
	.directive("activeLink", activeLink);

function autoFocus() {
	return {
		restrict: "A",
		link: function (scope, element) {
			element[0].focus();
		},
	};
}

function formValidate() {
	return {
		link: function (scope, element, attrs) {
			var form = element.inheritedData("$formController");
			if (!form) return;
			scope.$watch(attrs.formValidate, function (errors) {
				var input = [];
				form.$errText = {};
				angular.forEach(errors, function (value, key) {
					input.push("#" + key);
					form.$errText[key] = { $invalid: true, message: value };
				});
				angular.element(input[0]).focus();
			});
		},
	};
}

function activeLink($location) {
	return {
		restrict: "A",
		link: function (scope, element, attrs) {
			var path = $location.path();
			if (attrs.href === baseUrl + path) {
				angular
					.element(element)
					.parent()
					.parent(".nav-link-group")
					.addClass("show");
			}
			scope.isActiveLinkSidebar = function (params) {
				return params === $location.path();
			};
		},
	};
}

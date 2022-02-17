angular
	.module("ngAppConstant", [])
	.constant("Token", { value: $('meta[name="xctn"]').attr("content") });

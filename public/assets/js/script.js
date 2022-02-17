$(function () {
	$("#btnBar").click(function () {
		$("#sidebar").toggleClass("sidebar-toggled");
		if ($("#sidebar").hasClass("sidebar-toggled")) {
			document.cookie = "sidebar=sidebar-toggled; path=/administrator";
		} else {
			document.cookie = "sidebar=; path=/administrator";
		}
	});
});

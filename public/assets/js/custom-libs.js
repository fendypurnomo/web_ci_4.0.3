$(function () {
	Waves.init();

	$(".dropify").dropify({
		messages: {
			default: "Drag and drop or click berkas disini",
			replace: "Drag and drop or click untuk menimpa",
			remove: "Buang",
			error: "Ooops, terjadi kesalahan.",
		},
	});
});

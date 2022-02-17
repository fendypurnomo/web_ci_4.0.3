<h5 class="mb-1">Provinsi</h5>
<?= view('administrator/contents/breadcrumb') ?>

<table id="tableProvinsi" class="table table-striped table-bordered table-hover table-sm rounded w-100">
	<thead>
		<tr>
			<th>Kode</th>
			<th>Nama</th>
		</tr>
	</thead>
</table>

<script>
	$(document).ready(function() {
		$('#tableProvinsi').DataTable({
			"processing": true,
			"serverSide": true,
			"ajax": {
				"url": "<?= BASEURL ?>administrator/datas/datas/json_provinsi",
				"type": "post"
			},
			"lengthMenu": [
				[20, 50, 100],
				[20, 50, 100]
			],
			"dom": '<"row"' +
				'<"col-12"' +
				'<"row d-flex flex-row"' +
				'<"col-6">' +
				'<"col-6 d-flex flex-row justify-content-end"lp>' +
				'>' +
				'>' +
				'<"col-12"' +
				'<"table-responsive-md"tr>' +
				'>' +
				'>',
			"pagingType": "full",
			"language": {
				"decimal": "",
				"emptyTable": "Tidak ada data di tabel!",
				"info": "_PAGE_ - _PAGES_",
				"infoEmpty": "Tidak ada data!",
				"infoFiltered": "(Menyortir dari _MAX_ total entri)",
				"infoPostFix": "",
				"thousands": ",",
				"lengthMenu": "_MENU_",
				"loadingRecords": "Sedang memuat...",
				"processing": "Sedang memproses...",
				"search": "",
				"zeroRecords": "Maaf - Tidak ditemukan data yang cocok!",
				"paginate": {
					"first": '<i class="fas fa-angle-double-left">',
					"previous": '<i class="fas fa-angle-left"></i>',
					"next": '<i class="fas fa-angle-right"></i>',
					"last": '<i class="fas fa-angle-double-right">'
				},
				"aria": {
					"sortAscending": ": aktifkan untuk mengurutkan kolom menaik",
					"sortDescending": ": aktifkan untuk mengurutkan kolom menurun"
				}
			}
		})
	});
</script>
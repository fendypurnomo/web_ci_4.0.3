<h5 class="mb-1">Profil</h5>
<?= view('administrator/_partials/breadcrumb') ?>

<style>
	.dropify-wrapper {
		max-width: 350px;
		margin: auto;
		padding: 0;
		border: 1px solid #dee2e6 !important;
		border-radius: .25rem;
		box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
	}
</style>

<div class="row">
	<div class="col-12">
		<form id="userPhotoForm" class="" method="post" ng-submit="" enctype="multipart/form-data">
			<input id="userPhoto" class="dropify" type="file" name="userPhoto" data-height="350" data-max-file-size="1M" data-show-loader="true" data-allowed-file-extensions="jpg jpeg png psd" data-default-file="<?= base_url('assets/img/users/default.jpg') ?>" ng-dropify>
			<div class="text-center mt-2">
				<button class="btn btn-sm btn-outline-secondary btn-w85" type="button" name="cancel" onclick="window.history.back()">Batal</button>
				<button class="btn btn-sm btn-outline-primary btn-w85" type="submit" name="submit">Simpan</button>
			</div>
		</form>
	</div>
</div>
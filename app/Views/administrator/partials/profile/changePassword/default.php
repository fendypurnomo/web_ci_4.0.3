<h5 class="mb-1">Profil</h5>
<?= view('administrator/_partials/breadcrumb') ?>

<div class="row">
	<div class="col-12 col-sm-10 offset-sm-1 col-lg-6 offset-lg-3">
		<div class="card">
			<div class="card-body">
				<h4>Ubah Kata Sandi</h4>
				<hr>
				<form id="form" class="" name="userProfileForm">
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<label for="kataSandiLama">Kata Sandi Lama</label>
							<input id="kataSandiLama" class="form-control form-control-sm" type="password" name="kataSandiLama" placeholder="Kata Sandi Lama" autofocus>
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<label for="kataSandiBaru">Kata Sandi Baru</label>
							<input id="kataSandiBaru" class="form-control form-control-sm" type="password" name="kataSandiBaru" placeholder="Kata Sandi Baru">
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<label for="konfirmasiKataSandiBaru">Konfirmasi Kata Sandi Baru</label>
							<input id="konfirmasiKataSandiBaru" class="form-control form-control-sm" type="password" name="konfirmasiKataSandiBaru" placeholder="Konfirmasi Kata Sandi Baru">
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<hr>
					<div class="float-right">
						<button type="button" class="btn btn-sm btn-outline-secondary btn-w85" onclick="window.history.back()">Batal</button>
						<button type=" submit" class="btn btn-sm btn-outline-primary btn-w85">Perbaharui</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<h5 class="mb-1">Profil</h5>
<?= view('administrator/_partials/breadcrumb') ?>

<div class="row">
	<div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">
		<div class="card">
			<div class="card-body">
				<h4>Perbaharui Informasi Akun</h4>
				<hr>
				<form id="userProfileForm" class="ng-pristine ng-valid" name="userProfileForm">
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<label for="namaPengguna">Nama Pengguna</label>
							<input id="namaPengguna" class="form-control form-control-sm" type="text" name="namaPengguna" placeholder="Nama Pengguna" autofocus>
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<div class="form-row mx-0">
						<div class="form-group col-md-6 px-0 pr-md-2">
							<label for="namaDepan">Nama Depan</label>
							<input id="namaDepan" class="form-control form-control-sm" type="text" name="namaDepan" placeholder="Nama Depan">
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group col-md-6 px-0 pl-md-2">
							<label for="namaBelakang">Nama Belakang</label>
							<input id="namaBelakang" class="form-control form-control-sm" type="text" name="namaBelakang" placeholder="Nama Belakang">
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<label for="email">E-mail</label>
							<input id="email" class="form-control form-control-sm" type="email" name="email" placeholder="E-mail">
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<div class="form-row mx-0">
						<label for="jenisKelaminPria">Jenis Kelamin</label>
						<div class="form-group col-md-12 px-0">
							<div class="custom-control custom-radio custom-control-inline">
								<input id="jenisKelaminPria" class="custom-control-input" type="radio" name="jenisKelamin">
								<label class="custom-control-label" for="jenisKelaminPria">Laki-laki</label>
								<div class="invalid-feedback"></div>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input id="jenisKelaminWanita" class="custom-control-input" type="radio" name="jenisKelamin">
								<label class="custom-control-label" for="jenisKelaminWanita">Perempuan</label>
								<div class="invalid-feedback"></div>
							</div>
						</div>
					</div>
					<hr>
					<div class="float-right">
						<button type="button" class="btn btn-sm btn-outline-secondary btn-w85" onclick="window.history.back()">Batal</button>
						<button type="submit" class="btn btn-sm btn-outline-primary btn-w85">Perbaharui</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
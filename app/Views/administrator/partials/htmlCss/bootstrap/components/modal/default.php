<h5 class="mb-1">Modal</h5>
<?= view('administrator/_partials/breadcrumb') ?>
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal">
	Tampilkan modal
</button>

<div class="modal fade overflow-hidden" id="modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header py-2">
				<h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
			</div>
			<div class="modal-body">
				<form id="form">
					<div class="form-row mx-0">
						<div class="form-group col-md-6 px-0 pr-md-1">
							<label for="namaDepan">Nama Depan</label>
							<input id="namaDepan" class="form-control form-control-sm" type="text" name="namaDepan" placeholder="Nama Depan">
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group col-md-6 px-0 pl-md-1">
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
						<div class="form-group col-md-6 px-0 pr-md-1">
							<label for="sandi">Sandi</label>
							<input id="sandi" class="form-control form-control-sm" type="password" name="sandi" placeholder="Sandi">
							<div class="invalid-feedback"></div>
						</div>
						<div class="form-group col-md-6 px-0 pl-md-1">
							<label for="konfirmasiSandi">Konfirmasi Sandi</label>
							<input id="konfirmasiSandi" class="form-control form-control-sm" type="password" name="konfirmasiSandi" placeholder="Konfirmasi Sandi">
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<div class="custom-control custom-checkbox">
								<input id="customCheckbox" class="custom-control-input" type="checkbox" name="customCheckbox">
								<label class="custom-control-label" for="customCheckbox">Custom Checkbox</label>
								<div class="invalid-feedback"></div>
							</div>
						</div>
					</div>
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<div class="custom-control custom-radio">
								<input id="customRadio" class="custom-control-input" type="radio" name="customRadio">
								<label class="custom-control-label" for="customRadio">Custom Radio</label>
								<div class="invalid-feedback"></div>
							</div>
						</div>
					</div>
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<label for="jenisKelamin">Kelamin</label>
							<select id="jenisKelamin" class="custom-select custom-select-sm" name="jenisKelamin">
								<option valu="" selected>Jenis Kelamin</option>
								<option value="1">Laki-laki</option>
								<option value="2">Perempuan</option>
							</select>
							<div class="invalid-feedback"></div>
						</div>
					</div>
					<div class="form-row mx-0">
						<div class="form-group col-md-12 px-0">
							<div class="custom-file">
								<input id="berkasFoto" class="custom-file-input" type="file" name="berkasFoto">
								<label class="custom-file-label" for="berkasFoto" data-browse="Pilih Berkas">Berkas Foto</label>
								<div class="invalid-feedback"></div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer p-1">
				<button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-sm btn-outline-primary">Simpan</button>
			</div>
		</div>
	</div>
</div>
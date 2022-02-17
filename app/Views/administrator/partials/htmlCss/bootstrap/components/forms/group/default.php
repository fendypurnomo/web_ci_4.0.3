<h5 class="mb-1">Form Group</h5>
<?= view('administrator/_partials/breadcrumb') ?>

<div class="row">
	<div class="col-lg-6 offset-lg-3 mb-3">
		<form id="form">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input id="nama" class="form-control form-control-sm" type="text" name="nama" placeholder="Nama" autofocus>
				<div class="invalid-feedback"></div>
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input id="email" class="form-control form-control-sm" type="email" name="email" placeholder="E-mail">
				<div class="invalid-feedback"></div>
			</div>
			<div class="form-group">
				<label for="sandi">Sandi</label>
				<input id="sandi" class="form-control form-control-sm" type="password" name="sandi" placeholder="Sandi">
				<div class="invalid-feedback"></div>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea id="alamat" class="form-control" name="alamat" rows="2" placeholder="Alamat"></textarea>
			</div>
			<div class="form-group">
				<div class="custom-control custom-checkbox">
					<input id="customCheckbox" class="custom-control-input" type="checkbox" name="customCheckbox">
					<label class="custom-control-label" for="customCheckbox">Custom Checkbox</label>
					<div class="invalid-feedback"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="custom-control custom-radio">
					<input id="customRadio" class="custom-control-input" type="radio" name="customRadio">
					<label class="custom-control-label" for="customRadio">Custom Radio</label>
					<div class="invalid-feedback"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="gender">Jenis Kelamin</label>
				<select id="gender" class="custom-select custom-select-sm" name="gender">
					<option valu="" selected>Pilih Jenis Kelamin</option>
					<option value="1">Pria</option>
					<option value="2">Wanita</option>
				</select>
				<div class="invalid-feedback"></div>
			</div>
			<div class="form-group">
				<div class="custom-file">
					<input id="customFile" class="custom-file-input" type="file" name="customFile">
					<label class="custom-file-label" for="customFile">Pilih Berkas</label>
					<div class="invalid-feedback"></div>
				</div>
			</div>
			<div class="float-right">
				<button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.history.back()">Batal</button>
				<button type="submit" class="btn btn-sm btn-outline-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
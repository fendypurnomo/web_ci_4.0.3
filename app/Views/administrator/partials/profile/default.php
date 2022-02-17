<h5 class="mb-1">Profil</h5>
<?= view('administrator/_partials/breadcrumb') ?>

<style class="ng-scope">
	.img-profile {
		transition: .5s ease;
	}

	.img-link {
		position: absolute;
		top: 50%;
		left: 50%;
		width: 100%;
		padding: 1.5rem;
		opacity: 0;
		transition: .5s ease;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
	}

	.container-photo-profile:hover .img-profile {
		opacity: 0.85;
	}

	.container-photo-profile:hover .img-link {
		opacity: 1;
	}
</style>

<div class="row">
	<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
		<div class="card">
			<div class="card-body">
				<div class="col-12 col-sm-6 offset-sm-3 col-lg-4 offset-lg-4 my-4 px-3 p-sm-0 container-photo-profile">
					<img class="rounded-circle shadow-sm img-profile" src="https://assets.local/assets/img/ci4-img/default.jpg" alt="Photo Profile" width="100%">
					<a class="text-center img-link text-decoration-none text-white" href="<?= $_SERVER['HTTP_REFERER'] . '/changePhoto' ?>">Ubah foto profil</a>
				</div>
				<h4 class="text-center mb-4">Informasi Akun</h4>
				<div class="row">
					<div class="col-12">
						<p>Nama Pengguna</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-6">
						<p>Nama Depan</p>
					</div>
					<div class="col-6">
						<p>Nama Belakang</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-12">
						<p>E-mail</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-12">
						<p>Jenis Kelamin</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-6">
						<p>Dibuat pada Tanggal</p>
					</div>
					<div class="col-6">
						<p>Terakhir diperbaharui</p>
					</div>
				</div>
				<hr>
				<div class="d-flex justify-content-between">
					<a class="text-decoration-none" href="<?= $_SERVER['HTTP_REFERER'] . '/updateInfo' ?>">Perbaharui Informasi Akun</a>
					<a class="text-decoration-none" href="<?= $_SERVER['HTTP_REFERER'] . '/changePassword' ?>">Ubah Kata Sandi</a>
				</div>
			</div>
		</div>
	</div>
</div>
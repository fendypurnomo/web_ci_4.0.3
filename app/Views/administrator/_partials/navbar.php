<nav id="navbar" class="navbar navbar-expand navbar-light bg-white border-bottom fixed-top">
	<button id="btnBar" class="btn btn-link rounded-circle box-shadow-none border-0 hover-100">
		<i class="fas fa-bars"></i>
	</button>

	<button id="btnSearchCancel" class="btn btn-link rounded-circle box-shadow-none border-0 hover-100">
		<i class="fas fa-arrow-left"></i>
	</button>

	<div id="navbarSearch" class="d-sm-inline d-none w-50">
		<form id="navbarSearchForm" class="form-inline">
			<div class="input-group w-100">
				<input id="navbarSearchInput" class="form-control form-control-sm bg-light rounded-pill-left border-0" type="search" placeholder="Pencarian">
				<div class="input-group-append">
					<button id="search" class="btn btn-sm btn-primary rounded-pill-right" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>
	</div>

	<ul class="navbar-nav d-flex flex-row align-item-center ml-auto">
		<li class="nav-item d-sm-none d-block mr-3">
			<a class="nav-link rounded-circle hover-100 outline-0" href="#">
				<i class="fas fa-search"></i>
			</a>
		</li>

		<li class="nav-item mr-3">
			<a class="nav-link rounded-circle hover-100 outline-0" href="/administrator/home">
				<i class="fas fa-home"></i>
			</a>
		</li>

		<li class="nav-item dropdown no-arrow mr-3">
			<a id="navbarDropdownMessages" class="nav-link dropdown-toggle rounded-circle hover-100 outline-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="far fa-envelope"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-list shadow-sm">
				<h6 class="border-bottom bg-white position-relative z-index-1 mb-0 p-2">Pesan</h6>
				<div class="dropdown-body overflow-y-auto-custom z-index-0 animated slideDown faster">
					<ul class="list-group list-group-flush">
						<?php
						$i     = 0;
						$model = new \App\Models\Administrator\messages\MessagesModel();
						$query = $model->navbarMessages;
						foreach ($query as $row) : ?>
							<a class="list-group-item list-group-item-action pt-0 pb-1 px-2" href="#">
								<div><?= $row['title']; ?></div>
								<div class="text-truncate font-sm"><?= $row['message'] ?></div>
								<div class="text-black-50 font-xs"><?= $row['time'] ?></div>
							</a>
						<?php
							$i++;
						endforeach;
						?>
					</ul>
				</div>
				<a class="text-center text-decoration-none" href="/administrator/messages">
					<h6 class="border-top text-secondary position-relative font-sm hover-100 mb-0 p-2">Lihat semua</h6>
				</a>
			</div>
		</li>

		<li class="nav-item dropdown no-arrow mr-3">
			<a id="navbarDropdownNotifications" class="nav-link dropdown-toggle rounded-circle hover-100 outline-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="far fa-bell"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-list shadow-sm">
				<h6 class="border-bottom bg-white position-relative z-index-1 mb-0 p-2">Pemberitahuan</h6>
				<div class="dropdown-body overflow-y-auto-custom z-index-0 animated slideDown faster">
					<ul class="list-group list-group-flush">
						<?php
						$i     = 0;
						$model = new \App\Models\Administrator\notifications\NotificationsModel();
						$query = $model->navbarNotifications;
						foreach ($query as $row) : ?>
							<a class="list-group-item list-group-item-action pt-0 pb-1 px-2" href="#">
								<div><?= $row['title']; ?></div>
								<div class="text-truncate font-sm"><?= $row['notification'] ?></div>
								<div class="text-black-50 font-xs"><?= $row['time'] ?></div>
							</a>
						<?php
							$i++;
						endforeach;
						?>
					</ul>
				</div>
				<a class="text-center text-decoration-none" href="/administrator/notifications">
					<h6 class="border-top text-secondary position-relative font-xs hover-100 mb-0 p-2">Lihat semua</h6>
				</a>
			</div>
		</li>

		<li class="nav-item dropdown no-arrow">
			<a id="navbarDropdownSettings" class="nav-link dropdown-toggle rounded-circle hover-100 outline-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="https://assets.local/assets/img/ci4-img/default.jpg" class="img-fluid rounded-circle" alt="img" width="31" height="31">
			</a>
			<div class="dropdown-menu dropdown-menu-right shadow-sm animated backInDown faster">
				<a class="dropdown-item" href="/administrator/profile">
					<i class="far fa-sm fa-fw fa-user mr-3"></i>Profil
				</a>
				<a class="dropdown-item" href="/administrator/settings">
					<i class="fas fa-sm fa-fw fa-cog mr-3"></i>Pengaturan
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="/" ng-controller="signoutCtrl" ng-click="signout('signout')">
					<i class="fas fa-sm fa-fw fa-sign-out-alt mr-3"></i>Keluar
				</a>
			</div>
		</li>
	</ul>
</nav>
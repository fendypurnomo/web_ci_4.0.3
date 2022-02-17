<ul id="sidebar" class="nav flex-column flex-nowrap d-none d-md-flex border-right sidebar-0 <?= get_cookie('sidebar') ?>">
	<div class="sidebar-profile d-flex flex-row align-items-center px-3">
		<div class="sidebar-profile-img">
			<img class="rounded-circle mr-2" src="https://assets.local/assets/img/ci4-img/default.jpg" alt="img">
		</div>
		<div class="sidebar-profile-info">
			<div class="sidebar-profile-info-name text-truncate font-sm"><?= $_SESSION['fullname'] ?></div>
			<div class="sidebar-profile-info-email text-truncate text-secondary font-xs"><?= $_SESSION['email'] ?></div>
		</div>
	</div>

	<div class="border-bottom"></div>

	<div class="sidebar-menu overflow-y-auto-custom">
		<?php
		$model = new \App\Models\Administrator\SidebarMenuModel();
		$data	 = $model->sidebarMenuMultilevel;
		$tree	 = $model->generateTreeParent($data);
		echo $tree;
		?>
	</div>
</ul>
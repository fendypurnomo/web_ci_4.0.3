<h5 class="mb-1">Forms</h5>
<?= view('administrator/_partials/breadcrumb') ?>

<div class="row">
	<?php
	$i	= 0;
	$md	= new \App\Models\Administrator\DataModel();
	$dt	= $md->forms;
	$bg	= $md->background;
	foreach ($dt as $key => $val) : ?>
		<div class="col-md-6 col-12 mb-3 mb-md-0">
			<div class="card shadow-sm bg-<?= $bg[$i] ?>">
				<div class="card-body p-0">
					<div class="text-light p-3">
						<h5 class="card-title">Form <?= ucfirst($val) ?></h5>
						<p class="card-subtitle">Form Entri <?= ucfirst($val) ?></p>
					</div>
					<hr class="divider m-0">
					<a class="text-light text-decoration-none" href="<?= base_url($_SERVER['HTTP_REFERER']) . '/' . $val ?>">
						<div class="px-3 py-2 font-sm">
							<p class="card-text">Lihat</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	<?php
		$i++;
	endforeach;
	?>
</div>
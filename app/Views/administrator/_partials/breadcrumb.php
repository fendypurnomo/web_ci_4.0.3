<nav aria-label="breadcrumb">
	<ol class="breadcrumb bg-transparent p-0">
		<li class="breadcrumb-item font-sm"><a class="text-decoration-none" href="<?= base_url('administrator/home') ?>">Beranda</a></li>
		<?php
		foreach ($breadcrumb as $value) :
			if ($value != null) :
				echo "<li class=\"breadcrumb-item active font-sm\" aria-current=\"page\">";
				$items = preg_split('/(?=[A-Z])/', $value);
				foreach ($items as $item) :
					echo ucfirst($item . " ");
				endforeach;
				echo "</li>";
			endif;
		endforeach;
		?>
	</ol>
</nav>
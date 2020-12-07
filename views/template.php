<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Sistema de Estoque</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/Bootstrapp/bootstrap.min.css">
		<link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/main.css">

		<!--java-->
		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
		
		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/Bootstrap/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/Bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	</head>
	<body>
		<?php if(isset($viewData['menu'])):  ?>
			<div class="header">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
					<ul class="navbar-nav mr-auto">
					<?php foreach($viewData['menu'] as $url => $menutitle): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= $url; ?>"> <?= $menutitle; ?> </a>
						</li>
					<?php endforeach; ?>
					</ul>
				</nav>
			</div>
		<?php endif; ?>
						<br><br>
		<div class="container">
		<?php
			$this->loadViewInTemplate($viewName, $viewData);
		?>
		</div>
		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/jquery.mask.js"></script>
		<script type="text/javascript" src="<?= BASE_URL; ?>assets/js/sistem.js"></script>
	</body>
</html>
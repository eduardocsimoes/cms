<html>
	<head>
		<title>Exemplo</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/exemplo.css">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</head>
	<body>
		<div class="menu">
			
		</div>
		
		<div class="topo">
			
		</div>

		<div class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
		
		<div class="rodape">
			
		</div>
	</body>
</html>
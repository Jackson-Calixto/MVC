<html>
	<head>
		<title>T�tulo do site</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/assets/css/style.css">
	</head>
	<body>
		<h1>Topo do meu site</h1>

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

		<h1>Rodap� do meu site</h1>
	</body>
</html>
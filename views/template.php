<html>
	<head>
		<title>Crud em MVC</title>
		<link rel="stylesheet" href="assets/css/template.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.css"/>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
	</head>
	<body>
		<header>
			<h1> Sistema de Contatos em MVC </h1>
		</header>	

		<section>
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</section>

		<footer class="page-footer font-small blue pt-4">
			<div class="container text-center text-md-lef">
			Todos os direitos reservados. Criado por Alfredo Stochiero.
			</div>
		</footer>
		

	<script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>	
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	</body>
</html>
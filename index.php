<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Park & Junior - Início</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- BOOTSTRAP 4: Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- AWESOME Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	
	<link rel="stylesheet" href="/styles/estilo.css">
	<script src="/jscript/principal.js"></script>
</head>
<body>
	<header>
		<div id="headerLogo">
			<a href="/"><img src="/img/logo.png" class="mx-auto d-block img-fluid"></a>
		</div>
		<nav class="navbar navbar-dark navbar-expand-sm justify-content-between sticky-top">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#expandMenu">
				<i class="fas fa-bars"></i>
			</button>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#expandPesquisa">
				<i class="fas fa-search"></i>
			</button>

			<ul class="navbar-nav collapse navbar-collapse" id="expandMenu">
				<li class="nav-item active"><a href="/" class="nav-link"><i class="fas fa-home"></i> Início</a></li>
				<li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-briefcase"></i> Serviços</a></li>
				<li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-headset"></i> Contato</a></li>
			</ul>

			<form class="collapse navbar-collapse mt-2 mt-sm-0 col-lg-4 col-xl-3" id="expandPesquisa">
			<div class="input-group">
				<input type="text" class="form-control" name="pesquisa" placeholder="Está procurando algo?">
				<div class="input-group-append">
				<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
				</div>
			</div>
			</form>
		</nav>
		<div class="py-4 container" id="term">
			<div class="card border-0 rounded-lg bg-dark text-white">
				<div class="card-header px-3 pb-1">
					<div class="rounded-circle bg-success circlemenu d-inline-block"></div>
					<div class="rounded-circle bg-warning circlemenu d-inline-block"></div>
					<div class="rounded-circle bg-danger circlemenu d-inline-block"></div>
					<small class="d-inline-block ml-2" style='font-family:monospace;'>Version: 5.00</small>
				</div>
				<div class="car-body px-3">
				<h1 class="display-4" style="word-wrap: break-word;"><i class="fas fa-terminal"></i> Uma nova forma de desenvolver...</h1>
				<h5 style='font-family:monospace;'>Park & Junior tomou um novo rumo na programação, mas sem deixar se ser aquele site onde você pode fazer os seus downloads!</h5>
				</div>
			</div>
		</div>
	</header>
	<section class="container-fluid">
		<div class="row">
			<div class="col-sm-7 p-5 bg-dark text-white">
				<h1 style="font-family:monospace;">Desenvolvimento WEB</h1>
				<p>Falando sobre programaçao e tals e agora vamos rodar esse link e tambem sobre design web e outras coisas de web developer sobre programaçao e tals e agora vamos rodar esse link e tambem sobre design web e outras coisas de web developer</p>
				<a href="#" class="btn btn-outline-light btn-lg float-right">Acessar</a>
			</div>
			<div class="col-sm-5 bg-dark px-5 py-3"><img src="/img/designsite.jpg" class="img-fluid shadow-lg"></div>

			<div class="col-sm-3 bg-danger px-5 py-3"><img src="/img/designgrphc.jpg" class="img-fluid shadow-lg rounded-circle"></div>
			<div class="col-sm-9 p-5 bg-danger text-white">
				<h1 style="font-family:monospace;">Design Grafico</h1>
				<p>Falando sobre programaçao e tals e agora vamos rodar esse link e tambem sobre design web e outras coisas de web developer</p>
				<a href="#" class="btn btn-outline-light btn-lg float-left">Acessar</a>
			</div>
		</div>
		<div class="bg-primary p-5 text-white row text-center">
			<h2 class="container-fluid">...sem contar nos downloads que o site tem!<br>Divirta-se :)<br><i class="fas fa-angle-double-down"></i></h2>
		</div>
	</section>
	<footer class="bg-dark p-2 text-white text-center">
		<div class="container-fluid row">
		<div class="col-sm-4">
			<h2 class="border-bottom p-2 border-secondary">Park & Junior</h2>
		</div>
		<div class="col-sm-4">
			<h2 class="border-bottom p-2 border-secondary">Redes Sociais</h2>
			<a href="#" class="text-white btn btn-primary mb-1"><i class="fab fa-facebook-square"></i> Facebook</a>
			<a href="#" class="text-white btn btn-info mb-1"><i class="fab fa-twitter"></i> Twitter</a>
			<a href="#" class="text-white btn btn-danger mb-1"><i class="fab fa-youtube"></i> YouTube</a>
		</div>
		<div class="col-sm-4">
			<h2 class="border-bottom p-2 border-secondary">Certificados</h2>
			<i class="fab fa-html5"></i> HTML5<br>
			<i class="fab fa-css3-alt"></i> CSS3<br>
			<i class="fab fa-js-square"></i> JavaScript<br>
			<i class="fab fa-bootstrap"></i> Boostrap 4<br>
			<i class="fab fa-php"></i> PHP<br>
		</div>
		</div>
		<div><i class="fas fa-copyright"></i> Copyright 2012 - 2019</div>
	</footer>
</body>
</html>
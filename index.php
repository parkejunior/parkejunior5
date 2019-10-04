<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Park & Junior - Início</title>

	<!-- #HEAD -->
	<?php include('layout/head.php'); ?>
</head>
<body>
	<header>
		<div id="headerLogo">
			<a href="/"><img src="/img/logo.png" class="mx-auto d-block img-fluid"></a>
		</div>

		<!-- #NAVBAR -->
		<?php include('layout/navbar.php'); ?>
		
		<div class="py-4 container" id="term">
			<div class="card border-0 rounded-lg bg-dark text-white">
				<div class="card-header px-3 pb-1">
					<div class="rounded-circle bg-success circlemenu d-inline-block"></div>
					<div class="rounded-circle bg-warning circlemenu d-inline-block"></div>
					<div class="rounded-circle bg-danger circlemenu d-inline-block"></div>
					<small class="d-inline-block ml-2 monospace">Version: 5.00</small>
				</div>
				<div class="car-body px-3">
				<h1 class="display-4 text-break"><i class="fas fa-terminal"></i> Uma nova forma de ver a internet...</h1>
				<h5 class="monospace">
					<p>Park & Junior é um site com objetivo de reunir tudo que eu, Patrick Luan, descobri na internet e achei util e/ou divertido.</p>
					<p>Atualmente direcionei o site para uma pequena modificação de conteúdo, trazendo algumas coisas com mais foco em programação, design e desenvolvimento WEB, que são minha área de estudo.</p>
					<p>Você também pode ver meu portfólio pessoal, onde tem alguns projetos que desenvolvi e outros onde participei.</p>
				</h5>
				</div>
			</div>
		</div>
	</header>

	<section class="bg-dark text-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 p-5">
				<h1 class="monospace">Desenvolvimento WEB</h1>
				<p>Atualmente é a minha maior habilidade, tanto para infraestrutura de rede, servidor WEB, e principalmente programação. Atualmente estou estudando o Framework de PHP Laravel 5.8 e a esrutura do MVC. No botão abaixo você encontra mais artigos sobre!</p>
				<a href="#" class="btn btn-outline-light btn-lg float-right">Acessar</a>
			</div>
			<div class="col-sm-5 px-5 py-3"><img src="/img/designsite.jpg" class="img-fluid shadow-lg"></div>
			<div class="container-fluid text-center text-secondary">
			<div class="row">
				<div class="col">
					<h1 class="display-1"><i class="fab fa-bootstrap"></i></h1>
					<h2> Bootstrap 4x</h2> 
				</div>
				<div class="col">
					<h1 class="display-1"><i class="fab fa-html5"></i></h1>
					<h2> HTML5</h2> 
				</div>
				<div class="col">
					<h1 class="display-1"><i class="fab fa-css3-alt"></i></h1>
					<h2> CSS3</h2> 
				</div>
				<div class="col">
					<h1 class="display-1"><i class="fab fa-js-square"></i></h1>
					<h2> JavaScript</h2> 
				</div>
				<div class="col">
					<h1 class="display-1"><i class="fab fa-php"></i></h1>
					<h2> PHP 7x</h2> 
				</div>
			</div>
			</div>
		</div>
	</div>
	</section>
	<section class="bg-danger text-white">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 px-5 py-3"><img src="/img/designgrphc.jpg" class="img-fluid shadow-lg rounded-circle"></div>
			<div class="col-sm-9 p-5">
				<h1 class="monospace">Design Gráfico</h1>
				<p>Quando criei o site, tive que aprender sobre identidade visual. Atualmente tenho habilidade em design com Flat e Blur, mas aprendi outros formatos como Low Poly e outras formas minimalistas de design.</p>
				<a href="#" class="btn btn-outline-light btn-lg float-left">Acessar</a>
			</div>
			<div class="container-fluid text-center">
			<div class="row">
				<div class="col">
					<h1 class="display-1"><i class="fas fa-tint"></i></h1>
					<h2> Blur</h2> 
				</div>
				<div class="col">
					<h1 class="display-1"><i class="fas fa-draw-polygon"></i></h1>
					<h2> Low Poly</h2> 
				</div>
				<div class="col">
					<h1 class="display-1"><i class="fas fa-shapes"></i></h1>
					<h2> Flat</h2> 
				</div>
				<div class="col">
					<h1 class="display-1"><i class="fas fa-circle-notch"></i></h1>
					<h2> Material</h2> 
				</div>
				<div class="col">
					<h1 class="display-1"><i class="fab fa-microsoft"></i></h1>
					<h2> Metro</h2> 
				</div>
			</div>
			</div>
		</div>
	</div>
	</section>
	<section class="bg-primary p-5 text-center text-white d-none">
		<h1 class="display-3">Divirta-se :)<br>
		<i class="fas fa-angle-double-down"></i>
		</h1>
	</section>
	<section class="jumbotron jumbotron-fluid mb-0">
		<div class="container">
			<h1 class="text-center pb-2 bg-secondary rounded-top text-white">Ultimas postagens</h1>
			<div class="row">
				<?php for ($i=0; $i < 3; $i++): ?>
				<div class="col-md-4">
					<div class="card mb-4">
						<a href="#" class="card-link">
						<img src="http://ap.imagensbrasil.org/images/2017/11/26/mods-especial-natal1280.jpg" class="img-fluid rounded-top">
						<div class="card-body bg-primary text-white py-2">
							<h5>MOD GTA San Andreas de Natal</h5>
						</div>
						</a>
						<div class="p-1 small bg-secondary text-white">
							<i class="fas fa-calendar"></i> 25 de December de 2015
						</div>
						<div class="card-footer">
							<p>Feliz Natal meus manos e minas! Bom para aproveitar esse dia separei esses mods para vocês colocarem em seu GTA SA blz? Bom trouxe 4 mods...</p>
							<i class="float-right small"><i class="fas fa-user-edit"></i> Patrick Luan</i>
						</div>
					</div>
				</div>
				<?php endfor; ?>
				<div class="col text-center">
				<button class="btn btn-primary col-md-3"><i class="fas fa-link"></i> Ver mais</button>
				</div>
			</div>
		</div>		
	</section>
	<section class="bg-info mb-0 jumbotron jumbotron-fluid">
		<div class="container">
			<div class="bg-light shadow text-center p-3 rounded-lg">
				<h3>Quer receber alertas por email quando novidades forem ao ar?</h3>
				<form class="form-inline justify-content-center">
					<div class="input-group">
						<input class="form-control" type="text" name="email_notify" placeholder="exemple@exemple.com">
						<div class="input-group-append">	
						<button class="btn btn-primary" type="submit"><i class="fas fa-rss"></i> Receber</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!-- #FOOTER -->
	<?php include('layout/footer.php'); ?>
</body>
</html>
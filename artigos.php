<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Park & Junior - Artigos</title>

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
		
		<div class="py-4 container d-none" id="term">
			<div class="card border-0 rounded-lg bg-dark text-white">
				<div class="card-header px-3 pb-1">
					<div class="rounded-circle bg-success circlemenu d-inline-block"></div>
					<div class="rounded-circle bg-warning circlemenu d-inline-block"></div>
					<div class="rounded-circle bg-danger circlemenu d-inline-block"></div>
					<small class="d-inline-block ml-2 monospace">Version: 5.00</small>
				</div>
				<div class="car-body px-3">
				<h1 class="display-4 text-break"><i class="fas fa-terminal"></i> Artigos</h1>
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
		<div class="p-5">
			<h1 class="display-4"><i class="fas fa-newspaper"></i> Artigos</h1>
			<p>Atualmente é a minha maior habilidade, tanto para infraestrutura de rede, servidor WEB, e principalmente programação. Atualmente estou estudando o Framework de PHP Laravel 5.8 e a esrutura do MVC. No botão abaixo você encontra mais artigos sobre!</p>
		</div>
	</div>
	</section>
	<section class="jumbotron jumbotron-fluid mb-0">
		<div class="container">
			<h1 class="text-center pb-2 bg-secondary rounded-top text-white d-none">Ultimas postagens</h1>
			<?php for ($i=0; $i < 3; $i++): ?>
			<div class="card mb-4">
				<div class="row no-gutters">
				
				<div class="col-12">	
				<h5 class="bg-primary text-white py-2 px-3 m-0">MOD GTA San Andreas de Natal</h5>
				</div>	
				<div class="col-md-4">
					<a href="#" class="card-link">
					<img src="http://ap.imagensbrasil.org/images/2017/11/26/mods-especial-natal1280.jpg" class="card-img">
					</a>
				</div>
				<div class="col-md-8">
					<div class="p-1 small bg-secondary text-white">
					<i class="fas fa-calendar"></i> 25 de December de 2015
					</div>
					<div class="card-body">
					<p>Feliz Natal meus manos e minas! Bom para aproveitar esse dia separei esses mods para vocês colocarem em seu GTA SA blz? Bom trouxe 4 mods...</p>
					<div class="d-flex align-items-end justify-content-between">
						
					<i class="small"><i class="fas fa-user-edit"></i> Patrick Luan</i>
					<a href="#" class="btn btn-primary"><i class="fas fa-book-open"></i> Abrir</a>
					</div>
					</div>
				</div>
				</div>
			</div>
			<?php endfor; ?>
			<div class="col text-center">
			<button class="btn btn-primary col-md-3"><i class="fas fa-link"></i> Ver mais</button>
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
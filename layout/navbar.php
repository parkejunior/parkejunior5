<nav class="navbar navbar-dark navbar-expand-sm justify-content-between sticky-top">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#expandMenu">
		<i class="fas fa-bars"></i>
	</button>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#expandPesquisa">
		<i class="fas fa-search"></i>
	</button>

	<ul class="navbar-nav collapse navbar-collapse" id="expandMenu">
		<li class="nav-item active"><a href="/" class="nav-link"><i class="fas fa-home"></i> Início</a></li>
		<li class="nav-item"><a href="artigos.php" class="nav-link"><i class="fas fa-newspaper"></i> Artigos</a></li>
		<li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-table"></i> Portfólio</a></li>
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
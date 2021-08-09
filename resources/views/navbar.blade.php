<nav class="navbar navbar-expand-lg navbar-dark bg-dark roundedb mb-4">

	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<?php $rota = Request::route()->getName(); ?>

	<div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="/">Home</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="/produtos">Produtos</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="/categorias">Categorias</a>
			</li>
		</ul>

	</div>


</nav>

<h1>
	<?php echo $rota; ?>
</h1>
	
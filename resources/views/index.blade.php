@extends('layouts.app')

@section('body')
	<div class="jumbotron bg-light border border-secondary">
		<div class="row">
			<div class="card-deck">



				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Produtos</h5>
						<p class="card-text">
							Cadastre seus produtos aqui de acordo com as categorias.
						</p>	
						<a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
					</div>
				</div>




				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title">Cadastro de Categorias</h5>
						<p class="card-text">
							Cadastre suas categorias para organizar seus produtos.
						</p>	
						<a href="/produtos" class="btn btn-primary">Cadastre suas categorias</a>
					</div>
				</div>		
				







			</div>
		</div>
	</div>
@endsection
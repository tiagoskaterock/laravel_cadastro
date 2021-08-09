<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Produtos</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="p-5">

	<div class="container">

		@component('navbar')
		@endcomponent
		<main role="main">
			@hasSection('body')
				@yield('body')
			@endif
		</main>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
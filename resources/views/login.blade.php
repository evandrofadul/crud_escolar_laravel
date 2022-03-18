<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" />
	
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: flex;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: auto;
		}

		.form-signin .checkbox {
			font-weight: 400;
		}

		.form-signin .form-floating:focus-within {
			z-index: 2;
		}

		.form-signin input[type="username"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 5px;
			border-bottom-left-radius: 5px;
		}

		.form-signin input[type="password"] {
			margin: 10px 0 10px;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}
		
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
    </style>
</head>
@if (Auth::check())
	<script>
    	window.location.href = "/turma";
	</script>
@endif
<body class="text-center">
	<main class="form-signin">
		<form  action="{{ route('login.check') }}" method="POST">
            @csrf
			<h1 class="h3 mb-3 fw-normal">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></h1>

			<div class="form-floating">
				<input type="text" class="form-control" id="username" placeholder="usuario" name="username">
				<label for="username">Nome de Usuário</label>
			</div>
			
			<div class="form-floating">
				<input type="password" class="form-control" id="password" placeholder="Senha" name="password">
				<label for="password">Senha</label>
			</div>

			<button class="w-100 btn btn-lg btn-success" type="submit">ENTRAR</button>
		</form>
        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
	</main>
</body>

</html>
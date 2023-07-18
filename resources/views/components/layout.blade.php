<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }} - sistema de registro de usuários</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header>
    <!-- Conteúdo do cabeçalho -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">

        @auth
        <a class="navbar-brand" href="{{ route('home.index') }}">Home</a>
        @endauth

        @auth
        <a class="navbar-brand" href="{{ route('logout') }}">Sair</a>
        @endauth

        <!-- <li><a href="#">Sobre</a></li> -->
        <!-- <li><a href="#">Contato</a></li> -->
      </div>
    </nav>

    

  </header>

  <main class="container">

    <h1>{{ $title }}</h1>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ $slot }}

  </main>  

  <footer class="container mt-3">
    <!-- Conteúdo do rodapé -->
    <p>&copy; {{ date('Y') }} Meu Sistema de Registro de Usuários. Todos os direitos reservados.</p>
  </footer>


</body>
</html>

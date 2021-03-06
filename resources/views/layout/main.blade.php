<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('style')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    LOGOTIPO
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/Criar" class="nav-link">Criar Funcionario</a>
                    </li>
                    <li class="nav-item">
                        <a href="/Funcionario" class="nav-link">Funcionario</a>
                    </li>
                    <li class="nav-item">
                        <a href="/Enviar-Imagem" class="nav-link">Enviar Imagem</a>
                    </li>
                </ul>     
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('response'))
                    <script>alert('{{session('response')}}')</script>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
  
    <footer>
        <div>
            <p>&copy; copyRight 2020</p>
        </div>
    </footer>  
</body>
</html>
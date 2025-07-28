<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
            <div class="collapse navbar-collapse" id="navbar Nav">
                <a href="/" title="Inicio">
                    <img src="{{ asset('icon/cadastro.png') }}" alt="Ícone de cadastro" class="me-2" style="width: 32px;">
                </a>    
                <a href="/" class="navbar-brand">Inicio</a>
                    <a href="/cadastro/item" class="navbar-brand">Cadastrar Item</a>

                 <!--   <a href="/estoque/produtos" class="navbar-brand">Editar Item </a>-->

                    <a href="/estoque/produtos" class="navbar-brand">Listar Produtos</a>
            </div>
        </nav>
        <div class="container mt-05">
            @yield('content')
        </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
            <div class="collapse navbar-collapse" id="navbarNav">
                <a href="#" class="navbar-brand">Inicio</a>

                <li class="nav-item">
                    <a href="#" class="nav-link">Cadastrar Item</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Editar Item</a>
                </li>
            </div>
        </nav>
        <div class="container mt-05">
            @yield('content')
        </div>
</body>
</html>
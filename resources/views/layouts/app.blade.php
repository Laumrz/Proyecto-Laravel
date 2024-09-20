<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
            font-weight: bold;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #ffeeba !important;
        }
        h1 {
            color: #343a40;
            margin-bottom: 30px;
            font-size: 2.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
        .container {
            max-width: 1200px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background-color: #007bff;
            color: #ffffff;
            padding: 15px 0;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
        }
        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <!-- Barra de navegación con Bootstrap -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/productos') }}">Productos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/proveedores') }}">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/proveedores/create') }}">Agregar Proveedor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/empleados') }}">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/arls') }}">ARL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/usuarios') }}">Usuarios</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Gestión de Productos</h1>
        @yield('content')
    </div>

    <footer class="footer mt-auto py-3 text-center">
        <div class="container">
            <span>© {{ date('Y') }} CRUD Productos. Todos los derechos reservados.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - MiEmpresa TI</title>

   <link rel="stylesheet" href="/AppGestionUsuarios/public/assets/bootstrap/css/bootstrap.min.css">
    
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .app-container {
            flex: 1;
        }
        .sidebar {
            min-height: calc(100vh - 60px);
            background-color: #212529;
        }
        .sidebar .nav-link {
            color: #ced4da;
            padding: 0.75rem 1.25rem;
            border-radius: 0.375rem;
            margin-bottom: 0.2rem;
        }
        .sidebar .nav-link:hover {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .sidebar .nav-link.active {
            color: #ffffff;
            background-color: #0d6efd;
        }
    </style>
</head>
<body class="bg-light">

    <!-- HEADER SUPERIOR -->
    <header class="navbar navbar-dark bg-dark sticky-top shadow-sm px-3" style="height: 60px;">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#">
            <i class="bi bi-cpu-fill text-primary fs-4"></i>
            <span>MiEmpresa TI</span>
        </a>
        
        <div class="dropdown text-end">
            <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
                <i class="bi bi-person-circle fs-5 me-1"></i>
                <span><?php echo $_SESSION['usuario_nombre'] ?? 'Usuario'; ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end text-small shadow">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="/APPGESTIONUSUARIOS/public/index.php?controlador=login&accion=salir"><i class="bi bi-box-arrow-right me-2"></i>Cerrar sesión</a></li>
            </ul>
        </div>
    </header>

    <!-- CUERPO PRINCIPAL -->
    <div class="container-fluid app-container">
        <div class="row h-100">

            <!-- SIDEBAR -->
            <aside class="col-md-3 col-lg-2 sidebar p-3 d-flex flex-column">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="/APPGESTIONUSUARIOS/public/index.php?controlador=dashboard" class="nav-link active">
                            <i class="bi bi-house-door me-2"></i> Inicio
                        </a>
                    </li>
                    <li>
                        <a href="/APPGESTIONUSUARIOS/public/index.php?controlador=clientes" class="nav-link">
                            <i class="bi bi-people me-2"></i> Clientes
                        </a>
                    </li>
                    <li>
                        <a href="/APPGESTIONUSUARIOS/public/index.php?controlador=contratos" class="nav-link">
                            <i class="bi bi-file-earmark-text me-2"></i> Contratos
                        </a>
                    </li>
                    <li>
                        <a href="/APPGESTIONUSUARIOS/public/index.php?controlador=servicios" class="nav-link">
                            <i class="bi bi-gear-wide-connected me-2"></i> Servicios
                        </a>
                    </li>
                    <li>
                        <a href="/APPGESTIONUSUARIOS/public/index.php?controlador=productos" class="nav-link">
                            <i class="bi bi-box-seam me-2"></i> Productos
                        </a>
                    </li>
                    <li>
                        <a href="/APPGESTIONUSUARIOS/public/index.php?controlador=cobros" class="nav-link">
                            <i class="bi bi-cash-stack me-2"></i> Cobros
                        </a>
                    </li>
                </ul>

                <hr class="text-secondary">

                <div>
                    <a href="/APPGESTIONUSUARIOS/public/index.php?controlador=login&accion=salir" class="nav-link text-danger fw-semibold">
                        <i class="bi bi-box-arrow-right me-2"></i> Salir
                    </a>
                </div>
            </aside>

            <!-- CONTENIDO PRINCIPAL -->
            <main class="col-md-9 col-lg-10 p-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-4 border-bottom">
                    <h1 class="h2">Panel Principal</h1>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm border-start border-primary border-4 p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-muted small">Clientes Activos</div>
                                    <div class="fs-4 fw-bold">24</div>
                                </div>
                                <i class="bi bi-people text-primary fs-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm border-start border-success border-4 p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-muted small">Contratos Vigentes</div>
                                    <div class="fs-4 fw-bold">12</div>
                                </div>
                                <i class="bi bi-file-earmark-check text-success fs-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm border-start border-warning border-4 p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-muted small">Cobros Pendientes</div>
                                    <div class="fs-4 fw-bold">$1,450</div>
                                </div>
                                <i class="bi bi-cash-coin text-warning fs-1"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-4 rounded shadow-sm">
                    <h4>Bienvenido al sistema</h4>
                    <p class="text-muted mb-0">Selecciona una opción del menú lateral para gestionar la información de la empresa.</p>
                </div>
            </main>

        </div>
    </div>

    <script src="/AppGestionUsuarios/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda - Demo .htaccess</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Nuestro CSS Personalizado -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ===== BARRA DE NAVEGACIÓN ===== -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- LOGO + NOMBRE -->
            <a class="navbar-brand" href="/mi_tienda/">
                <img src="img/logo_de_la_tienda.jpeg" alt="Logo Mi Tienda" class="logo-img">
                Mi Tienda
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="/mi_tienda/">
                            <i class="bi bi-house-fill"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mi_tienda/producto/1">
                            <i class="bi bi-box"></i> Producto 1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mi_tienda/producto/2">
                            <i class="bi bi-box-seam"></i> Producto 2
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mi_tienda/resumen.html">
                            <i class="bi bi-file-text-fill"></i> Resumen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="/mi_tienda/admin/">
                            <i class="bi bi-shield-lock-fill"></i> Admin
                        </a>
                    </li>
                    <!-- BOTÓN MODO OSCURO -->
                    <li class="nav-item">
                        <button class="theme-toggle" id="themeToggle" title="Cambiar modo oscuro/claro">
                            <i class="bi bi-moon-fill icon-moon"></i>
                            <i class="bi bi-sun-fill icon-sun"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===== CONTENIDO PRINCIPAL ===== -->
    <main class="container mt-4 mb-5">
        
        <!-- HERO / JUMBOTRON -->
        <div class="jumbotron">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">
                        <i class="bi bi-gear-fill"></i> Demo de .htaccess
                    </h1>
                    <p class="lead mt-3">
                        Aprende a configurar el servidor Apache con archivos <code>.htaccess</code> 
                        usando un diseño moderno con Bootstrap 5.
                    </p>
                    <hr class="my-4" style="border-color: rgba(255,255,255,0.3);">
                    <p>
                        <span class="badge-tech badge-apache">Apache</span>
                        <span class="badge-tech badge-php">PHP</span>
                        <span class="badge-tech badge-bootstrap">Bootstrap 5</span>
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="bi bi-server" style="font-size: 6rem; opacity: 0.7;"></i>
                </div>
            </div>
        </div>

        <!-- CARACTERÍSTICAS EN TARJETAS -->
        <div class="row g-4 mt-3">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <span class="icon">🔄</span>
                    <h5>Redirecciones</h5>
                    <p class="small">HTTP a HTTPS y redirecciones 301 para URLs antiguas.</p>
                    <a href="/mi_tienda/pagina-antigua.html" class="btn btn-sm btn-outline-primary btn-custom">
                        Probar <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <span class="icon">🔗</span>
                    <h5>URLs Amigables</h5>
                    <p class="small">Reescritura de URLs dinámicas a rutas limpias y legibles.</p>
                    <a href="/mi_tienda/producto/3" class="btn btn-sm btn-outline-primary btn-custom">
                        Probar <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <span class="icon">🔒</span>
                    <h5>Protección</h5>
                    <p class="small">Carpetas protegidas con contraseña usando .htpasswd.</p>
                    <a href="/mi_tienda/admin/" class="btn btn-sm btn-outline-warning btn-custom">
                        Probar <i class="bi bi-lock-fill"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <span class="icon">🎨</span>
                    <h5>Error 404</h5>
                    <p class="small">Página de error personalizada con diseño atractivo.</p>
                    <a href="/mi_tienda/pagina-inexistente" class="btn btn-sm btn-outline-danger btn-custom">
                        Probar <i class="bi bi-exclamation-triangle"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- INFORMACIÓN DE CREDENCIALES - AHORA CENTRADA -->
        <div class="row mt-5 justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="alert-custom alert-info-custom text-center">
                    <h5 class="mb-3">
                        <i class="bi bi-info-circle-fill"></i> Credenciales de Acceso
                    </h5>
                    <div class="d-flex justify-content-center align-items-center gap-4 mb-2">
                        <div>
                            <strong>Usuario:</strong><br>
                            <code class="fs-5">admin</code>
                        </div>
                        <div class="vr" style="background-color: rgba(0,0,0,0.2);"></div>
                        <div>
                            <strong>Contraseña:</strong><br>
                            <code class="fs-5">secreto123</code>
                        </div>
                    </div>
                    <p class="small mt-2 mb-0">
                        <i class="bi bi-shield-lock-fill"></i> 
                        Usa estas credenciales para acceder al panel de administración
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="footer">
        <div class="container">
            <p class="mb-1">
                <i class="bi bi-code-slash"></i> 
                Desarrollado con el <i class="bi bi-heart-fill text-danger"></i> by Deyvis Giler
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- SCRIPT MODO OSCURO MEJORADO -->
    <script>
    (function() {
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        
        // Función para obtener el tema inicial
        function getInitialTheme() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                return savedTheme;
            }
            // Si no hay tema guardado, usar preferencia del sistema
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }
        
        // Aplicar tema inicial
        const initialTheme = getInitialTheme();
        html.setAttribute('data-theme', initialTheme);
        
        // Cambiar tema al hacer clic
        themeToggle.addEventListener('click', function() {
            const currentTheme = html.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            html.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });
        
        // Escuchar cambios en la preferencia del sistema
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
            if (!localStorage.getItem('theme')) {
                html.setAttribute('data-theme', e.matches ? 'dark' : 'light');
            }
        });
    })();
    </script>
</body>
</html>
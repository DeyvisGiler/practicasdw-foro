<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto - Mi Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/logo_de_la_tienda.jpeg">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/mi_tienda/">
                <img src="../img/logo_de_la_tienda.jpeg" alt="Logo" class="logo-img">
                Mi Tienda
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/mi_tienda/">
                            <i class="bi bi-house-fill"></i> Inicio
                        </a>
                    </li>
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

    <!-- CONTENIDO -->
    <div class="container mt-5">
        <?php 
        // Obtener ID del producto de manera segura
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        
        // Array de productos para hacerlo más realista
        $productos = [
            1 => ['nombre' => 'Laptop Pro', 'precio' => 999.99],
            2 => ['nombre' => 'Smartphone X', 'precio' => 599.99],
            3 => ['nombre' => 'Tablet Ultra', 'precio' => 399.99]
        ];
        
        $producto = isset($productos[$id]) ? $productos[$id] : ['nombre' => 'Producto Genérico', 'precio' => 0];
        ?>
        <div class="card product-card">
            <div class="card-header">
                <h2><i class="bi bi-box-seam"></i> Detalle del Producto</h2>
            </div>
            <div class="card-body text-center p-5">
                <span class="icon" style="font-size: 4rem;">
                    <?php echo $id <= 3 ? ['💻', '📱', '📟'][$id-1] : '📦'; ?>
                </span>
                <h3 class="card-title mt-3">
                    <?php echo htmlspecialchars($producto['nombre']); ?> #<?php echo $id; ?>
                </h3>
                <p class="product-price">
                    $<?php echo number_format($producto['precio'] > 0 ? $producto['precio'] : $id * 99.99, 2); ?>
                </p>
                <p class="card-text">
                    URL amigable: <code>/mi_tienda/producto/<?php echo $id; ?></code>
                </p>
                <p class="text-muted small">
                    Internamente: <code>/mi_tienda/producto.php?id=<?php echo $id; ?></code>
                </p>
                <div class="mt-4">
                    <a href="/mi_tienda/" class="btn btn-primary btn-custom me-2">
                        <i class="bi bi-arrow-left"></i> Volver al Inicio
                    </a>
                    <?php if ($id < 3): ?>
                    <a href="/mi_tienda/producto/<?php echo $id + 1; ?>" class="btn btn-outline-primary btn-custom">
                        Siguiente Producto <i class="bi bi-arrow-right"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script Modo Oscuro Mejorado -->
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
        if (themeToggle) {
            themeToggle.addEventListener('click', function() {
                const currentTheme = html.getAttribute('data-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                
                html.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
            });
        }
        
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
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página No Encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="img/logo_de_la_tienda.jpeg">
</head>
<body>
    <div class="error-404-container">
        <div class="container">
            <div class="error-icon mb-3">
                <i class="bi bi-emoji-frown"></i>
            </div>
            <h1 class="error-code">404</h1>
            <p class="fs-3 fw-bold">¡Ups! Página no encontrada.</p>
            <p class="lead">La página que buscas podría haber sido eliminada,<br>no existe o no tienes permisos para acceder.</p>
            <div class="divider"></div>
            <p class="small">Página de error personalizada con Bootstrap y configurada vía <code>.htaccess</code></p>
            <a href="/mi_tienda/" class="btn btn-primary btn-lg btn-custom mt-3">
                <i class="bi bi-house-fill"></i> Volver al Inicio
            </a>
            <br>
            <button class="theme-toggle mt-4" id="themeToggle" title="Cambiar modo oscuro/claro" style="border-color: #6c757d; color: #6c757d;">
                <i class="bi bi-moon-fill icon-moon"></i>
                <i class="bi bi-sun-fill icon-sun"></i>
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            const themeToggle = document.getElementById('themeToggle');
            const html = document.documentElement;
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) html.setAttribute('data-theme', savedTheme);
            themeToggle.addEventListener('click', function() {
                const newTheme = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
                html.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
            });
        })();
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Mi Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/logo_de_la_tienda.jpeg">
    
    <!-- Estilos mejorados para centrado y legibilidad -->
    <style>
        /* Contenedor principal - centrado perfecto */
        .admin-panel {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        /* Estilo para el mensaje de éxito */
        .admin-success {
            background: linear-gradient(135deg, #11998e, #38ef7d);
            color: white;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            animation: fadeInUp 0.8s ease-out;
        }
        
        /* Modo claro - ajustar colores */
        [data-theme="light"] .admin-success {
            color: #2d3436;
            background: linear-gradient(135deg, #a8e6cf, #88d8b0);
        }
        
        /* Estilo para los códigos en el panel de admin */
        .admin-success code {
            background-color: rgba(0, 0, 0, 0.2);
            color: #fff;
            padding: 3px 10px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 0.95em;
        }
        
        /* Modo claro - ajustar códigos */
        [data-theme="light"] .admin-success code {
            background-color: rgba(0, 0, 0, 0.1);
            color: #2d3436;
            border: 1px solid rgba(0, 0, 0, 0.2);
        }
        
        /* Modo oscuro - mantener colores originales */
        [data-theme="dark"] .admin-success code {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffeaa7;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        /* Separador */
        .admin-success hr {
            border-color: rgba(255, 255, 255, 0.3);
        }
        
        [data-theme="light"] .admin-success hr {
            border-color: rgba(0, 0, 0, 0.2);
        }
        
        /* Icono del escudo */
        .admin-success .shield-icon {
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: shield-glow 2s infinite alternate;
        }
        
        [data-theme="light"] .admin-success .shield-icon {
            color: #2d3436;
        }
        
        /* Botón de tema en modo claro */
        [data-theme="light"] .theme-toggle {
            border-color: rgba(0, 0, 0, 0.3) !important;
            color: #2d3436 !important;
        }
        
        /* Animaciones */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes shield-glow {
            from {
                filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.5));
            }
            to {
                filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.9));
            }
        }
        
        [data-theme="light"] .admin-success .shield-icon {
            animation: shield-glow-light 2s infinite alternate;
        }
        
        @keyframes shield-glow-light {
            from {
                filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.2));
            }
            to {
                filter: drop-shadow(0 0 20px rgba(0, 0, 0, 0.4));
            }
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <div class="admin-success">
            <div class="shield-icon">
                <i class="bi bi-shield-check"></i>
            </div>
            <h2 class="fw-bold">¡Acceso Concedido!</h2>
            <p class="mt-3">Has ingresado correctamente al panel de administración.</p>
            <p>La autenticación con <code>.htaccess</code> y <code>.htpasswd</code> funciona perfectamente.</p>
            <hr>
            <div class="credentials-box">
                <p class="small mb-2">Credenciales de acceso:</p>
                <div class="d-flex justify-content-center align-items-center gap-3">
                    <span>👤 <strong>Usuario:</strong> admin</span>
                    <span class="vr"></span>
                    <span>🔑 <strong>Contraseña:</strong> secreto123</span>
                </div>
            </div>
            <a href="/mi_tienda/" class="btn btn-light btn-custom mt-4">
                <i class="bi bi-house-fill"></i> Volver al Inicio
            </a>
            <br>
            <button class="theme-toggle mt-3" id="themeToggle" title="Cambiar modo oscuro/claro">
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
            
            // Función para obtener el tema inicial
            function getInitialTheme() {
                const savedTheme = localStorage.getItem('theme');
                if (savedTheme) {
                    return savedTheme;
                }
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
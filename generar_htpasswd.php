<?php
$usuario = 'admin'; // El nombre de usuario que quieres usar
$contrasena = 'secreto123'; // La contraseña que quieres usar

// Genera el hash de contraseña compatible con Apache
$hash = password_hash($contrasena, PASSWORD_BCRYPT);

// Muestra la línea que debes copiar en tu archivo .htpasswd
echo "<h1>Línea para .htpasswd:</h1>";
echo "<pre>" . $usuario . ":" . $hash . "</pre>";
echo "<p><strong>¡Copia la línea de arriba y pégala en tu archivo 'C:/xampp/htdocs/mi_tienda/admin/.htpasswd'!</strong></p>";
?>
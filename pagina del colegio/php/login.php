<?php
// ===============================
// Espacio para la conexión y validación de acceso
// include 'db.php';
// if ($_SERVER["REQUEST_METHOD"] == "POST") { ... }
// ===============================
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login - Colegio</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="../image/logo (2).png" alt="Logo Colegio">
      <h1>I.E 4018 Abraham Valdelomar</h1>
    </div>
    <nav>
      <li><a href="../html/index.html">Inicio</a></li>
      <li><a href="../php/libros.php">Ver libros</a></li>
      <li><a href="../php/contacto.php">Contacto</a></li>
      <li><a href="../php/login.php">Administrador</a></li>
    </nav>
  </header>
  <main class="login-content">
    <section class="left-area">
      <img src="../image/logo (2).png" alt="Logo Grande" class="logo-grande">
      <p class="nombre-colegio">I.E 4018 Abraham Valdelomar</p>
    </section>
    <section class="right-area">
      <div class="login-box">
        <h2><span class="emoji">🔑</span> Acceso Docentes</h2>
        <form method="POST" action="">
          <label for="usuario">Usuario:</label>
          <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
          <label for="clave">Clave:</label>
          <input type="password" id="clave" name="clave" placeholder="Ingresa tu clave" required>
          <button type="submit">Ingresar</button>
        </form>
      </div>
    </section>
  </main>
</body>
</html>
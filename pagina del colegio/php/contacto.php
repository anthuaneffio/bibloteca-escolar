<?php
// ===============================
// Espacio para la conexión y lógica de guardar la solicitud
// include 'db.php';
// if ($_SERVER["REQUEST_METHOD"] == "POST") { ... }
// ===============================
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto - Biblioteca</title>
  <link rel="stylesheet" href="../css/contacto.css">
</head>
<body>
  <!-- Menú de navegación -->
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
  <section class="hero">
    <h1>Bienvenidos a la Biblioteca Escolar</h1>
  </section>
  <section class="formulario">
    <div class="container">
      <div class="info-box">
        <h2>👩‍🏫 Bibliotecaria</h2>
        <p><strong>Nombre:</strong> Lic. María Fernández</p>
        <p><strong>Correo:</strong> biblioteca@colegio.edu</p>
        <p><strong>Horario:</strong> Lunes a Viernes, 8:00 AM - 4:00 PM</p>
        <p><strong>Teléfono:</strong> (01) 456-7890</p>
      </div>
      <div class="contact-box">
        <h2>📚 Solicitud de Préstamo</h2>
        <form method="POST" action="">
          <label for="nombre">Nombre del estudiante:</label>
          <input type="text" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
          <label for="libro">Libro solicitado:</label>
          <input type="text" id="libro" name="libro" placeholder="Título del libro" required>
          <label for="tiempo">Tiempo de préstamo:</label>
          <select id="tiempo" name="tiempo" required>
            <option value="">-- Selecciona --</option>
            <option value="1_dia">1 día</option>
            <option value="3_dias">3 días</option>
            <option value="1_semana">1 semana</option>
          </select>
          <button type="submit">Enviar solicitud</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
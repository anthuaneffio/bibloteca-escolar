<?php
// ===============================
// Espacio para conexión y consulta de libros/usuarios
// include 'db.php';
// Aquí tu compañero debe mostrar la tabla de libros desde la base de datos.
// ===============================
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel del Administrador</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
  <!-- ====== Header institucional ====== -->
  <header>
    <h1>📚 Panel de Administración</h1>
    <nav>
      <span>
        <?php
        // ===============================
        // Espacio para mostrar el nombre del docente logueado
        // echo $_SESSION["docente"];
        // ===============================
        ?>
      </span>
      <a href="logout.php">Cerrar sesión</a>
    </nav>
  </header>
  <!-- ====== Tabla de libros ====== -->
  <main>
    <h2>Gestión de Libros</h2>
    <button class="add-btn">➕ Agregar nuevo libro</button>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Autor</th>
          <th>Enlace PDF</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- ===============================
             Aquí tu compañero llenará la tabla desde la BD
             Ejemplo de fila:
        =============================== -->
        <tr>
          <td>1</td>
          <td>Don Quijote</td>
          <td>Miguel de Cervantes</td>
          <td><a href="#">Ver PDF</a></td>
          <td>
            <button class="edit-btn">✏️ Editar</button>
            <button class="delete-btn">🗑️ Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </main>
</body>
</html>
<?php
// ===============================
// Espacio para conexión a la base de datos
// include 'db.php'; 
// Aquí tu compañero debe cargar los libros desde la base de datos.
// ===============================
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Libros</title>
    <link rel="stylesheet" href="../css/stilo.css">
</head>
<body>
    <!-- Menú de navegación -->
    <header>
        <div class="logo">
            <img src="../image/logo (2).png" alt="Logo">
            <h1>I.E 4018 Abraham Valdelomar</h1>
        </div>
        <nav>
            <li><a href="../html/index.html">Inicio</a></li>
            <li><a href="../php/libros.php">Ver libros</a></li>
            <li><a href="../php/contacto.php">Contacto</a></li>
            <li><a href="../php/login.php">Administrador</a></li>
        </nav>
    </header>
    <button id="toggle-dark">🌙</button>

    <main>
        <h1>Catálogo de Libros</h1>
        <div class="buscador">
            <input type="text" id="buscar" placeholder="Buscar por título o autor...">
            <span>🔎</span>
        </div>
        <div id="contenedor-libros">
            <?php
            // Ejemplo de libros (reemplazar por consulta DB)
            $libros = [
                [
                    "titulo" => "Don Quijote de la Mancha",
                    "autor" => "Miguel de Cervantes",
                    "pdf" => "https://drive.google.com/file/d/XXXXXXXX/view",
                    "imagen" => "../image/quijote.jpg"
                ],
                [
                    "titulo" => "Cien años de soledad",
                    "autor" => "Gabriel García Márquez",
                    "pdf" => "https://drive.google.com/file/d/YYYYYYYY/view",
                    "imagen" => "../image/soledad.jpg"
                ],
                [
                    "titulo" => "El Principito",
                    "autor" => "Antoine de Saint-Exupéry",
                    "pdf" => "https://drive.google.com/file/d/ZZZZZZZZ/view",
                    "imagen" => "../image/mate.jpg"
                ]
            ];
            foreach ($libros as $libro) {
                echo "<div class='libro'>";
                echo "<img src='" . $libro['imagen'] . "' alt='Portada de " . $libro['titulo'] . "' class='portada'>";
                echo "<h2>" . $libro['titulo'] . "</h2>";
                echo "<p>Autor: " . $libro['autor'] . "</p>";
                echo "<a href='" . $libro['pdf'] . "' target='_blank'>📖 Ver PDF</a>";
                echo "</div>";
            }
            ?>
        </div>
        <p id="no-resultados" style="display:none; text-align:center; color:red;">❌ No se encontraron libros</p>
    </main>
    <script>
        // Botón dark mode
        const btnDark = document.getElementById('toggle-dark');
        btnDark.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            btnDark.textContent = document.body.classList.contains('dark-mode') ? "☀️ Light Mode" : "🌙 Dark Mode";
        });
    </script>
    <script src="../js/script.js"></script>
</body>
</html>
document.addEventListener("DOMContentLoaded", () => {
    const input = document.getElementById("buscar");
    const libros = document.querySelectorAll(".libro");
    const mensaje = document.getElementById("no-resultados");

    input.addEventListener("keyup", () => {
        let filtro = input.value.toLowerCase();
        let encontrados = 0;

        libros.forEach(libro => {
            let titulo = libro.querySelector("h2").textContent.toLowerCase();
            let autor = libro.querySelector("p").textContent.toLowerCase();

            if (titulo.includes(filtro) || autor.includes(filtro)) {
                libro.classList.remove("oculto");
                encontrados++;
            } else {
                libro.classList.add("oculto");
            }
        });

        // Mostrar mensaje si no hay resultados
        mensaje.style.display = (encontrados === 0) ? "block" : "none";
    });

    // 🔹 Modo oscuro
    const botonModo = document.getElementById("modo");
    botonModo.addEventListener("click", () => {
        document.body.classList.toggle("dark");
    });
});

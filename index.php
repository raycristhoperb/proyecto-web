<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <link rel="stylesheet" href="estilos.css"> <!-- Opcional: para estilos externos -->
</head>
<body>
    <header>
        <h1>Bienvenido a Cursos de Programacion</h1>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="inicio">
            <h2>Inicio</h2>
            <p>Curso de Programacion.</p>
        </section>

        <section id="servicios">
            <h2>Servicios</h2>
            <p>Diversos Lenjueages de Programacion.</p>
        </section>

        <section id="contacto">
            <h2>Contacto</h2>
            <form>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje"></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Ray Bonilla. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Bonita</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Promocion de los 200 años</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Sobre mí</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section>
            <h2>Sobre Este Diseño</h2>
            <p>Este es un ejemplo de una página web bonita utilizando HTML y CSS. Puedes personalizar los colores y el contenido como desees.</p>
        </section>
        
        <section>
            <h2>Servicios</h2>
            <p>Ofrecemos una variedad de servicios para ayudarte a alcanzar tus metas.</p>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Mi Página Bonita. Todos los derechos de Manuel Reservados .</p>
    </footer>

    <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
}

header {
    background: #4A90E2; /* Azul más suave */
    color: #ffffff;
    padding: 1rem 0;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline-block;
    position: relative;
    margin: 0 15px;
}

nav ul li a {
    color: #ffffff;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 15px;
    transition: background 0.3s;
}

nav ul li a:hover {
    background: #357ABD; /* Cambia el fondo al pasar el mouse */
    border-radius: 5px;
}

.dropdown {
    display: none;
    position: absolute;
    background: #4A90E2;
    padding: 10px 0;
    margin-top: 5px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

nav ul li:hover .dropdown {
    display: block;
}

.dropdown li {
    display: block;
    margin: 0;
}

.dropdown li a {
    display: block;
    padding: 10px 15px;
}

main {
    padding: 20px;
    max-width: 800px;
    margin: 20px auto;
    background: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    color: #4A90E2;
}

footer {
    text-align: center;
    padding: 10px 0;
    background: #333;
    color: #ffffff;
    position: relative;
    bottom: 0;
    width: 100%;
}
</style>
</body>
</html>

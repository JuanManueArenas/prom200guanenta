<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatería</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #e2e2e2, #ffffff);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }

        h1 {
            margin-bottom: 30px;
            color: #0056b3;
            font-size: 2.5em;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        #div_inicio_sesion {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 320px;
            text-align: center;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s, box-shadow 0.3s;
            font-size: 1em;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.5);
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            font-size: 1em;
        }

        button:hover {
            background-color: #004494;
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(0);
        }

        @media (max-width: 400px) {
            h1 {
                font-size: 2em;
            }

            #div_inicio_sesion {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>PROM 200 AÑOS</h1>
    <div id="div_inicio_sesion">
        <form action="pagina_principal.php" method="post">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="clave" placeholder="Contraseña" required>
            <button href="pagina_principal.php" >Ingresar</button>
            
        </form> 
    </div>
</body>
</html>

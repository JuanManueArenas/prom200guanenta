<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zapateria</title>
</head>
<body>
    <h1>PROM 200 AÑOS</h1>
    <?php
    ?>
    <div id="div_inicio_sesion">
        <form  action="modelo/loguear.php" method="post">
            <input type="text" name="usuario" id="" placeholder = "Usuario" require>
            <br>
            <input type = "password" name="clave" id="" placeholder = "Contraseña" require>
            <br>
            <button type = "submit">Ingresar</button>
        </form> 
        <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color:#FFFFFF;
            color: #FFFFFF;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            margin-bottom: 20px;
            color: #0000ff ;
        }

        #div_inicio_sesion {
            background: #FFFF00;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border: 1px solid #0000ff ;
            outline: #FFFFFF;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0000ff ;
            color: white;
            border: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0000ff ;
        }
    </style>
 
    
</style>
    </div>
</body>
</html>
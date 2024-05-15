<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
        }
        #logo1{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #000000;
        }

        h2 {
            text-align: center;
            color: #ffffff;
        }

        form {
            text-align: center;
            color: #000000;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color:#5f0000;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5f0000;
        }

        .error {
            color: red;
        }

        .dashboard-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>
    <div id="logo1">
        <img src="src/img/logo1.png" id="logo" alt="...">
    </div>    

    <h2>Iniciar Sesión</h2>
    <div class=container>    
        <form action="login.php" method="post">
            <label for="username">Usuario:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>
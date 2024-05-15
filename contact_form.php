<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <title>Reseñas de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            color: #ffffff;
        }
        #logo1 {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #logo {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: #5f0000;
            border-radius: 10px;
        }
        label {
            color: #ffffff;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
        }
        button[type="submit"] {
            background-color: #aa0000;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            margin: auto;
        }
        button[type="submit"]:hover {
            background-color: #5f0000;
        }
    </style>
</head>
<body>
    <div id="logo1">
        <img src="src/img/logo1.png" id="logo" alt="...">
    </div>    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <div class="container">
            
            <a class="navbar-brand" href="#">Analog Ripper</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Reseñas de Productos</h1>
    <form action="process_product_reviews.php" method="POST">
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="rating">Puntuación:</label>
            <select id="rating" name="rating" class="form-control">
                <option value="5">★★★★★</option>
                <option value="4">★★★★</option>
                <option value="3">★★★</option>
                <option value="2">★★</option>
                <option value="1">★</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" rows="4" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Reseña</button>
    </form>

    <script src="src/js/bootstrap.min.js"></script>
</body>
</html>

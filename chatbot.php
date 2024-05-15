<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        #chatbot {
            margin: 0 auto;
            max-width: 400px;
            border: 1px solid #444;
            background-color: #222;
            border-radius: 5px;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px 5px 0 0;
        }
        .chat-close {
            color: #fff;
            float: right;
        }
        .chat {
            padding: 20px;
        }
        .chat-history {
            height: 200px;
            overflow-y: scroll;
            margin-bottom: 20px;
        }
        .chat-message {
            padding: 10px 20px;
            background: #333;
            border-radius: 0 0 5px 5px;
        }
        .chat-message textarea {
            width: calc(100% - 110px);
            resize: none;
        }
        .chat-message button {
            width: 90px;
            background-color: #8B0000;
            border: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .chat-message button:hover {
            background-color: #ff0000;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Chat de Soporte</h1>
    <div id="chatbot">
        <header class="clearfix">
            <a href="#" class="chat-close">x</a>
            <h4>Chatbot</h4>
        </header>
        <div class="chat">
            <!-- Aquí se mostrarían los mensajes del chat -->
            <div class="chat-history"></div>
        </div>
        <form class="chat-message clearfix">
            <textarea name="message-to-send" id="message-to-send" class="form-control" placeholder="Escribe tu mensaje aquí..." rows="3"></textarea>
            <button type="submit" class="btn btn-dark">Enviar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


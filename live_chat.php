<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat en Vivo</title>
</head>
<body>
    <h1>Chat en Vivo</h1>
    <div id="live-chat">
        <header class="clearfix">
            <a href="#" class="chat-close">x</a>
            <h4>Chat en Vivo</h4>
        </header>
        <div class="chat">
            <!-- Aquí se mostrarían los mensajes del chat -->
            <div class="chat-history"></div>
        </div>
        <form class="chat-message clearfix">
            <textarea name="message-to-send" id="message-to-send" placeholder="Escribe tu mensaje aquí..." rows="3"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chatbot</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Personalización de estilos */
    body {
      background-color: black;
    }

    .chat-interface {
      background-color: #8B0000; /* Carmesí oscuro */
      color: white;
      padding: 20px;
      border-radius: 10px;
      margin-top: 20px;
    }

    .message {
      margin-bottom: 10px;
    }

    .user-message {
      text-align: right;
    }

    .behavior-message {
      color: #8B0000; /* Color rojo del contenedor */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="chat-interface">
          <h2>Chatbot</h2>
          <div id="chatArea">
            <!-- Aquí se mostrará el chat -->
          </div>
          <!-- Campo de entrada de texto -->
          <input type="text" id="userInput" class="form-control" placeholder="Type your message...">
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script type="importmap">
    {
      "imports": {
        "@google/generative-ai": "https://esm.run/@google/generative-ai"
      }
    }
  </script>
  <script type="module">
    // Fetch your API_KEY
    const API_KEY = "AIzaSyBrhhs05cA2Cvqxzun3HsQVYx6ZU47kZ9E";

    import { GoogleGenerativeAI } from "@google/generative-ai";

    // Access your API key (see "Set up your API key" above)
    const genAI = new GoogleGenerativeAI(API_KEY);

    async function sendMessage(message) {
      const chatArea = document.getElementById('chatArea');
      const userMessageElement = document.createElement('div');
      userMessageElement.classList.add('message', 'user-message');
      userMessageElement.textContent = message;
      chatArea.appendChild(userMessageElement);

      // For text-only input, use the gemini-pro model
      const model = genAI.getGenerativeModel({ model: "gemini-pro" });
      const result = await model.generateContent(message);
      const response = await result.response;
      const text = await response.text();

      // Agregar el mensaje del bot solo si el mensaje del usuario no es el de comportamiento
      if (message !== "") {
        const botMessageElement = document.createElement('div');
        botMessageElement.classList.add('message');
        botMessageElement.textContent = text;
        chatArea.appendChild(botMessageElement);
      }
    }

    async function sendInitialMessage() {
      const initialMessage = ""
      const chatArea = document.getElementById('chatArea');
      const behaviorMessage = document.createElement('div');
      behaviorMessage.classList.add('message', 'behavior-message');
      behaviorMessage.textContent = initialMessage;
      chatArea.appendChild(behaviorMessage);
      await sendMessage(initialMessage);
    }

    sendInitialMessage();

    document.getElementById('userInput').addEventListener('keypress', async function(event) {
      if (event.key === 'Enter') {
        const userInput = this.value;
        if (userInput.trim() !== '') {
          await sendMessage(userInput);
          this.value = ''; // Limpiar el campo de entrada después de enviar el mensaje
        }
      }
    });
  </script>
</body>
</html>

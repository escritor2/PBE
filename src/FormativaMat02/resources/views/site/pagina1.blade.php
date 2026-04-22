<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo ao Sistema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            text-align: center;
            width: 400px;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            color: #333;
            margin-bottom: 15px;
        }

        p {
            color: #666;
            margin-bottom: 25px;
        }

        button {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            background: #667eea;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5563c1;
            transform: scale(1.05);
        }

        .mensagem {
            margin-top: 20px;
            font-weight: bold;
            color: #764ba2;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bem-vindo ao Laravel 🚀</h1>
        <p>Seu sistema está funcionando perfeitamente.</p>

        <button onclick="mostrarMensagem()">Clique aqui</button>

        <div class="mensagem" id="mensagem"></div>
    </div>

    <script>
        function mostrarMensagem() {
            document.getElementById("mensagem").innerHTML = 
                "Sistema carregado com sucesso! ✔️";
        }
    </script>

</body>
</html>
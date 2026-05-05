<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Finalização do Projeto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            width: 900px;
            max-width: 100%;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            text-align: center;
            animation: aparecer 1s ease-in-out;
        }

        h1 {
            color: #2c5364;
            margin-bottom: 20px;
        }

        .descricao {
            color: #555;
            margin-bottom: 40px;
        }

        .linha-tempo {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .etapa {
            flex: 1;
            min-width: 180px;
            background: #f1f5f9;
            padding: 20px;
            border-radius: 10px;
            transition: 0.3s;
            cursor: pointer;
        }

        .etapa:hover {
            background: #dbeafe;
            transform: scale(1.05);
        }

        .etapa h3 {
            margin-bottom: 10px;
            color: #203a43;
        }

        .status {
            margin-top: 20px;
            font-weight: bold;
            color: #2c5364;
            min-height: 30px;
        }

        button {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            background: #2c5364;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #203a43;
            transform: scale(1.05);
        }

        @keyframes aparecer {
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
    <h1>Conclusão do Projeto</h1>
    <p class="descricao">
        O sistema foi desenvolvido, estruturado e testado com sucesso.
        Agora estamos na etapa final de entrega e implantação.
    </p>

    <div class="linha-tempo">
        <div class="etapa" onclick="mostrar('Planejamento concluído com sucesso.')">
            <h3>Planejamento</h3>
        </div>

        <div class="etapa" onclick="mostrar('Desenvolvimento finalizado.')">
            <h3>Desenvolvimento</h3>
        </div>

        <div class="etapa" onclick="mostrar('Testes realizados e aprovados.')">
            <h3>Testes</h3>
        </div>

        <div class="etapa" onclick="mostrar('Sistema pronto para produção.')">
            <h3>Entrega</h3>
        </div>
    </div>

    <button onclick="finalizar()">Finalizar Projeto</button>

    <div class="status" id="statusFinal"></div>
</div>

<script>
    function mostrar(texto) {
        document.getElementById("statusFinal").innerHTML = texto;
    }

    function finalizar() {
        document.getElementById("statusFinal").innerHTML =
            "Projeto concluído com sucesso 🎉 Sistema pronto para uso!";
    }
</script>

</body>
</html>
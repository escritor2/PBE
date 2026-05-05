<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Desenvolvimento</title>
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
            background: linear-gradient(135deg, #1e3c72, #2a5298);
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
            box-shadow: 0 20px 50px rgba(0,0,0,0.25);
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            text-align: center;
            color: #2a5298;
            margin-bottom: 20px;
        }

        .descricao {
            text-align: center;
            color: #555;
            margin-bottom: 40px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: #f4f6fb;
            padding: 20px;
            border-radius: 10px;
            transition: 0.3s;
            cursor: pointer;
        }

        .card:hover {
            background: #e3e9ff;
            transform: translateY(-5px);
        }

        .card h3 {
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .card p {
            color: #555;
            font-size: 14px;
        }

        .status {
            margin-top: 30px;
            text-align: center;
            font-weight: bold;
            color: #1e3c72;
        }

        button {
            margin-top: 30px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background: #2a5298;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1e3c72;
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
    <h1>Área de Desenvolvimento</h1>
    <p class="descricao">
        Esta página representa a estrutura e evolução do projeto em Laravel.
        Aqui mostramos as principais etapas do desenvolvimento do sistema.
    </p>

    <div class="cards">
        <div class="card" onclick="mostrarStatus('Backend configurado com Laravel.')">
            <h3>Backend</h3>
            <p>Rotas, Controllers, Models e integração com banco de dados.</p>
        </div>

        <div class="card" onclick="mostrarStatus('Frontend estruturado com HTML, CSS e JS.')">
            <h3>Frontend</h3>
            <p>Interface responsiva e interação dinâmica com JavaScript.</p>
        </div>

        <div class="card" onclick="mostrarStatus('Banco de dados conectado e funcional.')">
            <h3>Banco de Dados</h3>
            <p>Migrations, relacionamentos e organização das tabelas.</p>
        </div>

        <div class="card" onclick="mostrarStatus('Sistema em fase de testes.')">
            <h3>Testes</h3>
            <p>Validação de funcionalidades e correção de possíveis erros.</p>
        </div>
    </div>

    <button onclick="proximaEtapa()">Avançar Projeto</button>

    <div class="status" id="statusProjeto"></div>
</div>

<script>
    function mostrarStatus(mensagem) {
        document.getElementById("statusProjeto").innerHTML = mensagem;
    }

    function proximaEtapa() {
        document.getElementById("statusProjeto").innerHTML =
            "Projeto evoluindo com sucesso 🚀 Continue desenvolvendo!";
    }
</script>

</body>
</html>
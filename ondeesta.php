<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Força Elétrica - Flashcards e Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #e6f7ff; /* Fundo azul claro */
            color: #333;
        }

        h1 {
            text-align: center;
            color: #0a93f5; /* Azul claro */
            margin-bottom: 20px;
        }

        /* Estilo do Menu */
        header {
            background: linear-gradient(to right, #0a93f5, #80c3f3); /* Gradiente de fundo */
            padding: 15px; /* Padding superior e inferior */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Permitir quebra de linha */
        }

        nav button {
            background-color: transparent; /* Fundo transparente */
            color: #ffffff; /* Texto branco */
            border: 2px solid #ffffff; /* Borda branca */
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s, border-color 0.3s ease;
            margin: 0 10px; /* Espaço entre os botões */
            border-radius: 25px; /* Bordas arredondadas */
            position: relative; /* Para efeito de pseudo-elemento */
            overflow: hidden; /* Para esconder o pseudo-elemento */
        }

        /* Efeito de hover */
        nav button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background-color: rgba(255, 255, 255, 0.2); /* Cor de fundo do efeito */
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.5s ease;
            z-index: 0;
        }

        nav button:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }

        nav button:hover {
            color: #0a93f5; /* Mudar a cor do texto ao passar o mouse */
            border-color: #0a93f5; /* Mudar a cor da borda ao passar o mouse */
            transform: translateY(-2px); /* Leve movimento para cima */
        }

        nav button:focus {
            outline: none; /* Remover contorno ao focar */
        }

        .flashcard-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-bottom: 40px;
        }

        .flashcard {
            background-color: #80c3f3; /* Azul claro */
            color: white;
            border-radius: 10px;
            padding: 20px;
            width: 300px; /* Largura maior */
            height: 250px; /* Altura maior */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column; /* Permitir texto em várias linhas */
            justify-content: center;
            align-items: center;
            cursor: pointer;
            text-align: center; /* Centralizar texto */
        }

        .flashcard:hover {
            transform: scale(1.05);
        }

        .calculator-container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 600px;
            background-color: #80c3f3; /* Azul claro para o fundo da calculadora */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0;
            font-size: 18px;
        }

        input[type="number"] {
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            width: 100%;
            max-width: 300px;
            font-size: 16px;
        }

        .calculate-button {
            background-color: #00aaff; /* Botão azul claro */
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            margin-top: 20px;
        }

        .calculate-button:hover {
            background-color: #008fd6; /* Cor ao passar o mouse */
            transform: scale(1.05);
        }

        .result {
            font-size: 20px;
            margin-top: 20px;
            color: #0a93f5; /* Azul claro */
        }
    </style>
</head>
<body>

    <header>
        <h1>Força Elétrica</h1>
        <nav>
            <button onclick="document.location='campoeletrico.php'">Campo Elétrico</button>
            <button onclick="document.location='potencial.php'">Potencial Elétrico</button>
            <button onclick="document.location='index.php'">Voltar para a Página Principal</button> <!-- Botão para voltar -->
        </nav>
    </header>

    <!-- Flashcards -->
    <div class="flashcard-container">
        <div class="flashcard" onclick="showInfo('forca')">
            <h2>O que é Força Elétrica?</h2>
            <p>É a interação de atração ou repulsão entre cargas elétricas. A força elétrica é descrita pela Lei de Coulomb.</p>
        </div>
        <div class="flashcard" onclick="showInfo('forca')">
            <h2>Fórmula da Força Elétrica</h2>
            <p>No Sistema Internacional, a força elétrica (F) é medida em newtons (N). A constante de proporcionalidade (k) depende do meio onde as cargas estão inseridas, sendo aproximadamente 9.109 N·m²/C² no vácuo.</p>
        </div>
       
    </div>

    <!-- Informações dos Flashcards -->
    <div id="info" style="text-align: center; margin-bottom: 20px;"></div>

    <!-- Calculadora -->
    <div class="calculator-container">
        <h2>Calculadora de Força Elétrica</h2>
        <form id="calcForm">
            <label>Constante (k)</label>
            <input type="number" name="k" required>

            <label>Q1 (Coulombs)</label>
            <input type="number" name="q1" required>

            <label>Q2 (Coulombs)</label>
            <input type="number" name="q2" required>

            <label>Distância (d) - Metros</label>
            <input type="number" name="r" required>
            
            <input type="button" value="Calcular Força" class="calculate-button" onclick="calculateForce()">
        </form>
        <div id="result" class="result"></div>
    </div>

    <script>
        // Função para exibir informações dos flashcards
        function showInfo(topic) {
            const info = {
                forca: "Força elétrica é a interação de atração ou repulsão entre cargas elétricas.",
                coulomb: "A Lei de Coulomb define a força entre duas cargas como diretamente proporcional ao produto de suas cargas e inversamente proporcional ao quadrado da distância entre elas.",
                campo: "O campo elétrico é uma representação da influência que uma carga elétrica exerce sobre o espaço ao seu redor.",
                potencial: "Potencial elétrico é a energia potencial por unidade de carga em um campo elétrico."
            };
            document.getElementById("info").innerText = info[topic];
        }

        // Função para calcular a força elétrica
        function calculateForce() {
            const form = document.getElementById('calcForm');
            const k = parseFloat(form.k.value);
            const q1 = parseFloat(form.q1.value);
            const q2 = parseFloat(form.q2.value);
            const r = parseFloat(form.r.value);
            
            if (r !== 0) {
                const f = (k * q1 * q2) / (r * r);
                document.getElementById('result').innerText = "Força Elétrica: " + f.toFixed(2) + " N";
            } else {
                document.getElementById('result').innerText = "Erro: A distância não pode ser zero.";
            }
        }
    </script>

</body>
</html>

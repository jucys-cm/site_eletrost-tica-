<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Força Elétrica</title>
    <style>
        /* Estilo geral da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #80c3f3; /* Cor azul para todo o texto */
            margin: 0;
            padding: 0;
        }

        /* Estilo do cabeçalho */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #80c3f3; /* Azul escuro no menu */
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Título principal estilizado */
        h1 {
            text-align: center;
            font-size: 36px;
            color: #80c3f3; /* Azul escuro */
            font-style: italic; /* Cursivo */
            margin-bottom: 20px;
        }

        /* Estilo do menu */
        nav {
            display: flex;
            justify-content: center;
            padding: 15px;
        }

        nav button {
            background-color: #80c3f3;
            color: black; /* Nomes dos botões em preto */
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin: 0 10px;
            border-radius: 25px;
            transition: background-color 0.3s, transform 0.2s;
            display: flex;
            align-items: center;
        }

        nav button:hover {
            background-color: #0a93f5;
            transform: scale(1.05);
        }

        /* Estilo para as divs principais */
        .divgrande {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px 0;
        }

        .div1 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 45%;
            margin: 10px;
            background: #80c3f3;
            color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .div1:hover {
            transform: translateY(-5px);
        }

        /* Estilo dos subtítulos */
        h2 {
            color: #0a93f5; /* Cor azul para o título "Potencial Elétrico" */
            font-style: italic;
            font-size: 24px;
        }

        /* Estilo do botão de cálculo */
        .chavoso-button {
            background-color: #ff4081;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            margin-top: 20px;
        }

        .chavoso-button:hover {
            background-color: #0a93f5;
            transform: scale(1.05);
        }

        .chavoso-button:active {
            transform: scale(0.95);
        }

        /* Estilo dos botões de navegação */
        .voltar, .restaurar {
            background-color: #0a93f5;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            margin: 20px auto;
            display: inline-block;
        }

        .voltar:hover, .restaurar:hover {
            background-color: #005bb5;
            transform: scale(1.05);
        }

        .voltar:active, .restaurar:active {
            transform: scale(0.95);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .div1 {
                width: 90%;
            }

            .divgrande {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<header>
    <nav>
        <button onclick="document.location='campoeletrico.php'">Campo Elétrico</button>
        <button onclick="document.location='potencial.php'">Potencial Elétrico</button>
    </nav>
</header>

<main>
    <!-- Título principal -->
    <h1>Calculadora de Força Elétrica</h1>

    <!-- Seções de conteúdo -->
    <div class="divgrande">
        <div class="div1">
            <h2>Potencial Elétrico</h2>
            <p>Potencial elétrico é o mecanismo responsável por mover uma carga elétrica entre dois pontos diferentes situados no campo elétrico. A unidade de medida é o joule por coulomb (J/C), também conhecido como volts (V).</p>
        </div>
        <div class="div1">
            <h2>Valores de Potencial</h2>
            <p>Em torno de um corpo com carga elétrica, existem diversos valores de potencial elétrico, que mudam de acordo com a distância em relação a essa carga. O potencial elétrico é zero quando a distância é infinitamente grande.</p>
            <p><strong>Recapitulando:</strong><br>
            - Lugares com concentração de carga positiva têm potencial positivo (+).<br>
            - Cargas negativas (-) têm potencial negativo.<br>
            - As cargas se movem devido à diferença de potenciais.<br>
            - O choque ocorre quando há diferença de potencial.</p>
        </div>
    </div>

    <!-- Seção de cálculo do campo elétrico -->
    <div style="text-align: center;">
        <h1>Cálculo do Campo Elétrico</h1><br>
        <img id="imagem" src="campoe2.png" alt="Campo Elétrico" style="width: 300px; height: 200px;">
        
        <form action="campoeletrico.php" method="POST" style="margin: 20px;">
            <label>
                <p>Constante (k)</p>
                <input type="number" name="k" required>
            </label>

            <label>
                <p>Q</p>
                <input type="number" name="q" required>
            </label>

            <label>
                <p>Distância (d)</p>
                <input type="number" name="d" required>
            </label><br>
            <input type="submit" value="Calcular Campo" class="chavoso-button">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $k = $_POST['k'];
        $q = $_POST['q'];
        $d = $_POST['d'];

        if ($d != 0) {
            $f = $k * $q / ($d * $d);
            echo "<h2 style='text-align:center;'>Campo Elétrico: $f N/C</h2>";
        } else {
            echo "<h2 style='text-align:center; color:red;'>Erro: A distância não pode ser zero.</h2>";
        }
    }
    ?>
</main>

<div style="text-align: center;">
    <button type="button" onclick="novovalor()" class="restaurar">Restaurar</button>
    <button type="button" onclick="document.location='index.html'" class="voltar">Voltar para a Página Principal</button>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Campo Elétrico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef4f7;
            margin: 0;
            padding-top: 80px; /* Espaço para o menu fixo */
        }

        /* Título principal estilizado */
        h1 {
            text-align: center;
            font-size: 36px;
            color: #0a93f5; /* Azul escuro */
            margin-bottom: 20px;
        }

        /* Menu fixo e estilizado */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #80c3f3;
            z-index: 1000;
            box-shadow: 0 2px 10px rgb(0, 0, 0, 0.2);
        }

        nav {
            display: flex;
            justify-content: center;
            padding: 15px;
        }

        nav button {
            background-color: #80c3f3;
            color: rgb;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
            border-radius: 25px;
            margin: 0 10px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav button:hover {
            background-color: #0a93f5;
            transform: scale(1.00);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Conteúdo principal com explicações e fotos */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px auto;
            max-width: 1200px;
            padding: 20px;
        }

        .div1 {
            background-color: #80c3f3;
            color: white;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            width: 45%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: justify;
            min-height: 300px;
            transition: transform 0.3s;
        }

        .div1:hover {
            transform: translateY(-5px);
        }

        /* Estilo dos subtítulos */
        h2 {
            color: #0a93f5; /* Azul escuro */
            font-style: italic; /* Cursivo */
            text-align: center;
            font-size: 24px;
        }

        /* Estilo do formulário */
        .form-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label p {
            font-size: 18px;
            margin: 10px 0;
        }

        input[type="number"] {
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            width: 100%;
            max-width: 300px;
            font-size: 16px;
        }

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
            background-color: #ff1c6d;
            transform: scale(1.05);
        }

        .chavoso-button:active {
            transform: scale(0.95);
        }

        img {
            display: block;
            margin: 10px auto;
            width: 100%;
            max-width: 350px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Botão voltar estilizado */
        .voltar {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            margin: 20px auto;
            display: block;
            width: fit-content;
        }

        .voltar:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .voltar:active {
            transform: scale(0.95);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .div1 {
                width: 90%;
            }

            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<!-- Menu fixo -->
<header>
    <nav>
        <button onclick="document.location='campoeletrico.php'">Campo Elétrico</button>
        <button onclick="document.location='potencial.php'">Potencial Elétrico</button>
    </nav>
</header>

<!-- Título da página -->
<h1>Campo Elétrico</h1>

<!-- Conteúdo principal -->
<div class="container">
    <div class="div1">
        <h2>O que é o Campo Elétrico?</h2>
        <p>Pouco se fala sobre o campo elétrico, mas ele faz parte das nossas vidas e é essencial para o funcionamento de diversos equipamentos, como sensores, impressoras a jato de tinta, e dispositivos eletrônicos. O campo elétrico é uma área ao redor de uma carga elétrica onde uma força pode atuar em outras cargas, empurrando-as ou atraindo-as.</p>
        <img src="campoeletrico.jpeg" alt="Exemplo de campo elétrico">
    </div>

    <div class="div1">
        <h2>Direção do Campo Elétrico</h2>
        <p>O campo elétrico tem uma direção bem definida, que determina se as cargas serão atraídas ou repelidas. As cargas positivas apontam para fora do campo, sendo repelidas, enquanto as cargas negativas apontam para dentro, sendo atraídas.</p>
        <img src="direcaocampo.jpg.jpeg" alt="Direção do campo elétrico">
    </div>

    <div class="div1">
        <h2>Definição Técnica</h2>
        <p>O campo elétrico (E) é definido como a força (F) que uma carga de teste (q) experimenta por unidade de carga. Sua intensidade depende da distância entre as cargas e da magnitude das cargas envolvidas.</p>
        <img src="definicao.jpg.jpeg" alt="Diagrama de campo elétrico">
    </div>

    <div class="div1">
        <h2>Aplicações Práticas</h2>
        <p>O campo elétrico é usado em uma ampla gama de aplicações práticas, desde equipamentos médicos até telecomunicações, sensores e motores elétricos. Ele é parte fundamental das tecnologias que utilizamos diariamente.</p>
        <img src="aplicacao.jpg.jpeg" alt="Aplicações do campo elétrico">
    </div>
</div>

<!-- Formulário de cálculo -->
<div class="form-container">
    <h1>Cálculo do Campo Elétrico</h1>
    <img src="campoe2.png" alt="Fórmula do Campo Elétrico">
    <form action="campoeletrico.php" method="POST">
        <label>
            <p>Constante (k)</p>
            <input type="number" name="k" required>
        </label>

        <label>
            <p>Carga (Q)</p>
            <input type="number" name="q" required>
        </label>

        <label>
            <p>Distância (d)</p>
            <input type="number" name="d" required>
        </label>
        <br><br>
        <input type="submit" value="Calcular Campo" class="chavoso-button">
    </form>
</div>

<!-- Botão voltar para a página principal -->
<button class="voltar" onclick="document.location='capa.html'">Voltar para a Página Principal</button>

<!-- PHP para calcular o campo elétrico -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $k = $_POST['k'];
    $q = $_POST['q'];
    $d = $_POST['d'];

    if ($d != 0) {
        $campoEletrico = $k * $q / ($d * $d);
        echo "<h2 style='text-align: center;'>Campo Elétrico: $campoEletrico N/C</h2>";
    } else {
        echo "<h2 style='text-align: center;'>Erro: A distância não pode ser zero.</h2>";
    }
}
?>

</body>
</html>

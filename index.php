<?php
// index.php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nosso Cantinho</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        @keyframes trocaFundo {
        0%   { background-color: #F5E6C8; } /* Bege */
        33%  { background-color: #7DA2FF; } /* Azul */
        66%  { background-color: #FF9ACD; } /* Rosa */
        100% { background-color: #A7E8A0; } /* Verde */
    }

    body {
        animation: trocaFundo 10s infinite alternate;
        transition: background-color 1s ease-in-out;
    }

        /* Estilos extras apenas para esta página */
        .navbar {
            background: #A7E8A0; /* verde */
            border-bottom: 2px solid #7DA2FF; /* azul */
            padding: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .navbar a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #7DA2FF;
            padding: 5px 10px;
            background: #FF9ACD; /* rosa */
        }

        .navbar a:hover {
            background: #7DA2FF;
            color: #fff;
        }

        .center-message {
            text-align: center;
            margin-top: 100px;
            font-size: 26px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <a href="frontend/pages/public/login.php">Login</a>
    </div>

    <!-- MENSAGEM CENTRAL -->
    <div class="center-message">
        Bem vindo ao nosso cantinho ♥
    </div>

</body>
</html>

<?php
// login.php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login — Nosso Cantinho</title>
    <link rel="stylesheet" href="../../css/main.css">
    <style>
        .login-box {
            width: 300px;
            margin: 120px auto;
            padding: 20px;
            background: #FF9ACD; /* Rosa */
            border: 2px solid #7DA2FF; /* Azul */
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        .login-box input {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
            border: 2px solid #7DA2FF;
        }

        .login-box button {
            width: 100%;
            padding: 7px;
            font-weight: bold;
            border: 2px solid #7DA2FF;
            background: #A7E8A0; /* Verde */
            cursor: pointer;
        }

        .login-box button:hover {
            background: #7DA2FF;
            color: #fff;
        }

        .erro {
            margin-top: 10px;
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Login</h2>

        <form method="POST" action="../../../backend/src/read_login.php">
            <label>Usuário:</label>
            <input type="text" name="username" required>

            <label>Senha:</label>
            <input type="password" name="senha" required>

            <button type="submit">Entrar</button>
        </form>

        <!-- ERRO vindo por GET -->
        <?php if (isset($_GET['erro']) && $_GET['erro'] == 1): ?>
            <div class="erro">Usuário ou senha incorretos</div>
        <?php endif; ?>
    </div>

</body>
</html>

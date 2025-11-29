<?php
// criar_hashes.php

$senhas = [
    "joao"    => "1234",
    "stefany" => "abcd"
];

foreach ($senhas as $usuario => $senha) {
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    echo "Usuário: $usuario<br>";
    echo "Senha original: $senha<br>";
    echo "Hash gerado: $hash<br><br>";
}
?>

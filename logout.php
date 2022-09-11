<?php
session_start();
//limpar todas as variáveis de sessão
$_SESSION = array();
//excluir o session_id do Cookie no navegador
setcookie(session_name(), '', time() - 3600, '/');
//destruir a sessão atual
session_destroy();
//redirecionar para a página de login
header("Location: index.php");
exit;
?>

<?php
setcookie("usuario", "", time()-3600);
setcookie("senha", "", time()-3600);
unset($_COOKIE["usuario"]);
unset($_COOKIE["senha"]);

//redirecionar para a página de login
header("Location: index.php");
exit;
?>

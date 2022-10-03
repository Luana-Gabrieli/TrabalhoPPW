<?php
setcookie("usuario", "", time()-3600);
setcookie("senha", "", time()-3600);
unset($_COOKIE["usuario"]);
unset($_COOKIE["senha"]);

header("Location: index.html");
exit;

?>

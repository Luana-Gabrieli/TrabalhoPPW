<?php
    if(!isset($_COOKIE["usuario"]) || !isset($_COOKIE["senha"])){
    echo "<p>Conteúdo não disponível.</p>";
    echo "<a href=\"index.php\">Voltar</a>";
    exit;
    }
?>

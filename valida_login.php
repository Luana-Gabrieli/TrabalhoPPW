<?php 
include("conexao.php");

$login = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuario WHERE usuario='$login' AND senha='$senha'";

$result = $con->query($sql);

$total_de_usuarios = $result->num_rows;

    if($total_de_usuarios == 1){
        $dados = $result->fetch_assoc();
        setcookie("usuario", $dados["usuario"]);
        setcookie("senha", $dados["senha"]);

        header("Location: pagina1.php");
        exit;
        }
        else{
        echo "<p>Usuário não encontrado</p>";
        echo "<a href=\"index.php\">Voltar</a>";
    }
?>
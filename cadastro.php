<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilizacao.css">

    <script src="jquery-3.6.0.min.js"></script>
 
    <script>
        $(document).ready(function(){
            $("#cep").blur(function(){
                $.post("buscarCEP.php","cep="+$("#cep").val(), function(data){
                    if(data !=""){
                        var obj = jQuery.parseJSON(data);
                        $("#cidade").val(obj.localidade);
                        $("#bairro").val(obj.bairro);
                        $("#estado").val(obj.uf);
                    }
                });
            });
        })

    </script>

    
    <title>Cadastro</title>
</head>
<body>
    <div class="login-page">
        <div class="form">
        <h1> Cadastro </h1>
 
        <form action="insere.php" method="post">
            <label for="nome">Nome completo:</label>
            <input type="text" id="nome" name="nome"/><br/></br>

            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario"/><br/></br>

            <label for="cep">CEP: </label>
            <input type="text" name="cep" id="cep"/><br/></br>
 
            <label for="bairro">Bairro: </label>
            <input type="text" name="bairro" id="bairro"/><br/></br>
 
            <label for="cidade">Cidade: </label>
            <input type="text" name="cidade" id="cidade"/><br/></br>
    
            <label for="estado">Estado: </label>
            <input type="text" name="estado" id="estado"/><br/></br>

            <label for="dtnasc">Data de Nascimento: </label>
            <input type="date" id="dtnasc" name="dtnasc"/><br/></br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"/></br></br>

            <label for="senha"> Senha:</label>
            <input type="password" id="senha" name="senha"/></br></br>
         
 
            <button type="submit">Cadastrar</button>
        </form>
        </div>
    </div>
</body>
</html>

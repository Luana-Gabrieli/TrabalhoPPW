<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Meu site</title>
<style type="text/css">
body{
background-color: rgb(108, 191, 85);
}
#centro{width: 300px;
background-color: blue;
margin:0 auto;
}

#interno{
padding: 1em;
position: absolute;
top: 50%;
left: 50%;
margin-right:-50%;
transform: translate(-50%,-50%);
background-color: white;
width: 300px;
box-shadow: 1px 1px;
}

input[type=text], input[type=password]{display: block; padding: 10px; width: 85%; margin: 15px 10px; }
input[type=submit] {display: block; padding: 10px; width: 100%;
background: #ccc; cursor: pointer; border-radius: 5px; }
</style>
</head>
<body>
    <div id="centro">
        <div id="interno">
            <form method="post" action="valida_login.php">
                <input type="text" name="usuario" id="usuario" placeholder="Usuário" class="campotxt"/>
                <input type="password" name="senha" id="senha" placeholder="Senha" class="campotxt"/>
                <input type="submit" value="Login"/>
            </form>
            <a href="cadastro.php"><input type="submit" value="Cadastro"/></a>
        </div>
        
    </div>
</body>
</html>
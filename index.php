<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
    <link rel="stylesheet" type="text/css" href="integradorastyle.css"> </link>
    <style> #divlogin {border: 0px} 
    body {
        background-image: url('horizonte.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
</head>
<body>
    
    <div id = "divlogin">
    <form name= "login" method="post" action=""> 
        <h3>Insira seu email e senha</h3>
        <div class= "grupoimput">     
        <label class="LabelUsuarioSenha" for="email"> Email </label> 
        <input class="caixaUsuarioSenha" type="text" id="email" name="email" placeholder = "digite seu email" required>
        <br>
    </div>

        <div class= "grupoimput"> 
        <label class="LabelUsuarioSenha" for="senha"> Senha </label>
        <input class="caixaUsuarioSenha" type="password" id="senha" name="senha" placeholder = "digite sua senha" required> 
    </div>
        <br>
        
        <input id="BotaoAcessar" type="submit" name="enviar" value="Acessar"> 
        <br>
        <br>
        <a href= "cadastro.php"> Clique aqui se não possui cadastro </a>
            
    </form>
</div>



</body>
</html>

<?php
require_once "conexaodb.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") { 

$senha = $_POST['senha'];
$email = $_POST['email'];

$consultasql ="SELECT * FROM clientes WHERE email = '$email' and senha = '$senha';";
$sql_query = $conexao->query($consultasql) or die ("Falha na consulta sql:" . $conexao->error);

$quantidade_linhas = $sql_query->num_rows;

if($quantidade_linhas == 1){
    
    $usuario = $sql_query->fetch_assoc();

    if(!isset($_SESSION)){
        session_start();
    }
    $_SESSION['id_clientes'] = $usuario['id_clientes'];
    $_SESSION['nome'] = $usuario['nome'];

    header("Location: portal.php");

} else {
    echo "<script language='javascript'> alert('Usuário ou senha incorretos.'); </script>";
}

 }


?>

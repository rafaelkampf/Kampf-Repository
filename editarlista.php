<?php
require_once "conexaodb.php";

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == "POST") { 
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
   
    $consultasql ="UPDATE clientes SET nome = '$nome', email = '$email', senha='$senha' WHERE id_clientes = '$id';";
    

 if($conexao->query($consultasql) === true){
     echo ("alterado com sucesso");
     
     }  
    else { 
        echo ("erro ao alterar" . $conexao ->error); 

    }
} 

$consultasql = "SELECT * FROM clientes WHERE id_clientes = '$id'; ";
$resultado = $conexao->query($consultasql);

if($resultado->num_rows > 0){
    $linha = $resultado->fetch_assoc();
    $nome = $linha['nome'];
    $senha = $linha['senha'];
    $email = $linha['email'];
   

} else {
    echo "registro não localizado";
}

?>




<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integradora cadastro</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css"> </link>
</head>
<body>
<div id = "divlogin">
    <form name= "login" method="post" action=" <?php echo $_SERVER['PHP_SELF'] . "?id=" . $id; ?>"> 

        <h3>edite seus dados</h3>
        <div class= "grupoimput"> 
        <label class="LabelUsuarioSenha" for="nome"> Nome </label>
        <input class="caixaUsuarioSenha" type="text" id="nome" name="nome" value= "<?php echo $nome; ?>" placeholder = "digite sua senha" required> 
    </div>

        <div class= "grupoimput">     
        <label class="LabelUsuarioSenha" for="email"> Email </label> 
        <input class="caixaUsuarioSenha" type="text" id="email" name="email" value= "<?php echo $email; ?>" placeholder = "digite seu email" required>
        <br>
    </div>

        <div class= "grupoimput"> 
        <label class="LabelUsuarioSenha" for="senha"> Senha </label>
        <input class="caixaUsuarioSenha" type="password" id="senha" name="senha" value= "<?php echo $senha; ?>" placeholder = "digite sua senha" required> 
    </div>
        <br>
        
        <a href= "index.php"> Já é cadastrado? Faça seu login aqui </a>
        
        <input id="BotaoAcessar" type="submit" name="enviar" value="salvar"> 
        
            
    </form>
</div>

</body>
</html>

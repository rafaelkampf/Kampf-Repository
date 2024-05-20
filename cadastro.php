
<?php 
require_once "conexaodb.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") { 
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $consultasql ="INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha');";
    $checaSeTemMaisDeUm_sql =  "SELECT * FROM clientes WHERE email = '$email';";
    
    $queryChecadora = $conexao->query($checaSeTemMaisDeUm_sql) or die ("Falha na consulta sql:" . $conexao->error);
    $listaCheck = $queryChecadora->fetch_assoc();
    
    if(strlen($_POST['senha']) < 9 || is_numeric(filter_var($_POST['senha'], FILTER_SANITIZE_NUMBER_INT)) == false) {
        echo "<script language='javascript'> alert('Sua senha precisa conter ao menos um número e 8 caracteres.'); </script>";
    }   
    else if (str_contains($_POST['email'], '@' ) == false || str_contains($_POST['email'], '.com' ) == false) {
        echo "<script language='javascript'> alert('Seu email precisa estar dentro dos padrões.'); </script>";
    }

 else { 
            if($listaCheck >= 1){
                echo "<script language='javascript'> alert('Cadastro já existente.'); </script>";

            } else{ 
                $consultasql ="INSERT INTO clientes (nome, email, senha) VALUES ('$nome', '$email', '$senha');";


        if($conexao->query($consultasql) === true){
            echo "<script language='javascript'> alert('Cadastrado com sucesso.'); </script>";

     
         }  
        else {
            echo "<script language='javascript'> alert('erro ao cadastrar.'); </script>";

             } 
         }
    } 
}   

?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="cadastro.css"> </link>
</head>
<body>
<div id = "divlogin">
    <form name= "login" method="post" action=""> 

        <h3>Insira seus dados</h3>
        <div class= "grupoimput"> 
        <label class="LabelUsuarioSenha" for="nome"> Nome </label>
        <input class="caixaUsuarioSenha" type="text" id="nome" name="nome" placeholder = "digite sua senha" required> 
    </div>

        <div class= "grupoimput">     
        <label class="LabelUsuarioSenha" for="email"> Email </label> 
        <input class="caixaUsuarioSenha" type="email" id="email" name="email" placeholder = "digite seu email  exemplo:******@***mail.com" required>
        <br>
    </div>

        <div class= "grupoimput"> 
        <label class="LabelUsuarioSenha" for="senha"> Senha </label>
        <input class="caixaUsuarioSenha" type="password" id="senha" name="senha" placeholder = "digite sua senha" required> 
    </div>
        <br>
        
        <a href= "index.php"> Já é cadastrado? Faça seu login aqui </a>
        
        <input id="BotaoAcessar" type="submit" name="enviar" value="Cadastrar"> 
        
            
    </form>
</div>

</body>
</html>

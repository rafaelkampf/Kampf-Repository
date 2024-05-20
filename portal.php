<?php 

require_once "protecao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <style>
        body, div {
    font-family: arial, sans-serif;
    margin: 100;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    
 }
 h2, { 
    text-align: center;
    color:  #2e0f0af3;  
 }
 a{
    text-align: left;
 }
</style>
</head>
<body>
    <div> 
    <br>
     <h2> Bem vindo, <?php echo $_SESSION['nome'] . "!"; ?> <h2> 
<br>
<br>
    <a href ="logout.php"> sair </a>
</div>
</body>
</html>

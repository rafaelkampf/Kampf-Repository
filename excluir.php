<?php
require_once "conexaodb.php";

$id = $_GET['id'];

$consultasql = "DELETE FROM clientes WHERE id_clientes = '$id';";
$conexao->query($consultasql);

header("location: lista.php");
/*if($conexao->query($consultasql) === true){
    header(" Location: lista.php");
    
    }  
   else { 
       echo ("erro ao alterar" . $conexao ->error); 

   }
*/


?>

<?php 
print_r();  
print_r($_POST); 
print_r($_GET); 

$meuarray = ["um", "dois"];
$meuarray[] = "tres"; // recebe um valor na posição 2 "tres"
$meuarray[5]= "algo"; //recebe esse valor na posição indicada, mesmo não possuindo uma anterior
$meuarray = [1 => "um"]; //chamei a posição 0 de 1, posso usar texto
$meuarray['1']; //chamei o meuarray na posição que eu dei o nome de 1 ou então como é numeral recebeu a posição 1 que antes era 0.

require "" /* adiciona um código de outro arquivo e se não funcionar trava tudo */ require_once "" // mesma coisa só que faz uma vez só
include "" /*  '' se não funcionar continua seguindo (mesma coisa com o */_once

isset(); // se existe
strlen(); // string length
real_escape_string(); // apaga caracteres especiais da variavel (pesquias pra saber melhor)
mysqli_fetch_assoc();// Obtém uma linha de dados do conjunto de resultados e retorna-o como um array associativo. Cada chamada subsequente desta função retornará a linha seguinte do conjunto de resultados, ou null se não houver mais linhas.
mysqli_num_rows(); // recebe o numero de linhas do banco

filter_var() 
is_numeric()



?>
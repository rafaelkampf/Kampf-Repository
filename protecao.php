<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id_clientes'])){
    die("Você não está em nenhuma conta. <br><a href= 'index.php'> Página de login </a>");

}


?>

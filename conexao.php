<?php
$servername = "localhost";
$username = "root";      
$password = "";    
$dbname = "tcc"; 


if ($conexao = new mysqli($servername, $username, $password, $dbname)) {
    echo " sucesso";
}
else
{
    echo"deu errado";
}
?>
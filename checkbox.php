<?php 
include "conexao.php" ;

function  checkbox($a){
    if (isset($_POST[$a]))
{
      $turno = $_POST["$a"];
      return $turno;
}
else{
     $turno = "";
     return $turno;
}

}

$professor=checkbox('nomeProfessor');
$manha =checkbox('turnomanha');
$tarde =checkbox('turnotarde');
$noite =checkbox('turnonoite');
 
$turnos = implode(',', [$manha, $tarde, $noite]);
$ds =checkbox('ds');
$mc =checkbox('mc');
$au =checkbox('au');
$materias= implode(',',[$ds, $mc, $au]);

$sql = "INSERT INTO `tcc-ds`(`nome`, `turno`, `materia`) VALUES ('$professor','$turnos','$materias')";

echo $sql;

if (mysqli_query($conexao,$sql)){
   echo "$professor foi cadastrado com sucesso";
}
else{
    echo "$professor ocorreu um erro no cadastro tente novamente mais tarde";
}

?>
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
$nome=checkbox('materia');
$ch =checkbox('cargahoraria');
$mesinicio =checkbox('mesinicio');
$mesfim =checkbox('mesfim');
$prio =checkbox('prioridade');
$sql = "INSERT INTO `materias`( `nome`, `carga_H_total`, `mesinicial`, `mesfinal`, `prioridade`) VALUES ('$nome','$ch','$mesinicio','$mesfim','$prio')";
echo $sql;

if (mysqli_query($conexao,$sql)){
   echo "$nome essa materia foi cadastrada com sucesso";
}
else{
    echo "$nome ocorreu um erro no cadastro tente novamente mais tarde";
}

?>
?>
<?php

$professor=$_POST['Nomedareceita'];
$materia=$_POST['Ingredientes'];
$aula=$_POST['Modo de preparo'];
$nota=$_POST['Tempo'];
$nota=$_POST['Rendimento'];

$data = array("return" =>"Cadastro da receita  de    ".$Nomedareceita.         "    foi cadastrada com sucesso    ");
echo json_encode($data);
?>
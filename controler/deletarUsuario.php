<?php
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarUsuario($conn,$idusu)){
  echo("Usuario excluido com sucesso.");
}else{
  echo("Usuário não Excluido.");
}

include_once("../view/footer.php");
?>

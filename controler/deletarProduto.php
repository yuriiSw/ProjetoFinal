<?php
include_once("../model/conexao.php");
include_once("../model/produtoModel.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deletarProduto($conn,$codigoproduto)){
  echo("Produto excluido com sucesso.");
}else{
  echo("Produto não Excluido.");
}

include_once("../view/footer.php");
?>

<?php
include_once("../model/conexao.php");
include_once("../model/produtoModel.php");
include_once("../view/header.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(alterarProduto($conn,$idproduto,$nomeproduto,$valorproduto,$generoproduto,$qtdproduto,$marcaproduto,$categoriaproduto)){
  echo("Dados Produto alterados com sucesso.");
}else{
  echo("Dados Produto não alterados");
}

include_once("../view/footer.php");

?>

<?php
include_once("../model/conexao.php");
include_once("../model/produtoModel.php");


$nome = $_POST["produtoUsu"];

if(visuProdutoNome($conn, $nomeproduto)){
  header("Location:../view/visuProdutoNome.php");
}else{
  header("Location:../view/visuProdutoNome.php");
}

?>

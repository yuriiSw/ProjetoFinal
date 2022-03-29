<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/produtoModel.php");


extract($_REQUEST,EXTR_OVERWRITE);


if(inserirProdutos($conn,$nomeproduto,$valorproduto,$generoproduto,$qtdproduto,$marcaproduto,$categoriaproduto)){
	echo("O Produto foi cadastrado com sucesso !!!");
}else{
	echo("O Produto está incompleto, tente novamente !!!");

}

include_once("../view/footer.php");
?>

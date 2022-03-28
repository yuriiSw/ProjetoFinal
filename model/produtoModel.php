<?php

function inserirProdutos($conn,$nomeproduto,$valorproduto,$generoproduto,$qtdproduto,$marcaproduto,$categoriaproduto) {



  $query = "INSERT INTO `tbprodutos` (`idproduto`, `nomeproduto`, `valorproduto`, `generoproduto`, `qtdproduto`, `marcaproduto`, `categoriaproduto`) VALUES (NULL,'{$nomeproduto}','{$valorproduto}','{$generoproduto}','{$qtdproduto}','{$marcaproduto}','{$categoriaproduto}')";


  $dados = mysqli_query($conn,$query);
  return $dados;

};

function visuProdutoNome($conn,$nomeproduto){
  $query = "select * from tbprodutos where nomeproduto like '%{$nomeproduto}%'";
  $resultado = mysqli_query($conn, $query);
  return $resultado;

};

function visuProdutoGenero($conn, $generoproduto){
  $query = "select * from tbprodutos where generoproduto like '%{$generoproduto}%'";
  $resultado = mysqli_query($conn, $query);
  return $resultado;
};

function visuProdutoCodigo($conn, $codigoproduto){
  $query = "select * from tbprodutos where idproduto = '{$codigoproduto}'";
  $resultado = mysqli_query($conn, $query);
  $resultado = mysqli_fetch_array($resultado);
  return $resultado;
};

function visuProdutoMarca($conn, $marcaproduto){
  $query = "select * from tbprodutos where marcaproduto = '{$marcaproduto}'";
  $resultado = mysqli_query($conn, $query);
  return $resultado;
};

function visuProdutoCategoria($conn, $categoriaproduto){
  $query = "select * from tbprodutos where categoriaproduto = '{$categoriaproduto}'";
  $resultado = mysqli_query($conn, $query);
  return $resultado;
};

function alterarProduto($conn,$codigoproduto,$nomeproduto,$valorproduto,$generoproduto,$qtdproduto,$categoriaproduto,$marcaproduto){
    $query = "update tbprodutos set nomeproduto='{$nomeproduto}', valorproduto='{$valorproduto}', generoproduto='{$generoproduto}', qtdproduto='{$qtdproduto}', categoriaproduto='{$categoriaproduto}', marcaproduto='{$marcaproduto}' where idproduto = '{$codigoproduto}'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
};

function deletarProduto($conn, $codigoproduto){
    $query = "delete from tbprodutos where idproduto='{$codigoproduto}'";
    $resultado = mysqli_query($conn,$query);
    return $resultado;
};

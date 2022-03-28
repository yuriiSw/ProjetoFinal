<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/produtoModel.php");

extract($_REQUEST,EXTR_OVERWRITE);

$informa = visuProdutoCodigo($conn,$idproduto);

?>

<div class="container">

    <form class="row g-3" action="../controler/alterarProduto.php" method="post">
        <input type="hidden" name="idproduto" value="<?= $informa["idproduto"] ?>">
        <div class="col-md-6">
      <label for="inputProduto" class="form-label">Nome do Produto</label>
      <input type="text" name="nomeproduto" value="<?=$informa["nomeproduto"]?>" class="form-control" id="inputProduto">
    </div>
    <div class="col-md-6">
      <label for="inputValor" class="form-label">Valor</label>
      <input type="number" name="valorproduto" value="<?=$informa["valorproduto"]?>"class="form-control" id="inputValor">
    </div>
    <div class="col-4">
      <label for="inputGenero" class="form-label">Gênero do Produto</label>
      <input type="text" name="generoproduto" value="<?=$informa["generoproduto"]?>" class="form-control" id="inputGenero">
    </div>
    <div class="col-4">
      <label for="inputQtd" class="form-label">Quantidade do Produto</label>
      <input type="number" name="qtdproduto" value="<?=$informa["qtdproduto"]?>" class="form-control" id="inputQtd" placeholder="000">
    </div>
    <div class="col-4">
      <label for="inputCategoria" class="form-label">Categoria Produto</label>
      <input type="text" name="categoriaproduto" value="<?=$informa["categoriaproduto"]?>" class="form-control" id="inputData" placeholder="celular, geladeira, air-fryer">
    </div>
    <div class="col-4">
      <label for="inputMarca" class="form-label">Marca do Produto</label>
      <input type="text" name="marcaproduto" value="<?=$informa["marcaproduto"]?>" class="form-control" id="inputMarca" placeholder="Samsung,LG,Brastemp,Eletrolux,Mondial">
    </div>
    <div class="col-md-6">
    <label for="inputGenero" class="form-label">Tipo do Produto</label>
    <select id="inputGenero" name="generoproduto"  class="form-select">
    <option selected value="<?= $informa["generoproduto"] ?>"> <?= $informa["generoproduto"] ?> </option>
        <option value="Eletrodómestico">Eletrodómestico</option>
        <option value="Eletroeletronico">Eletroeletronico</option>
        <option value="Tv's">Tv's</option>
        <option value="Brinquedo">Brinquedo</option>
        <option value="Livros">Livros</option>
        <option value="Outro">Outro</option>
    </select>

</div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Aceitar os termo de uso do sistemas de produtos!
        </label>
      </div>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>
  </form>

</div>

</div>

<?php
include_once("footer.php");
 ?>

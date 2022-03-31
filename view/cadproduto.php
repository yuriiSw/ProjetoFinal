<?php
include_once("header.php");
include_once("../model/usuarioModel.php");
usarAcesso();
?>

<div class="container">
<br>
    <br> <br>
  <form class="row g-3" action="../controler/inserirCadastroProduto.php" method="Get">
    <div class="col-md-5">
      <label for="inputProduto" class="form-label">Nome do Produto</label>
      <input type="text" name="nomeproduto" class="form-control" id="inputProduto" placeholder="Insira o Nome do Produto" required>
    </div>
    <div class="col-md-5">
      <label for="inputValor" class="form-label">Valor do Produto</label>
      <input type="text" name="valorproduto" class="form-control" id="inputValor" placeholder="$..." required>
    </div>
    
    <div class="col-5">
      <label for="inputQuantidade" class="form-label">Quantidade de Produtos</label>
      <input type="text" name="qtdproduto" class="form-control" id="inputQuantidade" placeholder="Quantidade do Produto" required>
    </div>
    <div class="col-5">
      <label for="inputMarca" class="form-label">Marca do Produto</label>
      <input type="text" name="marcaproduto" class="form-control" id="inputMarca" placeholder="Insira a Marca do Produto" required>
    </div>
    <div class="col-5">
      <label for="inputCategoria" class="form-label">Categoria do Produto</label>
      <input type="text" name="categoriaproduto" class="form-control" id="inputCategoria" placeholder="Insira a Categoria do Produto" required>
    </div>
    <div class="col-md-5">
    <label for="inputTipo" class="form-label">Tipo do Produto</label>
    <select id="inputTipo" name="Tipoproduto"  class="form-select">
        <option >Escolha um Tipo....</option>
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
          Aceita-se os termo de uso do sistema de produtos
        </label>
      </div>
    </div>
    <div class="col-10">
      <button type="submit" class="btn btn-primary">Criar</button>
    </div>
  </form>

</div>

<?php
include_once("footer.php");
?>
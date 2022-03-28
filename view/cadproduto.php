<?php
include_once("header.php");
?>

<div class="container">

  <form class="row g-3" action="../controler/inserirCadastroProduto.php" method="Get">
    <div class="col-md-6">
      <label for="inputProduto" class="form-label">Nome do Produto</label>
      <input type="text" name="nomeproduto" class="form-control" id="inputProduto" placeholder="Insira o Nome do Produto" required>
    </div>
    <div class="col-md-6">
      <label for="inputValor" class="form-label">Valor do Produto</label>
      <input type="text" name="valorproduto" class="form-control" id="inputValor" placeholder="$..." required>
    </div>
    <div class="col-6">
      <label for="inputGenero" class="form-label">Genero do Produto</label>
      <input type="text" name="generoproduto" class="form-control" id="inputGenero" placeholder="Insira o Gênero do Produto" required>
    </div>
    <div class="col-6">
      <label for="inputQuantidade" class="form-label">Quantidade de Produtos</label>
      <input type="number" name="qtdjproduto" class="form-control" id="inpuQuantidade" placeholder="Quantidade do Produto" required>
    </div>
    <div class="col-6">
      <label for="inputMarca" class="form-label">Marca do Produto</label>
      <input type="text" name="marcaproduto" class="form-control" id="inputMarca" placeholder="Insira a Marca do Produto" required>
    </div>
    <div class="col-md-6">
      <label for="inputCategoria" class="form-label">Categoria do Produto</label>
      <input type="text" name="categoriadoproduto" class="form-control" id="inputdata" placeholder="Insira a Categoria do Produto" required>
    </div>

    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Aceita-se os termo de uso do sistema de produtos
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Criar</button>
    </div>
  </form>

</div>

<?php
include_once("footer.php");
?>

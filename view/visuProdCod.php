<?php

include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/produtoModel.php");
?>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<div class="container mt-5">
  <form action="#" method="Post" class="row row-cols-auto   justify-content-lg-center g-3 align-items-center">
    <div class="col-8">
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Codigo do Produto</label>
      <div class="input-group">
        <div class="input-group-text">Código</div>
        <input type="text" name="codigoProduto" class="form-control" id="inlineFormInputGroupUsername" placeholder="Codigo do Produto">
      </div>
    </div>
    <div class="limites">
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
  </form>
  <br>
  <br>
  <br>
  <br>
  <table class="limiter">
    <thead>
        <tr class="table100-head">
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Tipo de Produto</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Categoria</th>
        <th scope="col">Marca</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $codigoproduto = isset($_POST["codigoProduto"]) ? $_POST["codigoProduto"] : "";

      if ($codigoproduto) {

        $dado = visuProdutoCodigo($conn, $codigoproduto);

        if ($dado) {

      ?>
          <tr>
            <th scope="row"><?= $dado["idproduto"] ?></th>
            <td><?= $dado["nomeproduto"] ?></td>
            <td><?= $dado["valorproduto"] ?></td>
            <td><?= $dado["generoproduto"] ?></td>
            <td><?= $dado["qtdproduto"] ?></td>
            <td><?= $dado["marcaproduto"] ?></td>
            <td><?= $dado["categoriaproduto"] ?></td>
            <td>
              <form action="../view/alterarformproduto.php" method="post">

                <input type="hidden" value="<?= $dado["idproduto"] ?>" name="idproduto">
                <button type="submit" class="btn btn-primary">Alterar</button>

              </form>
            </td>

            <td>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" codigo="<?= $dado["idproduto"] ?>" nome="<?= $dado["nomeproduto"] ?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
                Excluir
              </button>
            </td>

          </tr>
      <?php
        }
      }
      ?>
    </tbody>
  </table>

</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Excluir Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        .
      </div>
      <div class="modal-footer">
        <form action="../controler/deletarProduto.php" method="get">

          <input type="hidden" value="" class="codigo from-control" name="codigoproduto">
          <button type="submit" class="btn btn-danger">Excluir</button>

        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script>
  var deletarUsuarioModal = document.getElementById('deleteModal');
  deletarUsuarioModal.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget;
    var codigo = button.getAttribute('codigo');
    var nome = button.getAttribute('nome');

    var modalBody = deletarUsuarioModal.querySelector('.modal-body');
    modalBody.textContent = 'Deseja realmente excluir o Produto ' + nome + '?'

    var Codigo = deletarUsuarioModal.querySelector('.modal-footer .codigo');
    Codigo.value = codigo;

  })
</script>

<?php

include_once("../view/footer.php")

?>
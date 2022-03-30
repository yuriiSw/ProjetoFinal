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
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Nome do Produto</label>
      <div class="input-group">
        <div class="input-group-text">Nome</div>
        <input type="text" name="nomeProduto" class="form-control" id="inlineFormInputGroupUsername" placeholder="Nome do Produto">
      </div>
    </div>
    <div class="col-2">
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
  </form>
  <table class="limiter">
    <thead>
      <tr>
        <tr class="table100-head">
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Genero</th>
        <th scope="col">Marca</th>
        <th scope="col">Categoria</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomeproduto = isset($_POST["nomeProduto"]) ? $_POST["nomeProduto"] : "";

      $dado = visuProdutoNome($conn, $nomeproduto);

      foreach ($dado as $nomeProduto) :
      ?>
        <tr>
          <th scope="row"><?= $nomeProduto["idproduto"]; ?></th>
          <td><?= $nomeProduto["nomeproduto"] ?></td>
          <td><?= $nomeProduto["valorproduto"] ?></td>
          <td><?= $nomeProduto["generoproduto"] ?></td>
          <td><?= $nomeProduto["qtdproduto"] ?></td>
          <td><?= $nomeProduto["marcaproduto"] ?></td>
          <td><?= $nomeProduto["categoriaproduto"] ?></td>
          <td>
            <form action="../view/alterarformproduto.php" method="POST">
              <input type="hidden" value="<?= $nomeProduto["idproduto"] ?>" name="idproduto">
              <button type="submit" class="btn btn-primary">Alterar</button>
            </form>

          </td>
          <td>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" codigo="<?= $nomeProduto["idproduto"] ?>" nome="<?= $nomeProduto["nomeproduto"] ?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
              Apagar
            </button>
          </td>
        </tr>
      <?php
      endforeach;
      ?>

    </tbody>
  </table>

</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Excluir de Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../controler/deletarProduto.php" method="Get">
          <input type="hidden" class="codigo form-control" name="idproduto">
          <button type="submit" class="btn btn-danger">Sim</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>

      </div>
    </div>
  </div>
</div>

<script>
  var deletarUsuarioModal = document.getElementById('deleteModal');
  deletarUsuarioModal.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget;
    var codigo = button.getAttribute('codigo');
    var email = button.getAttribute('email');
    var modalBody = deletarUsuarioModal.querySelector('.modal-body');
    modalBody.textContent = 'Gostaria de excluir o Produto ' + nome + '?'

    var Codigo = deletarUsuarioModal.querySelector('.modal-footer .codigo');
    Codigo.value = codigo;
  })
</script>

<?php
include_once("../view/footer.php");
?>
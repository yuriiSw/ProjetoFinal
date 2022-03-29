<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
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
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Código do usuario</label>
      <div class="input-group">
        <div class="input-group-text">Código</div>
        <input type="text" name="codigoUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Código do usuario">
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
        <th scope="col">Codigo</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Fone</th>
        <th scope="col">Alterar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $codigousu = isset ($_POST["codigoUsu"])? $_POST["codigoUsu"]:"" ;

      if($codigousu){

        $dado = visuUsuarioCodigo($conn,$codigousu);

        if($dado){

          ?>
          <tr>
            <th scope="row"><?=$dado["idusu"] ?></th>
            <td><?=$dado["nomeusu"] ?></td>
            <td><?=$dado["emailusu"] ?></td>
            <td><?=$dado["foneusu"] ?></td>
            <td>
              <form action="../view/alterarform.php" method="post">

                <input type="hidden" value="<?=$dado["idusu"] ?>" name="idusu">
                <button type="submit" class="btn btn-primary">Alterar</button>

              </form>

            </td>
            <td>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger" codigo="<?=$dado["idusu"] ?>" email="<?=$dado["emailusu"]?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
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
        <h5 class="modal-title" id="deleteModal">Excluir Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        .
      </div>
      <div class="modal-footer">
        <form action="../controler/deletarUsuario.php" method="get">

          <input type="hidden" value="" class="codigo from-control" name="codigousu">
          <button type="submit" class="btn btn-danger">Excluir</button>

        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script>
var deletarUsuarioModal = document.getElementById('deleteModal');
deletarUsuarioModal.addEventListener('show.bs.modal',function(event){
  var button = event.relatedTarget;
  var codigo = button.getAttribute('codigo');
  var email = button.getAttribute('email');

  var modalBody = deletarUsuarioModal.querySelector('.modal-body');
  modalBody.textContent = 'Deseja realmente excluir o usuario do código ' + codigo + '?'

  var Codigo =  deletarUsuarioModal.querySelector('.modal-footer .codigo');
  Codigo.value = codigo;

})
</script>

<?php

include_once("../view/footer.php")

?>
  <!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


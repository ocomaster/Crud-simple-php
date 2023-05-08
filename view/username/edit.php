<?php 
    require_once("C://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
    //print_r($user)
?>

<form action="update.php" method="post" autocomplete="off">

<div class="mb-3 row">
    <h2>Actualizar ususario</h2>
    <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0] ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $user[1] ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Actualizar Apellido</label>
    <div class="col-sm-10">
      <input type="text" name="apellido" class="form-control" id="inputPassword" value="<?= $user[2] ?>">
    </div>
  </div>
    <div>
        <input type="submit" value="Actualizar" class="btn btn-success">
        <a href="show.php?id=<?= $user[0]?>" class="btn btn-danger">Cancelar</a>
    </div>

</form>



<?php 
require_once("c://xampp/htdocs/proyecto/view/head/footer.php");

?>
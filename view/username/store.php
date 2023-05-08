<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();

    echo $_POST['nombre'];
    $obj->guardar($_POST['nombre']);
    

?>
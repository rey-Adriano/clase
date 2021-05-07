
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
<input type="text" name="descripcion" placeholder="ingrese descripcion">
<input type="submit" name="submit" value="Guardad">
</form>

<?php
include_once "controladores/PaqueteControlador.php"; 
if(isset($_POST["submit"])){
    $descripcion = $_POST["descripcion"]; 
    $paquetecontrolador = new PaqueteControlador(); 
    echo $paquetecontrolador->guardar($descripcion); 
}




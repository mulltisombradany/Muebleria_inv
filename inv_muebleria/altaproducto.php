<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=muebleria', "root", "12345");
        
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

switch($_POST['opc'])
{
 case "altasd":
 try{
          $sql = $conexion->prepare("INSERT INTO tipo_articulo ('id_tipo','tipo','marca','tamano','color','descripcion') VALUES('".$_POST['id_prod']."','".$_POST['tipodeprod']."','".$_POST['marca']."','".$_POST['tamanio']."','".$_POST['color']."','".$_POST['descripcione']."')");       
          $sql->execute();         
          header("location:altasProductos.html");
    }
    catch (PDOException $e)
    {
    print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
    die();
    } 
    break;
}
?>


<?php

$mensa = null;
if(isset($_POST["directorio"])){

$carpeta = htmlspecialchars($_POST["carpeta"]);
$ruta = htmlspecialchars($_POST["ruta"]);
$directorio = $ruta.$carpeta;

if(!is_dir($directorio)){
    
$crear = mkdir($directorio, 0777, true);

if($crear){ $mensa = "Directorio $directorio creado exitosamente";}
else{ $mensa= "ocurrio un error al crear el direcotio";}

}else{  $mensa = "el directorio ya existe" ; }


}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>



<body>


<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>" >


creacion de directorio
<br /><br />
<table>
    <tr>
        <td>directorio/s:</td>
<td><input type="text" name="carpeta" /></td>
</tr>
<td>guardar en:</td>
<td><input type="text" name="ruta" /></td>
</tr> </table>
<input type="submit" name="btn_crearFichero" value="crear" />
<input type="hidden" name="directorio" />

</form>



<br /><strong><?php echo $mensa ?></strong>
<br /><br />
<a  href="../index.html">volver</a>

</body>
</html>
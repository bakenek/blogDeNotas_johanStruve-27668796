
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>



<body>


<form action="borrarsi.php" method="post">
<br /><br />
Archivos disponibles:
<br /><br />
<b><?php	
$directorio = "../txt";
$archivos = scandir($directorio, 1);
for( $i=0; $i<count($archivos) ; ++$i)
{echo $archivos[$i];
  echo "<br />";} ?>
</b>
Escriba el archivo que desee manejar <br /><br />

<input type="text" name="nombreArchivo1" />.txt<br /><br />
<input type="submit" name="btn_leer" value="eliminar" /><br /><br />



</form>




<br /><br />
<a  href="../index.html">volver</a>

</body>
</html>

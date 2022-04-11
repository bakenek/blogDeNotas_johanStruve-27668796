
<?php


$nombre= $_REQUEST['nombreArchivo1'];
$file = "../txt/".$nombre.".txt";
unlink($file);

echo "el archivo se elimino";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<br /><br /><br /><br />
<a  href="../index.html">volver</a>

</body>
</html>

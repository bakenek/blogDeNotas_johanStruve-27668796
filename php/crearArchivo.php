<?php


$asunto= $_REQUEST['asunto'];
$contenido= $_REQUEST['contenido'];

$file= fopen("../txt/".$asunto.'.txt', 'a+') or die ("error al crear el archivo");

fwrite($file,$contenido);

echo "se creo exitosamente";

fclose($file);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<br /><br />
<a  href="../index.html">volver</a>

</body>
</html>

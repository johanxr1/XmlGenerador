<?php
$fecha = date("d/m/Y");
$fechaf = date("d/m/Y",strtotime($fecha."+ 15 days")); 
if (!$fp = fopen("SercantoDATE.xml", "r+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("SercantoDATE.xml"));
$posicion_inicio = strpos($contents, "<date>");
$posicion_final = strpos($contents, "<expiration_date>");
$paso1 = substr($contents, 3838,28);
$paso3 = substr($contents, 3881,39);
//echo $contents;
//$res = preg_replace('/-[0-9]*/[0-9][0-9]*/', "AAA", $contents);
$paso2 = str_replace($paso1, "<date>
<![CDATA[ $fecha", $contents);

$paso4 = str_replace($paso3, "<expiration_date>
<![CDATA[ $fechaf", $paso2);
//echo $paso4;
fwrite($fp, $paso4, filesize("SercantoDATE.xml"));
fclose($fp);
}

?>
<?php
/*-----------------------------
//Formatos de las fechas
-----------------------------*/
$fecha = date("d/m/Y");
$fechaa = date("d.m.Y");
$date = date("d-m-Y");
$fechae = date("Y-m-d");
//Incrementando 2 dias
$mod_date = strtotime($date."+ 9 days");
$fechan =  date("d/m/Y",$mod_date);
$fechaen =  date("Y-m-d",$mod_date);

echo "Fecha actual = " .$fecha. " Fecha de finalizacion " . $fechan . "<br>";

/*--------------------------
//Actualizacion de SercantoFULL
--------------------------*/
if (!$fp = fopen("SercantoFULL.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("SercantoFULL.xml"));
$posicion_inicio = strpos($contents, "<date>");
$posicion_final = strpos($contents, "<expiration_date>");
$paso1 = substr($contents, $posicion_inicio,28);
$paso3 = substr($contents, $posicion_final,39);
if (!$fp = fopen("SercantoFULL.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<date>
<![CDATA[ $fecha", $contents);
$paso4 = str_replace($paso3, "<expiration_date>
<![CDATA[ $fechan", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en SercantoFULL.xml";
echo "<br>";
}//If Borrado
}//If Apertura

/*------------------------
//Actualizacion de JoobleFULL
------------------------*/
if (!$fp = fopen("joobleFULL.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("joobleFULL.xml"));
$posicion_inicio = strpos($contents, "<pubdate>");
$posicion_final = strpos($contents, "<expire>");
$paso1 = substr($contents, $posicion_inicio,19);
$paso3 = substr($contents, $posicion_final,17);
if (!$fp = fopen("joobleFULL.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<pubdate>$fecha", $contents);
$paso4 = str_replace($paso3, "<expire>$fechan", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en joobleFULL.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*------------------------
//Actualizacion de adzunaFULL
------------------------*/
if (!$fp = fopen("adzunaFULL.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("adzunaFULL.xml"));
$posicion_inicio = strpos($contents, "<date>");
$paso1 = substr($contents, $posicion_inicio,16);
if (!$fp = fopen("adzunaFULL.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<date>$fechaa", $contents);
fwrite($fp, "");
fwrite($fp, $paso2);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en AdzunaFULL.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*----------------------
//Actualizacion de ElutaFULL
-----------------------*/
if (!$fp = fopen("eleutaFULL.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("eleutaFULL.xml"));
$posicion_inicio = strpos($contents, "<postdate>");
$posicion_final = strpos($contents, "<expirydate>");
$paso1 = substr($contents, $posicion_inicio,32);
$paso3 = substr($contents, $posicion_final,34);
if (!$fp = fopen("eleutaFULL.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<postdate>
<![CDATA[ $fechae", $contents);
$paso4 = str_replace($paso3, "<expirydate>
<![CDATA[ $fechaen", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en eleutaFULL.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*--------------------------
//Actualizacion de jobisjobFULL
--------------------------*/
if (!$fp = fopen("jobisjobFULL.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("jobisjobFULL.xml"));
$posicion_inicio = strpos($contents, "<insert-date>");
$posicion_final = strpos($contents, "<update-date>");
$paso1 = substr($contents, $posicion_inicio,35);
$paso3 = substr($contents, $posicion_final,35);
if (!$fp = fopen("jobisjobFULL.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<insert-date>
<![CDATA[ $fechae", $contents);
$paso4 = str_replace($paso3, "<update-date>
<![CDATA[ $fechaen", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en jobisjobFULL.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*--------------------------
//Actualizacion de jobrapidoFULL
--------------------------*/
if (!$fp = fopen("jobrapidoFULL.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("jobrapidoFULL.xml"));
$posicion_inicio = strpos($contents, "<publishdate>");
$paso1 = substr($contents, $posicion_inicio,35);
if (!$fp = fopen("jobrapidoFULL.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<publishdate>
<![CDATA[ $fechae", $contents);
fwrite($fp, "");
fwrite($fp, $paso2);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en jobrapidoFULL.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*-----------------------------
//Actualizacion de myjobhelperFULL
-----------------------------*/
if (!$fp = fopen("myjobhelperFULL.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("myjobhelperFULL.xml"));
$posicion_inicio = strpos($contents, "<postDate>");
$paso1 = substr($contents, $posicion_inicio,30);
if (!$fp = fopen("myjobhelperFULL.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<postDate><![CDATA[ $fechae", $contents);
fwrite($fp, "");
fwrite($fp, $paso2);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en myjobhelperFULL.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*--------------------------
//Actualizacion de careerjetFULL
--------------------------*/
if (!$fp = fopen("careerjetFULL.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("careerjetFULL.xml"));
$posicion_inicio = strpos($contents, "<postdate>");
$posicion_final = strpos($contents, "<expirydate>");
$paso1 = substr($contents, $posicion_inicio,32);
$paso3 = substr($contents, $posicion_final,34);
if (!$fp = fopen("careerjetFULL.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<postdate>
<![CDATA[ $fechae", $contents);
$paso4 = str_replace($paso3, "<expirydate>
<![CDATA[ $fechaen", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en careerjetFULL.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura
?>
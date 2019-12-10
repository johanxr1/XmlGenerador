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
//Actualizacion de Sercanto
--------------------------*/
if (!$fp = fopen("Sercanto.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("Sercanto.xml"));
$posicion_inicio = strpos($contents, "<date>");
$posicion_final = strpos($contents, "<expiration_date>");
$paso1 = substr($contents, 3838,28);
$paso3 = substr($contents, 3881,39);
if (!$fp = fopen("Sercanto.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<date>
<![CDATA[ $fecha", $contents);
$paso4 = str_replace($paso3, "<expiration_date>
<![CDATA[ $fechan", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en Sercanto.xml";
echo "<br>";
}//If Borrado
}//If Apertura

/*------------------------
//Actualizacion de Jooble
------------------------*/
if (!$fp = fopen("jooble.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("jooble.xml"));
$posicion_inicio = strpos($contents, "<pubdate>");
$posicion_final = strpos($contents, "<expire>");
$paso1 = substr($contents, $posicion_inicio,19);
$paso3 = substr($contents, $posicion_final,18);
if (!$fp = fopen("jooble.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<pubdate>$fecha", $contents);
$paso4 = str_replace($paso3, "<expire>$fechan", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en Jooble.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*------------------------
//Actualizacion de adzuna
------------------------*/
if (!$fp = fopen("adzuna.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("adzuna.xml"));
$posicion_inicio = strpos($contents, "<date>");
$paso1 = substr($contents, $posicion_inicio,16);
if (!$fp = fopen("adzuna.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<date>$fechaa", $contents);
fwrite($fp, "");
fwrite($fp, $paso2);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en Adzuna.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*----------------------
//Actualizacion de Eluta
-----------------------*/
if (!$fp = fopen("Eluta.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("Eluta.xml"));
$posicion_inicio = strpos($contents, "<postdate>");
$posicion_final = strpos($contents, "<expirydate>");
$paso1 = substr($contents, $posicion_inicio,32);
$paso3 = substr($contents, $posicion_final,34);
if (!$fp = fopen("Eluta.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<postdate>
<![CDATA[ $fechae", $contents);
$paso4 = str_replace($paso3, "<expirydate>
<![CDATA[ $fechaen", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en Eluta.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*--------------------------
//Actualizacion de jobisjob
--------------------------*/
if (!$fp = fopen("jobisjob.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("jobisjob.xml"));
$posicion_inicio = strpos($contents, "<insert-date>");
$posicion_final = strpos($contents, "<update-date>");
$paso1 = substr($contents, $posicion_inicio,35);
$paso3 = substr($contents, $posicion_final,35);
if (!$fp = fopen("jobisjob.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<insert-date>
<![CDATA[ $fechae", $contents);
$paso4 = str_replace($paso3, "<update-date>
<![CDATA[ $fechaen", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en jobisjob.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*--------------------------
//Actualizacion de jobrapido
--------------------------*/
if (!$fp = fopen("jobrapido.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("jobrapido.xml"));
$posicion_inicio = strpos($contents, "<publishdate>");
$paso1 = substr($contents, $posicion_inicio,35);
if (!$fp = fopen("jobrapido.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<publishdate>
<![CDATA[ $fechae", $contents);
fwrite($fp, "");
fwrite($fp, $paso2);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en jobrapido.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*-----------------------------
//Actualizacion de myjobhelper
-----------------------------*/
if (!$fp = fopen("myjobhelper.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("myjobhelper.xml"));
$posicion_inicio = strpos($contents, "<postDate>");
$paso1 = substr($contents, $posicion_inicio,30);
if (!$fp = fopen("myjobhelper.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<postDate><![CDATA[ $fechae", $contents);
fwrite($fp, "");
fwrite($fp, $paso2);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en myjobhelper.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura

/*--------------------------
//Actualizacion de careerjet
--------------------------*/
if (!$fp = fopen("careerjet.xml", "a+")){
    echo "No se ha podido abrir el archivo";
}else{
$contents = fread($fp, filesize("careerjet.xml"));
$posicion_inicio = strpos($contents, "<postdate>");
$posicion_final = strpos($contents, "<expirydate>");
$paso1 = substr($contents, $posicion_inicio,32);
$paso3 = substr($contents, $posicion_final,34);
if (!$fp = fopen("careerjet.xml", "w+")){
    echo "Error al eliminar contenido del archivo. Problema de permisos";
}else{
$paso2 = str_replace($paso1, "<postdate>
<![CDATA[ $fechae", $contents);
$paso4 = str_replace($paso3, "<expirydate>
<![CDATA[ $fechaen", $paso2);
fwrite($fp, "");
fwrite($fp, $paso4);
fclose($fp);
echo "Fecha cambiada satisfactoriamente en careerjet.xml \n";
echo "<br>";
}//If Borrado
}//If Apertura
?>

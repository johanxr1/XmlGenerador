<?php
/*--------------------------
//Adzuna a mortage
--------------------------*/
// $new_name = 'jobsinlasvegas.net.csv';
 
// $url = 'https://hallimjolken.com/api/v2/9to5/jobsinlasvegas.net.csv';
// $file   = file($url);
 
// $result = file_put_contents($new_name, $file);


$fp = fopen("jobsinlasvegas.net.csv", "r");
$contents = fread($fp, filesize("jobsinlasvegas.net.csv"));
$fz = filesize("jobsinlasvegas.net.csv");
$contents = str_replace("\n",";",$contents);
$contents = str_replace("amp;","amp:",$contents);
$contents = str_replace("px;","px:",$contents);
$contents = str_replace("\"\";","\"\":",$contents);
$contents = str_replace(";\"\"",":\"\"",$contents);
$contents = str_replace("pt;","pt:",$contents);
$contents = str_replace("serif;","serif:",$contents);
$contents = str_replace("pt;","pt:",$contents);
$contents = str_replace("; ",": ",$contents);
$contents = str_replace(";'",":'",$contents);
$launch = explode(";", $contents);
$cs = 0;
for ($i=0; $i <$fz ; $i++) { 
	if ($contents[$i] == "\n") {
		$cs++;
	}
}
//echo $cs;
$aid[] = 0;
$aurl[] = 0;
$atitle[] = 0;
$aloca[] = 0;
$acomp[] = 0;
$adesc[] = 0;
$acate[] = 0;
$atime[] = 0;
$a= 0;
$b = 14;
$c = 6;
$d = 4;
$e = 3;
$f = 12;
$g = 5;
$h = 7;
for ($i=0; $i <43 ; $i++) {
	$aid[$i] = $launch[$a];
	$a= $a +15;
	$aurl[$i] = $launch[$b];
	$b= $b +15;
	$atitle[$i] = $launch[$c];
	$c= $c +15;
	$aloca[$i] = $launch[$d];
	$d= $d +15;
	$acomp[$i] = $launch[$e];
	$e= $e +15;
	$adesc[$i] = $launch[$f];
	$f= $f +15;
	$acate[$i] = $launch[$g];
	$g= $g +15;
	$atime[$i] = $launch[$h];
	$h= $h +15;
	
}
$titulo_xml = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<jobs>";
for ($i=1; $i < 43 ; $i++) { 
$for_xml = "<job>
<id>
<![CDATA[$aid[$i]]]>
</id> 
<url>
<![CDATA[
 $aurl[$i]
]]>
</url>
<title>
<![CDATA[ $atitle[$i] ]]>
</title>
<location>
<![CDATA[ $aloca[$i] ]]>
</location>
<salary/>
<company>
<![CDATA[ $acomp[$i] ]]>
</company>
<description>
<![CDATA[
$adesc[$i]
]]>
</description>
<category><![CDATA[ $acate[$i] ]]></category>
<date>$atime[$i]</date>
<contract_time><![CDATA[ part_time ]]></contract_time>
</job>
";
}

$fin_xml = "</jobs>";

fclose($fp);
$cadena_xml = $titulo_xml.$for_xml.$fin_xml;

$archi_xml = simplexml_load_string($cadena_xml);
        /// volcamos el XML
      header("content-type: application/xml; charset=UTF-8");
      header('Content-Disposition: attachment; filename="jobsinlasvegas.xml"');
      echo $archi_xml->asXML();


?>
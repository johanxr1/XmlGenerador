<?php
/*--------------------------
//Adzuna a mortage
--------------------------*/
$fp = fopen("jobsinlasvegas.net.csv", "r");
$contents = fread($fp, filesize("jobsinlasvegas.net.csv"));
$fz = filesize("jobsinlasvegas.net.csv");
$launch = explode(";", $contents);
$cs = 0;
for ($i=0; $i <$fz ; $i++) { 
	if ($contents[$i] == "\n") {
		$cs++;
	}
}
echo $cs;
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
for ($i=0; $i <$cs*14 ; $i++) {
	if ($launch[$i] == "\n") {
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
	$cs = $cs+14;
	}
	
}
echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<jobs>";
for ($i=0; $i < 37 ; $i++) { 
echo "<job>
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
echo "</jobs>";

fclose($fp);
?>
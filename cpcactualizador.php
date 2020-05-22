<?php
include 'listcpc.php';

$exploded = multiexplode1(array("\t",",","|",":","\n"),$text);
if (!$fp = fopen("jooble.xml", "a+")){
    echo "No se ha podido abrir el archivo";
	}else{
	$contents = fread($fp, filesize("jooble.xml"));
}
for ($i=0; $i < 376 ; $i++) {
	
	for ($j=0; $j < 100; $j++) {
		if ($cpc1 = strpos($contents, "<jobref>
<![CDATA[ $exploded[$i] ]]>")) {
			echo "Encontre ";
		}
			
	}

	}
	
?>
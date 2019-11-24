<?php
//Lista grande con 100 primeros valores modificados
include 'lista.php';
$exploded1 = multiexplode(array(",","|",":","\n"),$text);
include 'lista2.php';
$exploded2 = multiexplode1(array(",","\t","|",":","\n"),$text);
$a=0;
$max = sizeof($exploded2);
for ($i=0; $i < $max; $i++) {
	for ($j=0; $j <200 ; $j++){
		if ($i % 2 == 0){
			if ($exploded1[$j] != $exploded2[$i]){
			$nlista[$i] = $exploded2[$i];
			$nlista[$i+1] = $exploded2[$i+1];
		}
		}
		
	}
	//echo $nlista[$i]."\n";
}
for ($i=0; $i <6852 ; $i++) {
	if ($i % 2 == 0) {
		echo $nlista[$i].".";
	}
	else{
		echo $nlista[$i].",";
	}
}
?>
<?php
include 'jobsinlasvegas.php';


$exploded = multiexplode1(array(";"),$text);
//$id[0];
// $datepublished[0];
// $dateexpiration[0];
// $organization[0];
// $location[0];
// $category[0];
// $title[0];
// $type[0];
// $salary[0];
// $slug[0];
// $applybutton[0];
// $gmaps[0];
// $description[0];
// $skills[0];
// $url[0];
for ($i=0; $i <955 ; $i++) {
	if ($text == "\n") {
		echo $exploded[$i+1]."-";
	}
	
	

}

?>
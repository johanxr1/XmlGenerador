<?php
$fechai = date("Y-m-d");
$mod_date = strtotime($fechai."+ 9 days");
$fechanueve =  date("Y-m-d",$mod_date);
$añadido = "T01:36";
$completaactual = $fechai.$añadido;
$completanueve = $fechanueve.$añadido;

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="wp_prueba";
	$usertable="wp_postmeta";
	$con = mysqli_connect($hostname, $username, $password, $dbname);
	// Check connection
	if (!$con) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	$count = 0;
	$contador = 0;
	$a = "";
	$cadena_buscada = "datePosted";
	$cadema_buscada2 = "validThrough";
	$sql = "SELECT `meta_id`,`meta_value` FROM `wp_postmeta` WHERE `meta_key` = '_elementor_data'";
	
		if($respuesta = mysqli_query($con, $sql)){
		if ($respuesta->num_rows!= 0) {
			while($resp = mysqli_fetch_array($respuesta)){
                $id[$count] = $resp['meta_id'];
                $r[$count] = $resp['meta_value'];	
				$count++;
			}
			for ($i=0; $i < $count ; $i++) {
				$posicion_coincidencia[$i] = strpos($r[$i], $cadena_buscada);
			
				if ($posicion_coincidencia[$i] === false) {
    		//echo "NO se ha encontrado la palabra deseada!!!!";
    		} else {
    		//echo $contador;
            //echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia[$i]."<br>";
            $contador = $contador + 1;
            $paso1[$i] = substr($r[$i], $posicion_coincidencia[$i]+16,16);
            $paso2[$i] = substr($r[$i], $posicion_coincidencia[$i]+59,16);
            // echo "Fecha anterior: ".$paso1[$i]."<br>";
            // echo "Fecha Actual: ".$completaactual."<br>";
            // echo "Fecha anterior vencimiento: ".$paso2[$i]."<br>";
            // echo "Fecha Actual vencimiento: ".$completanueve."<br>";
            // echo "Tabla modificada en posicion: ".$i. ". Cuyo meta_id es: ".$id[$i]."<br>";
            // echo "------------------------------------------------------------------------<br>";
			$resultado[$i] = str_replace($paso1[$i], $completaactual, $r[$i]);
			$resultadot[$i] = str_replace($paso2[$i], $completanueve, $resultado[$i]);
            echo $id[$i]." Datos: '".$resultadot[$i]."'<br>";
            // $sqlupdate = "UPDATE `wp_postmeta` SET `meta_value` = '$resultadot[$i]' WHERE `meta_id` = '$id[$i]'";
            // if(mysqli_query($con, $sqlupdate)){
            // 	echo "Valor actualizado en base de datos<br>";
            // 	}else{
            // 		echo "Valor NO ACTUALIZADO en base de datos<br>". $con->error."<br>";
            // 	}
           	echo "------------------------------------------------------------------------<br>";
            }
            
			}//for
			
			mysqli_close($con);
		}else{echo (false);}
	}else{echo ("error en db");}

?>
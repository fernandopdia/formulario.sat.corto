<?php
	$conexion = new mysqli("localhost", "root", "","sat");
	if($conexion){
	    echo "la gestion fue exitosa !!";
	}else{
		echo "Fallo la gestion";		
	}

?>
<?php	

    include("conexion.php");
  
   $dni     = $_POST['dni'];    
   $persona    = $_POST['persona'];
   $decla      = $_POST['decla'];
   $periodo    = $_POST['periodo'];
   $mensaje    = $_POST['mensaje'];
    
    $Fecha= date("Y-m-d H:i:s");

    $consulta = "INSERT INTO declara(dni, persona, decla, periodo, mensaje, Fecha)  VALUES
        ('$dni', 'persona', 'decla', 'periodo', 'mensaje', '$Fecha')";

       if ($conexion->query($consulta) === TRUE){
		header("Location: index.html");
}else{
		echo "Error: " . $consulta . "<br>" . $conexion->error;
	}
	$conexion->close();

    ?>
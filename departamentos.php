<?php
	$con = mysqli_connect("localhost","root","","colombia");

	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	if ($resultado = $con->query("SELECT * FROM `departamento` WHERE `nombre` LIKE '%".$_GET['query']."%'")) {
	    /* liberar el conjunto de resultados */

	    while ($row = $resultado->fetch_object()){
        	$departamentos[] = $row;
    	}
	    $resultado->close();

	    print json_encode($departamentos);
	}

?>
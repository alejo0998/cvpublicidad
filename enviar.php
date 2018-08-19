<?php
	
	// enviar.php
	
	// Conseguimos dato
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$nombre = $_POST['nombre'];
	//$comentarios = $_POST['comentarios'];

	$destinatario = "alejogodoy0998@gmail.com";
	
	// Guardo todos los datos que pedí en una sola variable
	$cuerpo = "$nombre se quiere contactar. Su email : $email. Su telefono: $telefono, te ha dejado el siguiente comentario: ";
	
	// cabeceras es opcional
	// destinatario / asunto / cuerpo / headers o cabeceras
	$cabeceras = "From: CV WEB <alejogodoy0998@gmail>";
	
	// Este es para el dueño del sitio
	mail($destinatario, $nombre, $cuerpo, $cabeceras);
	
	// Mail para la persona que completó el formulario
	mail(
		$email, 
		"Recibimos tu mail", 
		"Te contestaremos a la brevedad. Gracias CVWEB", 
		$cabeceras
	);
	
	header( "refresh:0.1;contacto.html" );
	
   
	
	
	
?>
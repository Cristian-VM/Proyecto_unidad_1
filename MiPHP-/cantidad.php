
<?php
	$cantidad = $_GET['cantidad']; #esta parte hace el GET para capturar lo recibido en el input
	$precio = $cantidad*30000 #aca se multiplica por la cantidad que queramos 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Total A Pagar</title>
 </head>
 <body>
 <h1>TOTAL A PAGAR</h1> 
 <H3>total: <?php echo $precio; ?></H3> 
 <input type="submit" name="Pagar">
 </body>
 </html>
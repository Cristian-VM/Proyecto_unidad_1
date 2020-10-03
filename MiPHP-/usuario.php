   <?php
   $user = $_GET['user'];
   $password = $_GET['password'];
   
   $user1 = "usuario1";
   $pass1 = "tneilc";
   $user2 = "administrador";
   $pass2 = "nimda ";
  
 
   $error_notif = "¡Contraseña o usuario incorrecto!" . '<a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   switch ($user) {
      case $user1:
         if ($password == $pass1) {
         echo "Bienvenido " . $user;
         header('Location: producto.php');  
         } else {
            echo $error_notif;
         }
      break;
      case $user2:
         if ($password == $pass2) {
            echo "Bienvenido " . $user; 
            header('Location: dashboard.php');
           
         } else {
            echo $error_notif;
         }
      break;
      default:
         echo $error_notif;
   }
?>

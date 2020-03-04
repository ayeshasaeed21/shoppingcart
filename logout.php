<?php 

   session_start();
   session_destroy();
   header('location:http://localhost/Ecommerce/login.php' , false);
?>
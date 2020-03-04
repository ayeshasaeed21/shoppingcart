
<?php
 include '../Ecommerce/menu.php';
 if(!isset($_SESSION['user']))
   {
      header('location:http://localhost/Ecommerce/login.php' , false);      
   }
 ?>
        <image src="img/bc.jpg" height="500px" width="1350px">
        <h1 style="font-family: fantasy; text-align: center;letter-spacing: 8px;word-spacing: 20px" onclick="location='whattowear.php'">
            WEAR YOUR CONFIDENCE
        </h1>
        <div style="margin-left: 200px; border: 1px solid black ; width: 350px; text-align: center">
            <img src="img/yt.jpg" height="400px" width="350px" >
            <h2>Shoes</h2>
        </div>
        <br>
        <div style=";margin:20px 200px; border: 1px solid black ; width: 350px; text-align: center;float: right;">
            <img src="img/bc.jpg" height="400px" width="350px">
            <h2>Bags</h2>
        </div>
        <br>
        <div style=";margin:20px 200px; border: 1px solid black ; width: 350px; text-align: center;">
            <img src="img/per.jpg" height="400px" width="350px">
            <h2>Perfumes</h2>
        </div>
        <br>
        <div style=";margin:20px 200px; border: 1px solid black ; width: 350px; text-align: center;float: right;">
            <img src="img/bc.jpg" height="400px" width="350px">
            <h2>Bags</h2>
        </div>
        <br>
    </body>
</html>
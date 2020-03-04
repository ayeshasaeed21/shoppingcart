<?php
    include '../Ecommerce/menu.php';
   if(isset($_SESSION['user']))
   {
      header('location:http://localhost/Ecommerce/index.php' , false);      
   }
?>

        <div class=" simple-form ">
            <h1>LOG here</h1>
            <form id="registration" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
         
                <input type="text" name="email" class="button" placeholder="Enter your E-mail">
                <br><br>
                <input type="password" name="password" class="button" placeholder="password">
                <br><br>
                <input type="submit" value="Login" class="button color">
                
            </form>
            <p>Don't have an Account &nbsp;&nbsp;&nbsp; <a href="signup.php"> Sign Up here</a></p>
            
            <?php 
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                 $email=$password=''; 
                 $password=$_POST['password'];
                 $email=$_POST['email'];
                 $emailreg="/^([A-Za-z0-9]+)@([a-z]+).([a-z]{2,3})$/";
                if(empty($email))
                {
                    print '<h1>email is empty</h1>';
                }
                else if(!preg_match($emailreg, $email))
                {
                    print '<h1>email is invalid</h1>';
                }        
                if(empty($password))
                {
                    print '<h1>password is empty</h1>';
                }
                else
                {
                        // to connect to database
                        $Con=new mysqli("localhost:8111","root","1234567","shoppingcart");
                        $qrySelect = "select * from users where email = '".$email."' AND password = '".$password."' " ;
                        $result = $Con->query($qrySelect);
                        if($result->num_rows > 0)
                        {
                            $data = $result->fetch_assoc();
                            $_SESSION['user'] = $data;
                            header('location:http://localhost/Ecommerce/index.php' , false);
                      
                        }
                        else
                        {
                            header('location:http://localhost/Ecommerce/signup.php' , false);
                                       //save the query into a veraible before exe.
                        }
              
               }
                }
                  
            ?>
        </div>
    </body>
</html>
<?php
    include '../Ecommerce/menu.php';
?>
        <div class=" simple-form ">
             <h1>Sign Up</h1>
             <form id="registration" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
                <input type="text" name="firstname" class="button" placeholder="Enter First name">
                <br><br>
                <input type="text" name="lastname" class="button" placeholder="Enter Last name">
                <br><br>
                <input type="text" name="email" class="button" placeholder="Enter your E-mail">
                <br><br>
                <input type="password" name="pass" class="button" placeholder="password">
                <br><br>
                <input type="password" name="cpass" class="button" placeholder="confirm password">
                <br><br>
                <br><br>
                <input type="submit" value="Sign-up" class="button color">
                
            </form>
             <p>Already have an Account &nbsp;&nbsp <a href="login.php">Log In here</a></p>
        </div>
        <?php 
        //TO CHECK IF THE REQUEST IS POST ?
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                 $firstname=$lastname=$email=$password=$confirmpassword='';   
                 $firstname=$_POST['firstname'];
                 $lastname=$_POST['lastname'];
                 $password=$_POST['pass'];
                 $confirmpassword=$_POST['cpass'];
                 $email=$_POST['email'];
                 $Namereg="/^[A-Za-z]+$/";
                 $emailreg="/^([A-Za-z0-9]+)@([a-z]+).([a-z]{2,3})$/";
                if(empty($firstname))
                {
                    print '<h1>name is empty</h1>';
                }
                else if(!preg_match($Namereg,$firstname))
                {
                      print '<h1>first name is invalid</h1>';   
                }    
                else if(empty($lastname))
                {
                    print '<h1>last name is empty</h1>';
                }
                else if(!preg_match($Namereg,$lastname))
                {
                      print '<h1>last name is invalid</h1>';   
                }    
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
                else if(empty($confirmpassword))
                {
                    print '<h1>confirm password is empty<h1>';
                }
                else if($confirmpassword != $password)
                {
                    print '<h1>passwords are not equal<h1>';
                }
                else
                {
                        // to connect to database
                        $Con=new mysqli("localhost:8111","root","1234567","shoppingcart");
                        $qrySelect = "select * from users where email = '".$email."'" ;
                        $result = $Con->query($qrySelect);
                        if($result->num_rows > 0)
                        {
                            print '<h1 style="color:red">the user is registered already</h1>';
                        }
                        else
                        {
                                       //save the query into a veraible before exe.
                        $qryInsert="INSERT INTO USERS (firstname,lastname,email,password) values('".$firstname."','".$lastname."','".$email."','".$password."')";   
                        //exe. the query  
                        $result = $Con->query($qryInsert);  
                        if($result == true)
                        {
                            header('location:http://localhost/Ecommerce/index.php' , false);
                        }
           
                        }
              
               }
                }
        ?>
    </body>
</html>
<?php
    include '../Ecommerce/header.php';
?>

<div class="menu_left" style="background-color: green" >
    <ul>
        <li>
            <a href="../Ecommerce/index.php">
                Home
            </a>
        </li>
        <li>
            About
        </li>
        <li>
            Contact
        </li>
    </ul>
    <ul style="float: right">
        <?php 
            if(isset($_SESSION['user']))
            {  
                $user = $_SESSION['user'];
                    ?>
                               <li>
                                    <a href="../Ecommerce/signup.php">
                                        <?php print $user['email'] ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="../Ecommerce/logout.php">
                                        logout
                                    </a>
                                </li>
                   <?php 
             
            }
            else
            {
                 ?>
                               <li>
                                    <a href="../Ecommerce/signup.php">
                                        Sign up
                                    </a>
                                </li>
                                <li>
                                    <a href="../Ecommerce/login.php">
                                        login
                                    </a>
                                </li>
                   <?php 
            }
        ?>
        
    </ul>
</div>
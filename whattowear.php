<html>
    <head>
        <title>LOG IN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        div{
            margin:20px 500px; 
            border: 1px solid black ; 
            width: 400px;
            text-align: center;   
            
        }
        .stylesubmit{
            background-color: green; 
            padding: 15px;
            border-radius: 5px;
            margin: -200px 100px;
        }
        .stylelogin{
            background-color: green; 
            padding: 15px;
            border-radius: 5px;
            margin: -140px 100px; 
        }
        
    </style>
    <body>
        <div >
        <img src="img/dfg.jpg" height="550px" width="400px">
<!--        <h3> Become a member</h3>-->
<button type="button" value="submit" onclick="location='signup.php'" class="stylesubmit">Sign Up </button>
<!--        <h3>Already a member</h3>-->
<button type="button" value="submit" onclick="location='login.php'" class="stylelogin">Log In </button>
        </div>
    </body>
</html>

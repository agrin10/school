<?php 
include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.js">
</head>

   
<body>
    <form action="index.php" method="post">
       

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" id="Username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                
            <button type="submit" id="btn1">Login</button>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

        </div>
 

        
                
                            
                
    </form>
    
</body>
</html>
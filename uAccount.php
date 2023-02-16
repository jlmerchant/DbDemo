<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <p>steve mods</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    First Name:<input type="text" name="fname">
    Last Name:<input type="text" name="lname">
    Email:<input type="text" name="email">
    Password:<input type="text" name="pword">
    <input type="submit">
    </form> 
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //collect value of input field 
            $fname = $_POST['fname'];
            if (empty($fname)) {
                echo "Name is empty";
            } else {
                echo "First Name: $fname <br/>" ; 
            }
            $lname = $_POST['lname'];
            if (empty($lname)) {
                echo "Name is empty";
            } else {
                echo "Last Name: $lname";
            }
            $email = $_POST['email'];
            if (empty($email)) {
            } else {
                echo "Email: $email";
            }
            $pword = $_POST['pword'];
            if (empty($pword)) {
                echo "Password is empty";
            } else {
                $hash = password_hash($pword, PASSWORD_DEFAULT);
                echo "Password is a secret"; 

            }
        }
        
       
        //$email;
        //pword; 
    ?>
</body>
</html>
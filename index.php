<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Contact Form</title>
</head>
<body>
<h3>Contact Me</h3>
<form action="" method="POST">
    <p> 
        <label for="first_name">First Name</label><br /> 
        <input type="text" name="first_name" placeholder="Enter Your First Name" /> 
    </p>
    <p> 
        <label for="last_name">Last Name</label><br /> 
        <input type="text" name="last_name" placeholder="Enter Your Last Name" /> 
    </p>
    <p>
        <label for="gender">Gender</label><br />
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
    </p>
    <p>
        <label for="email">Email</label><br /> 
        <input type="email" name="email" placeholder="Enter Your Email" required /> 
    </p>
    <p>     
        <label for="email">Your Message</label><br /> 
        <textarea name="message" rows="10" cols="20"></textarea> 
    </p>
    <p>
        <input type="checkbox" name="info" id="" required> By Checking this box you agree to Terms and Condition of the Company
    </p>
        <input type="submit" name="submit" value="SEND">
</form>
</body>
</html>



<?php
     

if (isset($_POST["submit"])) {

   $fname = $_POST["first_name"];
     $lname = $_POST["last_name"];
     $gender = $_POST["gender"];
     $email = $_POST["email"];
     $message = $_POST["message"];
     $info = $_POST["info"];
     $ext = ".txt";
     $fileName = $fname."_".$lname.$ext;


    extract($_REQUEST);
    $file = fopen($fileName , "a");
    
    fwrite($file, "First Name: ");
    fwrite($file, $fname . "\n");
    fwrite($file, "Last Name: ");
    fwrite($file, $lname . "\n");
    fwrite($file, "Gender: ");
    fwrite($file, $gender . "\n");
    fwrite($file, "Email: ");
    fwrite($file, $email . "\n");
    fwrite($file, "Message: ");
    fwrite($file, $message . "\n");
    
    fclose($file);
    
}
    
?>





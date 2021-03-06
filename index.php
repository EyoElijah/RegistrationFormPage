<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrationForm</title>
</head>
<body>
<?php 
    if(isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Email']) && isset($_POST['PhoneNumber'])) {
        echo '<h2> Form Submitted Successfully</h2>' ;
        echo 'Your FirstName is : ' .$_POST['FirstName'] . '<br>';
        echo 'Your LastName is : ' .$_POST['LastName'] . '<br>';
        echo 'Your Email is : ' .$_POST['Email'] . '<br>';
        echo 'Your PhoneNumber is : ' .$_POST['Email'] . '<br>';
} else{

?>
    <form action="index.php" method="POST">
    FirstName: <input type="text" name="FirstName" placeholder= 'FirstName'> <br> <br>
    LastName: <input type="text" name="LastName" placeholder='LastName'> <br> <br>
    Email: <input type="email" name="Email" placeholder='Enter Email'> <br> <br>
    PhoneNumber: <input type="tel" name="PhoneNumber" placeholder='Enter phone Number'> <br> <br>
    <input type="submit" value="Submit">

    </form>
    <?php }?>
</body>
</html>
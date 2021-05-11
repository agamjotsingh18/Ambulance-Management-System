<?php
require ("assets/common.php");

$fname = $_POST['fname'];
$fname = mysqli_real_escape_string($con,$fname);

$lname = $_POST['lname'];
$lname = mysqli_real_escape_string($con,$lname);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con,$email);

$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($con,$phone);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con,$password);

$cpassword = $_POST['cpassword'];
$cpassword = mysqli_real_escape_string($con,$cpassword);

//Validations for e-mail and phone numbers
$phone_validation = "/^[0-9]+$/";
$email_validation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";



if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($password) || empty($cpassword)){
    echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Please Fill all fields</b>
</div>";
    exit();
}if ($password != $cpassword){
    echo "<div class='alert alert-warning'>
               <a href='signup.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
               <b>Password and Confirm Password didnot match eachother!</b>
</div>";
    exit();
}if (!preg_match($email_validation,$email)){
    echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>$email Not Valid</b>
</div>";
    exit();
}if (!preg_match($phone_validation,$phone)){
    echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>$phone Not Valid</b>
    </div>";
    exit();
}if (strlen($password) < 9) {
    echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Password is Weak</b>
</div>";
    exit();
}if (!(strlen($phone)) == 10){
    echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Mobile Number must be of 10 digits</b>
</div>";
    exit();
}
$sql = "SELECT id FROM users Where email = '.$email.' LIMIT 1";
$check_query = mysqli_query($con,$sql) or die(mysqli_error($con));
$email_counter = mysqli_num_rows($check_query);

if ($email_counter != 0){
    echo "<div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>User With this email address already exists!</b>
</div>";
    exit();
}else{
    $query = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`) VALUES (NULL, '".$fname."', '".$lname."','".$phone."','".$email."' ,'".$password."')";
    $result =mysqli_query($con,$query) or die(mysqli_error($con));
    //INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`) VALUES (NULL, 'naveen', 'gali', '958138190', 'naveengali80@gmail.com', 'Naveen@123');

    $_SESSION["id"] = mysqli_insert_id($con);
    $_SESSION["name"] = $f_name;

   header('location:login.php');
}

?>

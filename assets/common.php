<?php
$con = mysqli_connect("localhost","root","","ambulance_management") or die(mysqli_error($con));

if (!isset($_SESSION)){
    session_start();
}

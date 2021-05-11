<?php
include "assets/common.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>SignUp | Ambulance Management System</title>
    <?php
    require("assets/bootstrap_cdn.php");
    ?>
    <!-- link to Bootstrap minified css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- link to Jquery minified-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- link to Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link href="signup.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    <div class="jumbotron" style="margin-top: 50px">
        <div class="row">
            <div class="col-sm-10">
                <h2 id="signuplabel">SignUp</h2>
                <form action="signup_script.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your FirstName" name="fname"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter Your E-Mail" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter your Phone Number" name="phone"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword"
                               required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

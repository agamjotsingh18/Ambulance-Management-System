<?php
    include ("assets/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login | Ambulance Management System</title>
        <?php
            require "assets/bootstrap_cdn.php";
        ?>
    </head>
    <body>
    <div class="container">
        <div class="jumbotron" style="margin-top: 60px">
            <div class="row">
                <div class="col-sm-10">
                    <h2 style="padding-left: 20px;padding-bottom: 10px">LogIn</h2>
                    <form action="login_script.php" method="post" style="padding-bottom:300px">

                        <div class="form-group col-sm-10">
                            <input class="form-control" type="email" placeholder="Enter your registered Email" name="email" required>
                        </div>

                        <div class="form-group col-sm-10">
                            <input class="form-control" type="password" placeholder="Enter your password" name="password" required>
                        </div>

                        <div class="col-sm-10">

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                        </div>
                        <div class="col-sm-10">
                            <p>Don't Have an Account ? Register for free. <a href="signup.php">Click here</a> to register.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>


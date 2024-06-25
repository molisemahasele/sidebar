<?php 
require("../database.php");
if(isset($_POST['submit']))
{
    
    $username =  $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password))
    {
        echo "<script>window.alert('fill in all fields')</script>";
        exit();
    }
    else
        {
            
            $results = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");

            if(mysqli_num_rows($results) > 0)
            {
                if($row = mysqli_fetch_assoc($results))
                {
                    $passwordChecker = password_verify($password, $row['pwd']);
                    if($passwordChecker == false)
                    {
                        echo "<script>window.alert('wrong password or username')</script>";
                        exit();
                    }
                    else
                    {
                        session_start();
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        header("location: index.php");
                    }
                }
            }
            else
            {
                echo "<script>window.alert('wrong password or username')</script>";
                exit();
            }

        }
}?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Iconnect</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
        </style>
  </head>
  <body>
      <h1 style="text-align:center;">Welcome to Iconnect</h1>
        <section class="vh-100">
                <div class="container py-5 h-100">
                  <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                      <img src="assets/unlock.svg"
                        class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                      <form method="POST">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                          <input name="username" type="text" id="form1Example13" class="form-control form-control-lg" />
                          <label class="form-label" for="form1Example13">Username</label>
                        </div>
              
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                          <input name="password" type="password" id="form1Example23" class="form-control form-control-lg" />
                          <label class="form-label" for="form1Example23">Password</label>
                        </div>
              
                        <div class="d-flex justify-content-around align-items-center mb-4">
                          <!-- Checkbox -->
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                          </div>
                          
                        </div>
              
                        <!-- Submit button -->
                        <input type="submit" name="submit" value="Sign in" class="btn btn-primary btn-lg btn-block">
              
                        <!--<div class="divider d-flex align-items-center my-4">
                          <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>
              
                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                          role="button">
                          <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                        </a>
                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                          role="button">
                          <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>-->
              
                      </form>
                    </div>
                  </div>
                </div>
              </section>
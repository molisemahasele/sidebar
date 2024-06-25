<?php 
require("../database.php");
session_start();
if(!isset($_SESSION['id']))
{
  header("location: login.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
		<style>
    img{
      margin:10px;
    }
    </style>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<h1><a href="index.html" class="logo">T<sup>2</sup></a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.html"><span class="fa fa-home"></span> Home</a>
          </li>
          <li>
            <a href="profile.html"><span class="fa fa-user"></span> Profile</a>
          </li>
          <li>
            <a href="studio.html"><span class="fa fa-cogs"></span> Studio</a>
          </li>
          <li>
            <a href="inbox.html"><span class="fa fa-envelope"></span> Inbox </span><span class="position-absolute badge rounded-pill bg-danger">
              99+</span></a>
          </li>
          <li>
            <a href="posts.html"><span class="fa fa-paper-plane"></span> Posts</a>
          </li>
          <li>
            <a href="sponsors.html"><span class="fa fa-briefcase"></span>My Sponsors</a>
          </li>
          <li>
            <a href="notifications.html"><span class="fa fa-bell position-relative"></span> Notifications <span class="position-absolute badge rounded-pill bg-danger">
              99+
            </span></a>
          </li>
          <li>
            <a href="#"><span class="fa fa-xmark"></span> Logout</a>
          </li>
        </ul>

        <div class="footer">
        	<p>
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made by Molise Mahasele
					</p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search for brands" aria-label="Search">
                  <button class="btn btn-primary" type="submit">Search</button>
                </form>
              </ul>
            </div>
          </div>
        </nav>

        The data analytics go here
      
      
      </div>
    </div>
    
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center">
          <div class="modal-content w-75">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel4">Write to us</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body p-4">
                  <form method="Post">
  
                      <!-- textarea input -->
                      <div class="form-outline mb-4">
                          <textarea name="message" id="textarea4" rows="4" class="form-control"></textarea>
                          <label class="form-label" for="textarea4">Your message</label>
                      </div>
  
                      
                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary btn-block">Send</button>
                  </form>
              </div>
          </div>
      </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>



</html>
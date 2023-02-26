<!DOCTYPE html>
<html>
    <head>
        <?php
            include_once 'dbfun.php';
            if (isset($_SESSION["id"])) {
                header("Location login.php");                
            }            
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Urban Company</title>        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>        
        <link href="css/toastr.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/toastr.min.js" type="text/javascript"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-white fixed">
            <a class="navbar-brand" href="index.php">Urban Company</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#event">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact Us</a>
                    </li>
                    <?php if (!isset($_SESSION["userid"])) { ?>                                        
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="uprofile.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mybookings.php">My Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </nav>
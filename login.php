<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/all.js" type="text/javascript"></script>
        <style>
            .toast{
                background-color:white; 
                padding:15px;
                border-radius:7px;
                position: absolute;width:300px; 
                right:10px;top:10px;
            }
        </style>
        <script>
            $(function () {
                $(".close").click(function () {
                    $(".toast").css({"display": "none"});
                });
            });
        </script>
    </head>
    <body>
        <?php
        include_once 'dbfun.php';
        include_once 'msg.php';
        ?>
        <a href="index.php" class="btn btn-success btn-sm float-right m-2">Home</a>
        <div class="jumbotron rounded-0 text-center p-5 bg-primary text-white">
            <h4>Welcome to Urban Service Company</h4>
            <h5>Login Screen</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 mx-auto mt-5">
                    <div class="card p-3">
                        <form method="post" action="validate.php">
                            <div class="form-group">
                                <input type="text" class="form-control" required name="userid" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" required name="pwd" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <select class="form-control" required name="role">
                                    <option value="">--- Select Role ---</option>
                                    <option value="A">Administrator</option>
                                    <option value="SP">Service Provider</option>
                                    <option value="U">User</option>
                                </select>
                            </div>
                            <button class="btn btn-primary btn-block">Login</button>                                
                        </form>
                        <p class="text-center mt-2">To register Click <a href="Register.php">here</a></p>
                    </div>                    

                </div>
            </div>
        </div>
        <div class="fixed-bottom jumbotron mb-0 p-1 text-center bg-success text-white">
            <h6>Copyright Urban Company &copy; 2023</h6>
        </div>
    </body>
</html>

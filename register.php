<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Register Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-3.4.1.js" type="text/javascript"></script>
</head>

<body>
    <a href="index.php" class="btn btn-primary btn-sm float-right m-2">Home</a>
    <div class="jumbotron text-center p-3 mb-2 bg-success text-white rounded-0">
        <h4>Welcome to Urban Service Company</h4>
        <h5>Registration Screen</h5>
    </div>
    <div class="container">
        <?php 
        include 'dbfun.php';
        if(isset($_SESSION["error"])){
            ?>
        <div class="alert alert-danger text-center">
            <?= $_SESSION["error"] ?>
        </div>
        <?php
            unset($_SESSION["error"]);
        }    
        ?>
        <div class="row">
            <div class="col-sm-5 offset-1">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h5>User Registration</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="reguser.php">
                            <div id="error" class="text-danger font-weight-bold text-center d-none">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control" name="address" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control" maxlength="10" name="phone" placeholder="Contact No">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control" name="region" placeholder="Region">
                            </div>
                            <div class="form-group">
                                <input type="email" required class="form-control" name="email" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                            </div>
                            <div id="error2" class="text-danger font-weight-bold text-center d-none">
                            </div>
                            <button class="btn btn-primary">Register Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 offset-1">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h5>Service Provider Registration</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="regsp.php">
                            <div id="error" class="text-danger font-weight-bold text-center d-none">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control" name="experience"
                                    placeholder="Experience">
                            </div>
                            <div class="form-group">
                                <input type="text" required class="form-control" maxlength="10" name="phone" placeholder="Contact No">
                            </div>
                            <div class="form-group">
                                <select class="form-control" required name="service_id">
                                    <option>Select Service</option>
                                    <?php
                                foreach (allrecords("services") as $map) {
                            ?>
                                    <option value="<?= $map['id'] ?>"><?= $map["name"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="email" required class="form-control" name="email" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                            </div>
                            <div id="error2" class="text-danger font-weight-bold text-center d-none">
                            </div>
                            <button class="btn btn-primary">Register Now</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="fixed-bottom jumbotron mb-0 p-1 text-center bg-success text-white rounded-0">
            <h6>Copyright &copy; 2023</h6>
        </div>
    </div>
</body>

</html>
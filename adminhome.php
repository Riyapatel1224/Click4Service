<?php include_once 'header.php'; ?>

<div class="jumbotron p-2 text-center mb-2 bg-dark text-white">    
    <h2>Admin Dashboard</h2>
</div>
<div class="row">
    <div class="col-sm-3 text-white text-center">
        <div class="card bg-primary p-3">
            <h3><?= countrecords("category") ?></h3>
            <h4>Category</h4>
        </div>
    </div>
    <div class="col-sm-3 text-white text-center">
        <div class="card bg-danger p-3">
            <h3><?= countrecords("services") ?></h3>
        <h4>Services</h4>
        </div>
    </div>
    <div class="col-sm-3 text-white text-center">
        <div class="card bg-secondary p-3">
            <h3><?= countrecords("users") ?></h3>
        <h4>Users</h4>
        </div>
    </div>
    <div class="col-sm-3 text-white text-center">
        <div class="card bg-info p-3">
            <h3><?= countrecords("serviceproviders") ?> </h3>
        <h4>Service Providers</h4>
        </div>
    </div>    
</div>

<?php include_once 'footer.php'; ?>
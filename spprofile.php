<?php include_once 'header.php'; ?>
<div class="p-1"></div>
<div class="container-fluid">
    <?php
        $id = $_SESSION["id"];
        $map = single("serviceproviders", "id=$id");
    ?>
    <h2>Service Provider</h2>
    <div class="row">
        <div  class="col-sm-4">
            <table class="table table-bordered">
                <tr>
                    <th style="width:200px;">ID</th>
                    <th><?= $map["id"]?></th>
                </tr>
                <tr>
                    <th>User Name</th>
                    <th><?= $map["name"]?></th>
                </tr>
                <tr>
                    <th>Service and Experience</th>
                    <th><?= $map["experience"]?></th>
                </tr>
                <tr>
                    <th>Email ID</th>
                    <th><?= $map["email"]?></th>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <th><?= $map["phone"]?></th>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
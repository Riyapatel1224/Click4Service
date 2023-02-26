<?php include_once 'mheader.php'; ?>
<div class="p-1"></div>
<?php
    $id = $_GET["id"];
    $map = single("services", "id=$id");
    $map2 = single("category", "id='{$map["catid"]}'");
    $cname = $map2["name"];
?>
<div class="container" style="min-height:90vh">
    <h4 class="p-2">Book Service</h4>
    <div class="row">
        <div class="col-sm-4 p-0">
            <img src="services/<?= $map["img"]?>" alt="event image" class="img-thumbnail">
            <h4 class='p-2'><?= $cname?></h4>
        </div>
        <div class="col-sm-8">
            <?php
                if (!isset($_SESSION["id"])) {
                    header("location: Login.php");
                } else {
                    $userid = $_SESSION["id"];
                    $data2 = findall("booking", "service_id=$id and user_id=$userid");
                    if (count($data2) > 0) {
            ?>
            <h5 class="text-success mt-3">Service already booked</h5>
            <?php
            } else {
            $providers=findall("serviceproviders","service_id=$id");
            if(count($providers)>0) {
            echo "<h4 class='p-2'>Select Service Provider</h4>";
            foreach($providers as $p){
                ?>
                <div class="card shadow mb-2">
                    <div class="card-body">
                        <a href="booknow.php?spid=<?= $p["id"]?>&sid=<?=$id?>" class='btn btn-success float-right btn-sm'>Book Service</a>
                        <h5>Name : <?= $p["name"] ?></h5>
                        <h6>Experience : <?= $p["experience"] ?></h6>
                        <h6>Contact No : <?= $p["phone"] ?></h6>
                        <h6>Email ID : <?= $p["email"] ?></h6>
            </div>
            </div>
                <?php
            }
        }
        else{
            echo "<h5 class='text-danger'>No Service Provider available for this service</h5>";
        }
    }
}
            ?>
            
        </div>
    </div>
</div>
<?php include_once 'mfooter.php'; ?>

<?php include_once 'header.php'; ?>

<h5 class="text-center bg-primary text-white p-2">Users</h5>
<div class="container-fluid">
    <table class="table table-bordered table-sm">
        <thead class="table-primary">
            <tr>
                <th>Email</th>
                <th>User Name</th>
                <th>Address</th>
                <th>Region</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Is Active</th>
                <th>Is Verified</th> 
                <th>Action</th>           
            </tr>
        </thead>
        <tbody>
            <?php
                foreach (allrecords("users") as $map) {
            ?>
            <tr>
                <td><?= $map["email"]?></td>
                <td><?= $map["name"]?></td>
                <td><?= $map["address"]?></td>
                <td><?= $map["region"]?></td>
                <td><?= $map["phone"]?></td>                        
                <td><?= $map["password"]?></td>                        
                <td><?= $map["isactive"]?></td>                        
                <td><?= $map["isverified"]?></td>
                <td>
                <?php if(!$map["isactive"]) { ?>
                    <a href="activateuser.php?id=<?=$map['id'] ?>" class="btn btn-primary btn-sm">Activate</a>
                    <?php  } ?>
                    <?php if(!$map["isverified"]) { ?>
                    <a href="verifyuser.php?id=<?=$map['id'] ?>" class="btn btn-success btn-sm">Verify</a>
                    <?php } ?>
            </td>                        
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>
<?php include_once 'footer.php'; ?>

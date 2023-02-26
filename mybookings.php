<?php include_once 'mheader.php'; ?>
<div class="container-fluid" style="min-height:85vh">
    <div class="card shadow mt-2">
        <div class="card-body">
            <h5 class="p-2" style="border-bottom: 2px solid green;">My Bookings</h5>            
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Booking Id</th>
                        <th>Service Name</th>
                        <th>Service Provider Name</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $userid=$_SESSION["id"];
                    foreach(findall("booking", "user_id='$userid'") as $b) { 
                        extract($b);
                        $servicename=single("services","id='$service_id'")["name"];
                        $spname=single("serviceproviders","id='$sp_id'")["name"];                        
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $servicename ?></td>
                            <td><?= $spname ?></td>
                            <td><?= date('d-M-Y', strtotime($bdate)) ?></td>
                            <td><?= $status ?></td>
                            <td>
                                <?php if($status == "Pending")
                                { ?>
                                <a onclick="return confirm('Are you sure to cancel this booking')" href="cancelbk.php?bid=<?= $id ?>" class="btn btn-outline-danger btn-sm">Cancel</a>
                                <?php }
                                else if($status== "Confirmed") {
                                ?>
                                <a href="feedback.php?bid=<?= $id ?>" class="btn btn-outline-primary btn-sm">Feedback</a>
                               <?php  } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once 'mfooter.php'; ?>
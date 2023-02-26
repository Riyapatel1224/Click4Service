<?php include_once 'header.php';  ?>
<style>
    .checked {
        color: orange;
    }
</style>
<div class="container-fluid" style="min-height:88vh">
    <h4 class="p-2" style="border-bottom: 2px solid green;">Feedbacks</h4>
    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Service Name</th>
                <th>Feedback</th>
                <th>Ratings</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php             
            $spid=$_SESSION['id'];
            foreach (findall("feedback"," booking_id in(select id from booking where sp_id='$spid') order by id desc") as $f)
            { 
                $bkid=$f['booking_id'];
                $uname=single("users","id='{$f["user_id"]}'")["name"];
                $sname=single("services","id=(select service_id from booking where id='$bkid')")["name"];
                ?>
                <tr>
                    <td><?= $f["id"]?></td>
                    <td><?= $uname ?></td>
                    <td><?= $sname ?></td>
                    <td><?= $f["descr"] ?></td>
                    <td>
                        <?php for($i = 1; $i <= 5; $i++) { 
                            if ($i <= $f["ratings"])
                            { ?>
                                <span class="fa fa-star checked"></span>
                           <?php  }
                            else
                            { ?>
                                <span class="fa fa-star"></span>
                            <?php }
                        } ?>
                    </td>
                    <td><?=date('d-M-Y', strtotime($f["fdate"])) ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php include_once 'footer.php';  ?>
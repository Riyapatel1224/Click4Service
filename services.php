<?php include_once 'header.php'; ?>

<div class="jumbotron p-2 text-center mb-2 bg-primary text-white">
    <h4>Services</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <table class="table table-bordered table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Service Name</th>
                        <th>Category Name</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (allrecords("services") as $map) {
                            extract($map);
                    ?>
                    <tr>
                        <td><img src='services/<?= $img ?>' alt="<?= $name ?>" style="width:150px;padding:5px;" ><?= $name?></td>
                        <td><?= single("category","id=$catid")["name"] ?></td>
                        <td><a href="delservice.php?id=<?= $map["id"] ?>" 
                               onclick="return confirm('Are you sure to delete this service')" 
                               class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
            <h4 class="p-2">Create New Service</h4>
            <form method="post" action="saveservice.php" enctype="multipart/form-data">
                <div  class="form-group">
                    <input type="text" required placeholder="Service Name" class="form-control" name="name">
                </div>
                <div  class="form-group">
                    <select class="form-control" required name="catid">
                        <option>Select Category</option>
                        <?php
                        foreach (allrecords("category") as $map) {
                    ?>
                    <option value="<?= $map['id'] ?>"><?= $map["name"] ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div  class="form-group">
                    <input type="file" required placeholder="Service Image" accept=".jpg,.png" class="form-control" name="photo">
                </div>
                <button class="btn btn-primary btn-block">Save Service</button>
            </form>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
 
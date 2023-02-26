<?php include_once 'header.php'; ?>

<div class="jumbotron p-3 text-center mb-2 bg-primary text-white">
    <h4>Categories</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <table class="table table-bordered table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach (allrecords("category") as $map) {
                    ?>
                    <tr>
                        <td><?= $map["id"]?></td>
                        <td><?= $map["name"]?></td>
                        <td><a href="delcat.php?catid=<?= $map["id"] ?>" 
                               onclick="return confirm('Are you sure to delete this category')" 
                               class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-4">
            <form method="post" action="savecat.php">
                <div  class="form-group">
                    <input type="text" placeholder="Category Name" class="form-control" name="cname">
                </div>
                <button class="btn btn-primary btn-block">Save Category</button>
            </form>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
 
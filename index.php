<?php include("config.php"); ?>
<?php include("header.php"); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <div class="d-flex justify-content-between">
                <h6 class="m-2 font-weight-bold text-primary">Task Data</h6>
                <div>
                    <a href="add.php" class="btn btn-info">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql = "SELECT id,title,status FROM tasks"; // membuat query untuk mengambil seluruh data
                        $query = mysqli_query($db, $sql); // eksekusi query
                        while ($tasks = mysqli_fetch_array($query)) { //perulangan sebanyak jumlah data yang diambil
                            $i++;
                        ?>
                            <tr>
                                <td><?= $tasks['title'] ?></td>
                                <td><?= $tasks['status'] ?></td>
                                <td><a href="edit.php?id=<?= $tasks['id'] ?>">Edit</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include("footer.php"); ?>
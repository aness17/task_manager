    <?php include("config.php"); ?>
    <?php include("header.php"); ?>
    <div class="container-fluid">
        <!-- <div class="row ml-1">
            <div class="col-lg-12"> -->
        <!-- Project Card Example -->
        <div class="card shadow mb-12">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                    <h6 class="m-2 font-weight-bold text-primary">Add Data</h6>
                </div>
            </div>
            <?php
            $id = $_GET['id']; //mengambil data id
            $sql = "SELECT * FROM tasks where id='$id'";  // membuat query untuk mengambil data dengan kondisi id
            $query = mysqli_query($db, $sql);
            $tasks = mysqli_fetch_array($query);

            ?>
            <div class="card-body">
                <form method="POST" action="update.php" class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label"><span class="text-danger">*</span>Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="<?= $tasks['title'] ?>">
                        <input type="hidden" name="id" class="form-control" value="<?= $tasks['id'] ?>">
                    </div>

                    <div class="col-12">
                        <label for="desc" class="form-label"><span class="text-danger">*</span>Description</label>
                        <textarea name="desc" class="form-control" id="desc"><?= $tasks['description'] ?></textarea>

                    </div>
                    <div class="col-12">
                        <label for="status" class="form-label"><span class="text-danger">*</span>Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="Pending" <?= ('Pending' == $tasks['status']) ? "selected" : "" ?>>Pending</option>
                            <option value="In Progress" <?= ('In Progress' == $tasks['status']) ? "selected" : "" ?>>In Progress</option>
                            <option value="Completed" <?= ('Completed' == $tasks['status']) ? "selected" : "" ?>>Completed</option>
                        </select>
                    </div>
                    <div class="text-center col-12 mt-3  ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="button" onclick="history.go(-1);" class="btn btn-success">Kembali</button>
                    </div>
                </form><!-- Vertical Form -->
            </div>
        </div>
    </div>
    <!-- </div>  
    </div>

</div> -->


    </main><!-- End #main -->
    <?php include("footer.php"); ?>
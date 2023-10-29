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
            <div class="card-body">
                <form method="POST" action="process.php" class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label"><span class="text-danger">*</span>Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <div class="col-12">
                        <label for="desc" class="form-label"><span class="text-danger">*</span>Description</label>
                        <input type="text" name="desc" class="form-control" id="desc">

                    </div>
                    <div class="col-12">
                        <label for="status" class="form-label"><span class="text-danger">*</span>Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="Pending">Pending</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                    <div class="text-center col-12 mt-3  ">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
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
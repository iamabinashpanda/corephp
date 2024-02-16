<?php include "header.php"; ?>
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="my-3">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-account-circle"></i>
                    </span>
                    Profile
                </h3>
            </div>
            <form class="forms-sample">
                <div class="form-group">
                    <div>
                        <img src="assets/images/faces/face1.jpg" class="mr-2" alt="image">
                    </div>
                    <label for="exampleInputUsername1">Update Profile</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ENter Your Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">
                </div>
                <button type="submit" class="btn btn-gradient-info mr-2">Edit</button>
                <button class="btn btn-gradient-danger">Cancel</button>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
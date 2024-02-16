<?php include "header.php"; ?>
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="my-3">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-key-variant"></i>
                    </span>
                    Update-Password
                </h3>
            </div>
            <p class="card-description">
                Note - Please update your password once in every 90 days.
            </p>
            <form class="forms-sample">


                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Old Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Enter Your Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">New Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Enter New Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Confirm New Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Confirm Password">
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-info mr-2">Submit</button>
                <button class="btn btn-gradient-danger">Reset</button>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
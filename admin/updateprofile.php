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
            <?php

            include "connection.php";
            $sql = "SELECT * from `users` where ID='" . $_SESSION['ID'] . "'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();

            ?>
            <form class="forms-sample">
                <div class="form-group">
                    <div>
                        <img src="assets/images/faces/face1.jpg" class="mr-2" alt="image">
                    </div>
                    <label for="exampleInputUsername1">Update Profile</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="<?= $row['Username'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Name</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="<?= $row['Name'] ?>" <?= (isset($_GET['edit']) && $_GET['edit'] == "enable") ? '' : 'disabled' ?> value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="<?= $row['Email'] ?>" <?= (isset($_GET['edit']) && $_GET['edit'] == "enable") ? '' : 'disabled' ?> value="">
                </div>
                <?php
                if (!isset($_GET['edit'])) {
                ?>
                    <a href="updateprofile.php?edit=enable" class="btn btn-info mr-2">Edit</a>
                <?php
                }
                ?>
                <?php
                if (isset($_GET['edit']) && $_GET['edit'] == "enable") {
                ?>
                    <button type="submit" class="btn btn-gradient-success mr-2">Update</button>
                    <button type="reset" class="btn btn-gradient-warning mr-2">Reset</button>
                    <a href="updateprofile.php" class="btn btn-danger">Cancel</a>
                <?php
                }
                ?>
            </form>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
<?php
include "header.php";
?>
<script>
    function passwordMatch() {
        if (document.getElementById('oldpassword').value != '' || document.getElementById('newpassword').value != '') {
            if (document.getElementById('oldpassword').value == document.getElementById('newpassword').value) {
                var message = "New password cannot be same as Old Password";
                document.getElementById('errormessage').innerHTML = message;
                $('button[type="submit"]').prop('disabled', true);
            } else if (document.getElementById('confirmpassword').value != document.getElementById('newpassword').value) {
                var message = "New and Confirm Password does not match.";
                document.getElementById('errormessage').innerHTML = message;
                $('button[type="submit"]').prop('disabled', true);
            } else {
                document.getElementById('errormessage').innerHTML = '';
                $('button[type="submit"]').prop('disabled', false);
            }
        } else {
            $('button[type="submit"]').prop('disabled', true);
        }
    }
</script>
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
            <!-- <label class="col-sm-3 col-form-label text-danger"><?= isset($indicator) ? $message : '' ?></label> -->
            <label id="errormessage" class="col-sm-3 col-md-12 col-form-label text-danger"></label>
            <form class="forms-sample" method="post">
                <div class="form-group row">
                    <label for="oldpassword" class="col-sm-3 col-form-label">Old Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Enter Your Password" onKeyUp="passwordMatch()" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="newpassword" class="col-sm-3 col-form-label">New Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="Enter New Password" onKeyUp="passwordMatch()" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="confirmpassword" class="col-sm-3 col-form-label">Confirm New Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" onKeyUp="passwordMatch()" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-info mr-2">Submit</button>
                <button class="btn btn-gradient-danger">Reset</button>
            </form>
        </div>
    </div>
</div>

<?php
include "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $indicator = false;

    $old_password = md5($_POST['oldpassword']);
    $new_password = md5($_POST['newpassword']);

    $id = $_SESSION['ID'];

    $sql = "SELECT * FROM `users` WHERE ID ='" . $id . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($new_password != $row['Password']) {
            $sql = "UPDATE `users` SET `Password` = '" . $new_password . "' where `ID` = '" . $id . "'";
            if ($conn->query($sql) === TRUE) {
?>
                <script>
                    document.getElementById('errormessage').innerHTML = 'Password Changed';
                    document.getElementById('errormessage').className = 'text-success';
                </script>
            <?php
            }
        } else {
            ?>
            <script>
                document.getElementById('errormessage').innerHTML = 'Current Password must not be match with Old Password';
            </script>
<?php
        }
    }
}
$conn->close();
include "footer.php";
?>
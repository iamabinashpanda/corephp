<?php include 'header.php' ?>
<h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-contacts"></i>
    </span>
    Category
</h3>
<div class="row my-3">
    <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
            <a href="addcategory.php" class="btn purchase-button btn-gradient-info">Add New</a>
        </span>
    </div>
</div>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Banner
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    O/P
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    <img src="assets/images/faces/face1.jpg" class="mr-2" alt="image">
                                </td>
                                <td>
                                    <b>Mobile</b>
                                </td>
                                <td>
                                <a href="#" class="btn btn-gradient-info">Edit</a>
                                    <a href="#" class="btn btn-gradient-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
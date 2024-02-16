<?php include "header.php" ?>
<h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-cart"></i>
    </span>
    Order
</h3>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card my-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Details</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tracking ID</th>
                            <th>Order Date</th>
                            <th>Status</th>
                            <th>O/P</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td><label class="badge badge-danger">Pending</label></td>
                            <td>
                                <a href="#" class="btn btn-gradient-info">Show</a>
                                <a href="#" class="btn btn-gradient-danger">Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td><label class="badge badge-warning">Booked</label></td>
                            <td>
                                <a href="#" class="btn btn-gradient-info">Show</a>
                                <a href="#" class="btn btn-gradient-danger">Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td><label class="badge badge-info">Dispatched</label></td>
                            <td>
                                <a href="#" class="btn btn-gradient-info">Show</a>
                                <a href="#" class="btn btn-gradient-danger">Update</a>
                            </td>
                        </tr>
                        <tr>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td><label class="badge badge-success">Delivered</label></td>
                            <td>
                                <a href="#" class="btn btn-gradient-info">Show</a>
                                <a href="#" class="btn btn-gradient-danger">Update</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php" ?>
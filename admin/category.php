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
                            <?php
                            include_once "connection.php";
                            $sql = "SELECT * FROM category";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $i = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $i++;
                            ?>
                                    <tr>
                                        <td>
                                            <?= $i ?>
                                        </td>
                                        <td>
                                            <img src="<?= 'uploads/' . $row['Filename'] ?>" class="mr-2" alt="<?= $row['Filename'] ?>">
                                        </td>
                                        <td>
                                            <b><?= strtoupper($row['Name']) ?></b>
                                        </td>
                                        <td>
                                            <div class="modal fade" id="<?= $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title" id="exampleModalLabel"><?= $row['Name'] ?></h1>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img src="<?= "uploads/".$row['Filename'] ?>" alt="<?= $row['Filename'] ?>" class="mb-2 mw-100 w-100 rounded">
                                                            <div class="form-group">
                                                                <label for="description">Description</label>
                                                                <textarea class="form-control" id="description" name="description" rows="4" disabled><?= $row['Description'] ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <a href="editcategory.php?id=<?=base64_encode($row['ID'])?>" class="btn btn-gradient-success text-light">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <a href="#" class="btn btn-gradient-info">Edit</a> -->
                                            <button type="button" class="btn btn-gradient-primary" data-toggle="modal" data-target="<?= "#" . $i ?>">
                                                View
                                            </button>
                                            <a href="<?= 'deletecategory.php?id=' . base64_encode($row['ID']) ?>" class="btn btn-gradient-danger">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
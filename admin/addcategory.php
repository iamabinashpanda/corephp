<?php include 'header.php';
include_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $time = date("d-m-Y") . "-" . time();
    $targetDir = "uploads/";
    $img = basename($_FILES["imageupload"]["name"]);
    $file_name = $time . "-" . $img;
    $targetFilePath = $targetDir . $file_name;

    $sql = "INSERT INTO `category` (`Name`, `Filename`, `Description`) VALUES ('" . $_POST['name'] . "', '" . $file_name . "', '" . $_POST['description'] . "')";
    if ($conn->query($sql) === TRUE) {
        move_uploaded_file($_FILES["imageupload"]["tmp_name"], $targetFilePath);
        header("location:category.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-contacts"></i>
    </span>
    Category
</h3>
<div class="col-12 grid-margin stretch-card my-3">
    <div class="card">
        <div class="card-body">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-bookmark-plus"></i>
                </span>
                Add New Category
            </h3>
            <hr>
            <form class="forms-sample" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label>File Upload</label>
                    <input type="file" name="imageupload" id="imageupload" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <label class="file-upload-browse btn btn-gradient-primary" for="imageupload">Upload</label>
                        <div id="img-preview" class="m-1"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Textarea</label>
                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                <a href="category.php" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>

<script>
    const chooseFile = document.getElementById("imageupload");
    const imgPreview = document.getElementById("img-preview");
    chooseFile.addEventListener("change", function() {
        getImgData();
    });

    function getImgData() {
        const files = chooseFile.files[0];
        if (files) {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function() {
                imgPreview.style.display = "block";
                imgPreview.innerHTML = '<img class="mw-50 w-50 rounded" src="' + this.result + '" />';
            });
        }
    }
</script>
<?php include 'footer.php' ?>
<?php
if (isset($_GET['id'])) {
    include_once "connection.php";
    $sql = "SELECT * FROM category where ID ='" . base64_decode($_GET['id']) . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            if (unlink('uploads/' . $row['Filename'])) {
                $sql = "DELETE FROM category WHERE ID ='" . base64_decode($_GET['id']) . "'";
                $result = $conn->query($sql);
                header('location:category.php');
            }
        }
    }
}
else
{
    header('location:error404.php');
}
?>

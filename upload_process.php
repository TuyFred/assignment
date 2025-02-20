<?php
if ($_FILES['fileToUpload']['error'] == 0) {
    $target = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target)) {
        echo "<h2>File uploaded successfully!</h2>";
    } else {
        echo "<h2>File upload failed.</h2>";
    }
} else {
    echo "<h2>No file uploaded.</h2>";
}
?>

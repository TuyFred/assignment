<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a File</h2>
    <form action="upload_process.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload">
        <button type="submit">Upload</button>
    </form>
</body>
</html>

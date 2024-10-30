<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Files</title>
</head>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    Select the file :<input type='file' name='files[]'multiple>
    <button type="submit" name='submit'>Upload</button>
</form>
</body>
</html>
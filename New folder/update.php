<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST['filename'];
    $content = $_POST['content'];

    if (file_exists($filename)) {
        $file = fopen($filename, 'w');
        fwrite($file, $content);
        fclose($file);
        echo "File updated successfully: $filename";
    } else {
        echo "File not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update File</title>
</head>
<body>
    <h1>Update File</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="filename" placeholder="Enter filename"><br>
        <textarea name="content"></textarea><br>
        <input type="submit" value="Update File">
    </form>
</body>
</html>

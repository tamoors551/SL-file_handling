<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $filename = $_GET['filename'];

    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        echo "File Content: <br>$content";
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
    <title>Read File</title>
</head>
<body>
    <h1>Read File</h1>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="filename" placeholder="Enter filename">
        <input type="submit" value="Read File">
    </form>
</body>
</html>

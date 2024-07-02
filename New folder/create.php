<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];
    
    $filename = uniqid() . ".txt";
    $file = fopen($filename, 'w');
    fwrite($file, $content);
    fclose($file);

    echo "File created successfully: $filename";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create File</title>
</head>
<body>
    <h1>Create File</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <textarea name="content"></textarea><br>
        <input type="submit" value="Create File">
    </form>
</body>
</html>

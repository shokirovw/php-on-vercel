<?php 
    $n = rand(1, 10);

    $contents = file_get_contents("https://jsonplaceholder.typicode.com/posts/".$n);

    $obj = json_decode($contents, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP on Vercel</title>
</head>
<body>
    <p style="color: red; text-align:center;"><?php echo $obj["title"]; ?></p>
</body>
</html>
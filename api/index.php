<?php 
    $n = rand(1, 10);

    $contents = file_get_contents("https://jsonplaceholder.typicode.com/posts/".$n);

    $obj = json_decode($contents, true);

    echo $obj["title"];

    $file = fopen("page.html", "w");

    fwrite($file, "<p>My name is John Doe</p>");

    fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP on Vercel</title>
</head>
<body>
    <p style="color: red; text-align:center;"><?php echo "Hello World dude"; ?></p>
</body>
</html>
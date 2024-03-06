<?php
$name = [
    1 => 'NICK',
    5 => 'STEVE',
    4 => 'JOY',
];

echo $name[1];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?PHP echo HTMLSPECIALCHARS($_SERVER['PHP_SELF']) ?>" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name"><br>
            <label for="name">Email Address:</label>
            <input type="text" name="name"><br>
            <label for="password">Password:</label>
            <input type="password">
        </div>
        <input type="button" value="submit">
    </form>
</body>

</html>
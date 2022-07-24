<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li> <?= $_SERVER['HTTP_HOST']; ?> </li>
        <li> <?= $_SERVER['DOCUMENT_ROOT']; ?> </li>
        <li> <?= $_SERVER['SERVER_NAME']; ?> </li>
        <li> <?= $_SERVER['SERVER_PORT']; ?> </li>
        <li> <?= $_SERVER['PHP_SELF']; ?> </li>
        <li> <?= $_SERVER['REQUEST_URI']; ?> </li>
        <li> <?= $_SERVER['SERVER_SOFTWARE']; ?> </li>
        <li> <?= $_SERVER['HTTP_USER_AGENT']; ?> </li>
        <li> <?= $_SERVER['REMOTE_ADDR']; ?> </li>
        <li> <?= $_SERVER['REMOTE_PORT']; ?> </li>
    </ul>
</body>

</html>
<?php
?>

<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>
    <link rel="stylesheet" href="bootstrap.css">
</header>
<body>
<table class="table table-secondary table-hover">
    <thead>
        <tr>
            <th scope="col">Dnes</th>
            <th scope="col">Zajtra</th>
            <th scope="col">Pozajtra</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td id='dnes'></td>
            <td id='zajtra'></td>
            <td id='pozajtra'></td>
        <tr>
    </tbody>
</table>

<a href="index.php" class="link-primary position-absolute align-bottom">späť</a>
<script  src="script.js"></script>
</body>
</html>

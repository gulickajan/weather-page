<?php
if (isset($_POST["najdi"])) {
    header("location:Weather.php");
    die;
}
?>

<!doctype html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
</head>
<header>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</header>
<body>

<form action="index.php" class="row g-3" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <label for="city" class="form-label">Vlož mesto</label>
        <input type="text" class="form-control" name="city" id="city" onchange="loadDocWeather()">
    </div>
    <div class="col-12 p-3 text-end">
        <button type="submit" class="btn btn-danger" id="najdi" name="najdi">Nájdi</button>
    </div>
</form>
</body>
<footer>
    <script src="script.js"></script>
</footer>
</html>

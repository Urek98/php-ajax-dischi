<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api dischi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<nav>
<div class="header-section flex">
    <img class="logo" src="./img/spotify-logo.png" alt="logo" />
    <div>
      <select>
        <option>All</option>
        <option>Rock</option>
        <option>Pop</option>
        <option>Jazz</option>
        <option>Metal</option>
      </select>
    </div>
  </div>
</nav>

    <div class="container">

    <?php

    require_once __DIR__ . "/database/database.php";

    foreach ($database as $disc => $value) {
        echo
        "<div class = 'album-card'>
    <img class = 'album-img' src='{$value['poster']}' alt='poster'>
     <div class = 'album-title'>{$value['title']}</div>
     <div>{$value['author']}</div>
     <div>{$value['year']}</div>
     </div>";
    }

    ?>
    </div>
</body>

</html>
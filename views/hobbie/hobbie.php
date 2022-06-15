<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/main.css">
  <script src="https://kit.fontawesome.com/24229652dd.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Empire</title>
</head>

<body class="dashboard__body">
  <h1>Empire Army!</h1>
  <div class="cards__container">
    <?php
    foreach ($hobbies as $index => $value) {
      echo "
        <div class='card ' style='width: 18rem;'>
        <div class='card-img-top character_pic' style='
        background-image: url({$value['type']});'></div>
        <div class='card-body'>
            <h5 class='card-title'>{$value['name']}</h5>
        </div>
    </div>
                ";
    }
    ?>
  </div>

  <div class="navigation__buttons">
    <a id="home" class="btn btn-secondary" href="./">Back <i class="fa-brands fa-galactic-republic"></i></a>
  </div>
</body>

</html>
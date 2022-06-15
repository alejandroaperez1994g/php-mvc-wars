<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aliance</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://kit.fontawesome.com/24229652dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body class="dashboard__body">
    <h1>Aliance Army!</h1>
    <style type="text/css">

    </style>



    <div class="cards__container">
        <?php
        foreach ($employees as $index => $employee) {
            echo "
        <div class='card ' style='width: 18rem;'>
        <div class='card-img-top character_pic' style='
        background-image: url({$employee['avatar']});'></div>
        <div class='card-body'>
            <h5 class='card-title'>{$employee['name']}</h5>
            <a href='?controller=employee&action=getEmployee&id=" . $employee["id"] . "' class='btn btn-primary'>Edit <i class='fa-solid fa-book-journal-whills'></i></a>
            <a href='?controller=employee&action=deleteEmployee&id=" . $employee["id"] . "' class='btn btn-danger'>Delete <i class='fa-brands fa-galactic-republic'></i></a>
        </div>
    </div>
                ";
        }
        ?>
    </div>

    <div class="navigation__buttons">
        <a id="home" class="btn btn-primary" href="?controller=employee&action=openForm">Create <i class="fa-solid fa-jedi"></i></a>
        <a id="home" class="btn btn-secondary" href="./">Back <i class="fa-brands fa-old-republic"></i></a>
    </div>


</body>




</html>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Личный кабинет</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
  <div class=" container-fluid">
    <a class="navbar-brand" href="index.php">Библиотека</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

       
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Выход</a>
        </li>
        <p>hello</p>  
    </ul>
      
    </div>
    </div>
  </nav>
  <?php  
  $age = (int)$_SESSION['age'];
   $message ="";
  if ($age < 18) {
    $message ="Акция 'весенняя скидка'  для всех моложе 18 ";
  } elseif ($age > 50) {
    $message ="Акция 'осенняя скидка' для всех старше 50 ";
  }
 


  //var_dump($message);
  echo "Ваш логин - " . $_SESSION['username'];
  echo "<br>Ваш пароль - " . $_SESSION['password'];
  echo "<br>Ваш возраст - " . $_SESSION['age'];
  echo "<br> " . $message;
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
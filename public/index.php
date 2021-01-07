<?php 
session_start();
require_once("../includes/db_connect.php");
$message = "";


if (isset($_POST['submit'])) {
  $username = $_POST['login'];
  $password = $_POST['password'];
  
  $sql_login = "SELECT * FROM users WHERE password='{$password}' and username='{$username}'";
  $result_user = mysqli_query($connection, $sql_login);
  $row = mysqli_fetch_array($result_user);
  


  if (mysqli_num_rows($result_user) > 0) {
    $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  $_SESSION['age'] = $row['age'];
    
    header("Location: cabinet.php");  
    
  }else {
     
    $message = "<p style='color:red'> Неверно логин или пароль </p>";
      
      
  }
};

?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
  <!-- Custom styles for this template -->
  <link href="stylesheets/signin.css" rel="stylesheet">
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
          <a class="nav-link" href="#">Логин</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Регистрация</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <div class="text-center bodyMod">
    <main class="form-signin">
    <form action="index.php" method="post">
        <img class="mb-4" src="images/logo-library.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>
       
        <input type="text" id="inputEmail" class="form-control" placeholder="Логин" name="login" required autofocus>
       
        <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" name="password" required>

        <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Войти</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
      </form >
     <?php echo $message; ?>
    </main>
  </div>
</body>
</html>




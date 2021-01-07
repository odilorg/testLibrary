<?php 
require_once("../includes/db_connect.php");

$message ="";



if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $age = (int)$_POST['age'];
    $password = $_POST['password'];

    $sql_user = "SELECT * FROM users WHERE username='{$username}'";
    $result_user = mysqli_query($connection, $sql_user);

    if (mysqli_num_rows($result_user) > 0) {
        $message = ' <p style="color:red"> Ваш логин существует </p>';
        
    } else{
        $query = "INSERT INTO users (";
        $query .= "username, password, age";
        $query .= ") VALUES (";
        $query .= "'{$username}', '{$password}', {$age} ";
        $query .= ")";
        $results = mysqli_query($connection, $query);
        $message =  ' <p style="color:blue">Вы успешно зарегестрированы</p>';
        header("Location: index.php");
        
        
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
          <a class="nav-link" href="index.php">Логин</a>
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
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
        <img class="mb-4" src="images/logo-library.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста зарегистрируйтесь</h1>
        <input type="text" id="username" class="form-control" placeholder="Логин" name="username" required autofocus>
        
        <input type="text" id="age" class="form-control" placeholder="Возраст" name="age" required >
       
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Пароль" required>
        <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Отправить</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
      </form>
      <?php echo $message;?>
    </main>
  </div>
</body>
</html>




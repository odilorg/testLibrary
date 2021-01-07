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
          <a class="nav-link" href="login.php">Логин</a>
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
      <form>
        <img class="mb-4" src="images/logo-library.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста зарегистрируйтесь</h1>
        <input type="text" id="username" class="form-control" placeholder="Логин" nane="username" required autofocus>
        <input type="text" id="firstName" class="form-control" placeholder="Имя" nane="firstName" required >
        <input type="text" id="age" class="form-control" placeholder="Возраст" nane="age" required >
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required >
        <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Отправить</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
      </form>
    </main>
  </div>




</body>

</html>
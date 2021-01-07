<?php 
require_once("../includes/db_connect.php");
//require_once("../includes/functions.php");

//запрос на БД на уникальность логина
$age = $_POST['age'];
$age=(int)$age;
var_dump($_POST['username']);
var_dump($age);
var_dump($_POST['password']);


if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $age = (int)$_POST['age'];
    $password = $_POST['password'];

    $sql_user = "SELECT * FROM users WHERE username='{$username}'";
    $result_user = mysqli_query($connection, $sql_user);

    if (mysqli_num_rows($result_user) > 0) {
        echo "Ваш логин существует";
        header("Location: ");
    } else{
        $query = "INSERT INTO users (";
        $query .= "username, password, age";
        $query .= ") VALUES (";
        $query .= "'{$username}', '{$password}', {$age} ";
        $query .= ")";
        $results = mysqli_query($connection, $query);
        echo "Вы зарегистрированы";
        exit();
    }    
};

?>


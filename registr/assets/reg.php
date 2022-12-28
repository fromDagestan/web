<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reg</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="введите своё полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="введите адрес своей почты">
        <label>Пароль</label>
        <input type="text" name="password" placeholder="введите пароль">
        <label>Подтверждение пароля</label>
        <input type="text" name="password_confirm" placeholder="подтвердите пароль">
        <label>Изображение профиля</labe>
        <input type="file" name="avatar">
        <button ><a href="vendor/signup.php">войдите</a>зарегистрироваться</button>
        <p>
           у вас усть аккаунт? - <a href="index.php">войдите</a>!
        </p>
        <p class="msg">
          <?= $_SESSION['massage'] ?>
          </p>
    </form>
</body>
</html>
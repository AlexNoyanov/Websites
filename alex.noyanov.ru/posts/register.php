
 <?php include "./database.php" ?>
<?
// Страница регистрации нового пользователя

// Соединямся с БД
//$link=mysqli_connect("localhost", "root", "alexnoyanov1999", "WebSite");
//$link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");

  //include "./database.php" 

if(isset($_POST['submit']))
{
    //$err = [];

    // проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $login = $_POST['login'];

        // Убераем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
        header("Location: indexAdmin.php"); exit();
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset=utf-8 />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
 body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: silver;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form method = "POST" >
  <div class="container">
    <h2>Регистрация новых пользователей на сайте</h2>
    <p>Чтобы добвавить новго пользователя пожалуйста заполните  все регистрационные поля.</p>
    <hr>

    Логин <input name="login" type="text" required><br>
    Пароль <input name="password" type="password" required><br>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input class = 'registerbtn' name="submit" type="submit" value="Зарегистрировать нового пользователя">

  
  
</form>


</body>
</html>


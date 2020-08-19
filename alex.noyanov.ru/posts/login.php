<?php include "./database.php" ?>

<?

$cookiePath = "/posts/";

// CREATE TABLE user(user_id UNSIGNED INT(11) AUTO_INCREMENT PRIMARY KEY, user_login VARCHAR(30), user_password VARCHAR(32), user_hash VARCHAR(32), user_ip UNSIGNED INT(10) )

function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

//$link=mysqli_connect("sql7.freemysqlhosting.net", "sql7335745", "UqMwWskski", "sql7335745");
  

if(isset($_POST['submit'])  )
{
    
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    
        // To check if this is admin password:
       $adminquery = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='admin' LIMIT 1");
       $admindata = mysqli_fetch_assoc($adminquery);
        // Check user input with admin password here:
        if($admindata['user_password'] === $_POST['password'] ){
             $hash = md5(generateCode(10));

            if(!empty($_POST['not_attach_ip']))
            {
                $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
            }

            mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");
        
            setcookie("id", $data['user_id'], time()+60*60*24*30, cookiePath);
            setcookie("hash", $hash, time()+60*60*24*30, cookiePath, null, null, true);
        
            header("Location: indexAdmin.php"); exit();
        }else{
            //if($_POST['login'] === "admin"){
            //print "<div class='containerLogin'>Вы ввели неправильный пароль администратора!</div> <p></p>";
         //} 
        }


    if($data['user_password'] === md5(md5($_POST['password'])))
    { 
        $hash = md5(generateCode(10));

        if(!empty($_POST['not_attach_ip']))
        {
            
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }

        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");
        
        setcookie("id", $data['user_id'], time()+60*60*24*30, "/");
        setcookie("hash", $hash, time()+60*60*24*30, "/", null, null, true); 
        
        header("Location: index.php"); exit();
    }
    else
    {
        print "<div class='containerLogin'>Вы ввели неправильный логин/пароль</div> <p></p>";
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
.containerLogin {
    padding: 16px;
    background-color: #f797a5;
}

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
  background-color: #3b403c; /* #4CAF50; */
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

<form method = "POST">
  <div class="container">
    <h1>Пожалуйста авторизуйтесь</h1>
    <p>Чтобы войти на сайт пожалуйста авторизуйтесь на странице.</p>
    <hr>
        Логин <input name="login" type="text" required><br>
        Пароль <input name="password" type="password" required><br>
        Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"><br>
    <input name="submit" type="submit" class="registerbtn" value="Войти">
    
  </div>
</form>

</body>
</html>


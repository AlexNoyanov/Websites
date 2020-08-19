<?php 

    include "./database.php" ;

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $query = mysqli_query($link, "SELECT * FROM users WHERE ID = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['ID'] !== $_COOKIE['id']))
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/", null, null, true); 
        print "ОШИБКА ВХОДА!";
    }
    else
    {
        //print "<div style = 'background-color: lightgreen'>Привет, ".$userdata['user_login'].". Все работает! </div>";
    }
}
else
{
    //print "<div class = 'containerWarning' >Включите куки </div> <p> </p>";
    header("Location:  login.php"); 
    exit();
}
?>

<?php include "./database.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>

 <meta charset=utf-8 />

<style type="text/css">
  .containerWarning {
    padding: 10px;
    background-color: #fcc00f;
}

.body{
  background-image:'images/adminpattern2.png' ;
}

.container {
  background-color: silver;
}

.bodyPage{
  background-color: white;
  margin-top:10px;
  margin-bottom:50px;
}

.registerbtn{
  background-color: lightblue;
  font-size: 20px;
  border-radius: 20px;

}

</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <meta charset="utf-8">
        <title>Редактирование статей</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>


 <link rel="stylesheet" type="text/css" href="pageStyle.css">

</head>

<body class = "adminBody">
<?php include "./adminNavbar.php" ?>
 
 <div class = 'bodyPage'>
  <h2> Редактировать статью</h2>

  <form method = "POST">
  <div class="container">
       <h3 style = "color:black;"> Введите имя статьи: </h3>
        <input  style = "font-size: 20px;" name="articleID" type="text" required value = "<? echo $_POST['articleID']?>">
      <!--   <input name="submit" type = "submit" onclick="location.href='changeArticles.php'" class="registerbtn" value="Загрузить"> -->
       <a href= "changeArticles.php?action=saveData" >Сохранить в базу! </a>

        <input  name="submit" type = "submit" class="registerbtn" value=" Загрузить  "<?php htmlspecialchars($_POST["action"]) . '!';?>" onclick="location.href='changeArticles.php?action=saveData';" >

        <br>
        <? echo "Имя редактируемой статьи: ".$_POST['articleID'];
          
        ?>
           <input type="hidden" name="articleName" value="<?php echo $_POST['articleID']; ?>">
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                


                <? 
              if(isset($_POST['submit']) )
  {
                        //$articleName = $_POST['articleID'] ;
                  $editor_data = $_POST[ 'editor1' ];
                  $articleName = $_POST['articleID'];

       
   
 

                  // Сохранить изменения статьи в базу данных:
                if( isset($_GET['action']) and $_GET['action']  == 'saveData')
                {
                  // $editor_data = $_GET[ 'editor1' ];
                   echo $_GET['editor1'];
                   $articleName = $_POST['articleID'];

                  $query = mysqli_query($link, "UPDATE data SET article = '".$editor_data."' WHERE theme = '".$articleName."'");
                }






                   $link->set_charset("utf8");

        $query = mysqli_query($link, "SELECT `article` FROM `data` WHERE `theme` = '".$articleName."'");
        $data = mysqli_fetch_assoc($query);

            // Printing Array with foreach:
        if($data != NULL){
           foreach($data as $result) {
              echo $result, '<br>';
                          } 
                              //header("Location: changeArticles.php"); exit();
                        }else{
                          echo "Статья не выбрана!";
                         }

                                    }else{
                                  
                            $link->set_charset("utf8");

                            $query = mysqli_query($link, "SELECT `article` FROM `data` WHERE `theme` = '".$articleName."'");
                            $data = mysqli_fetch_assoc($query);

                                // Printing Array with foreach:
                            if($data != NULL){
                        foreach($data as $result) {
                            echo $result, '<br>';
                          } 
                              //header("Location: changeArticles.php"); exit();
                        }else{
                          echo "Статья не выбрана!";
                         }   




  }


    
                ?>
            </textarea>

            <?      echo $_POST['editor1'];?>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
          </div>
</form>

    <hr>
  <h2> Все статьи на сайте:</h2>


<?
    //Вывод всех записей
    if ($link == false){
        echo "Ошибка: Невозможно подключиться к MySQL <br>" . mysqli_connect_error();
    }
    else {
          // Соединение успешнео установлено!
    }

    echo "<meta charset=utf-8>";
    echo "<table border=1 bgcolor=#FFFFFF
    bordercolor=#000000 cellspacing=0
    >";
    echo "<tr>";
    echo "<td>"." # ";
    echo "</td>";
    echo "<td>"."Тема статьи";
    echo "</td>";
    echo "<td>"."Статья";
    echo "</tr>";

    $link->set_charset("utf8");
    $query2 = " SELECT * FROM `data` ";
    $result = $link->query($query2);

    if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["ID"];
            echo "</td>";
            echo "<td>".$row["theme"];
            echo "</td>";
            echo "<td>".$row["article"];
            echo "</td>";
            echo "</tr>";           
        }       
    }else{
        echo "Записей нет";
    }
        echo "</table>";
    $link->close();

?>

</div>

 </body>
</html>
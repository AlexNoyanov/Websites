<?php include "./database.php" ;


 if(isset($_POST['submit']) )
  {
                  // Сохранить изменения статьи в базу данных:

                  $editor_data = $_GET[ 'editor1' ];
                  $articleTheme  = $_GET['articleName'];
                  $query = mysqli_query($link, "UPDATE data SET article = '".$editor_data."' WHERE theme = '".$articleTheme."'");
               		
               		header("Location: changeArticle.php");

	}


?>
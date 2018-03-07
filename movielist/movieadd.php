<?php

if (isset($_POST["txtTitle"])){
   if (isset($_POST["txtRating"])){
       $title = $_POST["txtTitle"];
        $rating = $_POST["txtRating"];

       //Database connection stuff
       include "../includes/dbConn.php";

       try{
           $db = new PDO($dsn, $username, $password, $options);

           //system prepares what needs to be executed
           $sql = $db->prepare("insert into movielist (movieTitle, movieRating) VALUE(:Title, :Rating)");
           $sql->bindValue(":Title",$title);
           $sql->bindValue(":Rating", $rating);
           //execute - returns all returns all rows
           $sql->execute();



       } catch(PDOException $e){
           $error = $e ->getMessage();
           echo "Error: $error";
       }

       header("Location:movielist.php");

   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Movie</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyles.css"/>
    <link rel="stylesheet" type="text/css" href="../css/tables.css"/>
    <link rel="stylesheet" type="text/css" href="../css/buttons.css"/>
</head>

<body>
<div class="page-wrap">
    <header class="site-header">
      <?php include "../includes/header.php" ?>
    </header>
    <div class="flex-box">
    <nav class="main-nav">
        <?php include "../includes/menu.php" ?>
        </nav>

    <section class="main-content">
         <h2>Add New Movie</h2>

        <div class="content">
           <div class="form" style="width:500px;">
               <form method="post">
                   <label for="title">Movie Title</label>
                   <input type="text" name="txtTitle" id="txtTitle" placeholder="Movie title..." required>
                   <label for="rating">Movie Rating</label>
                   <input type="text" name="txtRating" id="txtRating" placeholder="Movie rating..." required>

                    <input type="submit" value="Add Movie">

                   <a class="button" href="#" onclick="history.go(-1); return(false)">Cancel</a>
               </form>

           </div>
        </div>

    </section>

    <aside class="right-sidebar">Sidebar</aside>
    </div> <!-- /flex-box -->

    <footer>
        <?php include "../includes/footer.php" ?>
    </footer>

</div> <!-- /page-wrap -->


</body>
</html>

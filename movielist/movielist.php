<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie List</title>
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
         <h2>Movie List</h2>

        <div class="content">
            <table>
                <thead>
                    <tr>
                        <th>Movie ID</th>
                        <th>Movie Title</th>
                        <th>Movie Rating</th>
                    </tr>
                </thead>

                    <tbody>

            <?php

              include "../includes/dbConn.php";

            try{
            $db = new PDO($dsn, $username, $password, $options);

                //system prepares what needs to be executed
                $sql = $db->prepare("select * from movielist");

                //execute - returns all returns all rows
                $sql->execute();

                // fetch - get first record in table
                $row = $sql->fetch();

                while ($row != null){
                    echo "<tr>";
                    echo "<td>" . $row["movieID"] . "</td>";
                    echo "<td>" . $row["movieTitle"] . "</td>";
                    echo "<td>" . $row["movieRating"] . "</td>";
                    echo "</tr>";

                    $row = $sql->fetch();
                }
           } catch(PDOException $e){
                $error = $e ->getMessage();
                echo "Error: $error";
            }
           ?>
             </tbody>
           </table>

           <a class="button" href="movieadd.php">Add Movie</a>
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

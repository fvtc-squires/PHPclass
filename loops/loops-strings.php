<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops & Strings</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyles.css"/>
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
         <h2>Loops & Strings</h2>

        <div class="content" style="text-align:center;">
           <p>
               <?php
                 $number = 100;

                 $result = "<h1>";
                 $result .= $number;
                 $result .= "</h1>";

                 echo $result;
                //echo "<h1>" . $number . "</h1>";
                 //echo $number;

               $number1 = 150;
               $number2 = 55;

               $number = $number1 + $number2;
               echo $number;
               echo "<br>";
               echo '$number';

               //LOOPS
               $i = 1;
               while ($i < 7){
                   echo "<h$i>Hello World!</h$i>";
                   //$i = $i +1;
                   //$i += 1;
                   $i++;
               }

              /* $i = 6;
               while ($i > 0){
                   echo "<h$i>Hello World!</h$i>";
                   //$i = $i +1;
                   //$i += 1;
                   $i--;
               }

                //DO LOOP
                $i=6;
                do{
                    echo "<h$i>Hello World!</h$i>";
                    $i--;
                }while($i > 0 );

                //FOR LOOP
               for($i=1; $i < 7; $i++){
                   echo "<h$i>Hello World!</h$i>";
               }
                */
                //STRINGS

               $full_name = "Doug Smith";

              // D o u g   S m i t h
              // 0 1 2 3 4 5 6 7 8 9

              $position = strpos($full_name, " ");
              echo $position;

              echo "<br><br><hr><br>";

               echo $full_name;
              echo "<br>";

               $full_name = strtoupper($full_name);
               echo $full_name;
               $full_name = strtolower($full_name);
               echo "<br>";
               echo $full_name;
               echo "<br><br><hr><br>";

               $nameParts = explode(' ', $full_name);
               echo $nameParts[0];
               echo "<br>";
               echo $nameParts[1];


               ?>

           </p>

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

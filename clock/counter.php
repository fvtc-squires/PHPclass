<?php
 /* This is a countdown timer
  * Burning Man 8-25-2020
  */

 // Variables
    $secPerMinutes = 60;
    $secPerHour = 60 * $secPerMinutes;
    $secPerDay = 24 * $secPerHour;
    $secPerYear = 365 * $secPerDay;

    //Current Time
    $now = time();

    // Burning Man Time - start with 12 (noon) -- Show difference in seconds
    $burningManTime = mktime(12,0,0,8,25,2020);

    //number of seconds between then & now
    $seconds = $burningManTime - $now;
    $Years = floor($seconds/$secPerYear);

    //Subtract 2 years of seconds out of the current seconds to get days
    $seconds = $seconds - ($Years * $secPerYear);
    $Days = floor($seconds / $secPerDay);

    $seconds = $seconds - ($Days * $secPerDay);
    $Hours = floor($seconds / $secPerHour);

    $seconds = $seconds - ($Hours * $secPerHour);
    $Minutes = floor($seconds / $secPerMinutes);
    $seconds2 = $seconds - ($Minutes * $secPerMinutes);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Counter</title>
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
         <h2>Burning Man</h2>

        <div class="content">
           1970 to Now: <?=$now?> secs <br>
           1970 to Burning Time: <?=$burningManTime?> secs <br>
           Now to Burning Man: <?=$seconds?> secs <br>
           Years until Burning Man: <?=$Years?> <br>
           Days until Burning Man: <?=$Days?> <br>
           Hours until Burning Man: <?=$Hours?> <br>
           Minutes until Burning Man: <?=$Minutes?> <br>
           Seconds until Burning Man: <?=$seconds2?>
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

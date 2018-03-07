<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>template</title>
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
         <h2>Project Name</h2>

        <div class="content">
           Project Content
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

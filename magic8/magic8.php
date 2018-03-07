<?php

//$names = array("Bob"=>"Day", "Steve"=>"Smith");
//echo "Bob's last name is " . $names["Bob"] . ".";
session_start();
if (isset($_POST["txtQuestion"])){
    $question = $_POST["txtQuestion"];
}else{
    $question="";
};

if (isset($_SESSION["PrevQuest"])){
    $PrevQuest = $_SESSION["PrevQuest"];
}else{
    $PrevQuest="";
};



//Fill a list of responses
$responses = array();
$responses[0] = "It is certain";
$responses[1] = "It is decidedly so";
$responses[2] = "Without a doubt";
$responses[3] = "Yes, Definitely";
$responses[4] = "You may rely on it";
$responses[5] = "As I see it, yes";
$responses[6] = "Most likely";
$responses[7] = "Outlook good";
$responses[8] = "Yes";
$responses[9] = "Signs point to yes";
$responses[10] = "Reply hazy, try again";
$responses[11] = "Ask again later";
$responses[12] = "Better not tell you now";
$responses[13] = "Cannot predict now";
$responses[14] = "Concentrate & ask again";
$responses[15] = "Don't count on it";
$responses[16] = "My reply is no";
$responses[17] = "My sources say no";
$responses[18] = "Outlook not so good";
$responses[19] = "Very doubtful";

if($question==""){
$answer = "ASK ME A QUESTION!!";
}elseif(substr($question,-1) != "?"){
    $answer="An ending question mark (?) is REQUIRED!";
}elseif ($PrevQuest==$question){
    $answer="Please ask a new question!";
}
else{
    $iResponse = mt_rand(0,19);
    $answer=$responses[$iResponse];
    $_SESSION["PrevQuest"]=$question; //puts question to server memory
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Magic 8 Ball</title>
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

    <section class="main-content center">
         <h2>Magic 8 Ball</h2>
            <marquee><?=$answer?></marquee>
        <div class="content">
            <form method="post" action="magic8.php">
                <label>Ask a Question:</label><br>
                <input type="text" name="txtQuestion" id="txtQuestion" value="<?=$question?>"><br>
                <input type="submit" value="Ask the 8 Ball">
            </form>
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

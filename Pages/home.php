<?php 
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/head.php' ?>
    <link rel='stylesheet' href='/zadatakhzs/styles/home.css'/>
    <title>Name - Home Page</title>
</head>

<body>
    <!-- Top Navigation -->
    <div class="my_topnav">
        <a href="/zadatakhzs/pages/user/login_page.php" class="my_login"> Login </a>
        <a href="/zadatakhzs/pages/tabs/dodajEvent.php" class="my_login"> Novi Dogadjaj </a>
        <form class="my_search" method="get" action="">
            <input type="text" name="search" id="search" value="trazi..."/>
            <input type="submit" style="display: none" />
        </form>
    </div>
    <div class="my_main">
        <!-- Menu Bar -->
        <div class="my_menu">
            <a href="tabs/desavanja.php"><img src="../res/images/FilmoviSajmovi.jpg" class="my_icon" name="Desavanja"></a>
            <a href="tabs/koncerti.php"><img src="../res/images/KoncertiIzlozbe.jpg" class="my_icon" name="Koncerti"></a>
            <a href="tabs/mapa.php"><img src="../res/images/Mapa.jpg" class="my_icon" name="Mapa"></a>
            <a href="tabs/konkursi.php"><img src="../res/images/TakKonkursi.jpg" class="my_icon" name="Konkursi"></a>
            <a href="tabs/akcije.php"><img src="../res/images/HumAkcije.jpg" class="my_icon" name="Akcije"></a>
            <a href="tabs/feedback.php"><img src="../res/images/AnketeForumi.jpg" class="my_icon" name="Forum"></a>
        </div>
        <!-- Search Results -->
        <div class="my_results">
            <?php include ROOT.'/zadatakhzs/templates/search.php' ?>
        </div>
    </div>

    <?php include ROOT.'/zadatakhzs/templates/footer.php'; ?>
</body>

</html>
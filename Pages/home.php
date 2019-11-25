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
        <a href="/zadatakhzs/pages/login.php" class="my_login">Login</a>
        <form class="my_search" method="get" action="">
            <input type="text" class="textIn">
            <input type="submit" value="Trazi" class="my_button">
        </form>
    </div>
    <!-- Menu Bar -->
    <div class="my_menu">
        <a href="tabs/desavanja.php"><img src="../res/images/FilmoviSajmovi.jpg" class="my_icon"></a>
        <a href="tabs/koncerti.php"><img src="../res/images/KoncertiIzlozbe.jpg" class="my_icon"></a>
        <a href="tabs/mesta.php"><img src="../res/images/Mapa.jpg" class="my_icon"></a>
        <a href="tabs/konkursi.php"><img src="../res/images/TakKonkursi.jpg" class="my_icon"></a>
        <a href="tabs/akcije.php"><img src="../res/images/HumAkcije.jpg" class="my_icon"></a>
        <a href="tabs/feedback.php"><img src="../res/images/AnketeForumi.jpg" class="my_icon"></a>
    </div>

    <?php include '../templates/footer.php' ?>
    
</body>

</html>
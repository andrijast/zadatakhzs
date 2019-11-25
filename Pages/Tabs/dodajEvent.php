<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/head.php' ?>
    <link rel='stylesheet' href='/zadatakhzs/styles/event.css'/>
    <title>Nov Dogadjaj</title>
</head>

<body>

    <?php include ROOT.'/zadatakhzs/templates/header.php' ?>

    <!-- Opis -->
    <div class="my_newevent">
        <form action="submitEvent.php" methdon="post">
            <input type="text" id="" name="ime" placeholder="ime">
            <input type="text" id="user" name="tip" placeholder="tip">
            <div class="my_areaholder">
                <textarea id="opis"  name="opis"  placeholder="opis"        class="my_longtext"></textarea>
                <div>
                    <textarea id="kopis" name="kopis" placeholder="kratak opis" class="my_shorttext"></textarea>
                    <button type="submit" class="btn" name="login-submit" class="my_button">Posalji</button>
                </div>            
            </div>
        </form>
    </div>

    <?php include ROOT.'/zadatakhzs/templates/footer.php' ?>

</body>

</html>
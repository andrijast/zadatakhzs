<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/head.php' ?>
    <title><?php echo TITLE ?> - Login</title>
</head>

<body>

    <?php include ROOT.'/zadatakhzs/templates/header.php' ?>


    <!-- Login -->
    <div class="frm">
        <form action="/../zadatakhzs/pages/user/login_process.php" method="post">
            <input type="text" name="user" placeholder="Korisnicko ime">
            <input type="password" name="pass" placeholder="Lozinka">

            <button type="submit" class="btn" name="login-submit">Uloguj se</button>
        </form>
    </div>


    <!-- Register -->
    <div class="frm">
        <form action="/../zadatakhzs/pages/user/register_process.php" method="post">
            <input type="text" name="fname" placeholder="Ime">
            <input type="text" name="lname" placeholder="Prezime">
            <input type="text" name="user" placeholder="Korisnicko ime">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Lozinka">
            <input type="password" name="pass-re" placeholder="Ukucajte lozinku ponovo">

            <button type="submit" class="btn" name="register-submit">Registruj se</button>
        </form>
    </div>

    <br>

    <!-- Logout -->
    <div class="frm">
        <form action="/../zadatakhzs/pages/user/logout_process.php" method="post">
            <button type="submit" class="btn" name="logout-submit">Izloguj se</button>
        </form>
    </div>


    <?php include ROOT.'/zadatakhzs/templates/footer.php' ?>

</body>

</html>
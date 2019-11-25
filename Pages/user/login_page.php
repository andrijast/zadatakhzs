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
        <form action="login_process.php" methdon="POST">
            <input type="text" id="user" name="user" placeholder="Korisnicko ime">
            <input type="password" id="pass" name="pass" placeholder="Lozinka">

            <input type="submit" class="btn" name="login-submit" value="Uloguj se">
        </form>
    </div>


    <!-- Register -->
    <div class="frm">
        <form action="register_process.php" methdon="POST">
            <input type="text" id="name" name="name" placeholder="Ime">
            <input type="text" id="lastname" name="lastname" placeholder="Prezime">
            <input type="text" id="user" name="user" placeholder="Korisnicko ime">
            <input type="email" id="email" name="email" placeholder="Email">
            <input type="password" id="pass" name="pass" placeholder="Lozinka">
            <input type="password" id="pass_re" name="pass_re" placeholder="Ukucajte lozinku ponovo">

            <input type="submit" class="btn" name="register-submit" value="Registruj se">
        </form>
    </div>

    <br>

    <!-- Logout -->
    <div class="frm">
        <form action="logout_process.php" method="POST">
            <input type="submit" class="btn" name="logout-submit" value="Izloguj se">
        </form>
    </div>


    <?php include ROOT.'/zadatakhzs/templates/footer.php' ?>

</body>

</html>
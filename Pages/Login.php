<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/head.php' ?>
    <title>Name - Login</title>
</head>

<body>
    <!-- Login -->
    <div id="frm">
        <form action="login_process.php" methdon="POST">
            <label>Username</label>
            <input type="text" id="user" name="user">
            <label>Password</label>
            <input type="password" id="pass" name="pass">

            <input type="submit" class="btn" value="Login">
        </form>
    </div>

    <!-- Register -->
    <div id="frm">
        <form action="register_process.php" methdon="POST">
            <label>Username</label>
            <input type="text" id="user" name="user">
            <label>Email</label>
            <input type="email" id="email" name="email">
            <label>Lozinka</label>
            <input type="password" id="pass" name="pass">
            <label>Ukucajte lozinku ponovo</label>
            <input type="password" id="pass_re" name="pass_re">

            <input type="submit" class="btn" value="Register">
        </form>
    </div>
</body>

</html>
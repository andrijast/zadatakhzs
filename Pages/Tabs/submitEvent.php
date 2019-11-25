<?php

if (isset($_POST['event-submit'])) {

    require $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/connect.php';

    $ime = $_POST['ime'];
    $tip = $_POST['tip'];
    $kopis = $_POST['kopis'];
    $opis = $_POST['opis'];

    if (empty($ime) || empty($tip) || empty($kopis) || empty($opis)) {
        header("Location: ../tabs/dodajEvent.php?error_empty");
        exit();
    }
    $sql = "INSERT INTO events (name, type, short_description, description) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../tabs/dodajEvent.php?error_database");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "ssss", $ime, $tip, $kopis, $opis);
        mysqli_stmt_execute($stmt);
        
        header("Location: ../user/login_page.php?posting=success");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

}

else {
    echo "Pogresan Ulaz";
}
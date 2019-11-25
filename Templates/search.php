<?php 
    if (empty($_GET['search'])) {
        echo "Pretrazite nesto gore";
    } else echo $_GET['search']; 
?>
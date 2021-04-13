<?php
    session_start();

    if (!isset($_SESSION["user"])) {            // ha a felhasználó nincs belépve
        header("Location: login.php");
    }

    // profiladatok kilistázása
    echo "<ul>";
        echo "<li>Felhasználónév: " . $_SESSION["user"]["nev"] . "</li>";
        echo "<li>Mail: " . $_SESSION["user"]["mail"] . "</li>";
    echo "</ul>";
?>
<?php
if (isset($_GET['firstname']) && isset($_GET['lastname'])) {
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];

    echo "Voornaam: " . htmlspecialchars($firstname) . "<br>";
    echo "Achternaam: " . htmlspecialchars($lastname) . "<br>";
} else {
    echo '<a href="?firstname=Tamas&lastname=Ronto">Klik hier om je naam door te geven</a>';
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $nachricht = $_POST["nachricht"];

    
    $empfaenger = "soerenz90@gmail.com";
    $betreff = "Neue Kontaktanfrage";
    $nachricht = "Name: $name\nE-Mail: $email\nNachricht: $nachricht";
    mail($empfaenger, $betreff, $nachricht);
}
?>


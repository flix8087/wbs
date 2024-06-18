<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question1 = isset($_POST['question1']) ? $_POST['question1'] : 'Keine Antwort';
    $data = date("Y-m-d H:i:s") . " - Frage 1: " . $question1 . PHP_EOL;
    file_put_contents("Ergebnisse.txt", $data, FILE_APPEND);
    echo "Danke für deine Teilnahme!";
}
?>
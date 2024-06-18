<?php
$filename = "Ergebnisse.txt";
if (file_exists($filename)) {
    $results = file_get_contents($filename);
    echo nl2br($results); // nl2br()
} else {
    echo "Keine Umfrageergebnisse vorhanden.";
}
?>
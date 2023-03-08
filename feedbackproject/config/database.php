<?php
try {
    $db = new mysqli('localhost', 'root', '', 'feedback');
} catch(Exception $klaida) {
    echo 'Nepavyksta prisijungti prie duomenu bazės <br />';
    exit;
}

echo 'Connected';
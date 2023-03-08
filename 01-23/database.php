<?php
//Tikrinimas ar pavyksta prisijungti prie duomenų bazės
try {
    $db = new mysqli('localhost', 'root', '', 'feedback');
    //$db = mysqli_connect('localhost', 'root', '', 'animals');
} catch(Exception $klaida) {
    echo 'Nepavyksta prisijungti prie duomenu bazės <br />';
    exit;
}

echo 'Kodas kompiliuojamas toliau...';


<?php
echo'<h1>heeloooooo</h1>';
'<h1>heeloooooo</h1>';
$kintamasis = '<h1>dd</h1>';

echo $kintamasis;

$kintamasis=10;
echo'<h2>'. $kintamasis . '</h2>';
$kintamasis++;
echo'<h2>'. $kintamasis . '</h2>';
$kintamasis--;
echo'<h2>'. $kintamasis . '</h2>';
$kintamasis+=20;
echo'<h2>'. $kintamasis . '</h2>';

//print_r ir var_dump funkcijos skirtos atvaizduoti masyvus, tik skrtiingais budais
$masyvas = array('raktinis_zodis' => 'jhjjkk');
print_r ($masyvas);
var_dump($masyvas);
$masyvas=array(39,39.3,4,4,);

print_r ($masyvas);
$masyvas=[5,6,7];
var_dump($masyvas);


?>

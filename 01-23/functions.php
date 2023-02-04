
<?php
$array= [];
for($i=0; $i<30 ; $i++)
 {
   $random = rand(5,25);

   array_push($array, $random);

 }  
   var_dump($array);
   ?>
</br>
</br>
</br>
<?php
$masyvas= ['a','b','c','d'];
for($i=0;$i<200;$i++){
    shuffle($masyvas);
   
}
var_dump($masyvas);
?>

<?php

$size=25;
$result='';

for( $y = 1; $y <= $size; $y++) {
    for( $x = 1; $x <= $size; $x++) {
        if($y === $x || $x === ($size - $y) + 1) {
            $result += '<span style="color: red;">*</span>';
        } else {
            $result += '*';
        }
    }
    $result += '<br />';
}

echo $result;

?>
<?php
$string='abc';
if(!is_dir('01-25')){
    mkdir('01-25');
}
file_put_contents('01-25/skaiciai.txt',$string);
?>
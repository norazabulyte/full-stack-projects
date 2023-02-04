
<?php
if(isset($_SESSION['id'])){
    header('Location:index.php');
};
?>
<h1>MYBANK</h1>

<p>Sąskaitos numeris: LT5515615616515615</p>
<p>Vardas pavardė: Motiejus Aleksandravičius</p>
<p>Sąskaitos likutis: 9.99 eur.</p>

<a href="?page=logout" class='btn btn-primary'>LOG-OUT</a>

<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>MyBank</title>
</head>

<body>
    <?php include('./header.php') ?>
    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    switch ($page) {
        case 'cards':
            include('./cards.php');
            break;
        case 'loans':
            include('./loans.php');
            break;
        case 'pension':
            include('./pension.php');
            break;
        case 'internetbank':
            include('./internetbank.php');
            break;
        case 'login':
            include('./login.php');
            break;
        case 'admin':
            include './admin.php';
            break;
        case 'logout':
            session_destroy();
            include('./main.php');
            break;
        default:
            include('./main.php');
    }

    ?>
    <?php include('./footer.php') ?>
</body>

</html>
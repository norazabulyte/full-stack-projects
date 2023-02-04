
<?php
    if(
        isset($_POST['login']) AND 
        $_POST['login'] != '' AND
        isset($_POST['password']) AND    
        $_POST['password'] != ''
    ) {
        if($_POST['login'] === 'admin' AND $_POST['password'] === 'admin') {
            $_SESSION['user'] = 'admin';
            header('Location: ?page=admin');
            exit;
        }

        $json = file_get_contents('database.json');
        $decoded = json_decode($json);

        foreach($decoded as $user) {
            // echo $user->id;
            // echo '<br />';
            // echo $user->password;

            if( 
                $_POST['login'] === $user->id AND 
                $_POST['password'] === $user->password
            ) {
                $_SESSION['user'] = $user;
                header('Location: ?page=account');
                exit;
            }
        }
        //$_SESSION['user'] = ['id' => '65451351', 'vardas' => 'Adomas'];
        //header('Location: ?page=account');
    }

?>
<style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
</style>

<body class="text-center">
    <form class="form-signin"  method="POST">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <input id="text" class="form-control" placeholder="ID number" name="login" required autofocus>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"required>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Sign-up</button>

    </form>
</body>
</html>
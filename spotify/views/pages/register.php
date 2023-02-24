<?php
    if(!empty($_POST)) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $params = [
            'page' => 'login',
            'message' => 'Varotojas sėkmingai sukurtas',
            'status' => 'success'
        ];

        if($db->query(
                vsprintf("INSERT INTO users (email, first_name, last_name, password) VALUES ('%s', '%s', '%s', '%s')",
                    [$email, $_POST['first_name'], $_POST['last_name'], $password]
                )
            )
        ) {
            header('Location: ?' . http_build_query($params));
        }
    }
?>          
<form method="POST" class='register'>
<h1>Registration</h1>
    <div class="mb-3">
        <label>Email address</label>
        <input type="email" name="email" placeholder="spotifyclone@gmail.com" class="form-control" required />
    </div>
    <div class="mb-3">
        <label>First Name</label>
        <input type="text" name="first_name" placeholder="Human" class="form-control" required />
    </div>
    <div class="mb-3">
        <label>Last Name</label>
        <input type="text" name="last_name" placeholder="Being" class="form-control" required />
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required />
    </div>

    <button class="btn btn-primary">Register</button>
</form>
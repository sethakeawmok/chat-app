<?php 

$error = '';
$success_msg = '';

if (isset($_POST["register"])){
    session_start();

    if (isset($_SESSION['user_data']))
    {
        header('location:chatroom.php');
    }

    require_once('database/ChatUser.php');

    $user_obj = new ChatUser;
    $user_obj->setUserName($_POST['user_name']);
    $user_obj->setUserEmail($_POST['user_email']);
    $user_obj->setUserPassword($_POST['user_password']);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Register | Chat App</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="/" method="POST">
            <img class="mb-4" src="assets/img/icon.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please Register</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="nameInput" placeholder="">
                <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Register</button>

            <button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
        </form>
    </main>



</body>

</html>
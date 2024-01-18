<?php 
session_start();

$error = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'admin';
        header('Location: /session/member.php');
        exit();
    }else {
        $error = "Login Gagal!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login</h1>
<?php if($error != "" ){ ?>
<h2><?= $error ?></h2>
<?php } ?>

    <form action="/session/login.php" method="post">
        <label> Username : 
            <input type="text" name="username">
        </label>
        <br>
        <br>
        <label> Password : 
            <input type="password" name="password">
        </label>
        <input type="submit" value="Login">
    </form>
</body>
</html>
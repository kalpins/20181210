<?php

if (isset($_POST['submit'])){
    $error=false;
        print_r($_POST);

    if (strlen($_POST['username'])<8){
        $error=true;
        print "Username incorrect";
    }
    if (strlen($_POST['username'])>64){
        $error=true;
        print "Username too long";
    }
    if (strlen($_POST['password'])<8){
        $error=true;
        print "Password too short";
    }

    if ($error==false){
        print "User saved!, check your email! Look at spam as well";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documents</title>
</head>
<body>
    <form method="post" action="index.php">
        <input type="text" name="username" required>
        <input type="text" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>
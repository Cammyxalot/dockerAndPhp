<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="mask-icon" href="public/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Beigbeblog</title>
</head>
<body>

<h1>login page</h1>

<form name="frmUser" method="POST" action="loginMeUp.php">
    <div>
        <label>Username</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <input type="submit" name="submit" value="Submit">
    </div>
    <div>
        <a href="/signMeUp.php">Signup</a>
    </div>
</form>
</body>
</html>
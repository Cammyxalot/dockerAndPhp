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
    <form method="post" action="" method="POST" class="contact-form" id="form">

        <div>
            <?= $message ?>
        </div>
        
        <div class="row">
            <div >
                <input type="text" name="name" placeholder="Frédérique Beigbeder" required>
            </div>
            <div >
                <input type="email" name="email" placeholder="Email@Email.com" required>
            </div>
            <div >
                <input type="password" name="password" placeholder="password" required>
            </div>									
            <div >
                <input type="password" name="password-validation" placeholder="password" required>
            </div>
        </div>
        <button type="submit" id="submit" name="submit">Inscription</button>
    </form>

</body>
</html>
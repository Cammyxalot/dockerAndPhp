<?php
require_once "./pdo.php";

session_start();
if (!isset($_SESSION["user"])) {
    header('Location: /loginMeUp.php');
}
$request = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `Users` ON `posts`.`user_id` = `Users`.`user_id`");
$request->execute();
$posts = $request->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['disconnect'])){
    session_unset();
    session_destroy();
}
?>
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
<a href="./logout.php" >Déconnexion</a>
<h1> Hi and welcome to chillie's</h1>

<h3>what's new today? </h3>

<form action="./newPost.php" name="newContent" method="POST">
    <label>Title</label>
</br>
    <input type="text"  placeholder="i'm the title" name="title"required >
</br>
    <label>Content</label>
</br>
    <input type="text"  placeholder="bla bla bla" name="content"required >
</br>
    <input type="submit"  placeholder="bla bla bla" name="submit">
</form>
    <?php foreach ($posts as $post):?>
        <div>
            <p><?= $post['userName']?></p> 
            <h3><?= $post['postTitle']?></h3>
            <p><?= $post['postContent']?></p>
            <p><?= $post['date']?></p>
        </div>
    <?php endforeach; ?>

</body>
</html>
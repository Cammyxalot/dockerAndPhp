<?php
require_once "./pdo.php";
$request = $pdo->prepare("INSERT INTO `posts` (`postTitle`, `postContent`, `date` , `user_id`) VALUES(:title, :content, CURRENT_TIMESTAMP , :user_id)");
$request->execute([
    ':title' => $_POST['title'],
    ':content' => $_POST['content'],
    ':user_id' => 1
]);

header("location: /index.php"); 



?>
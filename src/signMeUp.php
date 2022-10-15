<?php
require_once './pdo.php';

$message = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = hash("sha512",$_POST['password']);
    if ($_POST['password'] != $_POST['password-validation']) {
        $message = "Password and Confirm Password do not match!";
    }
    else{
        $request = $pdo->prepare("SELECT COUNT(userName) FROM `Users` WHERE `userName` = :userName AND `userEmail` = :userEmail ");
        $request->execute([
            ':userName' => $name,
            'userEmail' => $email
        ]);

        $countUserByMail = $request->fetch();

        if($countUserByMail[0] < 1){
            $request = $pdo->prepare("INSERT INTO `Users` (`userName`, `userEmail`, `userPassword`) VALUES (:userName, :userEmail , :userPassword)");
            $request->execute([
                ':userName' => $name,
                ':userEmail' => $email,
                'userPassword' => $pwd
            ]);
        }
    }
}

require_once "./vue/signup.php";
?>
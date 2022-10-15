<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        require_once "./pdo.php";
        $name = $_POST['name'];
        $pwd = hash("sha512",$_POST['password']);
        $request = $pdo->prepare("SELECT * FROM `Users` WHERE `userName` = :userName");
        $request->execute([
            ':userName' => $name,
        ]);
        
        $user = $request->fetch(PDO::FETCH_ASSOC);
        $_SESSION["user"] = $user;
        header("location: /index.php"); 
        exit();
    }
    require_once "./vue/login.php";

?>
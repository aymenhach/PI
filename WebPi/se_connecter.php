<?php  
include_once("config.php");
session_start();
$db = Db::getInstance();
$email = $_POST['email'];
$pwd = $_POST['password'];
$req = $db->query("SELECT * FROM user WHERE email like '%$email%'");
$user=$req->fetch();
if ($user['email']==NULL){
     header('Location: login.html');
}
else if ($user['email']==$email && $pwd == $user['pwd']) {
     $_SESSION['loggeduser'] = $user['id'];
     header('Location: accueil.php');
}
else {
    	 header('Location: login.html');
}

?>
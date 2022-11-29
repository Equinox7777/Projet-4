#login.php
<?php 
require_once "../cfg/config.php"; 
$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'"; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ 
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; 
}

$email = "name@exemple.com";
$objet = "Objet du mail";
$content = "<b>Mon message<b><br />Voici le contenu de mon message";
$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');

if(mail($email,$objet,$content,$headers)){
    //le mail est parti
}else{
    //erreur quelque part
}

//header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>
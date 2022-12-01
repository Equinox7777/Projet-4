<?php 
$email = "lviennet@gaming.tech";
$objet = $_POST['object'];
$content = $_POST['message'].<br><br>"Email from :".$_POST['email'];
$headers = array('MIME-Version: 1.0','Content-type: text/html; charset=utf8');
if(mail($email,$objet,$content,$headers)){
    echo "le mail est bien parti"
}else{
    echo "error";
}
?>
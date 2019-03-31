<?php
if(isset($_COOKIE['nom']))
{
    $connecte = false; 
    $query="SELECT * FROM user WHERE sid=:sid";
    $prep=$pdo->prepare($query);
    $prep->bindValue(':sid', $_COOKIE['nom']);
    $prep->execute();
    $data=$prep->fetch();


    if($data['sid'] == $_COOKIE['nom'])
    {
        $connecte = true;
        $email_utilisateur = $data['email'];
		$id = $data['id'];  
    }
}
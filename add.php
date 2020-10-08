<?php
try{

    $cnx = new PDO ('mysql:host=127.0.0.1:3308;dbname=Phpsamples','root','');
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cnx->exec("set names'utf8';");

    $sql = "insert into Posts(post_title, description, post_at) 
    values('HTML5, CSS3,Flexbox et Grid','bla, bla, bla','2019-06-10 ')";
     "insert into Posts(post_title, description, post_at) 
    values('UML 2.5','bla bla bla','2019-06-10 ')";
    $cnx->exec($sql); 

    echo "ajoutée avec succès.<br>";
    echo "identifiant  : {$cnx->lastInsertId()}";
}



catch(Exception $e)
{
die('Erreur :'.$ex->getMessage());
} 
?>
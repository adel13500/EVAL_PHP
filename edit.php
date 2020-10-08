<?php 
try{
    $cnx = new PDO ('mysql:host=127.0.0.1:3308;dbname=phpsamples','root','');
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "UPDATE Title SET value=blabla WHERE id=1";
    $nombre =$cnx->exec($sql); 
    echo " mises à jour : $nombre<br>";
}
catch(Exception $e)
{
die('Erreur :'.$ex->getMessage());
}
?>
<?php
try{
    $cnx = new PDO ('mysql:host=127.0.0.1:3308;dbname=phpsamples','root','');
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "DELETE FROM Personne WHERE id=1";
    $cnx->exec($sql); 
    echo " supprimé avec succès.<br>";
}
catch(Exception $e)
{
die('Erreur :'.$ex->getMessage());
} 
?>
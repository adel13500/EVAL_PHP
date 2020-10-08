<?php




error_reporting(E_ALL);
 

require_once("db.php");




   $ID= isset($_POST["id"]) ? $_POST["id"] : "";
$post_title = isset($_POST["post-title"]) ? $_POST["post_title"] : "";
 $description = isset($_POST["description"]) ? $_POST["description"] : "";
$post_at = isset($_POST["post_at"]) ? $_POST["post_at"] : "";
  


if(isset($_POST['Modifier'])){
 if($id){
  $sql = "UPDATE id
       SET id=:id,
        
      WHERE id = :id";
  
  try{
   $stmt = $db->prepare($sql);
   $stmt->bindparam(':',$id);
   $stmt->bindparam(':post_title',$post_title);
   $stmt->bindparam(':description',$description);
   $stmt->bindparam(':post_at',$date);
   
   
  $retour = $stmt->execute();
  }
catch(Exception $e){
   echo "Erreur ! " .$e->getMessage();
  }
 }
}



if($id){
 $sql = "SELECT *
     FROM id
     WHERE id = :id ";

 $a_datas = array(":id"=>$id);     
 try{ 
   $stmt = $db->prepare($sql);
   $retour = $stmt->execute();
   $result = $stmt->fetchAll(); 
  $array_result = $result[0];
   
 }catch(Exception $e){
  echo "Erreur ! " .$e->getMessage();
 } 
}

 ?>

<html>
<head>
 <link rel="stylesheet" media="screen" type="text/css" href="monstyle.css">
 <title>modifier Rdv</title>
</head>
<body>

 <?php 
 include("db.php"); 
 ?>

 <form id="form1" name="form1" method="POST" action="">

 <FIELDSET>
  <LEGEND align='top'><h1><fieldset>Editer l'article </fieldset></h1></LEGEND>
   <table width="420" border="0">
    
    <tr>
     <td>Title</td>
     <td><label>
      <input name="post_title" type="text" id="post_title"  value="<?php echo isset($array_result['post_title']) ? $array_result['post_title'] : '';?>"/> 
     </label></td>
    </tr>
    <tr>
     <td>Description</td>
     <td><label>
      <input name="Description" type="text" id="Description" value="<?php echo isset($array_result['Description']) ? $array_result['Description'] : '';?>"/>
     </label></td>
    </tr>
    <tr>
   <td>Date</td>
     <td><label>
      <input name="date" type="text" id="date" value="<?php echo isset($array_result['date']) ? $array_result['date'] : '';?>" />
     </label></td>
    </tr>
    
    <a class="btn btn-primary" href="#" role="button">save</a>
      
     </td>
    </tr>
   </table>
  </FIELDSET>
  
 </form>
</body>
<html>




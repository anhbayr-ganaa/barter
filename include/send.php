<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>hi</title>
</head>
<body>
<?php include('config.php');   ?>
   <?php
// hereglegchiin id orj irne

$userName="";
$userPhone="";
$userAddress="";
$userid=$_SESSION['id'];
//ed zuiliin  medeelel orj irne 
//


if($_POST['itemPick']==1){
  $itemPick=1;
} else { $itemPick=0;}

if($_POST['itemNegotiete']==1){
  $itemNegotiete=1;
} else { 
  $itemNegotiete=0;
}
  $itemType=$_POST['itemType'];
  $itemName=$_POST['itemName'];
  $itemRadio=$_POST['itemRadio'];
  $itemPrice=$_POST['itemPrice'];

  $itemState=$_POST['itemState'];
  $itemDesc=$_POST['itemDesc'];

$sql="INSERT INTO items (itemsUserid,itemTypefx, itemName, itemPick, itemRadio, itemPrice, itemNegotiete, itemstate, itemDesc)
VALUES ('".$userid."','".$itemType."','".$itemName."', '".$itemPick."' ,'".$itemRadio."', '".$itemPrice."','".$itemNegotiete."','".$itemState."', '".$itemDesc."')";
  $imageCount=count($_FILES['files']['name']);

  for($i=0; $i<$imageCount; $i++){
      $imageName= $_FILES['files']['name'][$i];
      $imageTempName=$_FILES['files']['tmp_name'][$i];
      $targetPath="images/".$imageName;
      if(move_uploaded_file($imageTempName,$targetPath)){
          $upload="INSERT INTO images(imagename,useridfx,itemidfx ) VALUES('$imageName','$userid',1)";
          $result=mysqli_query($conn,$upload);
      }
  } //if($result){
     // echo "amjiltttai upload hiile";
  //}
  
if ($conn->query($sql) === TRUE) {
   // header("location: navbar.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }




?>


<?php 
// Include the database configuration file 

  

?>
</body>
</html>


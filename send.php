<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('config.php');   ?>
   <?php
// hereglegchiin id orj irne
$userid="";
$userName="";
$userPhone="";
$userAddress="";

//ed zuiliin  medeelel orj irne 
//


if($_POST['itemPick']==" "){
  $itemPick=0;
} else { $itemPick=1;}

if($_POST['itemNegotiete']==" "){
  $itemNegotiete=0;
} else { 
  $itemNegotiete=1;
}
  $itemType=$_POST['itemType'];
  $itemName=$_POST['itemName'];
  $itemRadio=$_POST['itemRadio'];
  $itemPrice=$_POST['itemPrice'];

  $itemState=$_POST['itemState'];
  $itemDesc=$_POST['itemDesc'];

$sql="INSERT INTO items (itemTypefx, itemName, itemPick, itemRadio, itemPrice, itemNegotiete, itemstate, itemDesc)
VALUES ('".$itemType."','".$itemName."', '".$itemPick."' ,'".$itemRadio."', '".$itemPrice."','".$itemNegotiete."','".$itemState."', '".$itemDesc."')";

  
if ($conn->query($sql) === TRUE) {
    header("location: navbar.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }




?>
</body>
</html>


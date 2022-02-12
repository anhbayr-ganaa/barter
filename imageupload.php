<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<form  method="post" enctype="multipart/form-data">
    Select Image Files to Upload:
    <input type="file" name="files[]" multiple >
  
    <input type="submit" name="submit" value="UPLOAD">

    <?php   $text= "1"; echo  gettype( $text);  ?><br>
    <?php   $number= 1;  echo  gettype($number);      
    
   
    ?>
</form>

<form  method="post">
<input type="text"  name="name" >
    <input type="text"  name="number">
    <input  type="text" name="password">
    <input type="submit" name="utga" value="UPLOAD2">
</form>

 <?php
 include('config.php'); 

 if(isset($_POST['utga'])){
    $name=$_POST['name'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    
    $sql = "INSERT INTO turshilt (gname, gnumber, gpassword)
    VALUES ('".$name."', $number, '".$password."')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 ?>





    <?php 
// Include the database configuration file 
include_once 'config.php'; 
     
if(isset($_POST['submit'])){ 
    $randomnumber=(rand(10,10000000000));
 
    $imageCount=count($_FILES['files']['name']);


    $sql = "INSERT INTO `turshilt` (`id`, `gname`, `gnumber`, `gpassword`) VALUES (NULL, 'sdfsadf', '4564564', 'dsafsadfsad');";

   $userid=5;
    for($i=0; $i<$imageCount; $i++){
        $imageName= $_FILES['files']['name'][$i];
        $imageTempName=$_FILES['files']['tmp_name'][$i];
        $targetPath="images/".$imageName;
        if(move_uploaded_file($imageTempName,$targetPath)){
            $upload="INSERT INTO images(imagename,useridfx,itemidfx ) VALUES('$imageName',$userid,$randomnumber)";
         
            $result=mysqli_query($conn,$upload);
        }
    } if($result){
       echo "amhilttai";
    }

}else echo "aldaa garlaa ";
?>


<?php
// Include the database configuration file
include_once 'config.php';

// Get images from the database
$query = $conn->query("SELECT * FROM images ORDER BY imageId DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'images/'.$row["imagename"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 


</body>
</html>
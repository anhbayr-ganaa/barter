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
</form>

 

    <?php 
// Include the database configuration file 
include_once 'config.php'; 
     
if(isset($_POST['submit'])){ 
  
    $imageCount=count($_FILES['files']['name']);

    for($i=0; $i<$imageCount; $i++){
        $imageName= $_FILES['files']['name'][$i];
        $imageTempName=$_FILES['files']['tmp_name'][$i];
        $targetPath="images/".$imageName;
        if(move_uploaded_file($imageTempName,$targetPath)){
            $upload="INSERT INTO images(imagename) VALUES('$imageName')";
            $result=mysqli_query($conn,$upload);
        } if($result){
            echo "amjiltttai upload hiile";
        }
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

<img src="images/s.PNG" alt="">
</body>
</html>
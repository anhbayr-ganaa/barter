
<?php
session_start();
error_reporting(0);
include('config.php');
include('checklogin.php');
check_login();
 echo $_SESSION['id'];
?>
<?php 
// Include the database configuration file 
include_once 'config.php'; 
 $userid=$_SESSION['id'];

if(isset($_POST['submit'])){ 
$randomnumber=(rand(10,10000000000));

$imageCount=count($_FILES['files']['name']);


for($i=0; $i<$imageCount; $i++){
  $imageName= $_FILES['files']['name'][$i];
  $imageTempName=$_FILES['files']['tmp_name'][$i];
  $targetPath="images/".$imageName;
  if(move_uploaded_file($imageTempName,$targetPath)){
      $upload="INSERT INTO images (useridfx,itemidfx,imagename ) VALUES ('$userid','$randomnumber','$imageName')";
      $result=mysqli_query($conn,$upload);
  }
}  if($result){

  $itemType=$_POST['itemType'];
  $itemName=$_POST['itemName'];
  $itemPick=$_POST['itemPick'];
  $itemRadio=$_POST['itemRadio'];
  $itemPrice=$_POSt['itemPrice'];
  $itemNegotiete=$_POST['itemNegotiete'];
  $itemState=$_POST['itemState'];
  $itemDesc=$_POST['itemDesc'];
  $sql = "INSERT INTO items (itemsUserid, randomnumber, itemTypefx, itemName,itemPick, itemRadio,itemPrice,itemNegotiete, itemState, itemDesc)
  VALUES ('$userid', '$randomnumber', '$itemType','".$itemName."',$itemPick,'".$itemRadio."', '$itemPrice', '$itemNegotiete' , '".$itemState."','".$itemDesc."')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
} else { 
  echo "aldaa garlaa zurag orsongue ";
}


};
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../botcss/navbar.css">
<link rel="stylesheet" href="../css/add.css">
<link rel="stylesheet" href="../css/canvas.css">

<!--bootstrap 4-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script src="../js/canvas.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--duuslaa-->
   
    <title></title>
</head>
<body>
<canvas class="orb-canvas"></canvas>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>


   <div class="body">
  <menu class="menu container">
    
    <button class="menu__item active" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="--bgColorItem: #ff8c00;" >
      <svg class="icon" viewBox="0 0 24 24">
        <path d="M3.8,6.6h16.4"/>
        <path d="M20.2,12.1H3.8"/>
        <path d="M3.8,17.5h16.4"/>
      </svg>
    </button>

    <button class="menu__item" style="--bgColorItem: #f54888;">
      <svg class="icon" viewBox="0 0 24 24">
        <path  d="M6.7,4.8h10.7c0.3,0,0.6,0.2,0.7,0.5l2.8,7.3c0,0.1,0,0.2,0,0.3v5.6c0,0.4-0.4,0.8-0.8,0.8H3.8
        C3.4,19.3,3,19,3,18.5v-5.6c0-0.1,0-0.2,0.1-0.3L6,5.3C6.1,5,6.4,4.8,6.7,4.8z"/>
        <path  d="M3.4,12.9H8l1.6,2.8h4.9l1.5-2.8h4.6"/>
      </svg>
    </button>

    <button class="menu__item" style="--bgColorItem: #4343f5;" >
      <svg class="icon" viewBox="0 0 24 24">
      <path  d="M3.4,11.9l8.8,4.4l8.4-4.4"/>
      <path  d="M3.4,16.2l8.8,4.5l8.4-4.5"/>
      <path  d="M3.7,7.8l8.6-4.5l8,4.5l-8,4.3L3.7,7.8z"/>
      </svg>
    </button>

    <button class="menu__item" style="--bgColorItem: #e0b115;" > 
      <svg class="icon" viewBox="0 0 24 24" >
        <path  d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
          C3.9,4.4,4.4,3.9,5.1,3.9z"/>
        <path  d="M4.2,9.3h15.6"/>
        <path  d="M9.1,9.5v10.3"/>
        </svg>
    </button>

    <button class="menu__item" style="--bgColorItem:#65ddb7;">
      <svg class="icon" viewBox="0 0 24 24" >
        <path  d="M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1
          C3.9,4.4,4.4,3.9,5.1,3.9z"/>
        <path  d="M5.5,20l9.9-9.9l4.7,4.7"/>
        <path  d="M10.4,8.8c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6C7.3,8,8,7.3,8.9,7.3C9.7,7.3,10.4,8,10.4,8.8z"/>
      </svg>
    </button>

    <div class="menu__border"></div>

  </menu>
</div>

<script>
  // Designed by:  Mauricio Bucardo
 // Original image:
 // https://dribbble.com/shots/5619509-Animated-Tab-Bar

 "use strict"; 

  const body = document.body;
  const bgColorsBody = ["#ffb457", "#ff96bd", "#9999fb", "#ffe797", "#cffff1"];
 const menu = body.querySelector(".menu");
 const menuItems = menu.querySelectorAll(".menu__item");
 const menuBorder = menu.querySelector(".menu__border");
 let activeItem = menu.querySelector(".active");

 function clickItem(item, index) {

    menu.style.removeProperty("--timeOut");
    
    if (activeItem == item) return;
    
    if (activeItem) {
        activeItem.classList.remove("active");
    }

    
    item.classList.add("active");
  
    activeItem = item;
    offsetMenuBorder(activeItem, menuBorder);
    
    
  } 

   function offsetMenuBorder(element, menuBorder) {

    const offsetActiveItem = element.getBoundingClientRect();
    const left = Math.floor(offsetActiveItem.left - menu.offsetLeft - (menuBorder.offsetWidth  - offsetActiveItem.width) / 2) +  "px";
    menuBorder.style.transform = `translate3d(${left}, 0 , 0)`;

  }

  offsetMenuBorder(activeItem, menuBorder);

 menuItems.forEach((item, index) => {

    item.addEventListener("click", () => clickItem(item, index));
    
  })

  window.addEventListener("resize", () => {
    offsetMenuBorder(activeItem, menuBorder);
    menu.style.setProperty("--timeOut", "none");
  });
</script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">???? ???????????? ??????????????</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST"  enctype="multipart/form-data">
          <select name="itemType" id="itemType" required>
 



         <?php 
    include('config.php');
 	  $types=mysqli_query($conn,"select * from types  ");
    while($row=mysqli_fetch_array($types))
		{
      ?>
           <option value="<?php echo $row[0]; ?>">  <?php echo $row[1]; ?> </option>

      <?php
     }
         ?>
   
          </select>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">?????????????? ????????????</label>
            <input required type="text" class="form-control" name="itemName"  id="recipient-name" placeholder="I Phone X ?????? ????????; ???????????????? ???????? ??.??">
          </div>

          <div class="form-group">

            <label for="recipient-name" class="col-form-label">?????????????? ????</label>

            <div class="custom-control custom-checkbox mb-3 ">
                <input type="checkbox" class="custom-control-input" name="itemPick" value="1" id="customControlValidation1" >
                <label class="custom-control-label" for="customControlValidation1">????????????</label>
              </div>

            <script>
            const p = document.getElementById('customControlValidation1');

             </script>
            <div class="custom-control custom-radio mb-3 custom-control-inline">
                <input type="radio" class="custom-control-input" value="??????????" name="itemRadio" id="customControlValidation2" name="radio-stacked">
                <label class="custom-control-label" for="customControlValidation2">??????????</label>
              </div>
              <div class="custom-control custom-radio mb-3 custom-control-inline">
                <input type="radio" class="custom-control-input" value="????????????" name="itemRadio" id="customControlValidation3" name="radio-stacked">
                <label class="custom-control-label" for="customControlValidation3">????????????</label>
              
              </div>
          </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">???? ???????????? ?????????? ?????????? </label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">???</div>
                </div>
                <input type="text" class="form-control" name="itemPrice" id="inlineFormInputGroupUsername" placeholder="100000">
              </div>
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="itemNegotiete" value="1" id="customControlValidation4" >
                <label class="custom-control-label" for="customControlValidation4">?????? ??????????????????????</label>
              </div>
            
          </div>
          <label for="recipient-name" class="col-form-label">?????????? ????????????</label>
          <div class="form-group " >
    
            <div class="custom-control-inline ">
                <div class="custom-control custom-radio col-sm">
                    <input type="radio" id="customRadio1" value="????????" name="itemState" class="custom-control-input"required >
                    <label class="custom-control-label" for="customRadio1">????????</label>
                  </div>
                  <div class="custom-control custom-radio col-sm">
                    <input type="radio" id="customRadio2" value="????????????????" name="itemState" class="custom-control-input" required>
                    <label class="custom-control-label" for="customRadio2">????????????????</label>
                  </div>
                  <div class="custom-control custom-radio col-sm">
                    <input type="radio" id="customRadio3" value="????????????" name="itemState" class="custom-control-input" required>
                    <label class="custom-control-label" for="customRadio3">????????????</label>
                  </div>
            </div>
           
          </div>

          <div class="form-group">
           

      
                      <label for="recipient-name" class="col-form-label">?????????? ??????????????</label>
            <div class="file-upload">
            
            
              <div class="image-upload-wrap">
              <input type="file" name="files[]" multiple >
                <div class="drag-text">
                  <h3>?????????? ????????????</h3>
                </div>
              </div>
            
            </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">???????????? ????????????????</label>
        
            <textarea class="form-control" name="itemDesc" id="message-text"></textarea>
          </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">??????????</button>
        <button type="submit" name="submit" class="btn btn-primary">??????????????</button>
      </div>
      <p value="<?php  $_SESSION['id'];   ?>" name="userid"><?php echo  $_SESSION['id'];   ?></p>
    </div>
  </div>
   </div>
  </form>


  <div class="container">


  
</div>


</body>
</html>
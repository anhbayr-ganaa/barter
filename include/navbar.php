
<?php
session_start();
error_reporting(0);
include('config.php');
include('checklogin.php');
check_login();
echo $_SESSION['id'];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../botcss/navbar.css">
<link rel="stylesheet" href="../css/add.css">

<!--bootstrap 4-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--duuslaa-->
   
    <title></title>
</head>
<body>
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
        <h5 class="modal-title" id="exampleModalLabel">Эд зүйлээ оруулах</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="send.php"  enctype="multipart/form-data">
          <select name="itemType" id="itemType" required>
 

         <option value="false">Ангилалууд</option>

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
            <label for="recipient-name" class="col-form-label">Барааны гарчиг</label>
            <input required type="text" class="form-control" name="itemName"  id="recipient-name" placeholder="I Phone X гар утас; Нолууран цамц г.м">
          </div>

          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Сонгоно уу</label>

            <div class="custom-control custom-checkbox mb-3 ">
                <input type="checkbox" class="custom-control-input" name="itemPick" value="1" id="customControlValidation1" >
                <label class="custom-control-label" for="customControlValidation1">Солино</label>
              </div>

            <script>
            const p = document.getElementById('customControlValidation1');

             </script>
            <div class="custom-control custom-radio mb-3 custom-control-inline">
                <input type="radio" class="custom-control-input" value="Зарна" name="itemRadio" id="customControlValidation2" name="radio-stacked">
                <label class="custom-control-label" for="customControlValidation2">Зарна</label>
              </div>
              <div class="custom-control custom-radio mb-3 custom-control-inline">
                <input type="radio" class="custom-control-input" value="Үнэгүй" name="itemRadio" id="customControlValidation3" name="radio-stacked">
                <label class="custom-control-label" for="customControlValidation3">Үнэгүй</label>
              
              </div>
          </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Та хэдээр үнэлж байна </label>
            <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">₮</div>
                </div>
                <input type="text" class="form-control" name="itemPrice" id="inlineFormInputGroupUsername" placeholder="100000">
              </div>
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="itemNegotiete" value="1" id="customControlValidation4" >
                <label class="custom-control-label" for="customControlValidation4">Үнэ тохиролцоно</label>
              </div>
            
          </div>
          <label for="recipient-name" class="col-form-label">Төлөв сонгох</label>
          <div class="form-group " >
    
            <div class="custom-control-inline ">
                <div class="custom-control custom-radio col-sm">
                    <input type="radio" id="customRadio1" value="Шинэ" name="itemState" class="custom-control-input"required >
                    <label class="custom-control-label" for="customRadio1">Шинэ</label>
                  </div>
                  <div class="custom-control custom-radio col-sm">
                    <input type="radio" id="customRadio2" value="Шинэвтэр" name="itemState" class="custom-control-input" required>
                    <label class="custom-control-label" for="customRadio2">Шинэвтэр</label>
                  </div>
                  <div class="custom-control custom-radio col-sm">
                    <input type="radio" id="customRadio3" value="Хуучин" name="itemState" class="custom-control-input" required>
                    <label class="custom-control-label" for="customRadio3">Хуучин</label>
                  </div>
            </div>
           
          </div>

          <div class="form-group">
            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

          <script>
                function readURL(input) {
                     if (input.files && input.files[0]) {

                        var reader = new FileReader();

                       reader.onload = function(e) {
                       $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                      $('.file-upload-content').show();

                   $('.image-title').html(input.files[0].name);
                            };

                        reader.readAsDataURL(input.files[0]);

                          } else {
                        removeUpload();
                          }
                       }

                        function removeUpload() {
                    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                    $('.file-upload-content').hide();
                    $('.image-upload-wrap').show();
                       }
                   $('.image-upload-wrap').bind('dragover', function () {
	               	$('.image-upload-wrap').addClass('image-dropping');
	                         });
	                        $('.image-upload-wrap').bind('dragleave', function () {
	                 	$('.image-upload-wrap').removeClass('image-dropping');
                      });
          
       </script>
                      <label for="recipient-name" class="col-form-label">Зураг оруулах</label>
            <div class="file-upload">
            
            
              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' multiple onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                  <h3>зураг сонгох</h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  <button type="button" onclick="removeUpload()" class="remove-image">Remove </button>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Нэмэлт мэдээлэл</label>
            <textarea class="form-control" name="itemDesc" id="message-text"></textarea>
          </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Буцах</button>
        <button type="submit" name="send" class="btn btn-primary">Оруулах</button>
      </div>

    </div>
  </div>
   </div>
  </form>


  <div class="container">


  
</div>


</body>
</html>
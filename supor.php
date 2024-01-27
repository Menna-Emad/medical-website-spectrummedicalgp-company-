<?php
$title='Supor Products';
include_once "layouts/header.php";
include_once "layouts/nav.php";
include_once "app/models/Category.php";

$categoryObject=new Category;
$categoryObject->setCompany_id(2);
$categoryData=$categoryObject->read();
?>

<div class="background-image">
     
     </div>
     <style>
      .background-image{
      background: url(images/images/Su-Por-Productt.png);
      width: 100%;
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        padding-top: 6%;
        position: relative;
    }
      </style>
    <div class ="container py-8 pt-5 ">
        <div class="row">
        <?php
if($categoryData){

$categoryResults=$categoryData->fetch_all(MYSQLI_ASSOC);
foreach($categoryResults as $index=>$categoryResult){
?>
          <div class ="col-md-2.7">

              <div class="card-body">
                  <a href="supor_cat.php?cat=<?=$categoryResult['id']?>"><img src="images/images/<?=$categoryResult['image']?>" alt=""></img></a>
                  <p><?=$categoryResult['name_en']?></p>
              </div>
             
          </div>
          <?php
              }
            }?>
      </div>

    </div>
<?php
include_once "layouts/footer.php";
include_once "layouts/footer-scripts.php";
?>










    
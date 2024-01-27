<?php
include_once "app/models/Product.php";
$productObject=new Product;
$productObject->setStatus(1);
?>
<?php
     if(isset($_GET['sub'])){
     $productObject->setSubcategory_id($_GET['sub']);
     $productData=$productObject->breadcrumbBySub();
     if($productData){
        $productresults=$productData->fetch_all(MYSQLI_ASSOC);
        foreach($productresults as $index=>$productresult){
           
     ?>
<nav aria-label="breadcrumb">

  <ol class="breadcrumb">
    
    <li class="breadcrumb-item"><a href="implantech.php"><?=$productresult['company_name']?></a></li>
    <li class="breadcrumb-item"><a href=""><?=$productresult['category_name_en']?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$productresult['subcategory_name']?></li>
   
  </ol>
  
</nav>
<?php
    }
}?>
<?php
     }elseif(isset($_GET['cat'])){
        $productObject->setCategory_id($_GET['cat']);
     $productData=$productObject->breadcrumbByCat();
     if($productData){
        $productresults=$productData->fetch_all(MYSQLI_ASSOC);
        foreach($productresults as $index=>$productresult){
           
     ?>
<nav aria-label="breadcrumb">

  <ol class="breadcrumb">
    
    <li class="breadcrumb-item"><a href="implantech.php"><?=$productresult['company_name']?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$productresult['category_name_en']?></li>
   
  </ol>
  
</nav>
<?php
    }
}
}elseif(isset($_GET['id'])){
  $productObject->setId($_GET['id']);
  $productData=$productObject->breadcrumbById();
  if($productData){
    $productresults=$productData->fetch_all(MYSQLI_ASSOC);
    foreach($productresults as $index=>$productresult){
       
 ?>
 <nav aria-label="breadcrumb">

<ol class="breadcrumb">
  
  <li class="breadcrumb-item"><a href=""><?=$productresult['company_name']?></a></li>
  <li class="breadcrumb-item"><a href=""><?=$productresult['category_name_en']?></a></li>
  <li class="breadcrumb-item active" aria-current="page"><?=$productresult['name_en']?></li>
 
</ol>

</nav>
<?php
}
  }
}

?>
     


     
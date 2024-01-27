<?php
$title='Implantech Products';
include_once "layouts/header.php";
include_once "layouts/nav.php";

include_once "app/models/Category.php";
include_once "app/models/Subcategory.php";
include_once "app/models/Sub_subcategory.php";
include_once "app/models/Product.php";

$categoryObject=new Category;
$subcategoryObject=new Subcategory;
$subcategoryObject->setStatus(1);
$subcategoryObject->setCompany_id(1);

$subbcategoryObject=new Sub_subcategory;
$productObject=new Product;
$productObject->setStatus(1);

if(isset($_GET['sub'])){
		
    if (is_numeric($_GET['sub'])) {
        //check if id exists in your db
        $subcategoryObject->setId($_GET['sub']);
        $subcategoryObject->setCategory_id($_GET['sub']);
         $categoryResult=$subcategoryObject->getcat();
        $subcategoriesData = $subcategoryObject->searchOnId();
        if ($subcategoriesData) {
            $productObject->setSubcategory_id($_GET['sub']);
            $productResultt = $productObject->getProdBySub();
        } else {
            header('location:layouts/errors/404.php');
        }
    } else {
        header('location:layouts/errors/404.php');
    }

    
}
?>
<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<!-- <div class="title-box">
						<h2></h2>
						<p></p>
					</div> -->
				</div>
			</div>
			<?php include_once "layouts/breadcrumb.php";?>
			<div class="popup-gallery row clearfix">
				<?php
			if($productResultt){
				$productsResults=$productResultt->fetch_all(MYSQLI_ASSOC);
				foreach($productsResults as $index=>$productsResult){?>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
                    <img src ="images/images/<?=$productsResult['image']?>" alt="">
						<div class="box-content">	
							<h3 class="title"><?=$productsResult['name_en']?></h3>
							<ul class="icon">
								<li><a href="images/images/<?=$productsResult['image']?>"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<?php
				}
			}else{
				echo $error="<div class='row'>
				<div class='alert alert-warning col-md-12 col-md-offset-12'align='center'>
			No Products Shown
				</div>
			</div>
			";
			}
			?>
				
				
			</div>
		</div>
	</div>




</div> 
		</div>
</div>
			
 <?php 
 include_once "layouts/footer.php";
 include_once "layouts/footer-scripts.php";
 ?>            

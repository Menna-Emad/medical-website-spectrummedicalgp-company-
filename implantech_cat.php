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


if($_GET){
	if(isset($_GET['cat'])){
		if(is_numeric($_GET['cat'])){
			
			$subcategoryObject->setCategory_id($_GET['cat']);
			 $categoryResult=$subcategoryObject->getcat();
			 $productObject->setCategory_id($_GET['cat']);
			$productResult=$productObject->getsubByCat();
			

		}else{
			header('location:layouts/errors/404.php');
	      }
	
	}
}




?> 



		
<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
			
			<div class="title-box">
			<?php
					  if($categoryResult){
						$categories=$categoryResult->fetch_all(MYSQLI_ASSOC);
						foreach($categories as $index=>$category){?> 
					   <h2><?=$category['category_name']?></h2>
						<?php
						}
					}?>	 
					 </div>
				 <?php
				
					 include_once "layouts/breadcrumb.php";		?>		
                <!-- hena hatena el db into an array -->
                <?php
			if($productResult){
				$products=$productResult->fetch_all(MYSQLI_ASSOC);
				foreach($products as $index=>$product){
			?>
                 
				
                <h1><a href='implantech_pro.php?sub=<?=$product['subcategory_id']?>'><?=$product['subcategory_name']?></a></h1>
                <p></p>
				<?php
				}
				
			}
            
			
			
			?>


              
			</div>
        </div>
		
</div>

              
       


<style>
	.title-box h2{
	font-size: 42px;
	font-family: 'Catamaran', sans-serif;
	color: #222222;
	font-weight: 500;
	position: relative;
	padding-bottom: 30px;
	margin-bottom: 15px;
}

h1 {
    font-size: 34px
}

	</style>

<?php
include_once "layouts/footer.php";
include_once "layouts/footer-scripts.php";
?>

















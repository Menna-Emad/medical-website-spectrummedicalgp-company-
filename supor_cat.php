<?php
$title='Su-por';
include_once "layouts/header.php";
include_once "layouts/nav.php";
include_once "app/models/Category.php";
include_once "app/models/Product.php";
$categoryObject=new Category;


$productObject=new Product;
$productObject->setStatus(1);


$categoryObject->setCompany_id(2);
if($_GET){
	if(isset($_GET['cat'])){
		if(is_numeric($_GET['cat'])){
			$productObject->setCategory_id($_GET['cat']);
			
			$productResultt=$productObject->getsubByCatt();
			

		}else{
			header('location:layouts/errors/404.php');
	      }
		}
	}

?> 

<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
			<?php include_once "layouts/breadcrumb.php";?>
				<div class="row">
					
			<?php
			if($productResultt){
				$productsResults=$productResultt->fetch_all(MYSQLI_ASSOC);
				foreach($productsResults as $index=>$productsResult){?>
				<div class="col-md-3 col-sm-6">
			<div class="card" style="width: 230px;">
  <img class="card-img-top" src="images/images/<?=$productsResult['image']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$productsResult['name_en']?></h5>
    <p class="card-text"></p>
	<a href="product.php?id=<?=$productsResult['id']?>" class="btn btn-primary">More Description</a>
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

			
 <?php 
 include_once "layouts/footer.php";
 include_once "layouts/footer-scripts.php";
 ?>            



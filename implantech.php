<?php
$title='Implantech';
include_once "layouts/header.php";
include_once "layouts/nav.php";
include_once "app/models/Category.php";
include_once "app/models/Subcategory.php";


$categoryObject=new Category;
$categoryObject->setStatus(1);
$subcategoryObject=new Subcategory;
$subcategoryObject->setStatus(1);



?> 

<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
						   <h2><?=$title?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
</div>

<div class="container">    
      <!-- hena hatena el db into an array -->
<?php 
$categoryObject->setCompany_id(1);
$categoryResults=$categoryObject->read();
if($categoryResults){
$categoryNames=$categoryResults->fetch_all(MYSQLI_ASSOC);
foreach($categoryNames as $index=>$categoryName){?>
<h1><a href= "implantech_cat.php?cat=<?=$categoryName['id']?>"><?=$categoryName['name_en']?></a></h1>
<?php
$subcategoryObject->setCompany_id($categoryName['company_id']);
$subcategoryObject->setCategory_id($categoryName['id']);
$subcategoryResults=$subcategoryObject->getsubByCat();
if($subcategoryResults){
$subcategoryNames=$subcategoryResults->fetch_all(MYSQLI_ASSOC);
foreach($subcategoryNames as $index=>$subcategoryName){?>
<p><?=$subcategoryName['name_en']?></p>
<?php 
}
}
}
}?>

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















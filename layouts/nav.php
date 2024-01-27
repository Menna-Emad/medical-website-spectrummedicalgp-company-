<?php
include_once "app/models/Category.php";
?>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">


	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<div class="mail-b"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +201009505300</a></div>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> ceo@spectrummedicalgp.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to SpectrumMedicalgp</p>
					</div>
					<div class="right-top">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/images/logo2.jpg" id="logo" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.php">Home</a></li>
                        <li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown"  href="#">Categories <span class="caret"></span></a>
							<ul class="dropdown-menu">
								 <li>
                                    <a class="dropdown-item" href="implantech.php">Implantech  &raquo; </a>
                                         <ul class="dropdown-menu dropdown-submenu">
                                             <?php
											 $categoryObject=new Category;
											 $categoryObject->setCompany_id(1);
											 $categoryData=$categoryObject->read();
											 if($categoryData){
												$categoryResults=$categoryData->fetch_all(MYSQLI_ASSOC);
												foreach($categoryResults as $index=>$categoryResult){

											 ?>
                                            <li>
                                                <a class="dropdown-item" href="implantech_cat.php?cat=<?=$categoryResult['id']?>"><?=$categoryResult['name_en']?></a>
                                            </li>
                                            <?php
											}
										}?>

                                        </ul>
                                </li>

								<li>
                                    <a class="dropdown-item" href="supor.php">Su-por Surgical Implants  &raquo; </a>
                                         <ul class="dropdown-menu dropdown-submenu">
										 <?php
											 $categoryObject=new Category;
											 $categoryObject->setCompany_id(2);
											 $categoryData=$categoryObject->read();
											 if($categoryData){
												$categoryResults=$categoryData->fetch_all(MYSQLI_ASSOC);
												foreach($categoryResults as $index=>$categoryResult){

											 ?>
                                            <li>
                                                <a class="dropdown-item" href="supor_cat.php?cat=<?=$categoryResult['id']?>"><?=$categoryResult['name_en']?></a>
                                            </li>
                                           <?php
										   }
										}?>
											

                                        </ul>
                                </li>
                            </ul>
					</ul>
							</li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
						<li><a class="nav-link" href="#about">About Us</a></li>
						<li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->

	<style>
 #logo{
    width: 210px;
    height: 70px;}
		.dropdown{
			top: 10px;
		}
		.dropdown-menu li {
position: relative;
top: 10px;
}
.dropdown-menu .dropdown-submenu {
display: none;
position: absolute;
left: 100%;
top: -7px;
}
.dropdown-menu .dropdown-submenu-left {
right: 100%;
left: auto;
}
.dropdown-menu > li:hover > .dropdown-submenu {
display: block;
}

.dropdown-hover:hover>.dropdown-menu {
display: inline-block;
}

.dropdown-hover>.dropdown-toggle:active {
/*Without this, clicking will make it sticky*/
pointer-events: none;
}
.mail-b a:hover{
	color: #000;
	border: 2px solid #000;
}
.right-top ul li a:hover{
	background: #08dff3;
	color: #ffffff;
}
.title-box h2::after{
	content: "";
	position: absolute;
	background: url(images/images/tag.jpg)no-repeat center;
	width: 120px;
	height: 20px;
	bottom: 0;
	left: 0;
	right: 0;
	margin: 0 auto;
}

	</style>
</body>
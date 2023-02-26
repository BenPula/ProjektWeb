
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adidas All-Star</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="specimen_files/specimen_stylesheet.css" type="text/css" charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="adidas-allstar1.css">
</head>
<body>
	<header>
		<div class="Name">
			<div class="adidaslogo">
				<a href="adidas-allstar.php"><img src="images/adidasfootballcollectivewhitelogo.png" alt=""></a>
			</div>
			<a href="adidas-allstar.php"><h1>Adidas All-Star</h1></a>
		</div>
		<br>
		<div class="menu">
				<i class="fas fa-bars fa-2x"></i>
		</div>
		<div class="Pages">
			<nav class="main-nav">
				<ul class="main-menu">
					<li><a href="about-allstar.php">About Adidas All-Star</a></li>
					<li><a href="products-allstar.php">Products</a></li>
					<li><a href="news-allstar.php">News</a></li>
					<li><a href="contact us.php">Contact Us</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div class="content">

		<section class="Showcase">
			<img src="images/adidasblacklogo.png" alt="">
			<h2>Adidas Main Shop</h2>
			<p>
				Buy the cleats, kits, and much more that your favorite footballers wear!
			</p>
			<a href="https://www.adidas.com/us" class="btn">
				SHOP NOW <i class="fas fa-chevron-right"></i>
			</a>
		</section>


		<section class="Players">
			<h1>GREATNESS. CLASS. EXTRAORDINARY. AMBITION. ADIDAS.</h1>
			<div class="boxes">
				<div class="box1">
					<?php
					    include 'admin/adidas-allstar/boxes/model.php';
					    $model = new Model();
					    $result = $model->fetchById(1);
					?>
					<img src="<?php echo $result['ImageURL']; ?>" alt="">
					<h3><?php echo $result['Name']; ?></h3>
					<p><?php echo $result['Paragraph']; ?></p>
				</div>
				<div class="box2">
					<?php
					    $result = $model->fetchById(2);
					?>
					<img src="<?php echo $result['ImageURL']; ?>" alt="">
					<h3><?php echo $result['Name']; ?></h3>
					<p><?php echo $result['Paragraph']; ?></p>
				</div>
				<div class="box3">
					<?php
					    $result = $model->fetchById(3);
					?>
					<img src="<?php echo $result['ImageURL']; ?>" alt="">
					<h3><?php echo $result['Name']; ?></h3>
					<p><?php echo $result['Paragraph']; ?></p>
				</div>
				<div class="box4">
					<?php
					    $result = $model->fetchById(4);
					?>
					<img src="<?php echo $result['ImageURL']; ?>" alt="">
					<h3><?php echo $result['Name']; ?></h3>
					<p><?php echo $result['Paragraph']; ?></p>
				</div>
			</div>
		</section>

		<section class="Subscribe">
			<button><a href="login.php">Login</a>
			<button><a href="register.php">Register</a></button>
		</section>

		<section class="Slider">
			<div class="slider-arrows">
				<a class="prev" onclick="plusSlides(-1)">❮</a>
				 <?php
		      include 'admin/adidas-allstar/slider/model.php';
		      $model1 = new Model1();
		      $result1 = $model1->fetchById(1);
		    ?>
		    <div class="slider">
		      <img src="<?php echo $result1['ImageURL1']; ?>" alt="">
		      <br>
		      <a href="products-allstar.php"><p><?php echo $result1['Paragraph1']; ?></p></a>
		    </div>
		    <?php
		      $result1 = $model1->fetchById(2);
		    ?>
		    <div class="slider">
		      <img src="<?php echo $result1['ImageURL1']; ?>" alt="">
		      <br>
		      <a href="products-allstar.php"><p><?php echo $result1['Paragraph1']; ?></p></a>				
		    </div>
		    <?php
		      $result1 = $model1->fetchById(3);
		    ?>
		    <div class="slider">
		      <img src="<?php echo $result1['ImageURL1']; ?>" alt="">
		      <br>
		      <a href="products-allstar.php"><p><?php echo $result1['Paragraph1']; ?></p></a>		
		    </div>
		    <?php
		      $result1 = $model1->fetchById(4);
		    ?>
		    <div class="slider">
		      <img src="<?php echo $result1['ImageURL1']; ?>" alt="">
		      <br>
		      <a href="products-allstar.php"><p><?php echo $result1['Paragraph1']; ?></p></a>		
		    </div>
				<a class="next" onclick="plusSlides(1)">❯</a>
			</div>
		</section>

		<section class="News">
			<h1>Adidas All-Stars News</h2>
			<?php
				include 'admin/adidas-allstar/news/model.php';
		    $model2 = new Model2();
		    $result2 = $model2->fetchById(1);
			?>
			<div class="main-news">
				<img src="<?php echo $result2['ImageURL2']; ?>" alt="">
				<br>
				<a href="news-allstar.php"><?php echo $result2['Paragraph2']; ?></a>
			</div>
		</section>

	</div>

	<footer class="footer">
        <div class="footer-inner">
          <ul>
	          <li><a href="#">Sitemap</a></li>
	          <li><a href="#">Contact Adidas</a></li>
	          <li><a href="#">Privacy & cookies</a></li>
	          <li><a href="#">Terms of use</a></li>
	          <li><a href="#">Trademarks</a></li>
	          <li><a href="#">Safety & eco</a></li>
	          <li><a href="#">About our ads</a></li>
	          <li><a href="#">&copy; Adidas 2022</a></li>
          </ul>
        </div>
	</footer>

	<script >
		let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slider");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
}

document.querySelector('.menu').addEventListener ('click', () => document.querySelector('.main-menu').classList.toggle('show'));
	</script>
</body>
</html>
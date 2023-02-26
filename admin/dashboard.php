<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adidas All-Star</title>
	<link rel="stylesheet" type="text/css" href="adidas-allstar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="specimen_files/specimen_stylesheet.css" type="text/css" charset="utf-8"/>
</head>
<body>
	<header>
		<div class="Name">
			<div class="adidaslogo">
				<a href="adidas-allstar.php"><img src="images/adidasfootballcollectivewhitelogo.png" alt=""></a>
			</div>
			<h1>Admin Dashboard</h1>
	</header>

	<div class="list">	
			<a href="users/users.php"><h2>Users</h2></a>
			<br>
			<h2>Adidas All-Star</h2></a>
			<li><a href="adidas-allstar/boxes/boxes.php">Boxes</a></li>
			<li><a href="adidas-allstar/slider/slider.php">Slider</a></li>
			<li><a href="adidas-allstar/news/news.php">News</a></li>
	<style>
		*{
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		}

		body{
			font-family: 'adihausbold', Helvetica;
			background: rgb(46, 61, 63);
			color: white;
			/* background-image: url("images/background.png");
			background-repeat: repeat;
		  	background-size: 100%; */
		}

		@font-face {
		    font-family: 'adihausbold';
		    src: url('font/adihaus/adihaus-bold.woff-webfont.woff2') format('woff2'),
		         url('font/adihaus/adihaus-bold.woff-webfont.woff') format('woff');
		    font-weight: normal;
		    font-style: normal;

		}


		@font-face {
		    font-family: 'tex_gyre_adventorregular';
		    src: url('font/adidas/texgyreadventor-regular-webfont.woff2') format('woff2'),
		         url('font/adidas/texgyreadventor-regular-webfont.woff') format('woff');
		    font-weight: normal;
		    font-style: normal;

		}

		a{
			text-decoration: none;
			color: white;
		}

		.menu{
			visibility: hidden;
		}

		/* Header */

		header{
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 10px 0;
		}

		.Name{
			display: flex;

		}

		.adidaslogo img{
			padding-right: 12px;
			width: 90px;
		}

		.Name h1{
			font-size: 40px;
			font-family: 'tex_gyre_adventorregular';
			font-weight: bold;
			padding-top: 10px;
		}

		.Pages ul{
			list-style: none;
			display: flex;
		}

		.Pages ul li{
			padding: 0px 10px;
			padding-top: 20px;
		}

		.Pages a{
			font-size: 20px;
		}

		.list{
			margin-top: 50px;
			margin-left: 30px;
		}

		.list li a:hover {
    		color: rgb(228, 196, 39);
		}


		.list h2 {
		    font-size: 24px;
		    margin-top: 30px;
		}

		.list li {
		    margin-bottom: 10px;
		}


		.list {
		    padding: 20px;
		    background-color: rgba(255, 255, 255, 0.05);
		}

		.list {
		    border-radius: 10px;
		}
	<style>
</body>
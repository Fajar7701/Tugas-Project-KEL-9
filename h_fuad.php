<!DOCTYPE html>
<html>
<head>
	<title>Web Moviez</title>
	<link rel="stylesheet" type="text/css" href="<?php echo 
base_url() ?>assets/css/style.css">
	<script type="text/javascript">
function message()
{
alert("Halo, Saya Fuad Hanif Menjabat Sebagai CEO & Founder WEBMOVIEZ")
}
</script>
</head>
<body onload="message()">
<audio autoplay="autoplay" loop>
	<source src="<?php echo base_url() ?>assets/musik/Maroon 5 - Memories (Official Video).mp3">
</audio>
<header>
	<div class="left_area">
	<h1>Web<span>Moviez</span></h1>
	</div>
	<div class="menu">
		<ul id="navigasi">
		<li><a href="<?php echo 
base_url().'index.php/Project' ?>">Home</a></li>
		<li><a href="#">Movie</a>
			<ul>
   			<li><a href="<?php echo 
base_url().'index.php/Project/f_action' ?>">Action</a></li>
   			<li><a href="<?php echo 
base_url().'index.php/beranda/f_drama' ?>">Drama</a></li>
   			<li><a href="<?php echo 
base_url().'index.php/Project/f_adventure' ?>">Adventure</a></li>
  			</ul>
		</li>
		<li><a href="<?php echo 
base_url().'index.php/Project/f_about' ?>">About us</a></li>
		</ul>
	</div>
</header>
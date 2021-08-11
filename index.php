<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Integration of Gender Profiling for BUPC Disaster Preparedness System</title>
	<link rel="stylesheet" href="styles.css">
			<!-- fontawesome link -->
	<script src="https://kit.fontawesome.com/2fdd54c890.js" crossorigin="anonymous"></script>

</head>
<body>
		<section>

			<div id="top">
					<h1>HOME</h1>
				<ul class="menu">
					<li>
						<p>BUPC DRRM DISASTER PREPAREDNESS</p>
					</li>  
				</ul>
			<div class="container">
				<span class="openMenu"><i class="fas fa-bars"></i></span>
			<div class="sideMenu">
				<span class="closeMenu"><i class="fas fa-times"></i></span>
				<ul>
					<li><a href="#">Disaster Guidelines & Planning</a></li>
					<li><a href="#">Warnings and Alerts</a></li>
					<li><a href="#">Memorandum</a></li>
					<li><a href="#">Drills and Exercises</a></li>
					<li><a href="#">Donate</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
			</div>
			</div>

		</section>

	<div class="container" style="text-align: center; margin-top: 5em;">
	<!-- Image to be enlarged and onclick() function call-->
	<img
		src="img/vicinitymap.jpeg"
		onclick="enlargeImg()"
		id="vicinitymap"
	/>
	<br /><br /><br />
	<!-- Button to reset the Image size -->
	<button onclick="resetImg()">Reset</button>
	</div>

	<!-- script to set display property -->
	<script>
	// Get the img object using its Id
	img = document.getElementById("vicinitymap");
	// Function to increase image size
	function enlargeImg() {
		// Set image size to 1.5 times original
		img.style.transform = "scale(1.5)";
		// Animation effect
		img.style.transition = "transform 0.25s ease";
	}
	// Function to reset image size
	function resetImg() {
		// Set image size to original
		img.style.transform = "scale(1)";
		img.style.transition = "transform 0.25s ease";
	}
	</script>
</body>
</html>


<script src="all.min.js">
</script>
<!-- JS -->
<script>
	var openMenu = document.querySelector(".openMenu");
	var closeMenu = document.querySelector(".closeMenu");
	var sideMenu = document.querySelector(".sideMenu");
	

	openMenu.onclick = () =>{
		openMenu.style.opacity = "0";
		sideMenu.style.right = "0";
		sideMenu.style.opacity = "1";
		sideMenu.classList.add("outerVisible");	
	}
	closeMenu.onclick = () =>{
		openMenu.style.opacity = "1";
		sideMenu.style.right = "-100%";
		sideMenu.style.opacity = "0";
		sideMenu.classList.remove("outerVisible");
	}

</script>
</body>
</html>
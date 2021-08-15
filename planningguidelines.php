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
					<li><a href="DisasterGuidelines&Planning.php">Disaster Guidelines & Planning</a></li>
					<li><a href="#">Warnings and Alerts</a></li>
					<li><a href="#">Memorandum</a></li>
					<li><a href="#">Drills and Exercises</a></li>
					<li><a href="#">Donate</a></li>
					<li><a href="#">About Us</a></li>
				</ul>
			</div>
			</div>
			</div>


				<table class="center">
			
					<h1>How can you stay vigilant in the days leading up to, during, and following a disaster? These are some tips and guidelines to keep in mind.</h1>
			
  				<tr>
    				<th>DISASTER GUIDELINES AND PLANNING</th>
  				</tr>
  				<tr>
    				<td>In emergency and disaster preparedness, we all have a role to play. You can prepare for what you can control by understanding your position.

    				</td>
  				</tr>
  				<tr>
    				<td>STORM</td>
  				</tr>

				</table>
				

		</section>








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
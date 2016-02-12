<?php 
	$page = basename($_SERVER['PHP_SELF']);
	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	$mobile = preg_match("#Mobile#", $userAgent);
	$phoneNumber = ($mobile === 1) ? '<a href="tel:1-530-581-2644">(530) 581-2644</a>' : '(530) 581-2644';
?>


<!-- header-group row: width = grid_width -->
	<header>
		<label for="toggle">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</label>
		<input type="checkbox" id="toggle">	
			<nav>
				<div class="nav">
					<a class="navlinks" href="index.html">Home</a>
					<a class="navlinks" href="#hhmenu">Happy Hour</a>					
					<a class="navlinks" href="#apps">Menu</a>
					<a class="navlinks" href="#wine">Wine</a>
					<a class="navlinks" href="events.html">Events</a>
					<a class="navlinks" href="gallery.html">Gallery</a>
					<a class="navlinks" href="reservations.html">Reservations</a>
				</div>	
			</nav>
		</header>
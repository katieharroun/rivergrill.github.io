<?php 
	$page = basename($_SERVER['PHP_SELF']);
	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	$mobile = preg_match("#Mobile#", $userAgent);
	$phoneNumber = ($mobile === 1) ? '<a href="tel:1-530-581-2644">(530) 581-2644</a>' : '(530) 581-2644';
?>


<!-- header-group row: width = grid_width -->
<header>
			<nav>
				<div class="nav">
					<a class="navlinks" href="index.html">Home</a>
					<a class="navlinks" href="index.html#hhmenu">Happy Hour</a>					
					<a class="navlinks" href="index.html#apps">Menu</a>
					<a class="navlinks" href="index.html#wine">Wine</a>
					<!-- <a class="navlinks" href="events.html">Events</a>
					<a class="navlinks" href="gallery.html">Gallery</a> -->
					<a class="navlinks" href="reservations.html">Reservations</a>
				</div>	
			</nav>
</header>
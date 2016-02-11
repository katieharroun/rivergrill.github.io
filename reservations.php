

<!DOCTYPE html>
<html>
<head>
	<title>River Grill</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <!--  <meta charset="utf-8">
	  <title>jQuery UI Datepicker - Default functionality</title>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  <link rel="stylesheet" href="/resources/demos/style.css">
	  <script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
	  </script>
 --></head>
<body>
		<header>
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
	<img src="images/reservationbook.jpg">	
	<main id="rgreserve">
		<div id="reserve">
			<h1>River Grill Reservations</h1>
			<h4>For Parties greater than 15 people, please call (530)581-2644 for reservations</h4>
			<h4>Please provide the following information about you and your group:</h4>
		</div>
		<div class="formbox">
			<h4>About yourself:</h4>
			<div class="inputrow">
				<div class="input">
					<label for="first_name">First Name:</label>
					<input type="text" name="first_name" value autofocus="autofocus">
				</div>	
				<div class="input">
					<label for="last_name">Last Name:</label>
					<input type="text" name="last_name" value>
				</div>	
				<div class="end"></div>
			</div>	
			<div class="inputrow">
				<div class="input">
					<label for="phone">Phone:</label>
					<input type="tel" name="phone" value>
				</div>	
				<div class="input">
					<label for="email">Email:</label>
					<input type="email" name="email" value>
				</div>	
				<div class="end"></div>
			</div>
			<!-- <div class="inputrow">
				<div class="checkbox" id="opt_in">
					<label for="opt_in">Yes! Send me special offers</label>
					<input type="checkbox" name="opt_in" id="opt_in" value="1">
				</div>
				<div class="end"></div>
			</div> -->	
		</div>	
		<div class="formbox">
			<h4>About your Reservation:</h4>
			<div class="inputrow">
				<div class="input">
					<label for="time">Time:</label>
					<select name="time">
						<option value="17:30">5:30 PM</option>
						<option value="17:45">5:45 PM</option>
						<option value="18:00">6:00 PM</option>
						<option value="18:15">6:15 PM</option>
						<option value="18:30">6:30 PM</option>
						<option value="18:45">6:45 PM</option>
						<option value="19:00">7:00 PM</option>
						<option value="19:15">7:15 PM</option>
						<option value="19:30">7:30 PM</option>
						<option value="19:45">7:45 PM</option>
						<option value="20:00">8:00 PM</option>
						<option value="20:15">8:15 PM</option>
						<option value="20:30">8:30 PM</option>
					</select>	
				</div>	
				<div class="input">
					<label for="date">Date:</label>
					<input type="text" name="date" id="datepicker" value="12/15/2015" class="hasDatepicker valid">
				</div>	
				<div class="end"></div>
				<div class="input">
					<label for="persons"># in Party:</label>
					<input type="number" name="persons" value="1" class="nunSelector" min="0" max="15">
				</div>	
				<div class="input">
					<label for="areas_id">Area:</label>
					<select name="areas_id">
						<option value="1">Inside</option>
						<option value="2">Outside</option>
					</select>
					<span class="subscript" id="area_subscript">We cannot gaurantee outside seating</span>
				</div>	
				<div class="end"></div>
			</div>	
		</div>
		<div class="input" id="continue">
			<input type="submit" value="continue" name="submit_reservation">
		</div>		
		<div class="end"></div>
	</main>	
	<footer>
		<div id="footercover">
			<div id="footwords">
				<h3>River Grill</h3>
				<h4>Reservations: (530)581-2644</h4>
				<h4>55 West Lake Blvd.</h4>
				<h4>Tahoe City, CA 96145</h4>
				<h4>Just west of Fanny Bridge at the "Y" in Tahoe City- Intersection of Hwy 28 and 89</h4>
			</div>
		</div>
	</footer>
</body>
</html>
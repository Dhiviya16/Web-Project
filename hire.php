<!DOCTYPE html>
<html>
<head>

<!-- To control the page's dimensions and scaling -->
<meta name="viewport" content="with=device-width, initial-scale=1.0">
<title>Fixups</title>

<!-- Link to the css page -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/umd/popper.min.js"></script>
<link rel="stylesheet "href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<nav>
	<a href="index.php"><img src="images/logo.png"></a>
</nav>

<div class= "container-hire1">
	<div class="card-hire1">

<!-- Form for the service booking  -->
<form action="insert_hire.php" method="post">

<h1> Describe your request </h1>
<br>

<!-- Dropdown list of locations -->
<label for ="loca">Location:</label>
	<input type="text" name="location" id="loca" list="locaList" required>
	<datalist id="locaList">
		<option>Air Itam</option>
		<option>Balik Pulau</option>
		<option>Batu Ferringhi</option>
		<option>Batu Maung</option>
		<option>Bayan Lepas</option>
		<option>Gelugor</option>
		<option>Jelutong</option>
		<option>Pulau Tikus</option>
		<option>Sungai Ara</option>
		<option>Sungai Dua</option>
		<option>Tanjung Bungah</option>
		<option>Tanjung Tokong</option>
		<option>Teluk Bahang</option>
		<option>Teluk Kumbar</option>
	</datalist>
<br><br>

<!-- Textarea to describe the problem -->
<label for="input">Describe and specify the issue in minimum 20 words<br><textarea rows="10" cols="40" name="problem" onchange="wordLimit(this)";></textarea></label>

<br>
<!-- Radio button to choose the property-->
<label> Type of property </label>
<br>

<input type="radio" name="property" value="Landed" required> Landed<br>
<br>
<input type="radio" name="property" value="High-Rise" required> High-Rise<br>
<br>

	<label> Date & Time </label>
	<br>
	<input type="datetime-local" name="date_time" required>
	<br>
<br>

	<p> Select alternative date and time </p>
	<input type="datetime-local"  name="a_datetime" required="required">
	<br><br><br>
	<button class="btn btn-warning btn-block btn-flat2">Done</button>

</form>
</div>
</div>

<script>

// Minimum word length
	 var wordLen = 20; 
     function wordLimit(obj)
     {
      var len = obj.value.split(/[\s]+/);
       if(len.length < wordLen){
           alert("You cannot write less than "+wordLen+" words in this text area.");
           obj.oldValue = obj.value!=obj.oldValue?obj.value:obj.oldValue;
           obj.value = obj.oldValue?obj.oldValue:"";
           return false;
       }
     return true;
   }

</script>

<!-- Footer of website -->

	<footer>
	<div class="footer-content">
		<h3>About Us</h3>
		<p> Fixups is the best way to hire local service providers for your home or office maintenance. We provide a wide selection of home services in Penang. </p>
		
		<ul class="socials">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		</ul>
		
		</div>
	<div class="footer-bottom">
		<p>COPYRIGHT &copy;2021 FIXUPS. ALL RIGHTS RESERVED</p>
	</div>
</footer>















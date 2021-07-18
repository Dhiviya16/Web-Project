<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Fixups</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/1d908533b5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet "href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	
</head>
<body>
<section class="service">
	<nav>
		<a href="index.php"><img src="images/logo.png"></a>
			
	</nav>


	<div class="inner"> 
<section class="service">
	<h1> Let's choose a service and hire the best professionals</h1>
	<br>
  
		<div class="container-pop">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/ac.jpg" alt="">
						<div class="card-text">
					<h5>A/C Service</h5>
		    </div>
		</div>
	</div>

	<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/cleaning.jpg" alt="">
						<div class="card-text">
					<h5>Cleaning Service</h5>
		    </div>
		</div>
	</div>

	<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/electrian.jpg" alt="">
						<div class="card-text">
					<h5>Electrical & Wiring</h5>
		    </div>
		</div>
	</div>
</div>
</div>

	<div class="container-pop1">
	<div class="row">


	<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/lawn.jpg" alt="">
						<div class="card-text">
					<h5>Lawn Mowing</h5>
		    </div>
		</div>
	</div>

<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/handyman.png" alt="">
						<div class="card-text">
					<h5>Handyman</h5>
		    </div>
		</div>
	</div>
<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/plumber.jpg" alt="">
						<div class="card-text">
					<h5>Plumbing Service</h5>
		    </div>
		</div>
	</div>


</div>
</div>

<div class="container-pop1">
	<div class="row">


	<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/disinfection.jpg" alt="">
						<div class="card-text">
					<h5>Home Disinfection</h5>
		    </div>
		</div>
	</div>

<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/painting.jpg" alt="">
						<div class="card-text">
					<h5>Pest Control</h5>
		    </div>
		</div>
	</div>
<div class="col-md-4 col-sm-6">
					<div class="card-pop">
						<img src="images/pest.jpg" alt="">
						<div class="card-text">
					<h5>Pest Control</h5>
		    </div>
		</div>
	</div>

	<div class="popup-service">
	<div class="popup-card">
		<div class="info">
			<h2> Pest Control</h2>
			<br>
			<p> There are some profesionals who are ready to help you. Get few quatations to compare their pricing and learn more about their service before you select one of them.</p>
			<div class ="checkbox-service">
				<form onsubmit="return validate()">
				<div style ="visibility:hidden; color:red;font-size:15px" id="chk_error">Please choose a service provider to proceed.
			</div>
			<br>
          <div>
				<input class ="single-checkbox" name = "langs[]" type="checkbox" id="langs_service1" value="Pest Paramedics" >  
				<label for= "langs_service1"> Pest Paramedics</label> <br>
			</div>
			<div>
				<input class ="single-checkbox" name = "langs[]" type="checkbox" id="langs_service2" value="Diamond Pest">   
				<label for= "langs_service2"> Diamond Pest</label><br> 
			</div>
			<div>
				<input class ="single-checkbox" name = "langs[]" type="checkbox" id="langs_service3" value="Tharwan Qadir">  
				 <label for= "langs_service3"> Tharwan Qadir</label> <br>
			</div>
			<br>
			<div>
			
				<input type="submit" class="btn btn-warning btn-block btn-flat1" name="submit" value="Next">
				<br><br>
	
			<a href ="services.php" type="button" class="btn btn-warning btn-block btn-flat1">Cancel</a>
		
			<br><br>
			
		</div>
		
			
			<a href="" class="learn-btn">Learn more to compare the services</a>
		</form>
		</div>
	</div>
</div>


<script type="text/javascript">


function validate()
{
    var form_data = new FormData(document.querySelector("form"));
    if(!form_data.has("langs[]"))
    {
        document.getElementById("chk_error").style.visibility = "visible";
    }
    else
    {
        document.getElementById("chk_error").style.visibility = "hidden";
        window.location='hire.php';

    }
    return false;
}
</script>
<script type="text/javascript">

$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

</script>
</script>			
</div>
</div>
</div>

</section>

</section>

<br>	   


	   
<footer>
	<div class="footer-content">
		<h3>About Us</h3>
		<p> Fixups is the best way to hire local service providers for your home or office maintenance. We provide a wide selection of home services in Penang.</p>
		
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


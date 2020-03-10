<?php 

/*require "hello.php";

$ret= new hello();

//User to logout

// if(isset($_GET['status']) && $_GET['status']=='loggedout')
// {
// 	$ret->Logout();
// }

if(isset($_POST['loginuser']))
{

	$response= $ret->Send();
}*/
session_start();
if(isset($_SESSION['logged_in'])){
	header('location: indra.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>German Project</title>
	<link rel="stylesheet" href="mainpage.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="JS/validate.js"></script>
	<meta name=”viewport” content=”width=device-width, initial-scale="1.0">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
</head>
<body>


	<script type="text/javascript">
		$(window).scroll(function() {
			if ($(document).scrollTop() > 100) {
				$('.navbar-scroll').addClass('color-change');
				$('.navbar-logo').addClass('size-change');
				$('.Nav_Button').addClass('margin-change');
				
			} else {
				$('.navbar-scroll').removeClass('color-change');
				$('.navbar-logo').removeClass('size-change');
				$('.Nav_Button').removeClass('margin-change');
				
			}
		});
	</script>


	<!-- ********************** OPENING PAGE ************************* -->
	<div class="bodydiv">
		<div class="navbar-scroll">
			<img src="logo123.png" class="navbar-logo">
			<ul class="Nav_Bar_Body">

				<li class="Nav_Button hvr-underline-from-center"><a href="teampage.html" class="Nav_Button_Link" style="text-decoration: none;">
					<h4>About</h4></a>
				</li>
				<li class="Nav_Button hvr-underline-from-center">
					<a href="teampage.html" class="Nav_Button_Link" style="text-decoration: none;">

						<h4>Why Us?</h4>
				</li>
				<li class="Nav_Button hvr-underline-from-center">
					<a href="#About" class="Nav_Button_Link" style="text-decoration: none;">
						<h4>Help</h4>
					</a>
				</li>

			</ul>
		</div>
		<?php
			      $uname='';
			      if(isset($_SESSION['error'])){
			        $uname=$_SESSION['uname'];
			        echo "<script>swal('".$_SESSION['error']."','','warning');document.getElementById('Uname_log').focus();</script>";
			        unset($_SESSION['error']);
			      }
		?>
		<div class="container1">
			<div class="login-panel" style="display: block;" id="login1">
				<center>

					<form action="loginaction.php" method="post" name="login" onsubmit="return logvalidate();">

						<h3 style="color: white; letter-spacing: 4px;">Get Started</h3>
						<br>
						<div style="justify-content: space-between">
						<input type="Text" name="Username" id="Uname_log" placeholder="Username" class="inputbody" autofocus>
						<input type="password" name="passwd" placeholder="Password" class="inputbody" autofocus><br>
					</div>
						<div style="display: flex; justify-content: space-around;">
							<div>
								<input type="checkbox" name="rem1" value="Remember Me" class="check1">
								<label>Remember Me</label>
							</div>
							<a href="#forgot" >Forgot Password?</a></div>
							<br><br>
							<input type="submit" name="loginuser" value="LOGIN" class="submitbut">
							<br><h5>OR</h5><br>
							<a class="register-button" style="text-decoration: none;" onclick="slide(0)">		
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								Sign Up
							</a>

						</form>
					</center>

				</div>
				<?php
	
				    $fname='';
				    $uname='';
				    $email='';
				      if(isset($_SESSION['name_takenerror'])){
				        $fname=$_SESSION['fname'];
				        $uname=$_SESSION['uname'];
				        $email=$_SESSION['email'];
				        echo "<script>swal('".$_SESSION['name_takenerror']."','','warning')</script>
				        ";
				        
				        unset($_SESSION['name_takenerror']);
				      }
				    ?>
				<div class="login-panel" style="display: none;" id="signup1">
					<center>

					<form action="regaction.php" method="post" name="register" onsubmit="return regvalidate();" id="registerform">

						<h3 style="color: white; letter-spacing: 4px;">Register as User</h3>
						<br>
						<input type="Text" name="Username" id="Uname_log" placeholder="Username" class="inputbody" alue="<?php echo $uname;?>" autofocus>
							<input type="Text" name="fname" placeholder="Full Name" class="inputbody" value="<?php echo $fname;?>" autofocus>
							<input type="email" name="email" placeholder="E-mail ID" class="inputbody" value="<?php echo $email;?>" autofocus>
							<input type="password" name="passwd" placeholder="Password" class="inputbody" autofocus>
							<input type="password" name="cpasswd" placeholder=" Confirm Password" class="inputbody" autofocus>
						<div>
							<input type="submit" name="Register" value="SIGN UP" class="submitbut">
							<br><h5>OR</h5><br>
							<a class="register-button" style="text-decoration: none;" onclick="slide(1)">		
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								LOG IN
							</a>

						</form>
					</center>
					
				</div>


				<script type="text/javascript">
				function slide(n){
					var i;
  					var x = document.getElementsByClassName("login-panel");
  					  for (i = 0; i < x.length; i++)
  					   {
    						x[i].style.display = "none";  
  						}
  						if(n==0)
  							document.getElementById("signup1").style.display="block";
  						if(n==1)
  							document.getElementById("login1").style.display="block";

				}	
				</script>



				<script type="text/javascript">
					var TxtRotate = function(el, toRotate, period) {
						this.toRotate = toRotate;
						this.el = el;
						this.loopNum = 0;
						this.period = parseInt(period, 10) || 2000;
						this.txt = '';
						this.tick();
						this.isDeleting = false;
					};

					TxtRotate.prototype.tick = function() {
						var i = this.loopNum % this.toRotate.length;
						var fullTxt = this.toRotate[i];

						if (this.isDeleting) {
							this.txt = fullTxt.substring(0, this.txt.length - 1);
						} else {
							this.txt = fullTxt.substring(0, this.txt.length + 1);
						}

						this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

						var that = this;
						var delta = 300 - Math.random() * 100;

						if (this.isDeleting) { delta /= 2; }

						if (!this.isDeleting && this.txt === fullTxt) {
							delta = this.period;
							this.isDeleting = true;
						} else if (this.isDeleting && this.txt === '') {
							this.isDeleting = false;
							this.loopNum++;
							delta = 500;
						}

						setTimeout(function() {
							that.tick();
						}, delta);
					};

					window.onload = function() {
						var elements = document.getElementsByClassName('txt-rotate');
						for (var i=0; i<elements.length; i++) {
							var toRotate = elements[i].getAttribute('data-rotate');
							var period = elements[i].getAttribute('data-period');
							if (toRotate) {
								new TxtRotate(elements[i], JSON.parse(toRotate), period);
							}
						}
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
<div class="verticalline">

</div>
<div class="desc-panel">
	<h1 class="typestyle"><span style="color: rgb(0,168,246);">Energy</span><hr style="margin: 2%;border-top: none;"><span
		class="txt-rotate"
		data-period="500"
		data-rotate='[ "has never been easier. ", "on your fingertips. ", "to you, for you. ", "faster delivered.", "simplified by iNDRA. " ]'></span></h1>
<!-- 					<button class="">Get It Now</button>
	We help making change happen
	Energy has never been simpler
	Making energy easier than ever
	Inspire the iNDRA in you

-->
<button class="hvr-float-shadow"><h4>Learn More</h4></button><br>
</div>
</div>
<!-- <script>
	$(document).ready(function() {
    $('buttonlink1').click(function() {
        alert('LED IS ON.');
        return false;
    });
});

	$(document).ready(function() {
    $('buttonlink2').click(function() {
        alert('LED IS OFF');
        return false;
    });
});

</script> -->
<!-- VIDEO CONTAINER -->

<div class="video-container">

	<div class="video-overlay"></div>
	<video   loop muted autoplay >
		<source src="video1.mp4" type="video/mp4">
		</video>
	</div>


</div>
<!-- 		<script src="JS/scroll.js"></script>
-->
<!-- ************************************************************** -->


<?php if(isset($response)) echo "<h4 class='alert'>".$response."</h4>";?>

<div class="infoclass-out">
	<h1 style="color: rgb(0,168,246);">About</h1>
	<div class="infoclass-content">
		The world is on the verge of finishing its almost all sources of non-renewable
energy. The current technologies can only predict an approximate electrical
consumption in households and other institutions [3] . The prediction of power
usage is useful only when we have an efficient way of using the electrical
power that is being produced. The idea of the project is to develop a wifi-based
network which would be used to monitor the electrical systems in urban
households and would be connected to the local wifi system (Hub) . This
network will be used to provide live electric usage data to the user’s mobile
device using an easy-to-use mobile application, the government as well as the
Power producing companies which can be used to detect power outages and
will also give the people a very meaningful insight on their power consumption
which include a reward-basis system for rewarding efficient power users and
will also give the current power load so as to prevent overloading and blackout(
power outage) . The network would include an embedded CPU or an Arduino
Uno. The sensors used in the system will be based on the AEON (Accurate
Prediction of Power Consumption) to quantitatively predict consumption of
electrical energy.The sensors used in the system will be Mica2 sensor node
and ACS712 current sensor which would the network in collecting data
integrated by ThingSpeak.
The world of energy is changing. There is a global urge to drastically reduce CO2
emissions in order to slow down global warming. 

Nations are reducing their dependency on imported fossil fuels by stimulating energy
savings and the use of renewable energy. 

Sustainable sources, such as solar and wind energy, are not always available. Integrating
large shares of renewable energy in our current energy supply system in a reliable way
provides a real challenge. 

Our energy use is shifting towards electricity. This trend is accelerated by the fast-
growing fleet of electric vehicles and the increase of electric space heating and cooling.
The electrification of our energy use adds to the challenges that our future energy supply
system faces.

Our project proposal is to develop a wireless based network which would be used to
monitor the electrical systems in urban households and would be connected to the local
wireless system (Hub). This network will be used to provide live electric usage data to the
user’s mobile device using an easy-to-use mobile application, the government as well as
the Power producing companies. This method can be used to detect power outages and
will also give the people a very meaningful insight on their power consumption which
include a reward-basis system for rewarding efficient power users and will also give the
current power load so as to prevent overloading and blackout (power outage).

	</div>
</div>
<div class="footer">
	<center>
<!-- 		<div class="footermid">
			<div class="footermid-el">
				<li style="list-style: none;">
					<ul class="footer-list-el"><h3 class="footer-label"><b>THE TEAM</b></h3></ul>
					<br>
					<ul class="footer-list-el">Know us</ul>
					<ul class="footer-list-el">Members</ul>
					<ul class="footer-list-el">Acknowledgments</ul>
					<ul class="footer-list-el">Thank Us</ul>
				</li>	
			</div>
			<div class="footermid-el">
				<li style="list-style: none;">
					<ul class="footer-list-el"><h3 class="footer-label"><b>HELP</b></h3></ul>
					<br>
					<ul class="footer-list-el">Documentation</ul>
					<ul class="footer-list-el">Read Logs</ul>
					<ul class="footer-list-el">Report an Issue</ul>
					<ul class="footer-list-el">Customer Forum</ul>
				</li>	
			</div>
			<div class="footermid-el">
				<li style="list-style: none;">
					<ul class="footer-list-el"><h3 class="footer-label"><b>OUR SERVICES</b></h3></ul>
					<br>
					<ul class="footer-list-el">Energy Solutions</ul>
					<ul class="footer-list-el">Remote Environment</ul>
					<ul class="footer-list-el">Our Partners</ul>
					<ul class="footer-list-el">Thank Us</ul>
				</li>	
			</div>
		</div> -->
		<div class="footerend">
			<img class="imgclass" src="instagram (1).png">
			<img class="imgclass" src="facebook (1).png">
			<img class="imgclass" src="whatsapp (1).png">
			<img class="imgclass" src="twitter (1).png">
			<img class="imgclass" src="github.png">
			<img class="imgclass" src="linkedin.png">
		</div> 
		<div class="footerin">
			<br>
			<input type="email" name="contact" placeholder="name @example.com" class="footerinput"><input type="submit" value="GO!" class="footerbut" placeholder="Ping!">
			<br><br>
			<h5>indra &copy;</h5>
			<h7>a place for all your enrgy needs and solutions.</h7>
		</div>
	</center>
</div>
</body>
</html>
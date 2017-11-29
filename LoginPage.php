<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title> 

	<meta charset="utf-8">
	<meta name="language" content="english"> 
	<meta http-equiv="content-type" content="text/html">
	<meta name="author" content="Peter Jough">
	<meta name="designer" content="Peter Jough">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<meta name="description" content="A login/registration page for IS218 - Yong Zhao">
	<meta name="keywords" content="Peter Jough, NJIT, bis, web design, yong zhao, is218, peju, php">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<link rel="icon" type="image/x-icon" href="favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="ani.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<section class = "parallax">
		<div class = "parallax-inner">
			<div class = "registerbox">
				<p class = "loginhere">Welcome! Please login</p>
				<div class = "container boxmove">
					<div class="form-group">
						<form method="post" action="action_login.php" style="display:inline">
					    	<div class="form-group boxsize">
					      		<input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
					    	</div>
					    	<div class="form-group boxsize">
						      	<input type="password" name="password" class="form-control" id="email" placeholder="Enter password">
					    	</div>
						
							<input type = "submit"  action="action_login.php" name = "register" value = "Register"></button>
						</div>
					</form>	
					</div>
				</div>	
			</div>
		</div>
		<div>
			<p class = "logintext">Don't have an account?<br></p>
			<p class = "foryou"> Register Below</p>
				</a>
			</div>
	</section>
	<section>
		<div class="container foryou2">
	    	<form method="post" action="action_signup.php" style="display:inline">
		    	<div class="form-group boxsize">
		      		<input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
		    	</div>
		    	<div class="form-group boxsize">
			      	<input type="password" name="password" class="form-control" id="email" placeholder="Enter password">
		    	</div>
		    	<div class="form-group boxsize">
		      		<input type="text" name="fname" class="form-control" id="email" placeholder="Enter first name">
			    </div>
		    	<div class="form-group boxsize">
		    		<input type="text" name="lname" class="form-control" id="email" placeholder="Enter last name">
		    	</div>
		    	<div class="form-group boxsize">
		      		<input type="text" name="phone" class="form-control" id="email" placeholder="Enter phone number">
		    	</div>
		    	<div class="form-group boxsize">
		      		<input type="date" name="birthday" class="form-control" id="pwd" >
			    </div>
			    <div class="form-group boxsize">
		      		<input type="text" name="gender" class="form-control" id="pwd" placeholder="Enter gender">
			    </div>
			    <div class = "form-group boxright">
	    			<input type="submit" action="action_signup.php" value="Create Account" class="btn btn-default bo buttoncolor">
	    		</div>
	  		</form>
		</div><br>	
</section>		
	
		<!--<iframe src="https://giphy.com/embed/7GHRDluBmx9O8" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe?-->
		
		<script>
		//jquery 
		function main() {
		  $('.parallax').hide();
		  $('.parallax').fadeIn(2010);
		  
		  $('.projects').hide();
		  
		  $('.projects-button').on('click', function() {
				$(this).next().slideToggle(400);
		    $(this).toggleClass('active');
		    $(this).text('Projects Viewed');
			});
		}
		$(document).ready(main);
		</script>
</body>
</html>
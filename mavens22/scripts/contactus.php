<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ccontact Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>

<style type="text/css">
    
	.social a {
  font-size: 1.5em;
  padding: 0.5rem;
}
.fa-facebook{
  color: #3b5998;
}
.ta-twitter{
	color:#00aced:
}
.fa-google-plus-g{
	color: #dd4b39;
}
.fa-intstargram{
	color: #517fa4;
}
.fa-youtube {
	color: #bb0000;
}


.fa-facebook:hover;
.ta-twitter:hover;
.fa-google-plus-g:hover;
.fa-intstargram:hover;
.fa-youtube:hover;
{
	color:#d5d5d5;
}

    
	</style>t

<!-- main section -->

<div class="container">
	<div class="row">
		<div class="col-lg-6 m-auto"> 
			<div class="card mt-5">
				<div card-title>
					<h2 class="text-center py-2"> Contact Us</h2>
					<hr>
					<?php 
					$Msg ="";
					if (isset($_GET['error'])) {
						

					 	$Msg = "Please fill in tha balanks";
					 	echo '<div class="alert alert-danger">'.$Msg.'</div>';

					 } 

					 if (isset($_GET['success'])) {
						

					 	$Msg = "Your email has been sent successfully ";
					 	echo '<div class="alert alert-success">'.$Msg.'</div>';

					 }
					 ?>
					 
						<div class="card-body">
							<form action="email.php" method="post" enctype="multipart/form-data">
								<input type="text" name="UName" placeholder="User Nmae" class="form-control mb-2 ">
								<input type="email" name="Email" placeholder="Email" class="form-control mb-2">
								<input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
								<textarea name="msg"  class="form-control mb-2"></textarea>
								<button class="btn btn-success" name="btn-send"> Send</button>
							</form>
							
						</div>
				</div>
				
			</div>
		</div>
	</div>
	
</div>
<hr class="my-4">

<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">
		
	  <h4 style="font-size:70%" class="display-4">HERE ARE OTHER WAYS TO CONTACT WITH US  </h4>
	 
    </div>
    <div class="col-12 social padding">
        <a href="#"> <i class="fab fa-facebook"></i></a>
        <a href="#"> <i class="fab fa-twitter"></i></a>
        <a href="#"> <i class="fab fa-google-plus-g"></i></a>
        <a href="#"> <i class="fab fa-instagram"></i></a>
        <a href="#"> <i class="fab fa-youtube"></i></a>
      
    </div>
    
  </div>
  
</div>




</body>
</html>
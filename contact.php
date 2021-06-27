<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="css/style.css" type="text/css" />

<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

<title>CHESTER RIVER PHARMACY-Contact Us</title>


 
</head>



<body>

<div>
    <div>
	   	<?php include "header.php" ?>
	</div>
	<!--------------------------top-header--------------------------------------->

	
	<!-------------------------------contact----------------------------->

	<div class="contact-us">

	  		<div class="aboutus">
                	<div class="container">
                    	<div class="row">
                        	<div class="col-sm-12">
                        		<h3>Contact Us</h3>
                             </div>
                        </div>
                    </div>
                </div>
                

		<div class="container">

			<div class="row">
                <div class="col-sm-4">
                        <?php include "left.php" ?>
                </div> 
				
			<div class="col-sm-8 forms">

				<p>You may contact us by filling this form or you may find more details about our contact information here:</p>

				<form method="post">

					<div class="form-group">

						<label for="name">Name</label>

						<input type="text" name="con_name" class="form-control" required />

					</div>

					<div class="form-group">

						<label for="email">Email</label>

						<input type="text" name="con_email" class="form-control" required/>

					</div>

					<div class="form-group">

						<label for="message">Message</label>

						<textarea class="form-control" rows="3" name="message" required></textarea>

					</div>

					<div class="col-sm-2" style="float:right;">
                    <input type="submit" name="submit" class="submit-btn"  value="Submit">
                                
                                 </div>
				</form>

			</div>

			</div>

			</div>

			<div>

			
			</div>

		

	</div>


<?php include "footer.php"?>
</div>



</body>

</html>


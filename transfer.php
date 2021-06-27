<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<title>CHESTER RIVER PHARMACY-Transfer Form</title>

</head>

<body>

<div>

		<div>

	  	<?php include "header.php" ?>

		</div>

	

	<div class="aboutus">
                	<div class="container">
                    	<div class="row">
                        	<div class="col-sm-12">
                        		<h3>Transfer</h3>
                             </div>
                        </div>
                    </div>
                </div>
     </div>
    <div class="container prescription">
     
		<div class="row">
		 <div class="col-sm-4">
            		<?php include "left.php" ?>
            </div>
			<div class="col-sm-8 customer-refill">
				<h2>Transfer Prescription</h2>
				<p>You can now transfer your prescription medication online to our pharmacy. <br />Simply fill out the form below.</p>
				<div class="transfer-prescription">
						
				<div class="transfer-form">
					<form class="form-inline" method="post">
						<div class="patient-information">
						<div class="strip">
						   <span><h3>Patient Details</h3></span>
						 </div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name" name="first_name" required />
								<input type="text" class="form-control" placeholder="Middle Initial"  name="middle_initial"/>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Last Name"  name="last_name" required/>
								<input type="text" class="form-control" placeholder="Date of Birth" name="dob" />
							</div>
							<div class="form-group">
								<div class="textbox">
									<input type="text" class="form-control" placeholder="Phone Number" name="phone_number" required />
									<input type="text" class="form-control" placeholder="Address" name="address" required />
								</div>
							</div>
							<div class="form-group">
								<div class="textbox">
									<input type="text" class="form-control" placeholder="City" name="city" required />
									<input type="text" class="form-control" placeholder="State" name="state" required />
								</div>
							</div>
							<div class="form-group">
								<div class="textbox">
									<input type="text" class="form-control" placeholder="Zip/Postal Code" name="zipcode" required/>
									<input type="text" class="form-control" placeholder="Pharmacy Name" name="pharmacy_name" required  />
								</div>
							</div>
							<div class="form-group">
								<div class="textbox">
									<input type="text" class="form-control" placeholder="Pharmacy Phone" name="pharmacy_phone" required />
                                    <input type="text" class="form-control" placeholder="Email ID" name="email" required />
								</div>
							</div>
						</div>
					 
					  <div class="prescriptions">
					  	<div class="strip">
					  		<span><h3>Insurance Information</h3> (optional)</span>
						</div>
							<div class="form-group">
								<div class="textbox">
									<input type="text" class="form-control" placeholder="Cardholder First Name" name="card_holder_first_name"/>
									<input type="text" class="form-control" placeholder="Cardholder Last Name" name="card_holder_last_name" />
								</div>
							</div>
							<div class="form-group">
								<div class="textbox">
									<input type="text" class="form-control" placeholder="Cardholder ID" name="card_holder_id"/>
									<input type="text" class="form-control" placeholder="BIN" name="bin" />
								</div>
							</div>
							<div class="form-group">
								<div class="textbox">
									<input type="text" class="form-control" placeholder="PCN" name="pcn" />
								</div>
							</div> 
					  </div>
					  
					   <div class="pickup">
					   	   <div class="strip">
					  		  <span>Prescriptions to be transferred</span>
						   </div>
							<div class="form-block transfer-all">
								<p><i>If you would like to transfer all prescriptions, simply check the box below.</i></p>
								<div class="checkbox2">
									<p><input type="checkbox"/> Transfer all my prescriptions</p>
								</div>
							 </div>
							 <div class="form-block selectively">
								<p><i>Or enter your prescription number and medication name</i></p>
								<p>List specific prescriptions to be transferred</p>
							</div>
							<div class="form-group labels medical-h6">
									<h6>MEDICATION NAME</h6>
									<h6 style="margin-left:60px;">PRESCRIPTION NUMBER <br />FROM CURRENT PHARMACY</h6>
							</div>
							<div class="form-group rx-form">
								<div class="textbox">
									<input type="text" class="form-control" placeholder="Rx1 Med Name" name="rx_med_name[]"/>
									<input type="text" class="form-control" placeholder="Rx1 #" name="rx_ref[]"/>
								</div>
                                <div style="margin-left:20px;"> <img src="images/tick-old.png" /></div>
							</div>
                            
                       

					 <div id="divTxt"> 
                        </div>
                        

					     </div>
                         
						 <div class="col-sm-12 function" style="padding: 15px;">
						
                              <input type="submit" name="submit" class="btn btn-primery"  style="width:auto;   float:right; "value="Submit">
						 </div>
						
				   </form>
				</div>
			</div>
			</div>
		</div>
		</div>
			<br clear="all" />
		<?php include "footer.php"?>

</div>
</body>
</html>
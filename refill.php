<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" href="css/style.css" type="text/css" />

<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />

<title>CHESTER RIVER PHARMACY-About Us</title>

</head>

<body>
			<div>
            			<?php include "header.php" ?>
            </div>
            
           		<div class="aboutus">
                	<div class="container">
                    	<div class="row">
                        	<div class="col-sm-12">
                        		<h3>Refill</h3>
                             </div>
                        </div>
                    </div>
                </div>
                
               <div class="container">
                        	<div class="row">
                        		<div class="col-sm-4">
                            		<?php include "left.php" ?>
                            	</div>
                                <div class="col-sm-8 form">
                                	<h2>Refill a Prescription</h2>
				<p>Fill one,two or as many prescription as you would like.Take care of your prescription refills from the comfort of your own home.
				<div class="refill-form" style="width:100%;">

					<form class="" method="post"> 

						<div class="">

						<div class="strip">
						
						   <span>Patient Information</span>

						 </div>

							<div class="form-group row">

								<div class="col-sm-6"><input type="text" class="form-control" placeholder="First Name" name="first_name" required/></div>

								<div class="col-sm-6"><input type="text" class="form-control" placeholder="Second Name" name="last_name" required/></div>

							</div>

							<div class="form-group row">

								<div class="col-sm-6"><input type="text" class="form-control" placeholder="Phone Number" name="phone_number" required/></div>

								<div class="col-sm-6"><input type="text" class="form-control" placeholder="mm/dd/yyyy"  name="dob"/></div>

							</div>

							<div class="form-group row">

								<div class="textbox col-sm-6">

									<input type="text" class="form-control" placeholder="Email Address" name="email" required/>

									<label>Enter your email to receive a refill confirmation</label>

								</div>

							</div>

						</div>

					 

                            

							
                          
                       

					
                        </div>


		

					  

					   
                         
                          <div id="deliveryBlock" class="delivaryform">
                               <div>
                                     <label>Address</label>
                                     <input type="text" name="address" class="form-control"/></div>
                                     
                                       <div>
                                     <label>Address Line 2</label>
                                     <input type="text" name="addresslinetwo" class="form-control"/></div>
   
   
     								<div>
                                     <label>State</label>
                                     <input type="text" name="state" class="form-control"/> </div>
   
   
     									<div>
                                     <label>City</label>
                                     <input type="text" name="city" class="form-control"/> </div>
                                     <div>
                                    
                                     
   
                                     
                                    </div>
 

						 

						  <div class="notes"> 

						  <div class="strip">

					  		<span>Notes for Pharmacy*</span>

						</div>

							 <textarea class="form-control" rows="5" columns="20"></textarea>

						 </div>

						 

						 <div class="checkbox1">
                         <input type="hidden" id="id" value="<?php echo ++$n; ?>">

						 <div>I agree to the terms and conditions and privacy policy</div>

							
                            
                            <input type="submit" name="submit" class="btn btn-primery"  style="width:auto; background:#EC465C; color:#FFFFFF; float:right; "value="Submit">

						 </div>

						 

					</form>

				</div>
			</div>
			</div>
		</div>
		</div>
                                </div>
                            </div>
               </div>  
               		<br clear="all" />
               <div>
               		<?php include "footer.php"?>
               </div>            
                
</body>
</html>
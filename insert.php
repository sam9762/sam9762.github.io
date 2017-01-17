<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "sudarshan");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

	$add = $_REQUEST["add"];
	$city = $_REQUEST["city"];
	$state = $_REQUEST["state"];
	$zip = $_REQUEST["zip"];
	$country = $_REQUEST["country"];
	$gender = $_POST["gender"];
	$checkbox1=$_POST['ch1']; 
	$ethinicity = $_POST["ethinicity"];
	$hphone = $_REQUEST["hphone"];
	$wphone = $_REQUEST["wphone"];
	$email = $_POST["email"];
	$plang = $_POST["plang"];
	
	
	$add1 = $_REQUEST["add1"];
	$line1 = $_REQUEST["line1"];
	$city1 = $_REQUEST["city1"];
	$state1 = $_REQUEST["state1"];
	$zip1 = $_REQUEST["zip1"];
	$country1 = $_REQUEST["country1"];
	
	 
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
   
	if( $conn )
	{
		$query = "insert into details values('','$add','$city','$state',$zip,'$country','$gender','$chk','$ethinicity',$hphone,$wphone,'$email','$plang')";
		$query1 = "insert into employer values('$add1','$line1','$city1','$state1',$zip1,'$country1')";
		
		if(mysqli_query($conn,$query) )
		
			 echo("");
		 else	
			 echo("Unable to add");
		
		 if(mysqli_query($conn,$query1) )
			 echo("");
		 else	
			 echo("Unable to add");
	
	}
	else
	{
		echo("Unable to connect to database");
	}
?>


	
	
	<!DOCTYPE html>

	<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <title>Login form</title>
		<style>
		#qq{background:lightblue; color:#fff; padding:20px; float:right; width:50%; min-height:310px; border-style: ridge;}
		#tt{background:white; color:black; padding:20px; float:right; width:50%; min-height:310px; border-style: ridge;}
		#ss{border-style: groove;border-color: #FFFFFF; border: 1px solid #a1a1a1;background-color: lightblue;
	min-height:30px;}
	#kk{ background-color: lightblue;
	min-height:460px;}
	#aa{ background-color: lightblue;
	min-height:110px;}
		#rr {width:x; height:y; text-align:right;}
		#ww {
    background-color: lightblue;
	min-height:250px;
}
		</style>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
	integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
	
	<div class="col-lg-12">
	<div class="panel-body pan">
	<div class="form-body pal">
	<div class="row">
	
                                                            <div class="col-md-6" id = "tt">
                                                                <div class="form-group has-success">
                                                                  <div style="position: absolute; top: 0; right: 0; width: 250px; text-align:right; color:blue"  >
    Tuesday, December 13, 2016
  </div>
                                                                  <h2>
                                                                    <b>
                                                                   Ranbow Children's Clinic
                                                                 </b>
                                                               </h2>
                                                                 <p>
                                                                  914 Main Ave<br>
                                                                  Fort Worth, TX 070559998<br>
                                                                  Phone: (973) 458-80000<br>
                                                                  fax: (862) 238-8333
                                                                </p>



                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" id = "qq">
                                                                <div class="form-group has-success"><h1><b>
                                                                    ANNABELLE TEST</h1></b>

                                                                    <p>
                                                                  Date of Birth: 4/22/2003, Age: 13y<br><br>
                                                                  Total Outstanding:&emsp; $237.10<br>
                                                                  Insurance Outstanding:&emsp; $237.10<br>
                                                                  Sent to Collections:&emsp; $0.00
                                                                </p>
                                                                  <div>
                                                                      <span style = "float:right">current statement</span>
                                                                    </div>

                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
	
	</div>
	</div>
	</div>
	
	
	
	
	<div class="col-lg-12">
	<div class="panel-body pan">
	<div class="form-body pal">
	     <div class="row">
    <div class="col-md-6" id = "kk">
	<form class="form-horizontal" role="form" name="f" method = "post" action="http://localhost/xampp/10_login/logout.php">
        <fieldset>
      <legend>Medical History</legend>
</div>
<div class="col-md-6">
          <!-- Text input-->
          <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="AAA"> AAA</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="HCHOL">High Cholesterol</label>
          </div>
		  </div>

          <!-- Text input-->
        <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="ADHT"> ADHT</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="HTN"> HTN</label>
          </div>
		  </div>

          <!-- Text input-->
          <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Alcohol">Alcohol/Substance Abuse</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Hyperlipidemia">Hyperlipidemia</label>
          </div>
		  </div>

          <!-- Text input-->
          <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Alcohol d"> Alcohol dependence</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Hypothyroidism">Hypothyroidism</label>
          </div>
		  </div>
<br>

          <!-- Text input-->
         <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Alzemeir">Alzemeir's</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="IDDM">IDDM</label>
          </div>
		  </div>
		  
		  <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Anxiety">Anxiety</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Insomnia">Insomnia</label>
          </div>
		  </div>
		  
		  <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Arithritis">Arithritis</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Irritable Syndrome">Irritable Bowel Syndrome</label>
          </div>
		  </div>
		  
		  <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Asthma">Asthma</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="MI">MI</label>
          </div>
		  </div>
		  
		  <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="CAD"> CAD</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="PID">PID</label>
          </div>
		  </div>
		  
		  <div class="form-group">
           
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="CANCER">CANCER</label>
            </div>

           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Reflux">Reflux</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="COPD">COPD</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="SURGERY">SURGERY</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Cancer-Brest">Cancer-Brest</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Siezers">Siezers</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Back pain">Back pain</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Obesity">Obesity</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Cancer-protest">Cancer-protest</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Stroke">Stroke</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="CHF">CHF</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Surgery,CABG">Surgery,CABG</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Head Injury"> Head Injury</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Alcer"> Alcer</label>
          </div>
		  </div>
		  
		  
		  
		  
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="CHF">CHF</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Surgery,CABG">Surgery,CABG</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Head Injury"> Head Injury</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Alcer"> Alcer</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Epilepsy">Epilepsy</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Thyroid">Thyroid</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Hurtbrum">Hurtbrum</label>
            </div>
           
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Vloss">Vision Loss</label>
          </div>
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="HBP">High blood pressure</label>
            </div> 
			<div class="col-md-6">
           
            </div>
		  </div>
		  
		  <div class="form-group">
             
			<div class="col-md-6">
            <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Hattack">Heart Attack </label>
            </div>			
		  </div>
		  
		  <div class="form-group">
            <div class="col-md-6">
             <label class="checkbox-inline"><input type="checkbox" name="price1[]" value="Hearloss">Hearing Loss</label>
            </div>           
		  </div>
		  
	</div>
	</div>
	
	
	
	

	<div class="col-lg-12">
	
	<div class="form-body pal">
	     <div class="row">
    <div class="col-md-6" id = "aa">
		    <b><p align = "right">Other Medical Condition</p></b>
																	</div>
																	<div class="col-md-6">
																	<div class="col-sm-10">
																	<textarea class="form-control" rows="5" id="comment" name = "comment"></textarea>                                                            
                         </div>
		  </div>
		  </div>
		  </div></div>
		  
		  <!--  Race -->
		  <div class="col-lg-12">
	
	<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
           <b><p align = "right"> Parents merital status</p></b>
			</div>
			</div>
			<div class="col-md-6">
																	<div class="col-sm-10">
																	<select name ="Status"  class="form-control">
                                                                    <option value="">Select one</option>
            <option value = "Mother">Mother</option>
			<option value = "father">father</option>
            <option value = "Uncle">Uncle</option>
                         </select>
						 </div>
		  </div>
		  </div>
		  </div>
		  </div>
		  
		  
		  
		  
		   <div class="col-lg-12">
	
	<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
           <b><p align = "right"> Lives With</p></b>
			</div>
			</div>
			<div class="col-md-6">
																	<div class="col-sm-10">
																	<select name ="Live"  class="form-control">
                                                                    <option value="">Select one</option>
            <option value = "Mother">Mother</option>
			<option value = "father">father</option>
            <option value = "Uncle">Uncle</option>
                         </select>
						 </div>
		  </div>
		  </div>
		  </div>
		  </div>
			  
			  
			  
		  
		  <div class="col-lg-12">
			<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
            <b><p align = "right"> Occupation</p></p>
			</div>
																	</div>
																	<div class="col-md-6">
            <div class="col-sm-10">
              <input type="text" placeholder="" name = "Occupation" class="form-control">
            </div>
          </div>
		  </div>
		    </div>
			 </div>
			  
			  
			  
			  
			  
		 <div class="col-lg-12">
	
	<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
           <b><p align = "right"> Pets</p></b>
			</div>
			</div>
			<div class="col-md-6">
																	<div class="col-sm-10">
																	<select name ="pets"  class="form-control">
                                                                    <option value="">Select one</option>
            <option value = "Dog">Dog</option>
			<option value = "Cat">Cat</option>
            <option value = "Parrot">Parrot</option>
                         </select>
						 </div>
		  </div>
		  </div>
		  </div>
		  </div>
			  
			  
			  
		<div class="col-lg-12">
	
	<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
           <b><p align = "right"> Smoking</p></b>
			</div>
			</div>
			<div class="col-md-6">
																	<div class="col-sm-10">
																	<select name ="smoke"  class="form-control">
                                                                    <option value="">Select one</option>
            <option value = "yes">yes</option>
			<option value = "no">no</option>
            <option value = "Sometimes">Sometimes</option>
                         </select>
						 </div>
		  </div>
		  </div>
		  </div>
		  </div>
		  
		  
		  
		   <div class="col-lg-12">
			<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
		   <b><p align = "right">School</p></b>
																	</div>
																	</div>
																	<div class="col-md-6">
																	<div class="col-sm-10">
																	<select name ="school"  class="form-control">
                                                                    <option value="">Select one</option>
              <option value = "Junior">Junior</option>
			<option value = "Senior">Senior</option>
            <option value = "None">None</option>
                         </select>
						 </div>
		  </div>
		   </div>
		    </div>
			 </div>
			  <br>
			  
			  
			  
			 <div class="col-lg-12">
			<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
		   <b><p align = "right">Bike Helmet Usage</p></b>
																	</div>
																	</div>
																	<div class="col-md-6">
																	<div class="col-sm-10">
																	<select name ="Bike_Helmet"  class="form-control">
                                                                    <option value="">Select One</option>
          
			<option value = "yes">yes</option>
			<option value = "no">no</option>
            <option value = "Sometimes">Sometimes</option>
                         </select>
						 </div>
		  </div>
		   </div>
		    </div>
			 </div> 
			  
			  
			   <div class="col-lg-12">
			<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
		   <b><p align = "right">seat Belts</p></b>
																	</div>
																	</div>
																	<div class="col-md-6">
																	<div class="col-sm-10">
																	<select name ="Seat_Belts"  class="form-control">
                                                                    <option value="">Select one</option>
            <option value = "yes">yes</option>
			<option value = "no">no</option>
            <option value = "Sometimes">Sometimes</option>
                         </select>
						 </div>
		  </div>
		   </div>
		    </div>
			 </div>
			 <div class="col-lg-12">
			<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
		   <b><p align = "right">Sleeping location</p></b>
																	</div>
																	</div>
																	<div class="col-md-6">
																	<div class="col-sm-10">
																	<select name ="Sleep_location"  class="form-control">
                                                                    <option value="">Select one</option>
            <option value = "East">East</option>
			<option value = "West">West</option>
                         </select>
						 </div>
		  </div>
		   </div>
		    </div>
			 </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
</div>
</div>

						
	</body>
	</html>

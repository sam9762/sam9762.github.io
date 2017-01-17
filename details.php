
	<!DOCTYPE html>

	<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <title>Login form</title>
		<style>
		#qq{background:lightblue; color:#fff; padding:20px; float:right; width:50%; min-height:310px; border-style: ridge;}
		#ss{border-style: groove;border-color: #FFFFFF; border: 1px solid #a1a1a1;background-color: lightblue;
	min-height:30px;}
		#rr {width:x; height:y; text-align:right;}
		#ww {
    background-color: lightblue;
	min-height:250px;
}
		</style>
		
		
		
		<script>
		function FillBilling(f) {
  if(f.billingtoo.checked == true) {
    f.city1.value = f.city.value;
    f.state1.value = f.state.value;
	 f.add1.value = f.add.value;
    f.line1.value = f.line.value;
	f.zip1.value = f.zip.value;
    f.country1.value = f.country.value;
  }
}

		</script>
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
	
                                                            <div class="col-md-6" id = "qq">
                                                                <div class="form-group has-success"><b>
                                                                   Ranbow Children's Clinic<span class='require'>*</span></b>

                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" id = "qq">
                                                                <div class="form-group has-success"><h1>
                                                                    ANNABELLE TEST<span class='require'>*</span></h1>

                                                                    
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
    <div class="col-md-6" id = "ww">
	<form class="form-horizontal" role="form" name="f" method = "post" action="http://localhost/xampp/10_login/insert.php">
        <fieldset>
      <legend>Physical Address</legend>
</div>
<div class="col-md-6">
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 1</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 1" name = "add" required="" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 2</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 2" name = "line" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City</label>
            <div class="col-sm-10">
              <input type="text" placeholder="City" name = "city" required="" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">State</label>
            <div class="col-sm-4">
              <input type="text" placeholder="State" name = "state" required="" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="number" placeholder="zip" name = "zip" required="" class="form-control"> <br>
            </div>
          </div>
<br>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Country" name = "country" required="" class="form-control"><br>
            </div>
          </div>
	</div>
	
	
	
	<div class="col-md-6" id = "ww">
      

          <!-- Form Name -->
          <legend>Billing Address</legend>
</div>
<div class="col-md-6">
          <!-- Text input-->
          <div class="form-group">
		   
            <label class="col-sm-2 control-label" for="textinput">Line 1</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address" name = "add111" required="" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 2</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 2" name = "line111" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City</label>
            <div class="col-sm-10">
              <input type="text" placeholder="City" name = "city1.1" required="" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">State</label>
            <div class="col-sm-4">
              <input type="text" placeholder="State" name = "state1.1" required="" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="number" placeholder="zip" name = "zip1.1" required="" class="form-control"> <br>
            </div>
          </div>
<br>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Country" name = "country1.1" required="" class="form-control"><br>
            </div>
          </div>
	</div>
	
	
	
	

	<div class="col-lg-12">
	
	<div class="form-body pal">
	     <div class="row">
    <div class="col-md-6" id = "ss">
		    <b><p align = "right">Gender</p></b>
																	</div>
																	<div class="col-md-6">
																	<div class="col-sm-10">
																	<select id="gender" required="" name ="gender" class="form-control">
                                                                    <option value="">Select One</option>
            <option value = "M">Male</option>
            <option value = "F">Female</option>
                         </select></div>
		  </div>
		  </div>
		  </div></div>
		  
		  <!--  Race -->
		  <div class="col-lg-12">
	
	<div class="form-body pal">
		  <div class="row">
		  <div class="col-md-6" id = "ss">
		  <div class="form-group">
           <b><p align = "right"> Race</p></b>
			</div>
			</div>
			<div class="col-md-6">
            <div class="col-sm-10">
																	<input type = "checkbox" name = "ch1[]" value = "black">Black
																	<input type = "checkbox" name = "ch1[]" value = "Asian">Asian
																	<input type = "checkbox" name = "ch1[]" value = "Afriacan">Afriacan 
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
		  <b><p align = "right"> Ethinicity</p></b>
                                                                    </label>
																	</div>
																	</div>
																	<div class="col-md-6">
																	<div class="col-sm-10">
																	<select id="gender" name ="ethinicity"  class="form-control">
                                                                    <option value="">Select One</option>
            <option value = "A">Ameriacan</option>
			<option value = "Af">Africa</option>
            <option value = "I">Indian</option>
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
            <b><p align = "right"> Home phone</p></p>
			</div>
																	</div>
																	<div class="col-md-6">
            <div class="col-sm-10">
              <input type="number" placeholder="" name = "hphone" required="" class="form-control">
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
           <b><p align = "right"> Work phone </p></b>
			</div>
																	</div>
																	<div class="col-md-6">
            <div class="col-sm-10">
              <input type="number" placeholder="" name = "wphone" class="form-control">
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
             <b><p align = "right">Email address</p></b>
			 </div>
																	</div>
																	<div class="col-md-6">
            <div class="col-sm-10">
              <input type="text" placeholder="" name = "email"  class="form-control">
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
		   <b><p align = "right">Preffred Language</p></b>
																	</div>
																	</div>
																	<div class="col-md-6">
																	<div class="col-sm-10">
																	<select id="gender" name ="plang"  class="form-control">
                                                                    <option value="">Select One</option>
            <option value = "English">English</option>
			<option value = "Urdu">Urdu</option>
            <option value = "French">French</option>
                         </select>
						 </div>
		  </div>
		   </div>
		    </div>
			 </div>
			  <br>
			  
			  
			  
		<div class="col-lg-12">	  
		<div class="panel-body pan">
	<div class="form-body pal">
	<div class="row">
		  <div class="col-md-6" id = "ww">
          <!-- Form Name -->
          <legend>Employer</legend>
</div>
<div class="col-md-6">
          <!-- Text input-->
		  
          <div class="form-group">
		 &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="billingtoo" onclick="FillBilling(this.form)">&nbsp;&nbsp;Copy phyical address<br>
            <label class="col-sm-2 control-label" for="textinput">Line 1</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 1" name = "add1" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 2</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 2" name = "line1" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City</label>
            <div class="col-sm-10">
              <input type="text" placeholder="City" name = "city1"  class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">State</label>
            <div class="col-sm-4">
              <input type="text" placeholder="State" name = "state1" required="" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="number" placeholder="zip" name = "zip1" class="form-control"> <br>
            </div>
          </div>
<br>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Country" name = "country1"  class="form-control"><br>
            </div>
          </div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	
	
	
	<div class="col-md-6" id = "ww">
          <!-- Form Name -->
          <legend>Employer Contact 1</legend>
</div>
<div class="col-md-6">
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 1</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 1" name = "add2" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 2</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 2" name = "line2" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City</label>
            <div class="col-sm-10">
              <input type="text" placeholder="City" name = "city2"  class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">State</label>
            <div class="col-sm-4">
              <input type="text" placeholder="State" name = "state2"  class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="number" placeholder="zip" name = "zip2"  class="form-control"> <br>
            </div>
          </div>
<br>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Country" name = "country2"  class="form-control"><br>
            </div>
          </div>
	</div>
	
	
	
	
	<div class="col-md-6" id = "ww">
      

          <!-- Form Name -->
          <legend>Employer Contact 2</legend>
</div>
<div class="col-md-6">
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 1</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 1" name = "add3"  class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 2</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 2" name = "line3" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City</label>
            <div class="col-sm-10">
              <input type="text" placeholder="City" name = "city3" class="form-control"><br>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">State</label>
            <div class="col-sm-4">
              <input type="text" placeholder="State" name = "state3"  class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="number" placeholder="zip" name = "zip3"  class="form-control"> <br>
            </div>
          </div>
<br>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Country" name = "country3"  class="form-control"><br>
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
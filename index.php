<?php

include 'post.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-header bg-success text-white">
            Form Validation
          </div>
          <div class="card-body">
            
            <form action="" method="post">
              <div class="form-group">
              <label for="contact_no">Name</label>

                <input type="text" name="fname" placeholder="Full Name" class="form-control">

                <?php 
                
                  if (isset($nameError)) {
                    echo $nameError;
                  }
                
                ?>
               
              </div>
              <div class="form-group">
              <label for="contact_no">Email</label>

                <input type="text" name="email" placeholder="Enter Email" class="form-control">
               
                <?php 
                
                  if (isset($emailError)) {
                    echo $emailError;
                  }
                
                ?>
              </div>


                  <!-- =============Gender =============== -->

                  <div class="form-group">
							  <label for="gender">Gender</label><br>
							  	
									  <input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; " <?php if (isset($gender)) {
										if($gender == "Male"){
											echo "checked";
										}
									  
								  }?>> 
									  Male
									  <input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" <?php if (isset($gender)) {
										if($gender == "Female"){
											echo "checked";
										}
									}?>> 
									FeMale
									 <input type="radio" name="gender" id="gender" value="others" style="margin-left:10px;"
									 <?php if (isset($gender)) {
										if($gender == "others"){
											echo "checked";
										}
									}?>>
									 Others
									 <?php
											if (isset($genderError)){
												echo $genderError;
											}
										?>
          </div><!--gender-->
          

          <div class="form-inline">
              <label style="margin-right: 10px;" for="name">Date of Birth:</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;">
                <option value="">---Day---</option>
				<?php if(isset($day)) echo '<option selected value="'.$day.'" >'.$day.'</option>' ?>
                <option value="01" >01</option>
				<option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" >
                <option value="">---Month---</option>
				<?php if(isset($month)) echo '<option selected value="'.$month.'" >'.$month.'</option>' ?>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" >
                <option value="">---Year---</option>
				<?php if(isset($year)) echo '<option selected value="'.$year.'" >'.$year.'</option>' ?>
				<option value="1967" >1967</option>
				<option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option><option value="2000" >2000</option><option value="2001" >2001</option><option value="2002" >2002</option>
              </select>
			</div><!--End form-group-->

			<?php
			
			if (isset($dayError)){
				echo $dayError;
						}
						if (isset($monthError)){
							echo $monthError;
									}

									if (isset($yearError)){
										echo $yearError;
												}
									
						
			?>

                  <!-- phone number  -->

              <div class="form-group">
              <label for="contact_no">Contact No</label>
			  <input type="number" name="contact_no" value="<?php if(isset($contact_no)) echo $contact_no ?>" placeholder="017********" class="form-control" title="11 numeric characters only" maxlength="11">
			  <?php
			
			if (isset($contact_noError)) {
				echo $contact_noError;
					}
			
      ?>
      
      <!-- ============= city ============== -->

      <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" >
	<option value="">-- Select --</option><?php if(isset($city)) echo '<option selected value="'.$city.'" >'.$city.'</option>' ?><optgroup title="Dhaka Devision" label="&raquo; Dhaka Devision"></optgroup><option value="Dhaka" >Dhaka</option><option value="Kishoreganj" >Kishoreganj</option><option value="Gazipur" >Gazipur</option><option value="Mirpur" >Mirpur</option><option value="Gopalganj" >Gopalganj</option><option value="Jamalpur" >Jamalpur</option><option value="Tangail" >Tangail</option><option value="Narayanganj" >Narayanganj</option><option value="Netrakona" >Netrakona</option><option value="Faridpur">Faridpur</option><option value="Mymensingh" >Mymensingh</option><option value="Madaripur" >Madaripur</option><option value="Manikganj" >Manikganj</option><option value="Munshiganj" >Munshiganj</option><option value="Rajbari" >Rajbari</option><option value="Shariatpur" >Shariatpur</option><option value="Sherpur" >Sherpur</option>
	<optgroup title="Rangpur Devision" label="&raquo; Rangpur Devision"></optgroup><option value="Rangpur" >Rangpur</option><option value="Dinajpur" >Dinajpur</option><option value="Gaibandha" >Gaibandha</option><option value="Kurigram" >Kurigram</option><option value="Lalmonirhat" >Lalmonirhat</option><option value="Nilphamari" >Nilphamari</option><option value="Panchagarh" >Panchagarh</option><optgroup title="Rajshahi Devision" label="&raquo; Rajshahi Devision"></optgroup><option value="Bajaur Agency" >Bajaur Agency</optgroup><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option></select>
	<?php
			if (isset($cityError)){
				echo $cityError;
						}
		?>
      </div><!--city end-->
      
			</div><!--End form-group-->
              <div class="form-group">
              <label for="contact_no">Password</label>

                <input type="password" name="password" placeholder="Enter Password" class="form-control">

                
                <?php 
                
                  if (isset($passError)) {
                    echo $passError;
                  }
                
                ?>
                
              </div>
              <div class="form-group">
              <label for="contact_no">Cofirm password</label>

                <input type="password" name="re-password" placeholder="Enter Re-Password" class="form-control">

                
                <?php 
                
                  if (isset($re_passError)) {
                    echo $re_passError;
                  }
                
                ?>
                
              </div>
              <div class="form-group text-center">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

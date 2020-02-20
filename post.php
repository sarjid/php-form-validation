<?php

// validation 
if (isset($_POST['submit'])) {
    
    // ============Name Validation=================
  if (isset($_POST['fname']) && !empty($_POST['fname'])) {
    if (strlen($_POST['fname'])>=4) {
      $firstName = $_POST['fname'];
      
    }else{
      $nameError = '<strong style="color:red;">Please your Name will be 8 chars</strong>';
    }

     
  }else{
      $nameError = '<strong style="color:red;">Please Input your Name</strong>';
      
  }
  

  // email validation 

  if (isset($_POST['email']) && !empty($_POST['email'])) {
   
    $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    if (preg_match($pattern, $_POST['email'])) {
      $email = $_POST['email'];
    }else{
      $emailError = '<strong style="color:red;">Please Input your valid Email . and 8 char </strong>';
      
    }
    
   
}else{
    $emailError = '<strong style="color:red;">Please Input your Email</strong>';
    
} //===Email ENd=======


 //=========== gender =================

 if (isset($_POST['gender']) && !empty($_POST['gender'])) {
			
  $gender = $_POST['gender'];
}else {
  $genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please Select Your Gender !</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
</div>';
} //==============end gender ======


      // birthday date or day

			if (isset($_POST['day']) && !empty($_POST['day'])) {
			
				$day = $_POST['day'];
			}else {
			  $dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Select Your Birthday !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			}
			
			// birthday Month

			if (isset($_POST['month']) && !empty($_POST['month'])) {
			
				$month = $_POST['month'];
			}else {
			  $monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Select Your Birthday Month !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			}

			// birthday year 
			
			if (isset($_POST['year']) && !empty($_POST['year'])) {
			
				$year = $_POST['year'];
			}else {
			  $yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Select Your Birthday Year !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			}


     // ===================contact number validation ==================

     if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
      if (preg_match('/\d{11}/',$_POST['contact_no'])) {
        $contact_no = $_POST['contact_no'];
      }else {
        $contact_noError = "Contact Should Be 11 Characters !";
      }
      

      
    }else {
      $contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please Input Your 11 Digit Phone Number !</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>';

    } //====Contact End=====



      // =========city ============
    		
			if (isset($_POST['city']) && !empty($_POST['city'])) {
				$city = $_POST['city'];
			}else {
			  $cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Please Use Your City !</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>';

      } /// city end
      

  // ========== password ========== 
  if (isset($_POST['password']) && !empty($_POST['password'])) {

      // if (strlen($_POST['password']) >=8) {
          if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#",$_POST['password'])) {
            
          // }
        $password = $_POST['password'];
        if (isset($_POST['re-password']) && !empty($_POST['re-password'])) {
          $re_password = $_POST['re-password'];

          if (isset($_POST['password']) && isset($_POST['re-password'])) {

            if ($_POST['password'] == $_POST['re-password']) {
                    
               $lastpass = $_POST['password'];

            }else {
              $re_passError = '<strong style="color:red;">Your Password Are Not Same</strong>';
            }    
          }
          
        }else{
          $re_passError = '<strong style="color:red;">Please Re-Type Your Password</strong>';
          
        }


       
      }else{
        $passError = '<strong style="color:red;">Your Password at least one lowercase letter,One Uppercase, one number and Must Be length 8 Characters </strong>';

      }
          
    
  }else{
      $passError = '<strong style="color:red;">Please Input your password</strong>';
      
  }

     



}



?>

<?php
              if (isset($firstName) && isset($email) && isset($lastpass)) {
                echo "Your Name is: ". $firstName;
                echo "<br>";
                echo "Your Email is: ". $email;
                echo "<br>";
                echo "Your Gender is: ". $gender;
                echo "<br>";

                echo "Your Birthday is: ". $birth = $day.'-'.$month.'-'.$year;
                echo "<br>";

                echo "Your contact number is: ". $contact_no;
                echo "<br>";


                echo "Your city is: ". $city;
                
                echo "<br>";

                echo "your Password is: ". $lastpass;
              }
             


            
            ?>
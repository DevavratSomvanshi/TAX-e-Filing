<!doctype html>

<?php 

if(isset($_POST['submit']))
			{
		
		//if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
			include 'conn.php';
			
			$userid=$_POST["userid"];
			
			$pwd=$_POST["pwd"];
			$select="SELECT count(*) FROM usr WHERE PAN= '$userid' AND pwd = '$pwd'";
			
			$rnum = $conn->query($select)->fetchColumn();
			
			//$SELECT="SELECT PAN,pwd from usr Where PAN= '$userid' AND pwd = '$pwd' ";
			
			
			if($rnum==0){
				?> <script>alert("You are Not registered. Please SignUp for e-Filing.")
					window.location="signup.php";
					</script> <?php
				
			}
			else{
				$select="SELECT FirstName FROM usr WHERE PAN= '$userid'";
				$rnum = $conn->query($select)->fetchColumn();
				?> <script>alert("Hi <?php echo $rnum ?>. Thank You for visiting us again! ")
					window.location="newFiling.php";
					</script> <?php
			}
		}





							if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
							include 'conn.php' ;
							$Pan=$_POST['pan'];
							$First_Name=$_POST['FirstName'];
							$Last_Name=$_POST['LastName'];
							$Dat=$_POST['date'];
							$Mobile=$_POST['Mobile'];
							$Email=$_POST['Email'];
							$Pwd=$_POST['newpassword'];
							$Quest=$_POST['quest'];
							$Ans=$_POST['Ans'];
							$Flat=$_POST['Flat'];
							$Area=$_POST['Area'];
							$Country=$_POST['Country'];
							$Reg=$_POST['State'];
							$City=$_POST['City'];
							$Pin=$_POST['Pin'];
							$SELECT="SELECT PAN from usr Where PAN= '$Pan' ";
							 $INSERT="INSERT INTO usr (PAN,FirstName,LastName,DOB,MobNo,Email,pwd,seqquest,seqans,flat,area,country,city,stat,pin) values('$Pan','$First_Name','$Last_Name','$Dat','$Mobile','$Email','$Pwd','$Quest','$Ans','$Flat','$Area','$Country','$City','$Reg','$Pin')";

							 $rnum = $conn->query($SELECT)->fetchColumn();
							 if($rnum==0){
								 
								 $stmt=$conn->prepare($INSERT);
								 
                                
                                
                             
                                $stmt->execute();
                               
								echo "new record";
								}
							 else{
								 echo "Already registered";
							 }
							}
							
							?>
<html>
<head>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
	<script src="bootstrap-3.3.7-dist/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/font-awesome.min.css" />
<script type="text/javascript" src="bootstrap-3.3.7-dist/Date/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/Date/bootstrap-datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="signupstyle.css"/>

<link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-iso.css" /> 
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">

	<div class="row" id="signup" >
		
		<div class="col-md-5">
			<form id="regForm" name="form1" method="POST">

				<h1>Sign Up:</h1><br>

				<!-- One "tab" for each step in the form: -->
				<div class="tab"><h3>Personal Information:</h3>
  				<p><input placeholder="Permanent A/c Number" pattern="[a-zA-Z0-9]+" maxlength="10" name="pan"  type="text" required></p>
					<p><input placeholder="First Name..." name="FirstName" type="Name" required></p>
					<p><input placeholder="Last Name" name="LastName"  type="Name" required></p>
					<p><input type="date" name="date" placeholder="Date of birth: MM/DD/YYYY" required></p>
					<p><input placeholder="Mobile" name="Mobile"  type="text" required></p>
					<p><input placeholder="Email..." name="Email"  type="Email" required></p>
					
				</div>

				<div class="tab"><h3>Security:</h3>
  				<p><input placeholder="User Id:" name="UserID" type="text" required></p>
					<p><input type="new-password" name="newpassword" placeholder="Password" required></p>
					<p><input type="current-password" name="currentpassword" placeholder="Password" required></p>
					<p> Select a Security Question</p>
					<p><select name="quest" required>
        							<option value="" disabled selected hidden>Choose a Security Question:</option>
        							<option value="0">What was the name of your elementary / primary school?</option>
       								 <option value="1">In what city or town does your nearest sibling live?</option>
									   <option value="2">What time of the day were you born?</option>
       								 <option value="3">What is the name of your favorite childhood friend? </option>
									   <option value="4">What street did you live on in third grade?</option>
       								 <option value="5">In what city or town was your first job?</option>
									   <option value="6">What is your maternal grandmother's maiden name?</option>
       								 <option value="7">What was your favorite place to visit as a child?</option>
										</select></p>
					<p><input type="text" name="Ans" placeholder="Your Answer" type="text" required></p>
				</div>

				<div class="tab"><h3>Address Info:</h3>
					<p><input type="text" name="Flat" placeholder="Flat No:.." required></p>
					<p><input type="text" name="Area" placeholder="Area" required></p>
					<p><input type="text" name="Country" placeholder="Country" required></p>
					<p><input type="text" name="State" placeholder="State" required></p>
					<p><input type="text" name="City" placeholder="City" required></p>
					<p><input type="text" name="Pin" placeholder="PIN" required></p>
				</div>

				<div style="overflow:auto;">
					<div style="float:left;">
						<button type="button" id="prevBtn" onclick="nextPrev(-1)" required>Previous</button>
						<button type="button" id="nextBtn"  onclick="nextPrev(1)" required>Next</button>
					</div>
				</div>

				<!-- Circles which indicates the steps of the form: -->
				<div style="text-align:center;margin-top:40px;">
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
				</div>

			</form>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-6">
		
		<p style=" padding-top: 230px; text-indent: 50px;
    text-align: justify;
    letter-spacing: 3px;
}"> <h1 text-align: center;
    text-transform: uppercase;
    color: #4CAF50;
}>ITR</h1> <br>Income Tax Return is the form in which an assessee files information about his Income and tax thereon to Income Tax Department. Various forms are ITR 1, ITR 2, ITR 3, ITR 4, ITR 5, ITR 6 and ITR 7. When you file a belated return, you are not allowed to carry forward certain losses.[1]

The Income Tax Act, 1961, and the Income Tax Rules, 1962, obligates citizens to file returns with the Income Tax Department at the end of every financial year.[2] These returns should be filed before the specified due date. Every Income Tax Return Form is applicable to a certain section of the Assessees. Only those Forms which are filed by the eligible Assessees are processed by the Income Tax Department of India. It is therefore imperative to know which particular form is appropriate in each case. Income Tax Return Forms vary depending on the criteria of the source of income of the Assessee and the category of the Assessee.</p>
		</div>
	</div>
</div>




<!--script for form changing tab-->
		<script>
				var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }/*
  					if (currentTab==1) {
						var password=document.myform1.newpassword.value;
						valid=true;
						if(password.length<6){  
						alert("Password must be at least 6 characters long.");  
							valid=false;
							}
						var firstpassword=document.myform1.newpassword.value;  
						var secondpassword=document.myform1.currentpassword.value;
						else if (firstpassword!=secondpassword){  
						alert("password must be same!");
						valid=false;
						}
						
					}*/
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
		</script>	
		<!-- Sign Up moving tab script ends-->					
				<?php include 'Footer.php'?>
				<!--Form validation
				<script>  
					function validateform1(){  
					var name=document.myform1.FirstName.value;  
					var password=document.myform1.newpassword.value;  
					
					if (name==null || name==""){  
					alert("Name can't be blank");  
					return false;  
					}else if(password.length<6){  
					alert("Password must be at least 6 characters long.");  
					} 
					    var firstpassword=document.myform1.newpassword.value;  
						var secondpassword=document.myform1.currentpassword.value;  
						
						if(firstpassword==secondpassword){  
						return true;  
						}  
						else{  
						alert("password must be same!");  
						return false;  
						}


						
						var num=document.myform1.Pin.value;
						var mobl=document.myform1.Mobile.value;    
						if (isNaN(num)||isNaN(mob1)){  
							alert("PIN should be in numbers only");  
						return false;  
						}else{  
						return true;  
						}     
					}
				</script>  
				-->

</body>
</html>

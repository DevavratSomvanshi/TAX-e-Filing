<?php 
							
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
							
							?>
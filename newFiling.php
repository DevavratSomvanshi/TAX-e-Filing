
<!doctype html>

<?php   
			if(isset($_POST['submit']))
			{
		include 'conn.php' ;
		$pan=$_POST['pan'];
		$firstname=$_POST['firstname'];
		$midname=$_POST['midname'];
		$lastname=$_POST['lastname'];
		$aadhar=$_POST['aadhar'];
		$dob=$_POST['dob'];
		$mobileno=$_POST['mobileno'];
		$email=$_POST['email'];
		$adpin=$_POST['adpin'];
		$adflat=$_POST['adflat'];
		$adarea=$_POST['adarea'];
		$adcity=$_POST['adcity'];
		$adstate=$_POST['adstate'];
		
		
		 $INSERT1="INSERT INTO pi  values('$pan','$firstname','$midname','$lastname','$aadhar','$dob','$mobileno','$email','$adpin','$adflat','$adarea','$adcity','$adstate')";	
		 $conn->query($INSERT1);
								
		$empcat=$_POST['empcat'];
		$returnf=$_POST['returnf'];
		$ackno1=$_POST['ackno1'];
		$date1395=$_POST['date1395'];
		$ackno2=$_POST['ackno2'];
		$date1399=$_POST['date1399'];
		$INSERT2="INSERT INTO fstatus  values('$empcat','$returnf','$ackno1','$date1395','$ackno2','$date1399','$pan')";	
		 $conn->query($INSERT2);			
								
		
		$inother=$_POST['inother'];
		$inchargesal=$_POST['inchargesal'];
		$typehouse=$_POST['typehouse'];
		$grossrent=$_POST['grossrent'];
		
		$inttl=$_POST['inttl'];
		$INSERT3="INSERT INTO giincome  values('$inother','$inchargesal','$typehouse','$grossrent','$inttl','$pan')";	
		$conn->query($INSERT3);
								
		$ded42=$_POST['ded42'];
	    $INSERT4="INSERT INTO intaxable  values('$ded42','$pan')";
		$conn->query($INSERT4);
								
		$c7=$_POST['c7'];
		$INSERT5="INSERT INTO taxpay  values('$ded42','$pan')";
		$conn->query($INSERT5);
								
		$tadt=$_POST['tadt'];
		$tds=$_POST['tds'];
		$tcs=$_POST['tcs'];
		$tat=$_POST['tat'];
		$payable=$_POST['payable'];
		$Refund=$_POST['Refund'];
		$INSERT6="INSERT INTO ttpaid  values('$tadt','$tds','$tcs','$tat','$payable','$Refund','$pan')";	
		$conn->query($INSERT6);
								
								
		
		$ver5=$_POST['ver5'];
		$datever=$_POST['datever'];
		$INSERT7="INSERT INTO verify  values('$ver5','$datever','$pan')";	
		$conn->query($INSERT7);						
		}
		?>
<html><head>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js">
	</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<style>
		.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}
		
		hr { 
    display: block;
    height: 1.5px;
    margin-top: 0;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
    background-color:black;
} 
		table.table-bordered{
    border:1px solid #030303;
    margin-top:20px;
  }
table.table-bordered > thead > tr > th{
    border:1px solid #010101;
}
table.table-bordered > tbody > tr > td{
    border:1px solid #010101;
}
	</style>
	
<title>Income Tax Return</title>
</head>
	
<body style="background-color: #9ED2E4">
<div class="row">
<?php include 'header2.php' ?></div>

<div class="container">
<form id="file" action="newFiling.php" method="POST">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
          <li><a data-toggle="tab" href="#menu1">Step 1</a></li>
          <li><a data-toggle="tab" href="#menu2">Step 2</a></li>
          <li><a data-toggle="tab" href="#menu3">Step 3</a></li>
        </ul>
      
        <div class="tab-content">
        
                <div id="home" class="tab-pane fade in active">
                  <h3>HOME</h3>
                  <div class="container">
                        
                        <table class=" tab table table-bordered " style="background-color: #E6E6E6">
                          <thead >
                            <tr  >
                              <h2 style="color: #3762CB">Personal Information</h2>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td >PAN<span>*</span></td>
                              <td><input type="text" name="pan" placeholder="" class="form-control required"></td>
                                <td >First Name<span>*</span></td>
                              <td><input type="text" name="firstname" placeholder="" class="form-control required"></td>
                            </tr>
                            <tr>
                              <td >Middle Name</td>
                              <td><input type="text" name="midname" placeholder="" class="form-control"></td>
                                <td>Last Name<span>*</span></td>
                              <td><input type="text" name="lastname" placeholder="" class="form-control required"></td>
                            </tr>
                           <tr>
                              <td >Aadhaar Number(please enter <br>the aadhar number which is<br> linked with your PAN)<span>*</span></td>
                              <td><input type="text" name="aadhar" placeholder="" class="form-control required"></td>
                                <td >Date of Birth<span>*</span></td>
                              <td><input class="form-control" id="date" name="dob" placeholder="MM/DD/YYYY" type="date"/></td>
                            </tr>
                              <tr>
                              <td >Mobile Number<span>*</span></td>
                              <td><input type="text" name="mobileno" placeholder="" class="form-control required"></td>
                                <td >Email Address<span>*</span></td>
                              <td><input type="text" name="email" placeholder="" class="form-control required"></td>
                            </tr>
                          </tbody>
                            </table>
                            
                            <table class=" tab table table-bordered " style="background-color: #E6E6E6">
                             <thead>
                            <tr>
                              <h2 style="color: #3762CB">Address</h2>
                            </tr>
                          </thead>
                            <tbody>
                            <tr>
                              <td >Flat/Block No                          <span>*</span></td>
                              <td><input type="text" name="adflat" placeholder="" class="form-control required"></td>
                                <td >Area/Locality<span>*</span></td>
                              <td><input type="text" name="adarea" placeholder="" class="form-control required"></td>
                            </tr>
                            <tr>
                              <td >Town/City/District<span>*</span></td>
                              <td><input type="text" name="adcity" placeholder="" class="form-control required"></td>
                                <td >State<span>*</span></td>
                              <td><input type="text" name="adstate" placeholder="" class="form-control required"></td>
                            </tr>
                           <tr>
                              <td >Pincode<span>*</span></td>
                              <td><input type="text" name="adpin" placeholder="" class="form-control required"></td>
                            </tr>
                          </tbody>
                        </table>
                            <table class=" tab table table-bordered" style="background-color: #E6E6E6">
                             <thead>
                            <tr>
                              <h2 style="color: #3762CB">Filing Status</h2>
                            </tr>
                          </thead>
                            <tbody>
                            <tr>
                                <td >Employer category(if in employement)<span>*</span></td>
                              <td> <select required name="empcat">
                                                          <option value="" disabled selected hidden>Please Select One...</option>
                                                          <option value="0">Government</option>
                                                          <option value="1">Public sector unit</option>
                                                          <option value="2">Others</option>
                                                          <option value="3">Not Applicable</option>
                                  </select>
                                  </td>
                               </tr>
                            <tr>
                              <td >Return filed<span>*</span></td>
                              <td><select id="rf" required name="returnf">
                                                          <option value="" disabled selected hidden>Please Select One...</option>
                                                          <option value="0">11-On or Before Due Date 139(1)</option>
                                                          <option value="1">12-After Due Date 139(4)</option>
                                                          <option value="2">13-u/s 142(1)</option>
                                                          <option value="3">14-u/s 148</option>
                                  <option value="4">15-u/s 153A</option>
                                  <option value="5">16-u/s 153C r/w 153A</option>
                                  <option value="6" >17-Revised Return under section 139(5)</option>
                                  <option value="7">18-u/s 139(9)</option>
                                  <option value="8">20- Section 139(4) read with section 119(2)(b)</option>
                                  </select></td>
                            </tr>
                           <tr><td >Whether original or revised return?<span>*</span></td>
                           <td><select required name="status">
                                                          <option value="" disabled selected hidden>Please Select One...</option>
                                                          <option value="0">Original</option>
                                <option value="1">Revised</option>
                               </select></td>
                            </tr>
                          </tbody>
                        </table>
                            <hr>
                            <h4 style="color: #3762CB"> If under section 139(5)-revised return:</h4>
                            <table class=" tab table table-bordered " style="background-color: #E6E6E6">
                                <tbody>
                                <tr>
                                    <td>
                                    Original Acknowledgement Number
                                    </td>
                                     <td>
                                        <input type="text" disabled="true" name="ackno1" placeholder="" class="form-control required">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    Date of filing of Original Return
                                    </td>
                                     <td>
                                       
                                         <input disabled="true" class="form-control" name="date1395" placeholder="MM/DD/YYYY" type="date"/>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                            <hr>
                            <h4 style="color: #3762CB"> If under section 139(9)-return in response to defective return notice:</h4>
                            <table BORDERCOLOR="RED" class=" tab table table-bordered " style="background-color: #E6E6E6">
                                <tbody>
                                <tr>
                                    <td>
                                    Original Acknowledgement Number
                                    </td>
                                     <td>
                                        <input type="text" disabled="true" name="ackno2" placeholder="" class="form-control required">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    Date of filing of Original Return
                                    </td>
                                     <td>
                                        
                                        <input class="form-control" disabled="true" id="date1399" name="date1399" placeholder="MM/DD/YYYY" type="date"/>
                                                            
                                    </td>
                                </tr>
                                     <tr>
                                    <td>
                                    Notice Number:
                                    </td>
                                     <td>
                                        <input type="text" disabled="true" name="notno" placeholder="" class="form-control required">
                                    </td>
                                </tr>
                                     <tr>
                                    <td>
                                    If filed in response to notice u/s<br> 139(9)/142(1)/148/153A/153C,<br> enter the date <br>of such notice:
                                    </td>
                                     <td>
                                    
                                       <input class="form-control" disabled="true" id="date1399a" name="date1399a" placeholder="MM/DD/YYYY" type="date"/>
                                                        
                                    </td>
                                </tr>
                                     <tr>
                                    <td>
                                    Are you governed by Potugese Civil <br>Code as per section 5A?
                                    </td>
                                     <td>
                                    <select name="pccat" required>
                                                          <option value="" disabled selected hidden>Please Select One...</option>
                                                          <option value="0">Please Select One...</option><option value="1">Yes</option><option value="2">No</option>
                                         </select>
                                    </td>
                                </tr>
                              </tbody>
                            </table>
                                
                   
                </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <h3>Menu 1</h3>
                    
                        <table class=" tab table table-bordered " style="background-color: #E6E6E6">
                          <thead >
                            <tr  >
                              <h2 style="color: #3762CB">PART B- GROSS TOTAL INCOME</h2>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td rowspan="6"><br><br><br><br><br>B1<br> Salary/Pension:</td>
                              <td>(a) Salary (excluding all allowances, perquisites and profit in lieu of salary</td>
                              <td><input type="text" id="sal" value="0" name="sal" placeholder="" class="form-control "></td>
                            </tr>
                            <tr>
                              <td >(b) Allowances not exempt</td>
                              <td><input type="text" id="allowance" value="0" name="allowance" placeholder="" class="form-control "></td>
                            </tr>
                           <tr>
                              <td >(c)Value of perquisites</td>
                              <td><input type="text" id="perquisites" value="0" name="perquisites" placeholder="" class="form-control "></td>
                               
                            </tr>
                              <tr>
                              <td >(d) Profits in lieu of salary</td>
                              <td><input type="text" id="profit" name="profit" value="0" placeholder="" class="form-control"></td>
                            </tr>
                              <tr>
                              <td >(e)Deduction u/s 16</td>
                              <td><input type="text" id="ded16" name="ded16" value="0" placeholder="" class="form-control"></td>
                            </tr>
                              <tr>
                              <td >(f)Income chargable under the head 'Salaries':  ('a'+'b'+'c'+'d'-'e')</td>
                              <td><input type="text" id="inchargesal" value="0" name="inchargesal" placeholder="" class="form-control" readonly></td>
                            </tr>
                              <tr>
                              <td rowspan="7"><br><br><br><br><br>B2<br> House Property:</td>
                              <td >Types of House Property:</td>
                              <td><select id="typehouse">
                                  <option value="" disabled selected hidden>Please Select One...</option>
                                  <option value="0">Self Occupied</option>
                                  <option value="1">Let Out</option>
                                  </select></td>
                              </tr>
                                  <tr>
                                <td>(1) Gross rent received/receivable/letable value</td>
                              <td><input type="text" id="grossrent" value="0" name="grossrent" placeholder="" class="form-control " readonly></td>
                            </tr>
                               <tr>
                              <td >(2) Tax paid to local authorities</td>
                              <td><input type="text" id="taxpaidlocal" value="0" name="taxpaidlocal" placeholder="" class="form-control " readonly></td>
                            </tr>
                           <tr>
                              <td >(3)Annual Value</td>
                              <td><input type="text" id="annual" name="annual" value="0" placeholder="" class="form-control " readonly></td>
                               
                            </tr>
                              <tr>
                              <td >(4) 30% of Annual value</td>
                              <td><input type="text" id="thirty" name="thirty" value="0" placeholder="" class="form-control" readonly></td>
                            </tr>
                              <tr>
                              <td >(5) Interest payable on borrowed capital</td>
                              <td><input type="text" id="interestborrow" value="0" name="interestborrow" placeholder="" class="form-control" ></td>
                            </tr>
                              <tr>
                              <td >(6)Income chargable under the 'House Property'<br><p class="text-danger">Note: Maximum Loss from <br>House property that can be set-off is INR 2,00,000</p></td>
                              <td><input type="text" id="inchargehouse" value="0" name="inchargehouse" placeholder="" class="form-control" readonly></td>
                            </tr>
                              <tr>
                                  <td>B3</td>
                                  <td>Income from Other Sources</td>
                                  <td><input type="text" id="inother" name="inother" placeholder="" class="form-control"></td>
                              </tr>
                              <tr>
                                  <td>B4</td>
                                  <td>Gross Total Income: (B1+B2+B3+B4)</td>
                                  <td><input type="text" id="inttl" name="inttl" placeholder="" class="form-control" readonly></td>
                              </tr>
                               </tbody>
                            </table>
                            
                             <h2 style="color: #3762CB">PART C- Deductions and Taxable Total Income</h2>
                          <table class=" tab table table-bordered " style="background-color: #E6E6E6">
                              <tbody>
                              <tr>
                              <td>Section </td><td>Amount </td><td>System Calculated </td>			
                              </tr>
                                  <tr>
                                      <td>80C-Life insurance premia,deferred annuity, contributions to provident fun,<br>
                      subscription to certain equity dhares or debentures,etc.</td>
                                      <td><input type="text" id="ded1" value="0" name="ded1" class="form-control"> </td>
                                      <td><input type="text" id="ded2"  value="0"  name="ded2" class="form-control" readonly></td>
                                  </tr>
                                 
                                      <td>80D -Health insurance premium</td>
                                      <td><input type="text" id="ded13" value="0"   name="ded13" class="form-control"> </td>
                                      <td><input type="text" id="ded14" value="0"   name="ded14" class="form-control" readonly></td>
                                  </tr>
                                 
                                  <tr>
                                      <td>80E- Interest on loan taken for higher education</td>
                                      <td><input type="text" id="ded19"  value="0"  name="ded19" class="form-control"> </td>
                                      <td><input type="text" id="ded20"  value="0"  name="ded20" class="form-control" readonly></td>
                                  </tr>
                                 
                                  <tr>
                                      <td>80G- Donations to certain funds, charitable institutions,etc</td>
                                      <td><input type="text" id="ded23" value="0"   name="ded23" class="form-control"> </td>
                                      <td><input type="text" id="ded24" value="0"   name="ded24" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                      <td>80RRB- Royalty on patents</td>
                                      <td><input type="text" id="ded31" value="0"   name="ded31" class="form-control"> </td>
                                      <td><input type="text" id="ded32" value="0"   name="ded32" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                      <td>80QQB- Royalty income of authors of certaion books</td>
                                      <td><input type="text" id="ded33" value="0"   name="ded33" class="form-control"> </td>
                                      <td><input type="text" id="ded34" value="0"   name="ded34" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                      <td>80TTA- Income from interest on saving bank accounts</td>
                                      <td><input type="text" id="ded35" value="0"   name="ded35" class="form-control"> </td>
                                      <td><input type="text" id="ded36" value="0"   name="ded36" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                      <td>80U- In case of a person with disability</td>
                                      <td><input type="text" id="ded37" value="0"   name="ded37" class="form-control"> </td>
                                      <td><input type="text" id="ded38" value="0"   name="ded38" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                      <td>C1- total Deductions</td>
                                      <td><input type="text" id="ded39" value="0"   name="ded39" class="form-control" readonly> </td>
                                      <td><input type="text" id="ded40" value="0"   name="ded40" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                      <td>C2. Total Income(B4-C1)</td>
                                      <td><input type="text" id="ded41" value="0"   name="ded41" class="form-control" readonly> </td>
                                      <td><input type="text" id="ded42" value="0"   name="ded42" class="form-control" readonly></td>
                                  </tr>
                              </tbody>
                              
                          </table>
                         
                             <h2 style="color: #3762CB">Part D Computation of Tax Payable</h2>
                          <table class=" tab table table-bordered " style="background-color: #E6E6E6">
                              <tbody>
                                  <tr>
                                  
                                      <td>D1. tax Payable on Total Income(C2)</td><td><input type="text" name="c1" id="c1" value="0" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                  <td>D2. Rebate u/s 87 A</td>
                                      <td><input type="text" name="c2" value="0" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                  <td>D3. Tax After rebate(D1-D2)</td>
                                      <td><input type="text" value="0" 
							id="c3"name="c3" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                  <td>D4. Cess on(D3)</td>
                                      <td><input type="text" name="c4" value="0" id="c4" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                  <td>D5. Total Tax and Cess(D3+D4)</td>
                                      <td><input type="text" name="c5" value="0" id="c5" class="form-control" readonly></td>
                                  </tr>
                                  <tr>
                                  <td>D6. Relief u/s 89(1)</td>
                                      <td><input type="text" id="c6"
									name="c6" value="0"  class="form-control" ></td>
                                  </tr>
                                  <tr>
                                  <td>Total Tax</td>
                                      <td><input type="text" name="c7" id="c7" value="0"  class="form-control" readonly></td>
                                  </tr>
                      </tbody>
                      </table>
                                
                     
                 </div>
			
			
                <div id="menu2" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <div class="container">
   
                        <div class="row">
                            <div class="col-md-2"></div>
                          <div class="col-md-8">
                              
                            <table id="productTable" 
                                   class="table table-bordered table-condensed table-striped">
                              <thead>
                                  <tr colspan="6" ><h3 style="color: #3762CB">Details of TAX Deducted at source from Income[As per form 16]</h3></tr>
                                <tr>
                                  <th>Edit</th>
                                  <th>TAX Deduction Account Number of Deductor</th>
                                  <th>Name of Deductor</th>
                                  <th>Income Chargeable Under Salaries</th>
                                  <th>Total TAX Deducted</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>
                            </table>
                          </div>
                            <div class="col-md-2"></div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-2"></div>
                          <div class="col-md-8">
                            <div class="panel panel-primary">
                              <div class="panel-heading">
                                TAX Details
                              </div>
                              <div class="panel-body">
                                <div class="form-group">
                                  <label for="productname">
                                    TAX Deduction Account Number of Deductor
                                  </label>
                                  <input type="text"
                                         class="form-control" name="productname"
                                         id="productname" />
                                </div>
                                <div class="form-group">
                                  <label for="introdate">
                                    Name of Deductor
                                  </label>
                                  <input type="text"
                                         class="form-control" name="introdate"
                                         id="introdate" />
                                </div>
                                <div class="form-group">
                                  <label for="text">
                                    Income Chargeable Under Salaries
                                  </label>
                                  <input type="url"
                                         class="form-control"
										 name="url"
                                         id="url" />
                                </div>
                                   <div class="form-group">
                                  <label for="text">
                                    Total TAX Deducted
                                  </label>
                                  <input type="text"
                                         class="form-control"
										 name="ttl"
                                         id="ttl" />
                                </div>
                              </div>
                              <div class="panel-footer">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <button type="button" id="updateButton"
                                            class="btn btn-primary"
                                            onclick="productUpdate();">
                                      Add
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                            <div class="col-md-2"></div>
                        </div>
                      </div>
						
						 
                      <script>
                        // Next id for adding a new Product
                        var nextId = 1;
                        // ID of Product currently editing
                        var activeId = 0;
						  var count=0;
						  var tds[10];
                    
                        function productDisplay(ctl) {
                          var row = $(ctl).parents("tr");
                          var cols = row.children("td");
                    
                          activeId = $($(cols[0]).children("button")[0]).data("id");
                          $("#productname").val($(cols[1]).text());
                          $("#introdate").val($(cols[2]).text());
                          $("#url").val($(cols[3]).text());
                          $("#ttl").val($(cols[3]).text());
                    
                          // Change Update Button Text
                          $("#updateButton").text("Update");
                        }
                    
                        function productUpdate() {
                          if ($("#updateButton").text() == "Update") {
                            productUpdateInTable(activeId);
                          }
                          else {
                            productAddToTable();
                          }
                    
                          // Clear form fields
                          formClear();
                    
                          // Focus to product name field
                          $("#productname").focus();
                        }
                    
                        // Add product to <table>
                        function productAddToTable() {
                          // First check if a <tbody> tag exists, add one if not
                          if ($("#productTable tbody").length == 0) {
                            $("#productTable").append("<tbody></tbody>");
                          }
                    
                          // Append product to table
                          $("#productTable tbody").append(
                            productBuildTableRow(nextId));
                    
                          // Increment next ID to use
                          nextId += 1;
                        }
                    
                        // Update product in <table>
                        function productUpdateInTable(id) {
                          // Find Product in <table>
                          var row = $("#productTable button[data-id='" + id + "']")
                                    .parents("tr")[0];
                    
                          // Add changed product to table
                          $(row).after(productBuildTableRow(id));
                          // Remove original product
                          $(row).remove();
                    
                          // Clear form fields
                          formClear();
                    
                          // Change Update Button Text
                          $("#updateButton").text("Add");
                        }
                    
                        // Build a <table> row of Product data
						  
						  <?php/* $tdsacno[$i]=$_POST['productname'];
						  	$tdsname[$i]=$_POST['introdate'];
						  	 $tdsincome[$i]=$_POST['url'];
						  	 $tdsttd[$i]=$_POST['ttl'];
						  	 $i++;*/
						  ?>
                        function productBuildTableRow(id) {
                          var ret =
                          "<tr>" +
                            "<td>" +
                              "<button type='button' " +
                                      "onclick='productDisplay(this);' " +
                                      "class='btn btn-default' " +
                                      "data-id='" + id + "'>" +
                                      "<span class='glyphicon glyphicon-edit' />" +
                              "</button>" +
                            "</td>" +
                            "<td>" + ("#productname").val() + "</td>" +
                            "<td>" + $("#introdate").val() + "</td>" +
                            "<td>" + $("#url").val() + "</td>" +
                            "<td>" + $("#ttl").val() + "</td>" +
                            "<td>" +
                              "<button type='button' " +
                                      "onclick='productDelete(this);' " +
                                      "class='btn btn-default' " +
                                      "data-id='" + id + "'>" +
                                      "<span class='glyphicon glyphicon-remove' />" +
                              "</button>" +
                            "</td>" +
                          "</tr>"
                    
                          return ret;
                        }
                    
                        // Delete product from <table>
                        function productDelete(ctl) {
                          $(ctl).parents("tr").remove();
                        }
                    
                        // Clear form fields
                        function formClear() {
                          $("#productname").val("");
                          $("#introdate").val("");
                          $("#url").val("");
                          $("#ttl").val("");
                        }
                      </script>
                      <div class="container">
                       
                          <div class="row">
                          <div class="col-md-2"></div>
                            <div class="col-md-8">
                            
                              <table id="productTable2" 
                                     class="table table-bordered table-condensed table-striped">
                                <thead>
                              <tr colspan="6" ><h3 style="color: #3762CB">Details of TAX Collected at Source(TCS)</h3></tr>
                                  <tr>
                                    <th>Edit</th>
                                    <th>TAX Collection Account(TCN) Number of Collector</th>
                                    <th>Name of Collector</th>
                                    <th>Total TAX Deducted</th>
                                    <th>Delete</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                          <div class="col-md-2"></div>
                          </div>
                      
                          <div class="row">
                          <div class="col-md-2"></div>
                            <div class="col-md-8">
                              <div class="panel panel-primary">
                                <div class="panel-heading">
                                  TAX Details
                                </div>
                                <div class="panel-body">
                                  <div class="form-group">
                                    <label for="productname2">
                                        TAX Collection Account(TCN) Number of Collector
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           id="productname2" />
                                  </div>
                                  <div class="form-group">
                                    <label for="introdate2">
                                        Name of Collector
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           id="introdate2" />
                                  </div>
                                  <div class="form-group">
                                    <label for="text2">
                                        Total TAX Deducted
                                    </label>
                                    <input type="text"
                                           class="form-control"
                                           id="url2" />
                                  </div>
                                </div>
                                <div class="panel-footer">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <button type="button" id="updateButton2"
                                              class="btn btn-primary"
                                              onclick="productUpdate2();">
                                        Add
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <div class="col-md-2"></div>
                          </div>
                        </div>
                        <script>
                            // Next id for adding a new Product
                            var nextId2 = 1;
                            // ID of Product currently editing
                            var activeId2 = 0;
                        
                            function productDisplay2(ctl) {
                              var row = $(ctl).parents("tr");
                              var cols = row.children("td");
                        
                              activeId2 = $($(cols[0]).children("button")[0]).data("id");
                              $("#productname2").val($(cols[1]).text());
                              $("#introdate2").val($(cols[2]).text());
                              $("#url2").val($(cols[3]).text());
                        
                              // Change Update Button Text
                              $("#updateButton2").text("Update");
                            }
							
                        
                            function productUpdate2() {
                              if ($("#updateButton2").text() == "Update") {
                                productUpdateInTable2(activeId2);
                              }
                              else {
                                productAddToTable2();
                              }
                        
                              // Clear form fields
                              formClear2();
                        
                              // Focus to product name field
                              $("#productname2").focus();
                            }
                        
                            // Add product to <table>
                            function productAddToTable2() {
                              // First check if a <tbody> tag exists, add one if not
                              if ($("#productTable2 tbody").length == 0) {
                                $("#productTable2").append("<tbody></tbody>");
                              }
                        
                              // Append product to table
                              $("#productTable2 tbody").append(
                                productBuildTableRow2(nextId2));
                        
                              // Increment next ID to use
                              nextId2 += 1;
                            }
                        
                            // Update product in <table>
                            function productUpdateInTable2(id) {
                              // Find Product in <table>
                              var row = $("#productTable2 button[data-id='" + id + "']")
                                        .parents("tr")[0];
                        
                              // Add changed product to table
                              $(row).after(productBuildTableRow2(id));
                              // Remove original product
                              $(row).remove();
                        
                              // Clear form fields
                              formClear2();
                        
                              // Change Update Button Text
                              $("#updateButton2").text("Add");
                            }
							
						  <?php /* $tdsacno2[$j]=$_POST['#productname2'];
						  	$tdsname2[$j]=$_POST['#introdate2'];
						  	 $tdsincome2[$j]=$_POST['#url2'];
						  	 $j++;*/
						  ?>
                        
                            // Build a <table> row of Product data
                            function productBuildTableRow2(id) {
                              var ret =
                              "<tr>" +
                                "<td>" +
                                  "<button type='button' " +
                                          "onclick='productDisplay2(this);' " +
                                          "class='btn btn-default' " +
                                          "data-id='" + id + "'>" +
                                          "<span class='glyphicon glyphicon-edit' />" +
                                  "</button>" +
                                "</td>" +
                                "<td>" + $("#productname2").val() + "</td>" +
                                "<td>" + $("#introdate2").val() + "</td>" +
                                "<td>" + $("#url2").val() + "</td>" +
                                "<td>" +
                                  "<button type='button' " +
                                          "onclick='productDelete2(this);' " +
                                          "class='btn btn-default' " +
                                          "data-id='" + id + "'>" +
                                          "<span class='glyphicon glyphicon-remove' />" +
                                  "</button>" +
                                "</td>" +
                              "</tr>"
                        
                              return ret;
                            }
                        
                            // Delete product from <table>
                            function productDelete2(ctl) {
                              $(ctl).parents("tr").remove();
                            }
                        
                            // Clear form fields
                            function formClear2() {
                              $("#productname2").val("");
                              $("#introdate2").val("");
                              $("#url2").val("");
                            
                            }
                          </script>
                          <div class="container">
                       
                              <div class="row">
                              <div class="col-md-2"></div>
                                <div class="col-md-8">
                                
                                  <table id="productTable3" 
                                         class="table table-bordered table-condensed table-striped">
                                    <thead>
                                  <tr colspan="6" ><h3 style="color: #3762CB">Details of Advance Tax and Self Assesment Tax</h3></tr>
                                      <tr>
                                        <th>Edit</th>
                                        <th>BSR Code</th>
                                        <th>Serial No. of challan</th>
                                        <th>TAX Paid</th>
                                        <th>Delete</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                              <div class="col-md-2"></div>
                              </div>
                          
                              <div class="row">
                              <div class="col-md-2"></div>
                                <div class="col-md-8">
                                  <div class="panel panel-primary">
                                    <div class="panel-heading">
                                      TAX Details
                                    </div>
                                    <div class="panel-body">
                                      <div class="form-group">
                                        <label for="productname3">
                                            BSR Code
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               id="productname3" />
                                      </div>
                                      <div class="form-group">
                                        <label for="introdate3">
                                            Serial No. of challan
                                        </label>
                                        <input type="text"
                                               class="form-control"
                                               id="introdate3" />
                                      </div>
                                      <div class="form-group">
                                        <label for="text3">
                                            TAX Paid
                                        </label>
                                        <input type="number"
                                               class="form-control"
                                               id="url3" />
                                      </div>
                                    </div>
                                    <div class="panel-footer">
                                      <div class="row">
                                        <div class="col-xs-12">
                                          <button type="button" id="updateButton2"
                                                  class="btn btn-primary"
                                                  onclick="productUpdate3();">
                                            Add
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <div class="col-md-2"></div>
                              </div>
                            </div>
                            <script>
                                // Next id for adding a new Product
                                var nextId3 = 1;
                                // ID of Product currently editing
                                var activeId3 = 0;
                            
                                function productDisplay3(ctl) {
                                  var row = $(ctl).parents("tr");
                                  var cols = row.children("td");
                            
                                  activeId3 = $($(cols[0]).children("button")[0]).data("id");
                                  $("#productname3").val($(cols[1]).text());
                                  $("#introdate3").val($(cols[2]).text());
                                  $("#url3").val($(cols[3]).text());
                            
                                  // Change Update Button Text
                                  $("#updateButton3").text("Update");
                                }
                            
                                function productUpdate3() {
                                  if ($("#updateButton3").text() == "Update") {
                                    productUpdateInTable3(activeId3);
                                  }
                                  else {
                                    productAddToTable3();
                                  }
                            
                                  // Clear form fields
                                  formClear3();
                            
                                  // Focus to product name field
                                  $("#productname3").focus();
                                }
                            
                                // Add product to <table>
                                function productAddToTable3() {
                                  // First check if a <tbody> tag exists, add one if not
                                  if ($("#productTable3 tbody").length == 0) {
                                    $("#productTable3").append("<tbody></tbody>");
                                  }
                            
                                  // Append product to table
                                  $("#productTable3 tbody").append(
                                    productBuildTableRow3(nextId3));
                            
                                  // Increment next ID to use
                                  nextId3 += 1;
                                }
                            
                                // Update product in <table>
                                function productUpdateInTable3(id) {
                                  // Find Product in <table>
                                  var row = $("#productTable3 button[data-id='" + id + "']")
                                            .parents("tr")[0];
                            
                                  // Add changed product to table
                                  $(row).after(productBuildTableRow3(id));
                                  // Remove original product
                                  $(row).remove();
                            
                                  // Clear form fields
                                  formClear3();
                            
                                  // Change Update Button Text
                                  $("#updateButton3").text("Add");
                                }
                            
                                // Build a <table> row of Product data
								 <?php /*$tdsacno3[$k]=$_POST['#productname3'];
						  	$tdsname3[$k]=$_POST['#introdate3'];
						  	 $tdsincome3[$k]=$_POST['#url3'];
						  	 $k++;*/
						  ?>
                                function productBuildTableRow3(id) {
                                  var ret =
                                  "<tr>" +
                                    "<td>" +
                                      "<button type='button' " +
                                              "onclick='productDisplay3(this);' " +
                                              "class='btn btn-default' " +
                                              "data-id='" + id + "'>" +
                                              "<span class='glyphicon glyphicon-edit' />" +
                                      "</button>" +
                                    "</td>" +
                                    "<td>" + $("#productname3").val() + "</td>" +
                                    "<td>" + $("#introdate3").val() + "</td>" +
                                    "<td>" + $("#url3").val() + "</td>" +
                                    "<td>" +
                                      "<button type='button' " +
                                              "onclick='productDelete2(this);' " +
                                              "class='btn btn-default' " +
                                              "data-id='" + id + "'>" +
                                              "<span class='glyphicon glyphicon-remove' />" +
                                      "</button>" +
                                    "</td>" +
                                  "</tr>"
                            
                                  return ret;
                                }
                            
                                // Delete product from <table>
                                function productDelete3(ctl) {
                                  $(ctl).parents("tr").remove();
                                }
                            
                                // Clear form fields
                                function formClear3() {
                                  $("#productname3").val("");
                                  $("#introdate3").val("");
                                  $("#url3").val("");
                                
                                }
                              </script>
                  </div>
                <div id="menu3" class="tab-pane fade">
                  <h3>Menu 3</h3>
                  <div class="container">
                              
                        <table class=" tab table table-bordered " style="background-color: #E6E6E6">
                          <thead >
                            <tr  >
                              <h2 style="color: #3762CB">Total Taxes Paid</h2>
                            </tr>
                        </thead>
                        <tr>
                                <td >D12(a)</td>
                                <td >Total Advance TAX Paid</td>
                                <td><input type="text" name="tadt" placeholder="" class="form-control required" readonly></td>
                                
                        </tr>
                        <tr>
                                <td >D12(b)</td>
                                <td >Total TDS Claimed</td>
                                <td><input type="text" value='0' name="tds" placeholder="" class="form-control required" readonly></td>
                                
                        </tr>
                        <tr>
                                <td >D12(c)</td>
                                <td >Total TCS Claimed</td>
                                <td><input type="text" value='0' name="tcs" placeholder="" class="form-control required" readonly></td>
                                
                        </tr>
                        <tr>
                                <td >D12(d)</td>
                                <td >Total TAX Paid</td>
                                <td><input type="text" value='0' name="tat" placeholder="" class="form-control required" readonly></td>
                                
                        </tr>
                        <tr>
                                <td >D13</td>
                                <td >Amount Payable  </td>
                                <td><input type="text" value='0' id="payable" name="payable" placeholder="" class="form-control required" raedonly></td>
                                
                        </tr>
                        <tr>
                                <td >D14</td>
                                <td >Refund </td>
                                <td><input type="text" value='0'id="ref" name="ref" placeholder="" class="form-control required" readonly></td>
                                
                        </tr>
                        </table>
                        <table class=" tab table table-bordered " style="background-color: #E6E6E6">
                                <thead >
                                        <tr  >
                                          <h2 style="color: #3762CB">Verification</h2>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                I <input type="text" name="ver1" placeholder="" > son/daughter of <input type="text" name="ver2" placeholder="" > solemnly declare that to the best of my knowledge and belief,the information given in the return is correct and complete and is in accordance with the provision of the Income-tax Act 1961.
                                                I further declare that I am making this return in my capacity as <input type="text" name="ver3" placeholder=""> and I am also cometent to make this return and verify it.<br>
                                                I am holding permanent account number <input type="text" name="ver4" placeholder=""><br>
        
                                            </td>
                                        </tr>
                                        <tr>
                                                <td>
                                                   Place <input type="text" name="ver5" placeholder="" >   Date 
                                                   <input  id="datever" name="datever" placeholder="MM/DD/YYYY" type="date"/>
                                                        
                                                 </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <button type="submit" name="submit" class="btn btn-primary btn-block" >Submit</button>
                                                </td>
                                            </tr>

                                    </tbody>
                        </table>
                       
                </div>
                 </div>
                
              </div>
              
</div>
</form>
</div>

<script>
	var z= parseInt("0");var a2=parseInt('0');var b2=parseInt('0');var c2=parseInt('0');var d2=parseInt('0');var e2=parseInt('0');var f2=parseInt('0');var g2=parseInt('0');var h2=parseInt('0');var i2=parseInt('0');var j2=parseInt('0');var a1=parseInt('0');var b1=parseInt('0');var c1=parseInt('0');var d1=parseInt('0');var e1=parseInt('0');var f1=parseInt('0');var h1=parseInt('0');var g1=parseInt('0');var i1=parseInt('0');var j1=parseInt('0');var a= parseInt("0");var b= parseInt("0");var c= parseInt("0");var d= parseInt("0");var e= parseInt("0");var f= parseInt("0"); var m=parseInt("0");var g= parseInt("0");var h= parseInt("0");var i= parseInt("0");var j= parseInt("0");
	var a3=parseInt("0");var b3=parseInt("0");
	var c3=parseInt("0");
	var k= parseInt("0");var l= parseInt("0");
	//for139(5)
	$(document).ready(function(){
    function enable()
    {
         document.itr1.ackno1.disabled=false;
		 document.itr1.date1395.disabled=false;
    }
    function disable()
    {
       document.itr1.ackno1.disabled=true;
	   document.itr1.date1395.disabled=true;
	}
    $('#rf').on('change', function() {
    
      if ( $('#rf').val() == "6" ) enable();
      else disable();
    });
});
	function comp(){
		if(j1<=250000){
			$('#c1').val('0');
		}
		else if(j1>250000 && j1<=500000)
		{
			a3=parseInt('0.05*j1');
			$('#c1').val(a3);
		}
		else if(j1>500000 && j1<=1000000)
		{
			a3=0.2*j1;
			$('#c1').val(a3);
		}
		else if(j1>1000000)
		{
			a3=0.3*j1;
			$('#c1').val(a3);
		}
		
		$('#c3').val(a3);
		c3=a3-b3;
		
		var d3=parseInt(0.02*a3);
		$('#c7').val(parseInt(d3+c3-b3));
		$('#c4').val(d3);
		$('#c5').val(d3+a3);
		$('#payable').val(parseInt(d3+c3-b3));
	}
		
	
	//for 139(9)
	$(document).ready(function(){
    function enable()
    {
         document.itr1.ackno2.disabled=false;
		 document.itr1.date1399.disabled=false;
		 document.itr1.notno.disabled=false;
		 document.itr1.date1399a.disabled=false;
    }
    function disable()
    {
       document.itr1.ackno2.disabled=true;
	   document.itr1.date1399.disabled=true;
	   document.itr1.notno.disabled=true;
	   document.itr1.date1399a.disabled=true;
	}
    $('#rf').on('change', function() {
    
      if ( $('#rf').val() == "7" ) enable();
      else disable();
    });
});
	
	
	
	//for house property
	$(document).ready(function(){
    function enable()
    {
         document.getElementById('grossrent').removeAttribute('readonly');
		document.getElementById('taxpaidlocal').removeAttribute('readonly');
		
		
    }
    function disable()
    {
		document.getElementById('grossrent').value=0;
		document.getElementById('taxpaidlocal').value=0;
		
		document.getElementById('thirty').value=0;
       $('#grossrent').attr('readonly', true);
		$('#taxpaidlocal').attr('readonly', true);
		
		
	}
    $('#typehouse').on('change', function() {
    
      if ( $('#typehouse').val() == "1" ) enable();
      else disable();
    });
});
	
	$(document).ready(function(){
		
    
		 function change()
    {
        var f=a+b+c+d-e;
		 $('#inchargesal').val(f);
		i=g-h;
		var o=0.3*i;
		j=parseInt(o);
       	l=i-j-k;
		$('#annual').val(i);
		$('#thirty').val(j);
		 $('#inchargehouse').val(l);
		z= m+f+l;
		$('#inttl').val(z);
		i2=a2+b2+c2+d2+e2+f2+g2+h2;
		$('#ded39').val(i2);
		i1=a1+b1+c1+d1+e1+f1+g1+h1;
		$('#ded40').val(i1);
		j2=z-i2;
		j1=z-i1;
		$('#ded41').val(j2);
		$('#ded42').val(j1);
		comp();
    }
		
		 $('#c6').on('change', function() {
		 b3=parseInt(document.getElementById("c6").value);
		 comp();
		 });
			 
    $('#sal').on('change', function() {
		
    	 a=parseInt(document.getElementById("sal").value);
		
        change();
    });
		$('#allowance').on('change', function() {
			 b = parseInt(document.getElementById("allowance").value)
    	
        change();
    });
		$('#perquisites').on('change', function() {
    	c=parseInt(document.getElementById("perquisites").value);
        change();
    });
		$('#profit').on('change', function() {
    	d=parseInt(document.getElementById("profit").value);
        change();
    });
		$('#ded16').on('change', function() {
    	e=parseInt(document.getElementById("ded16").value);
        change();
    });
		
		
		
   
    $('#grossrent').on('change', function() {
		
    	 g=parseInt(document.getElementById("grossrent").value);
		
        change();
    });
		$('#taxpaidlocal').on('change', function() {
			 h = parseInt(document.getElementById("taxpaidlocal").value)
    	
        change();
    });
	
		
		$('#interestborrow').on('change', function() {
    	k=parseInt(document.getElementById("interestborrow").value);
        change();
    });
		 $('#inother').on('change', function() {
		
    	 m=parseInt(document.getElementById("inother").value);
		
        change();
    });
		 $('#c1').on('change', function() {
		
    	 m=parseInt(document.getElementById("c1").value);
		
        change();
    });
		
});
	$(document).ready(function(){
		
		function system(){
			i2=a2+b2+c2+d2+e2+f2+g2+h2;
			$('#ded39').val(i2);
			i1=a1+b1+c1+d1+e1+f1+g1+h1;
			$('#ded40').val(i1);
			j2=z-i2;
			j1=z-i1;
			$('#ded41').val(j2);
			$('#ded42').val(j1);
			comp();
		}
		
		
    $('#ded1').on('change', function() {
    a2= parseInt(document.getElementById('ded1').value);
      if(a2<150000) $('#ded2').val(a2);
		else $('#ded2').val('150000');
		a1= parseInt(document.getElementById('ded2').value);
		system();
    });
		 $('#ded13').on('change', function() {
     b2= parseInt(document.getElementById('ded13').value);
      if(b2<15000) $('#ded14').val(b2);
		else $('#ded14').val('15000');
	b1= parseInt(document.getElementById('ded14').value);
			 system();
    });
		 $('#ded19').on('change', function() {
     c2= parseInt(document.getElementById('ded19').value);
      if(c2<10000) $('#ded20').val(c2);
		else $('#ded20').val('10000');
			  c1= parseInt(document.getElementById('ded20').value);
			 system();
    });
		 $('#ded23').on('change', function() {
    d2= parseInt(document.getElementById('ded23').value);
      if(d2<150000) $('#ded24').val(d2);
		else $('#ded24').val('150000');
			 d1= parseInt(document.getElementById('ded24').value);
			 system();
    });
		 $('#ded31').on('change', function() {
    e2= parseInt(document.getElementById('ded31').value);
      if(e2<200000) $('#ded32').val(e2);
		else $('#ded32').val('200000');
			 e1= parseInt(document.getElementById('ded32').value);
			 system();
    });
		 $('#de33').on('change', function() {
    f2= parseInt(document.getElementById('ded33').value);
      if(f2<150000) $('#ded34').val(f2);
		else $('#ded34').val('150000');
			 f1= parseInt(document.getElementById('ded34').value);
			 system();
    });
		 $('#ded35').on('change', function() {
    g2= parseInt(document.getElementById('ded35').value);
      if(g2<60000) $('#ded36').val(g2);
		else $('#ded36').val('60000');
			 g1= parseInt(document.getElementById('ded36').value);
			 system();
    });
		 $('#ded37').on('change', function() {
    h2= parseInt(document.getElementById('ded37').value);
      if(h2<50000) $('#ded38').val(h2);
		else $('#ded38').val('50000');
			 h1= parseInt(document.getElementById('ded38').value);
			 system();
    });
		
});
</script>
<div class="row">
<?php include 'Footer.php'?>
</div>

</body>  
</html>  
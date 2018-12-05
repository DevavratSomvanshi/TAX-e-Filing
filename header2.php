<?php 
echo '
<style>
html,body{
  background: url("img7.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
  <form class="navbar-form navbar-right" action="/action_page.php">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
  </form>
  <ul class="nav navbar-nav navbar-right">
      <li><a href="#">New</a></li>
      <li><a href="index.php" id="myBtn"><span class="glyphicon glyphicon-log-out" ></span> LogOut</a></li>
    <li><a href="#">Feedback</a></li>
  </ul>	  
</div>
<script>
function dest() { location.href = "clear.php"; }
</script>
</nav>
  <!--login attach-->
  <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form">
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="text" class="form-control" id="psw" placeholder="Enter password">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="" checked>Remember me</label>
          </div>
            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        <p>Not a member? <a href="#">Sign Up</a></p>
        <p>Forgot <a href="#">Password?</a></p>
      </div>
    </div>
    
  </div>
</div> 
  <!--login attach end--> 
  
  
           <div class="jumbotron row">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                  <img src="Logo.png" alt="logo" style="max-width: 150px;max-height: 140px">
              </div>
              <div class="col-md-8">
                  <h1 style="">INCOME TAX e-FILING</h1> 
                 <small><h3>Government of India</h3></small>
              </div> 
            </div>
  
  <!--navbar menu -->
  
  
<nav class="navbar navbar-inverse ">
<div class="container-fluid">
  <div class="row">
  <ul class="nav navbar-nav ">
    <li><a href="index.php">HOME</a></li>
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">TAX<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="Calculator.php">Tax Calculator</a></li>
        <li><a href="#">Tax Details</a></li>
        
      </ul>
    </li>
    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CLIENT PORTAL<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Page 1-1</a></li>
        <li><a href="#">Page 1-2</a></li>
        <li><a href="#">Page 1-3</a></li>
      </ul>
    </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">HELP<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Page 1-1</a></li>
        <li><a href="#">Page 1-2</a></li>
        <li><a href="#">Page 1-3</a></li>
      </ul>
    </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Page 1-1</a></li>
        <li><a href="#">Page 1-2</a></li>
        <li><a href="#">Page 1-3</a></li>
      </ul>
    </li>
  </ul>
 </div>
</div>
</nav>		
  
  <!--Menu nav bar ends-->'
?>

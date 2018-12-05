<!doctype html>
<?php

		
		if(isset($_POST['submitin']))
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
		
?>
<html>
<head>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	 <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="news.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<title>Income Tax Return</title>
	<style>
	
  }
		
		/*login*/
		
	.login-form {
		max-width: 550px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }

  </style>
	
</head>

<body>
	<div class="row">
		<?php include 'header.php' ?>
	
	</div>
	
	<div class="container-fluid">
		
		<!--row1-->
		
	<div class="row" id="Login" >
		
  		<div class="col-md-6">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  				<!-- Indicators -->
  				<ol class="carousel-indicators">
    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
  				</ol>

  				<!-- Wrapper for slides -->
  				<div class="carousel-inner">
   					 <div class="item active">
     				 <img src="img1.jpg" alt="Los Angeles">
    				</div>

   				 <div class="item">
     				 <img src="img3.jpg" alt="Chicago">
    			</div>

    		<div class="item">
      				<img src="img2.jpg" alt="New York">
    		</div>
					<div class="item">
      				<img src="img4.jpg" alt="New York">
    		</div>
  		</div>

  		<!-- Left and right controls -->
  		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    		<span class="glyphicon glyphicon-chevron-left"></span>
    		<span class="sr-only">Previous</span>
  		</a>
  		<a class="right carousel-control" href="#myCarousel" data-slide="next">
    		<span class="glyphicon glyphicon-chevron-right"></span>
    		<span class="sr-only">Next</span>
 		</a>
		</div>
	</div>
		
	<div class="col-md-6">
			<div class="login-form"  >
    <form  style="height:395px" name="signin" id="signin" action="index.php" method="post">
		<div class="row">
			<div class="col-md-4">
			<img src="Logo2.png" alt="logo" style="max-width: 80px;max-height: 60px">
			</div>
			<div class="col-md-8">
			 <h1 class="text-left">Log in</h1> 
			</div>
		</div>
          <br>
        <div class="form-group">
            <input type="text" name="userid" id="userid" class="form-control" placeholder="UserId" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submitin" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>  
		 <br><br><p class="text-center"><a href="#">Create an Account</a></p>
    </form>
   
</div>
		</div>
		
</div>
		
		<!--row2-->
		

		<div class="row">
  			<div class="container">  

  <h3>EVENTS & NEWS</h3>
  
  <hr>
  <div class="row">
    <div class="col-lg-push-4 col-md-4 col-md-push-4">
      <div class="searchForm type2">
        <form action="" class="searchForm"><!-- Add The Appropriate Action for Your Site's Search Form/Page -->
          <label class="sr-only" for="searchNewsEvents">Search News and Events</label>
           <input id="searchNewsEvents" name="q" placeholder="What are you looking for?" type="search"> <input type="submit" value="Search">
        </form>
      </div>
    </div>
    <div class="clearfix visible-sm visible-xs">
      &nbsp;
    </div>
    <div class="col-lg-push-4 col-md-4 col-md-push-4">
      <div class="dropdownCategories">
      <label class="sr-only" for="dropdownNewsEvents">Category dropdown for News and Events</label>
      <select>
        <option value="">
          Select Category
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Marketing
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Design
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Programming
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Support
        </option>
        <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
          Training
        </option>
      </select>
      </div>
    </div>  
    <div class="clearfix visible-sm visible-xs">
      &nbsp;
    </div>
    <div class="col-lg-4 col-lg-pull-8 col-md-4 col-md-pull-8">
      <ul class="nav nav-pills" role="tablist">
        <li class="active">
          <a data-toggle="tab" href="#tab1" role="tab">Events</a>
        </li>
        <li>
          <a data-toggle="tab" href="#tab2" role="tab">News</a>
        </li>
      </ul>
    </div>
  </div><!-- / row -->
  <hr>
  <div class="tab-content">
    <div class="tab-pane fade in active" id="tab1">
      <div class="row">
        <div class="col-md-6">
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>30</em>Nov</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Venture Tech</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Nov 30, 2016</span> <span class="timeEl">12:00pm - 02:00pm</span>
              </div>
              <p>
                See the latest inspirations in the local tech scene.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>11</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Tech Conference</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 11, 2016</span> <span class="timeEl">06:00pm - 07:30pm</span>
              </div>
              <p>
                Local tech entrepreneurs gather to share their knowledge.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>15</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Marketing for Large Businesses</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 15, 2016</span> <span class="timeEl">05:30pm - 07:30pm</span>
              </div>
              <p>
                Learn how larger organizations can effectively manager their marketing projects.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
        </div><!-- / .col-md-6 -->
        <div class="col-md-6">
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>18</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Programming 101</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 18, 2016</span> <span class="timeEl">06:00pm - 08:00pm</span>
              </div>
              <p>
                Take the basic CMS training class to see where things are and how to build custom modules.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>21</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Desiging for Mobile</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 21, 2016</span> <span class="timeEl">10:00am - 12:00pm</span>
              </div>
              <p>
                Get tips and information regarding how to design websites for mobile devices.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
          <div class="media">
            <a class="pull-left" href="#"><span class="dateEl"><em>21</em>Dec</span></a>
            <div class="media-body">
              <h4 class="media-heading">
                <a href="#">Modern Support</a>
              </h4>
              <div class="meta-data">
                <span class="longDate">Dec 22, 2016</span> <span class="timeEl">10:00am - 12:00pm</span>
              </div>
              <p>
                Learn from industry leaders about providing the best support possible.
              </p>
            </div><!-- / media-body -->
          </div><!-- / media -->
        </div><!-- / .col-md-6 -->
      </div><!-- / row -->
      <div class="text-center">
        <br>
        <a class="btn btn-default" href="#">SEE ALL EVENTS</a>
      </div>
    </div>
    <div class="tab-pane fade" id="tab2">
      <div class="row">
        <div class="col-md-6">
          <div class="blogPost--small">
            <div class="media">
              <span class="pull-left"><a href="#"><span class="date"><span>29</span> <small>Nov</small></span></a></span>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#">Building In WebCorpCo CMS 8</a>
                </h4>
                <p>
                  Learn about all of the possibilities of web design in our latest CMS release.
                </p>
              </div>
            </div>
          </div><!-- / blogPost -->
          <div class="blogPost--small">
            <div class="media">
              <span class="pull-left"><a href="#"><span class="date"><span>22</span> <small>Nov</small></span></a></span>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#">WebCorpCo Named To Inc. 5000</a>
                </h4>
                <p>
                  Inc. magazine today ranked WebCorpCo as the 1,870th fastest growing company on the 34th annual Inc. 5000.
                </p>
              </div>
            </div>
          </div><!-- / blogPost -->
        </div><!-- / .col-md-6 -->
        <div class="col-md-6">
          <div class="blogPost--small">
            <div class="media">
              <span class="pull-left"><a href="#"><span class="date"><span>12</span> <small>Nov</small></span></a></span>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#">7 Critical Factors When Choosing A CMS</a>
                </h4>
                <p>
                  Finding a solution that can be tailored to support the needs of your business is more important than ever.
                </p>
              </div>
            </div>
          </div><!-- / blogPost -->
          <div class="blogPost--small">
            <div class="media">
              <span class="pull-left"><a href="#"><span class="date"><span>10</span> <small>Nov</small></span></a></span>
              <div class="media-body">
                <h4 class="media-heading">
                  <a href="#">What Is A Content Management System</a>
                </h4>
                <p>
                  So many acronyms that most of us know a brief amount about, if at all, let alone the meaning of those three little letters we hear so often.
                </p>
              </div>
            </div>
          </div><!-- / blogPost -->
        </div><!-- / row -->
        <div class="text-center">
          <br>
          <a class="btn btn-default" href="#">SEE ALL NEWS</a>
        </div>
      </div>
    </div>
  </div>
</div>
		</div>
		
		<!--row3-->
		

		<div class="row">
  			<?php include'Footer.php' ?>
		</div>
		
	
		
	</div>
	
</body>
</html>
<!doctype html>
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
		#footer{
    list-style-type:none;
    clear:both  ;
    padding-right: 9px;
    padding-top: 9px;
    background-color:#999999;
    text-align:right;
    height: 20%;
}
		.modal-header, h4, .close {
      background-color: #7977E0;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
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
	<?php include 'header.php'; ?>
	
	<div class="container-fluid">
		<!--row1-->
		
	<div class="row" id="Login" style="background-color: #9ED2E4">
		
  		<div class="col-md-6 ">
			<div id="myCarousel" class="carousel slide " data-ride="carousel">
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
			<div class="login-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="UserId" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>
		</div>
		
</div>
		
		<!--row2-->
		

		<div class="row">
  			<div class="container">  

  <h3>EVENTS & NEWS</h3>
  
  
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
  			<div class="col-md-12"></div>
		</div>
		
		<!--row4-->
		

		<div class="row">
  			<div class="col-md-12"></div>
		</div>
		
		<!--row5-->
		

		<div class="row">
  			<div class="col-md-12"></div>
		</div>
		
		<!--row6-->
		

		<div class="row" style="border-color: #949494">
  			<!-- Footer -->
      <?php include 'Footer.php';?>
<!-- Footer -->
		</div>
	
	</div>
	<script>
		$(document).ready(function(){
    	$("#myBtn").click(function(){
        $("#myModal").modal();
    	});
		});
	</script>
</body>
</html>

<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong>Online Notice Board</strong></a></li>
      
	  
	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
	
	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>
	
	<li><a href="index.php?option=feedback"><span class="glyphicon glyphicon-feedback"></span>Feedback</a></li>
	
	<li><a href="index.php?option=newsletter"><span class="glyphicon glyphicon-newsletter"></span>Newsletter</a></li>
	
	<li><a href="index.php?option=aboutme"><span class="glyphicon glyphicon-aboutme"></span>About Me</a></li>
	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  <li><a href="index.php?option=admin"><span class="glyphicon glyphicon-admin"></span> ADMIN</a></li>
    </ul>



</div>
</nav>	

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/blank-89184.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/bulletin-board-3127287.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	
	 <div class="item">
      <img src="images/post-it-notes-1284667.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php 
		@$opt=$_GET['option'];
		
		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}
			else if($opt=="feedback")
			{
			include('index1.php');
			}
			else if($opt=="newsletter")
			{
			include('index2.php');
			}
			else if($opt=="aboutme")
			{
			include('aboutme.php');
			}
			else if($opt=="admin")
			{
			header('location:admin');		
			}
			
			else if($opt=="New_user")
			{
			include('registration.php');
			}
			
			
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h1 > MVJCE ONLINE NOTICE BOARD </h2><ol type=1><br><h4><li>
		MVJCE online notice board is a place where people can leave any types of messages and notifications, for example, to advertise things, announce events or provide any information.</li><br>
			<li> Notice board online it can be placed on digital devices such computers, tabs, mobile phones etc.</li><br>
			<li> This online notice board project is very helpful for all type of users like existing users and new users.</li> <br></ol> </h4>";
		}
		?>
		
		
		
		
		</div>
	<!-- container -->
		
		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading">Latest news</div>
  <div class="panel-body"><marquee><ul>
    <li>Login with your student ID and Password to check if 
	there is any notifications in your account</li></marquee><br><br>
	<marquee><li>For any queries contact the customer number </li></marquee><br><br>
	<marquee><li>In case if you forget password, reset it from the section FORGOT password </li></marquee>
  </div>
</div>
		
		</div>
	</div>

</div>



<br/>
<br/>
<br/>
<br/>

<!-- footer-->

			<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="http://www.instagram.com/deeepakjangir"> Developed by  Deepak Jangir</a></li>
      
	</ul>




</div>
</nav>
<!-- footer-->

	</body>
</html>
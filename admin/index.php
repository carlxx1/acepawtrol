<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

isset($_POST['login']);


if(empty($_POST['username']) && empty($_POST['password']))
{


}else{
    $adminuser=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select ID , UserType from tbladmin where UserName='$adminuser' && Password='$password'");
    $ret=mysqli_fetch_array($query);
    $_SESSION['user_type'] = $ret['UserType'];

    if($_SESSION['user_type'] == "Admin"){
    		$_SESSION['bpmsaid']=$ret['ID'];
    	 header('location:dashboard.php');
    }
    if($_SESSION['user_type'] == "Cashier"){
    		$_SESSION['bpmsaid']=$ret['ID'];
    	 header('location:cashier.php');
    }
    

}
  
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>AcePatrol | Login Page </title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

<style>
  i{
	color:lightgray;
	position: relative	;
	bottom: 55px;
	cursor:pointer;
	left: 670px;;

	}
</style>





 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<!-- main content start-->
		<div style="background-color: #F1F1F1; height:800px;">
			<div class="main-page login-page ">
				<h3 class="title1">SignIn Page</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Welcome back to AcePatrol AdminPanel ! </h4>
					</div>
					<div class="login-body">
						<form role="form" method="post" action="">
							<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
							<input type="text" class="user" name="username" placeholder="Username" required="true">
							<input type="password" name="password" name="password"  id="password" class="lock" placeholder="Password" required="true">
                           <i id="visibilityBtn"><span id="icon" class="material-symbols-outlined">visibility_off</i>
							
							
							
							
							
							<input type="submit" name="login" value="Sign In">
							<div class="forgot-grid">
								
								<div class="forgot">
									<a href="../index.php">Back to Home</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="forgot-grid">
								
								<div class="forgot">
									<a href="Register.php">Register</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
				
				
			</div>
		</div>
		
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>

<script>
		const visibilityBtn= document.getElementById("visibilityBtn")
                    visibilityBtn.addEventListener("click",toggleVisibility)

                   function toggleVisibility(){
                    const passwordInput= document.getElementById("password")
                    const icon = document.getElementById("icon")
                        if (passwordInput.type === "password"){
                            passwordInput.type = "text"
                            icon.innerText = "visibility"
                        
                        } else{
                            passwordInput.type = "password"
                            icon.innerText = "visibility_off"
                        }


                   } 

		</script>		   
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
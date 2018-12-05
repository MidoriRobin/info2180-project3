<?php
	include '../PHP scripts/login.php';
	
	$svar = 'true';
	
	// if
?>

<html>
    <head>
		<title>HireME - Job Board</title>
		<link rel="stylesheet" type="text/css" href="../styles/style.css"/>
		<script type="text/javascript" src="../PHP scripts/login.js"></script>
	</head>
	<body class="container">
	    <div id="header">
	        <p>HireME</p>
	    </div>
	    <!--gonna test sumn by adding a button-->
	    <div id ="sidebar">
	        <button><img src="../Icons/house.png" width="20" height="20">Home</button>  <br/> 
	        <button><img src="../Icons/person.png" width=" 20" height=" 20">Add User</button>   <br/> 
	        <button><img src="../Icons/notes.png" width=" 20" height=" 20">New Job</button>   <br/> 
	        <button><img src="../Icons/power.png" width=" 20" height=" 20">Logout</button>   <br/> 
	        <input type="hidden" id = "session" value = '<?php echo $_SESSION['value']?>' />
	        <p>Current user: <?php echo $_SESSION['fName']?></p>
	    </div>
	    <div id="main">
	        <p><h2>User Login</h2></p>
	        <p> </p>
	        <!--../PHP scripts/login.php-->
	        <form action = "" method = "post">
	        	User Name <br/> 
				<input type="text" class="edges" name="uname" />
				<span class="error">* <?php echo $uname;?></span>
				<p> </p>
				Password  <br/> 
				<input type="text" class="edges" name="pass" />
				<span class="error">* <?php echo $pass;?></span>
				<p> </p>
		        <input type="button" name="login" class="submit" value = "login"/>
	        </form>
	    </div>
	    <div id="footer">
	    </div>
	        
	</body>
</html>
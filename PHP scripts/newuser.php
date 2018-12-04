<?php
    
    echo '<link rel="stylesheet" type="text/css" href="../styles/style.css"/>';
    
    echo '<div id="main">
	        <p><h2>New User</h2></p>
	        <p> </p>
	        First Name <br/> 
			<input type="text" class="edges" name="fname" />
			<span class="error">* <?php echo $fname;?></span>
			<p> </p>
			Last Name  <br/> 
			<input type="text" class="edges" name="lname" />
			<span class="error">* <?php echo $lname;?></span>
			<p> </p>
			Password  <br/> 
			<input type="text" class="edges" name="pass" />
			<span class="error">* <?php echo $pass;?></span>
			<p> </p>
			Email  <br/> 
			<input type="text" class="edges" name="email" placeholder="e.g. mary.jane@example.com"/>
			<span class="error">* <?php echo $email;?></span>
			<p> </p>
			Telephone  <br/> 
			<input type="text" class="edges" name="tel" placeholder="e.g. 876-989-6732" />
			<span class="error">* <?php echo $tel;?></span>
	        <p> </p>
	        <input type="submit" name="submit" class="submit"/>
	</div>';
?>
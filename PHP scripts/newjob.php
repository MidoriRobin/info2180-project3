<?php

 echo '<link rel="stylesheet" type="text/css" href="../styles/style.css"/>';
 
 echo '<p><h2>New Job</h2></p>
	        <p> </p>

      <form action="..\PHP scripts\createjob.php" method="post">
          Job Title <br/>
          <input type="text" class="edges" name="jtitle" placeholder="e.g. Senior Designer or Product Manager"/>
          <span class="error">* <?php echo $jtitle;?></span>
          <p> </p>
          Job Description  <br/>
          <input type="text" class="edges" name="jdes" />
          <span class="error">* <?php echo $jdes;?></span>
          <p> </p>
          Category  <br/>
          <select name="category">
            <option disabled="disabled" selected="selected" script="select.js">e.g. Select a category</option>
            <option value="Design">Design</option>
            <option value="Programming">Programming</option>
            <option value="Customer Support">Customer Support</option>
            <option value="Sales and Marketing">Sales and Marketing</option>
          </select>
          <span class="error">* <?php echo $cat;?></span>
          <p> </p>
          Company <br/>
          <input type="text" class="edges" name="comp" />
          <span class="error">* <?php echo $comp;?></span>
          <p> </p>
          Job Location  <br/>
          <input type="text" class="edges" name="jloc" placeholder="e.g. Kingston, Jamaica" />
          <span class="error">* <?php echo $jloc;?></span>
          <p> </p>
          <input type="submit" name="submit" class="submit"/>
        </div>
      </form>
	    <div id="footer">

	    </div>';
	    
 
?>
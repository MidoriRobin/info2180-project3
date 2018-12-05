<?php


$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'JobsSchema';

    
$conn = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$clist = $conn->query('SELECT * FROM Jobs');
$results = $clist->fetchAll(PDO::FETCH_ASSOC);

echo'<link rel="stylesheet" type="text/css" href="../styles/Dashboard.css" />';

echo '<div id="main">
	
			<div>
				<div class="butt">
					<button class="button" onclick="Add other website"> Post a Job</button>
				</div>
				<h1>Dashboard<h1>
			</div>
		
			<p></p>
		
			<h2>Available Jobs</h2>
	
			<table>
				<tr>
					<th>Company</th>
					<th>Job Title</th>
					<th>Category</th>
					<th>Date</th>
				</tr>';
				
				foreach($results as $row){
					echo '<tr>';
						echo '<td>' . $row['company_name'] . '</td>';
						echo '<td>' . $row['job_title'] . '</td>';
						echo '<td>' . $row['category'] . '</td>';
						echo '<td>' . $row['date_posted'] . '</td>';
					echo'</tr>';
				}
			echo'</table>';
	// $clist = $conn->query('SELECT * FROM Jobs');
	// $results = $clist->fetchAll(PDO::FETCH_ASSOC);
	
	echo '<h2>Jobs Applied For</h2>
	
			<table>
				<tr>
					<th>Company</th>
					<th>Job Title</th>
					<th>Category</th>
					<th>Date</th>
				</tr>
				<tr>
					<td>gg</td>
					<td>gg</td>
					<td>gg</td>
					<td>gg</td>
				</tr>
				<tr>
					<td>gg</td>
					<td>gg</td>
					<td>gg</td>
					<td>gg</td>
				</tr>
			</table>
		
		</div>';
	
?>
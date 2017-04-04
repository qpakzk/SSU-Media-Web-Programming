<?php
try{
	
$db = new PDO("mysql:dbname=schooldb;host=localhost", "ec2-user","123123");


} 

catch (PDOException $ex){ 
	$nok = true;
?>
	<p>Can't connect to the database (Error details: <?= $ex->getMessage() ?>)</p>
	
<?php	
} 



if(!$nok)
{
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>My Diary</title>
		<meta charset = "utf-8">
		<link rel = stylesheet href = "Mystyle.css" type = "text/css">
	</head>
	<body>
	<?php 
		$dbmaterials = $db->query("SELECT * FROM 2015_Spring_Semester;");
	?>
		<header>My Diary</header>
		<nav>
			<ul>
				<li><a href="Home.php">Home</a></li>
				
				<li><a href="School.php">School Life</a></li>
				<li><a href = "Personal_Details.php">Personal Details</a></li>
			</ul>
		</nav>
		<section>	
				<div id = "2015-1">
					<h2>2015-1 Schedule</h2>
					<div class = "lecture">
						<table width = "420px" border = "3px" bgcolor = "#FFCCFF">
							
							<tr>
								<th bgcolor = "#FF00FF">subject</th>
								<th bgcolor = "#FF00FF">style</th>
								<th bgcolor = "#FF00FF">professor</th>
								<th bgcolor = "#FF00FF">credit</th>
								
							</tr>
							<?php
							foreach($dbmaterials as $stuff){
							?>
							<tr>
								<td><?= $stuff["subject"] ?></td>
								<td><?= $stuff["style"] ?></td>
								<td><?= $stuff["professor"] ?></td>
								<td><?= $stuff["credit"] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<div class = "schedule">
						<img src = "images/2015-1.png">
					</div>
					
				
				</div>
								
				<div id = "2014-1">
				<h2>2014-1 Schedule</h2>
					<div class = "lecture">
						<table width = "420px" border = "3px" bgcolor = "#FFCCFF">
							
							<tr>
								<th bgcolor = "#FF00FF">subject</th>
								<th bgcolor = "#FF00FF">style</th>
								<th bgcolor = "#FF00FF">professor</th>
								<th bgcolor = "#FF00FF">credit</th>
								
							</tr>
							<?php 
							$dbmaterials = $db->query("SELECT * FROM 2014_Spring_Semester;");
							foreach($dbmaterials as $stuff){
							?>
							<tr>
								<td><?= $stuff["subject"] ?></td>
								<td><?= $stuff["style"] ?></td>
								<td><?= $stuff["professor"] ?></td>
								<td><?= $stuff["credit"] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<div class = "schedule">
						<img src = "images/2014-1.png">
					</div>
				
				</div>
			
		</section>
	
			
		<footer></footer>		

<?php } ?>
	</body>
</html>
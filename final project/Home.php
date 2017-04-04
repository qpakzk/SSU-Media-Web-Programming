<?php 
	if(isset($_COOKIE['YEAR']))
	{
		$year1= $_COOKIE['YEAR'];			
	} 
	else {
		setcookie("YEAR",date("Y"));
		$year1=date("Y");
	}
	if(isset($_COOKIE['MONTH'])){
		$month1 = $_COOKIE['MONTH'];	
	}
	else{
		setcookie("MONTH",date("n"));
		$month1 = date("n");
		
	}
	if(isset($_GET['pastMonth'])){
				$month1-=1;
				if($month1 == 0){
					
					$month1 = 12;
					$year1 -= 1;
					setcookie("YEAR",$year1);
				}
				setcookie("MONTH",$month1);
				
	}
	setcookie("YEAR",$year1);
	if(isset($_GET['nextMonth'])){
				$month1+=1;
				if($month1 == 13){
					
					$month1 = 1;
					$year1 += 1;
					setcookie("YEAR",$year1);
				}
				setcookie("MONTH",$month1);
				
	}
	setcookie("YEAR",$year1);
	
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>My Diary</title>
		<meta charset = "utf-8">
		<link rel = stylesheet href = "Mystyle.css" type = "text/css">
	</head>
	<body>
		<header>My Diary</header>
		<nav>
			<ul>
				<li><a href="Home.php">Home</a></li>
				
				<li><a href="School.php">School Life</a></li>
				<li><a href = "Personal_Details.php">Personal Details</a></li>
			</ul>
		</nav>
		<section>
				<?php 
					$days = array("SUN", "MON", "TUE", "WED", "THU", "FRI", "SUN");
					
					$firstDay = date("N", mktime(0, 0, 0, $month1, 1, $year1));
					
					$startDay = $firstDay % 7;
					$lastDate = date("t", mktime(0, 0, 0, $month1, $firstDay, $year1));
					$weekline = (int)(($startDay + $lastDate) / 7) + 1;
					
				?>
			</div>
			<div id ="calendar">
				<form action = "Home.php" method = "get">
					<table width = "420px" border = "3px" bgcolor = "#FFFFCC">
						<tr>
							<td colspan ="7" align = "center" id = "year" bgcolor = "yellow"><?= $year1 ?></td>
						</tr>
						<tr>
							<td colspan = "2" align = "center" class = "month" bgcolor = "yellow"><input type = "submit" name = "pastMonth" value = "◁"></td>
							<td colspan = "3" align = "center" class = "month" bgcolor = "yellow"><?= $month1 ?></td>
							<td colspan = "2" align = "center" class = "month" bgcolor = "yellow"><input type = "submit" name = "nextMonth" value = "▷"></td>
						</tr>
						<tr>
							<?php foreach($days as $day) { ?>
							<th width = "60px" class = "day" bgcolor = "yellow">
							<?php 
								print($day);
							?>
							</th>
							<?php } ?>
						</tr>
						<?php for($j = 0; $j < $weekline; $j++){ ?>
						<tr>
							<?php 
							for($i = 0; $i < 7; $i++){
								$a = 7*$j + $i;
								$d = $a - $startDay + 1; 
							?>
							
							<td class = "date" align = "center">
							
							<?php
								if(($d > 0) && ($d <= $lastDate)){
									print($d);
									
								}
								else{
									print(" ");
								}
								
							?>
							
							</td>
							<?php } ?>
							
						</tr>
						<?php } ?>
						<div id = "dates">
						
						</div>
							
					</table>
				</form>
			</div>
			<div id = "column">
				<div id = "alarm">
				<p>Today is <?php print date("F-j") ?>.</p>
				</div>
				
				<div id = "SNS">
				<h4>SNS</h4>
					<a href = "http://www.facebook.com/" class = "sns"><img src = "images/facebook.png">Facebook</a>
					<a href = "https://twitter.com/" class = "sns"><img src = "images/twitter.png">Twitter</a>
					<a href = "http://instagram.com/" class = "sns"><img src = "images/instagram.png">Instagram</a>					
				</div>
				
				<div id = "site">
				<h4>School Site</h4>
					<a href = "http://www.ssu.ac.kr/" class = "SSU"><img src = "images/Soongsil Univ.png">Soongsil University Main</a>
					<a href = "http://saint.ssu.ac.kr/" class = "SSU"><img src = "images/U-Saint.PNG">U-Saint</a>
					<a href = "http://media.ssu.ac.kr/" class = "SSU"><img src = "images/Media.PNG">Soongsil University Global Media</a>
				</div>
			</div>
		</section>
		
		<footer></footer>		

			
	</body>
</html>
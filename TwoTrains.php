<!--Name: Deepti Rajput
   UIN: 660136229
   Chapter 4-->
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Two Trains</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1 style= "text-align:centre"><b><font color= 'red'>Two Trains</font></b></h1>
<?php

error_reporting(E_ALL);
$DispForm = true;
$SpeedA = "";
$SpeedB = "";
$Dist = "";

$errorCount = 0;

if(isset($_POST["Submit"]))
{
	$SpeedA = $_POST["trainA"];
	$SpeedB = $_POST["trainB"];
	$Dist = $_POST["distance"];
	
	if($SpeedA <= 0)
	{
		echo "The train A's speed should be greater than 0<br />";
		$errorCount++;
	}
	if($SpeedB <= 0)
	{
		echo "The train B's speed should be greater than 0<br />";
		$errorCount++;
	}
	if($Dist <= 0)
	{
		echo "Distance between the trains should be greater than 0<br />";
		$errorCount++;
	}
	
	if($errorCount > 0)
	{
		$DispForm = true;
	}
	else
	{
		$DispForm = false;
	}
  
}

if ($DispForm == true)
{

	?>
	<form name="twoTrains" action="TwoTrains.php" method="post">
	<p><i><b><font color= 'blue'>Speed of Train A: <input type="text" name="trainA" value="<?php echo $SpeedA; ?>" /></font></b></i></p>
	<p><i><b><font color= 'blue'>Speed of Train B: <input type="text" name="trainB" value="<?php echo $SpeedB; ?>" /></font></b></i></p>
	<p><i><b><font color= 'blue'>Distance between the trains: <input type="text" name="distance" value="<?php echo $Dist; ?>" /></font></b></i></p>
	<p><input type="submit" name="Submit" value="Submit" /></p>
	
	</form>
<?php
	

}
else
{
	$DistA = (($SpeedA / $SpeedB) * $Dist) / (1 + ($SpeedA / $SpeedB));
	$DistB = $Dist - $DistA;
	$TimeA = $DistA / $SpeedA;
	$TimeB = $DistB / $SpeedB;
	
	
	echo "<font color='blue'><i>Train A travelled " . $DistA . " for a total time of " . $TimeA . ".</i></font><br />";
	echo "<font color='blue'><i>Train B travelled " . $DistB . " for a total time of " . $TimeB . ".</i></font><br />";
	echo "<font color='blue'><i>The sum of the two distances is ".($DistA+$DistB)."miles </i></font><br />";
	
	

}

?>
 </body>
 </html>
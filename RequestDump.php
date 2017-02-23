<!--Name: Deepti Rajput
   UIN: 660136229
   Chapter 4-->
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>RequestDump</title>
<meta http-equiv="Content-Type"
    content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1 style = "text-align: left"><i> Request Dump </i></h1>
<table border='3'>
<tr><th>Field</th><th>Value</th></tr>
</table>
<form name="example" action="RequestDump.php" methods="post">
<p> Field 1: <input type="text" name="Field1" /> </p>
<p> Field 2: <input type="text" name="Field2" /> </p>
<p> Field 3: <input type="text" name="Field3" /> </p>
<input type="submit" name="submit" value="Test Include" /><br /> 
</form> 
<?php 
if(isset($_REQUEST['submit'])) { 
    include('inc_requestDump.php'); 
} 
?>
</body>
</html>
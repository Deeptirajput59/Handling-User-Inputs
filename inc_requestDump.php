<!--Name: Deepti Rajput
   UIN: 660136229
   Chapter 4-->
   
<!DOCTYPE html >
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Request Dump</title>
  </head>
  <body>
<?php  
echo "<p>" .count($_REQUEST)." Fields in the \$_REQUEST array.</p>\n";
echo "<table border='1'>\n"; 
echo "<tr><th>Field</th><th>Value</th></tr>\n";
foreach($_REQUEST as $field => $value) 
{ 
    $field=stripslashes($field);
	$field=htmlentities($field);
    $value=stripslashes($value);
	$value=htmlentities($value);
	echo"<tr><td>$field</td><td>$value</td></tr>\n";
} 
echo "</table>\n"; 
?>
</body>
</html>
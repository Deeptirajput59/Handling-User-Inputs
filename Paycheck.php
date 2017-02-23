<!--Name: Deepti Rajput
   UIN: 660136229
   Chapter 4-->
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>process paycheck</title>
<meta http-equiv="Content-Type"
    content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="php_styles.css" type="text/css" />
</head>
<body>
<h2 style = "text-align:center"><h2>process paycheck Data</h2>
<?php
$errors = 0;
if(is_numeric($_POST['hours']))
{
    if(($_POST['hours']) >0)
    {
        $hours = round($_POST['hours'],2);
        if($hours>40)
        {
            $regular_hours = 40;
            $overtime_hours = $hours-40;
        }
        else{
            $regular_hours = $hours;
            $overtime_hours = 0;
            
        }
        }
        else{
            ++$errors;
            echo "<p>Error: 'Hours Worked' must be greater than 0</p>\n";
        }
    }
    else{
        ++$errors;
        echo "<p>Error: 'Hours Worked' must be a numeric value</p>\n";
        
    }
    if(is_numeric($_POST['wage']))
    {
        if(($_POST['wage']) > 0)
        {
            $wage = round($_POST['wage'],2);
            
        }
        else{
            ++$errors;
            echo "<p>Error: 'Hourly Wage' must be greater than 0</p>\n";
            
    }
    }
    else{
        ++$erros;
        echo "<p>Error: 'Hourly Wage' must be a numeric value</p>\n";
    }
    if($errors==0){
        echo "<p><i><b><font color='red'>$regular_hours hours @ \$$wage/hr = \$" . ($regular_hours *$wage). "</font></b></i></p><br />\n";
        echo "<p><i><b><font color='red'>$overtime_hours hours @ \$". ($overtime_hours*$wage*1.5) . "</font></b></i></p><br />\n";
        echo "<i><b><font color='red'>Total for $hours hours is \$" . (($regular_hours*$wage)+($overtime_hours*$wage*1.5). "</font></b></i></p></p>\n");
    }
?>
<p><A href= "Paycheck.html"> Process Paycheck Payment</a></p>
</body>
</html>
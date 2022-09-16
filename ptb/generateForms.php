<!DOCTYPE html>
<head>
<title>Forms Generator</title>
</head>
<body>
<h2>Selected Project</h2><br/>
<?php 
print_r ($_REQUEST);

include "../commons/dbconnect.php";
include "../commons/functions.php";


$sql = "Select * from codelists where ctype = 'QType' and ctSerial > 0 order by ctSerial";
$res = $conn->query($sql);
if ($res && $res->num_rows > 0)
{
   while ($row = $res->fetch_assoc())
   {
      echo "<p> " . $row['pname'] . "</p>". PHP_EOL;
      
   }
}

?>
</body>
</html>

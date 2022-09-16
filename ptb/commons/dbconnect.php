<?php
//dbconnect.php
//Use this file from include directory to ensure correct access to database.
//During maintenance and server down time, 
$t = function_exists("mysqli_connect");
if ($t == 0)
{
   echo "mySqli Not installed<br/>";
   phpinfo();
   exit;
}
else
{
   $servername = "localhost";
   $username = "root";
   $password = "admin123";
   $dbname="QueNet";
   try
   {
      $conn = new mysqli($servername, $username, $password,$dbname);
      if ($conn->connect_error) 
      {
         echo "<BR>Could not connect to db. Check db<BR>";
         exit;
      }
   }
   catch (Exception $e)
   {
      echo "Server reported <br/> " . $e->getMessage();
   }
}
?>



<?php
function getRequest($param, $defVal="")
{
   if (isset($_REQUEST[$param]))
      $v = $_REQUEST[$param];
   else
      $v = $defVal;
   return $v;
}

function dbDateToStr($dbdate, $format="d-m-Y")
{
   if ($dbdate == "0000-00-00")
      return "-";
   else if ($dbdate == NULL)
      return "NUL";
   else
      return date($format, strtotime($dbdate));
}   


function dmY2Ymd($date)
{
   //Input date -> 05-12-2015
   date_default_timezone_set('Asia/Kolkata');
   $timestamp = strtotime($date);
   $date =  date('Y-m-d',$timestamp); //2015-12-05
   return $date; 
}

function dmYt2Ymdt($date)
{
   //Input date -> 05-12-2015 10:00:00
   date_default_timezone_set('Asia/Kolkata');
   $timestamp = strtotime($date);
   $date =  date('Y-m-d H:i:s',$timestamp); //2015-12-05 10:00:00
   return $date;
}

?>

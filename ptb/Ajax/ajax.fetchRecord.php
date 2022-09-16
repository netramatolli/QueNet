<?php

include "../commons/functions.php";
include "../commons/dbconnect.php";

$cmd = strtolower(getRequest("cmd", ""));
$filter = getRequest("filter", "");


if ($cmd == "projforms")
{
   echo "OK;Testing";
}

?>

<!DOCTYPE html>
<HTML>
<HEAD>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css" >
<TITLE>FORMS GENERATOR</TITLE>
<script src="functions.js"></script>
<?php
include "commons/dbconnect.php" ;
include "commons/functions.php";
?>
</HEAD>
<BODY>

<?php
function getselStr($sql, $selName)
{
   global $conn;
   

   $res = $conn->query($sql);
   
   
   if ($res && $res->num_rows > 0)
   {     
       $s = "<select style=\"flex:8 7 0;align-item:center;".
            "border:1px solid black;margin:5px;border-radius:5px;\"".
            " id='" . $selName . "' name='" . $selName . "'>";
       while ($row = $res->fetch_assoc())
       {
          $s .= "<option value='". $row['valCol']."'>".$row['dispCol']."</option>"; 
       }
       $s .= "</select>";
   }
   else
      $s = "No Project to Generate";
   return $s;
}

// REQUEST PREPROCESSING 
$action = strtolower(getRequest("action", ""));
if ($action == "generate")
{
   $project = getRequest("");
   header("Location:generator/generateForms.php?");
   exit;
}
?>
<h2>Forms Generator</h2>


<form method=POST action="index.php">
<div style="font-family:Times;font-size:12pt;
     margin:10px;width:85%;border:1px solid blue;
     display:flex;flex-flow:column;justify-content:space-between;align-items:stretch;" 
     name=container id=container > 
     <div id=cp style="align-self:center;">
        <div 
           style="font-size:12pts;width:85%;display:flex;flex-flow:row wrap;
                 align-items:flex-start;margin:10px;background-color:lavender;" >
           <div style="flex:1 1 0;border:1px solid black;margin:5px;">1.</div>
           <div style="flex:3 4 0;border:1px solid black;margin:5px;"><b>Select project</b></div>
           <?php //get a div with a select box
             $sql = "select short_name as dispCol, proj_code as valCol " .
                    " from frm_projects where status = 'GENERATE' order by proj_code" ;
             echo getSelStr($sql, "projList");
           ?>
        </div>  <!-- row (with select ) -->
     </div>
     <div id=btns style="align-self:center;">
        <div style="display:flex;flex-flow:row nowrap;justify-content:center;";>
           <div style="flex:4 4 0;"></div>
           <div style="flex:4 4 0;">
              <input type=submit id=action name=action value="Generate"  /> 
              <input type=submit id=action name=action value="Run" />
           </div>
           <div style="flex:4 4 0;"></div>
        </div>
     </div> 
</div> <!--container -->
</form> 
<script>
function ajax(cmd, filter)
{
   

}
function ajax_callback(cmd, filter, resp)
{
   alert(resp);
}
</script>
</BODY>
</HTML>

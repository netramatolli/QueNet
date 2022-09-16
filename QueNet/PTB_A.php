<!doctype HTML>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<H1>PTB Data Entry Form </H1>
<script>
function setVisibility(elem, v)
{
   let e = document.getElementById(elem);
   e.style.visibility = v;
   
}
</script>
</head>
<body>
<?php
include "./commons/functions.php";

//print_r($_REQUEST);

   $action = getRequest("action", "");
   $curPage = getRequest("curPage", "A1");

   if ($action == "Next")
   {
      if ($curPage == "A1")
         $curPage = "A2"; 
   }
   if ($action == "Prev")
   {
      if ($curPage == "A2")
         $curPage = "A1";
   }

   $A1Q1 = getRequest('A1Q1', "");
   $A1Q2A = getRequest('A1Q2A', "");
   $A1Q2B = getRequest('A1Q2B', "");
   $A1Q3 = getRequest('A1Q3', "");
   $A1Q4 = getRequest('A1Q4', "");
   $A1Q5A = getRequest('A1Q5A', "No");
   $A1Q5B = getRequest('A1Q5B', "Yes");
   $A1Q5C = getRequest('A1Q5C', "No");
   $A1Q5D = getRequest('A1Q5D', "");   
   $A1Q6A = getRequest('A1Q6A', "");
   $A1Q6B = getRequest('A1Q6B', "");
   $A1Q7 = getRequest('A1Q7', "");
   $A1Q8 = getRequest('A1Q7', "");
   
   
   
function getQuestion($pq, $inp="")
{
  $q = "undef";
  $a = "undef";
  
  if ($pq == "A1Q1")
  {
      $q = "Participant Id";
      $a = "<input type=text id=" . $pq . " name=" . $pq . " value='" . $inp . "'>";
  }
  if ($pq == "A1Q2A")
  {
      $q = "Name";
      $a = "<input type=text style='width:300px;' id=" . $pq . " name=" . $pq . " value='" . $inp . "'>";
  }
  if ($pq == "A1Q2B")
  {
      $q = "Address";
      $a = "<input type=textArea style='width:300px;height:60px;'  id=" . $pq . " name=" . $pq . " value='" . $inp . "' >";
  }
  if ($pq == "A1Q3")
  {
      $q = "Gender";
      $a = "MALE <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Male' ";
      if ($inp == "Male")
         $a .= " checked ";
      $a .= ">";
      $a .= "FEMALE <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Female' ";
      if ($inp == "Female")
         $a .= " checked ";
      $a .= " >";
  }
  if ($pq == "A1Q4")
  {
      $q = "Age";
      $a = "<input type=text style='width:50px;' id=" . $pq . " name=" . $pq . " value='" . $inp . "' > (in years)";
  }
  if ($pq == "A1Q5A")
  {
      $q = "Type of PTB";
      $a = "Smear Positive:  ";
      $a .= "<input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes'  ";
      if ($inp == "Yes")
         $a .= " checked ";
      $a .= ">";
      $a .= " Negative<input type=radio id=" . $pq . "_2 name=" . $pq . " value='No' ";
      if ($inp == "No")
         $a .= " checked ";
      $a .= ">";
  }
  if ($pq == "A1Q5B")
  {
      $q = "";
      $a = "CBNAAT: <ul Not Available >";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' " ;
      if ($inp == "Yes" )
         $a .= " checked ";
      $a .= "> Detected </li>";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' " ;
      if ($inp == "No" )
         $a .= " checked ";
      $a .= "> Not Detected </li>";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='NA' " ;
      if ($inp == "NA" )
         $a .= " checked ";
      $a .= ">Not Available </li>";
      $a .= "</ul>";
  }
  if ($pq == "A1Q5C")
  {
      $q = "";
      $a = "Drug Resistance: <ul style='list-style-type:none;'>";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' onclick='setVisibility(\"A1Q5D\", \"visible\");' " ;
      if ($inp == "Yes" )
         $a .= " checked ";
      $a .= "> Detected </li>";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' onclick='setVisibility(\"A1Q5D\", \"hidden\");'" ;
      if ($inp == "No" )
         $a .= " checked ";
      $a .= "> Not Detected </li>";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='NA' " ;
      if ($inp == "NA" )
         $a .= " checked ";
      $a .= "> Not Available  </li>";
      $a .= "</ul>";
   }
   if ($pq == "A1Q5D")
   {
      $q = "";
      $a = "Name of Resistant Drug:";
      $a .= "<input type=text name=" . $pq . " id=" . $pq . " value=" . $pq . " >";
   }
   if ($pq == "A1Q6A")
   {
      $q = "Category of Patient";
      $a = "DSTB <ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='DSTB_New' > New </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='DSTB_Retreat' > Retreatment </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='DSTB_Recurrent' > Recurrent </li>";
      $a .= "</ul>";
   }
   if ($pq == "A1Q6B")
   {
      $q = "";
      $a = "DRTB <ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='DRTB_New' > New </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='DRTB_Retreat' > Retreatment </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='DRTB_Recurrent' > Recurrent </li>";
      $a .= "</ul>";
   }
   
   if ($pq == "A1Q7")
   {
      $q = "Marital Status";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Single' > Single </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Married' > Married </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Divorced' > Divorced/Separated </li>";
      $a .= "<li><input type=radio id=" . $pq . "_3 name=". $pq . " value='Widowed'> Widowed </li>";
      $a .= "</ul>";
   }
   
   return "<tr><th>". substr($pq, 3, 10) . "</th><th>" . $q ."</th><td>" . $a . "</td></tr>".PHP_EOL;
}
?>
<form action=PTB_A.php method=post>
<div style="width:600px;border:1px solid black;padding:5px;background-color:aliceblue;" >
<p><center>PART - A</center></p>

<table rules=all style="background-color:lightyellow;color:brown;border:1px solid green;margin:5px;" >
<?php 
   if ($curPage == "" || $curPage == "A1")
   {
      echo getQuestion ("A1Q1", $A1Q1); 
      echo getQuestion ("A1Q2A", $A1Q2A ); 
      echo getQuestion ("A1Q2B", $A1Q2B );
      echo getQuestion ("A1Q3", $A1Q3 ); 
      echo getQuestion ("A1Q4", $A1Q4 ); 
      echo getQuestion ("A1Q5A", $A1Q5A); 
      echo getQuestion ("A1Q5B", $A1Q5B); 
      echo getQuestion ("A1Q5C", $A1Q5C);
      echo getQuestion ("A1Q5D", $A1Q5D);
      echo getQuestion ("A1Q6A", $A1Q6A);
      echo getQuestion ("A1Q6B", $A1Q6B);
      echo getQuestion ("A1Q7", $A1Q7);
      echo getQuestion ("A1Q8");
      echo getQuestion ("A1Q9");

      $curPage = "A1";
   }
   else if ($curPage = "A2")
   {
      echo getQuestion ("A2Q10"); 
      echo getQuestion ("A1Q11"); 
      echo getQuestion ("A1Q12");
      echo getQuestion ("A1Q13"); 
      echo getQuestion ("A1Q14"); 
      echo getQuestion ("A1Q15"); 
      echo getQuestion ("A1Q16"); 
      echo getQuestion ("A1Q17");
      echo getQuestion ("A1Q18");
      echo getQuestion ("A1Q19");
      $curPage = "A2";
   }   
?>
</table>

<input type=submit name=action value='Next'>
<input type=submit name=action value='Prev'>
<input type=submit name=action value='Refresh'>

<?php
   echo "<input type=hidden name=curPage value=" . $curPage ." >";
?>
</div>
</body>

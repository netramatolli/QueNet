<?php 
session_start();
?>
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
include "commons/functions.php";

//print_r($_REQUEST);

   $action = getRequest("action", "");
   $curPage = getRequest("curPage", "A1");

   if ($action == "Next")
   {
      if ($curPage == "A1")
         $curPage = "A2"; 
      else if($curPage == "A2" )
         $curPage = "A3";
      else if($curPage == "A3" )
         $curPage = "A4";
      else if($curPage == "A4" )
         $curPage = "A5";
        
   }
   if ($action == "Prev")
   {
      if ($curPage == "A2")
         $curPage = "A1";
      else if($curPage == "A3" )
         $curPage = "A2";

      else if($curPage == "A4" )
         $curPage = "A3";

         else if($curPage == "A5" )
         $curPage = "A4";
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
   $A1Q8 = getRequest('A1Q8', "");
   $A1Q9 = getRequest('A1Q9', "");
   $A2Q10=getRequest('A2Q10',"");
   $A2Q11=getRequest('A2Q11',"");
   $A2Q12=getRequest('A2Q12',"");
   $A2Q13=getRequest('A2Q13',"");
   $A2Q14=getRequest('A2Q14',"");

   $A2Q15A=getRequest('A2Q15A',"");
   $A2Q15B=getRequest('A2Q15B',"");

   $A2Q16=getRequest('A2Q16',"");
   $A2Q17=getRequest('A2Q17',"");

   $A2Q18A=getRequest('A2Q18A',"");
   $A2Q18B=getRequest('A2Q18B',"");
   $A2Q18C=getRequest('A2Q18C',"");

   $A2Q19A=getRequest('A2Q19A',"");
   $A2Q19B=getRequest('A2Q19B',"");
   $A2Q19C=getRequest('A2Q19C',"");

   $A3Q20A=getRequest('A3Q20A',"");
   $A3Q20B=getRequest('A3Q20B',"");
   $A3Q20C=getRequest('A3Q20C',"");

   $A3Q21=getRequest('A3Q21',"");
   $A3Q22=getRequest('A3Q22',"");
   $A3Q23=getRequest('A3Q23',"");
   $A3Q24=getRequest('A3Q24',"");
   $A3Q25=getRequest('A3Q25',"");
   $A3Q26=getRequest('A3Q26',"");
   $A3Q27=getRequest('A3Q27',"");
   $A3Q28=getRequest('A3Q28',"");
   $A3Q29=getRequest('A3Q29',"");
   $A3Q30=getRequest('A3Q30',"");
   $A3Q31A=getRequest('A3Q31A',"");
   $A3Q31B=getRequest('A3Q31B',"");
   $A3Q31C=getRequest('A3Q31C',"");



   $A4Q32=getRequest('A4Q32',"");
   $A4Q33=getRequest('A4Q33',"");
   $A4Q34=getRequest('A4Q34',"");
   $A4Q35=getRequest('A4Q35',"");
   $A4Q36=getRequest('A4Q36',"");
   $A4Q37=getRequest('A4Q37',"");
   $A4Q38=getRequest('A4Q38',"");
   $A4Q38a=getRequest('A4Q38a',"");
   $A4Q39=getRequest('A4Q39',"");
   $A4Q39a=getRequest('A4Q39a',"");
   $A4Q40=getRequest('A4Q40',"");
   $A4Q41=getRequest('A4Q41',"");
   $A4Q42=getRequest('A4Q42',"");
   $A4Q43=getRequest('A4Q43',"");


   $A5Q44=getRequest('A5Q44',"");
   $A5Q45=getRequest('A5Q45',"");
   $A5Q46=getRequest('A5Q46',"");
   $A5Q47=getRequest('A5Q47',"");
   $A5Q48=getRequest('A5Q48',"");
   $A5Q48A=getRequest('A5Q48A',"");
   $A5Q49=getRequest('A5Q49',"");
   $A5Q49A=getRequest('A5Q49A',"");
   $A5Q50=getRequest('A5Q50',"");
   $A5Q51=getRequest('A5Q51',"");
   $A5Q52=getRequest('A5Q52',"");
   $A5Q53=getRequest('A5Q53',"");
   $A5Q54=getRequest('A5Q54',"");
   $A5Q55=getRequest('A5Q55',"");




   
   

   
   
   
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
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='DSTB_Recurrent' > Recurrent </li>";
      $a .= "</ul>";
   }
   if ($pq == "A1Q6B")
   {
      $q = "";
      $a = "DRTB <ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='DRTB_New' > New </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='DRTB_Retreat' > Retreatment </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='DRTB_Recurrent' > Recurrent </li>";
      $a .= "</ul>";
   }
   
   if ($pq == "A1Q7")
   {
      $q = "Marital Status";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Single' > Single </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Married' > Married </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Divorced' > Divorced/Separated </li>";
      $a .= "<li><input type=radio id=" . $pq . "_4 name=". $pq . " value='Widowed'> Widowed </li>";
      $a .= "</ul>";
   }

   if ($pq == "A1Q8")
   {
      $q = "Religion";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Hindu' > Hindu </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Muslim' > Muslim </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Christian' > Christian </li>";
      $a .= "<li><input type=radio id=" . $pq . "_4 name=". $pq . " value='Others'> Others </li>";
      $a .= "</ul>";
   }

   if ($pq == "A1Q9")
   {
      $q = "Type Of Family";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Joint' > Joint </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Nuclear' > Nuclear </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Single Parent' > Single Parent </li>";
      $a .= "<li><input type=radio id=" . $pq . "_4 name=". $pq . " value='Other'> Others </li>";
      $a .= "</ul>";
   }

   if ($pq == "A2Q10")
   {
      $q = "Occupation";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Gvtemp' >Government employee </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Nongvtemp' > Non government employee </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='selfemp' > Self-employement(Business) </li>";
      $a .= "<li><input type=radio id=" . $pq . "_4 name=". $pq . " value='Farmer'> Farmer </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Labourer' > Labourer </li>";
      $a .= "<li><input type=radio id=" . $pq . "_5 name=". $pq . " value='Student'> Student </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Housewife' > Housewife </li>";
      $a .= "<li><input type=radio id=" . $pq . "_6 name=". $pq . " value='Unemp'> Unemployed </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_7 name=" . $pq . " value='Retired' > Retired </li>";
      $a .= "</ul>";
   }

   if ($pq == "A2Q11")
   {
      $q = "Education";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Noedu' >No formal eduction </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Primaryschool' > Primary school(Grade 1-5) </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Lowersecedu' > Lower secondary education(Grade 6-8) </li>";
      $a .= "<li><input type=radio id=" . $pq . "_4 name=". $pq . " value='Uppersecedu'> Upper secondary education(8-12) </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_5 name=" . $pq . " value='Collegiate' > Collegiate </li>";
      $a .= "<li><input type=radio id=" . $pq . "_6 name=". $pq . " value='NA'> NA(Children under 6 years) </li>";
      $a .= "</ul>";
   }

   if ($pq == "A2Q12")
  {
      $q = "Total monthly family income";
      $a = "<input type=text id=" . $pq . " name=" . $pq . " value='" . $inp . "'>";
  }

  if ($pq == "A2Q13")
   {
      $q =  "No of memebers living in family";  
      $a = "<ul  style='list-style-type:none;' >"; 
      $a .= "<li>Adult <input type=number id=" . $pq . "_1 name=" . $pq . " value='' ></li>";
      $a .= "<li>Childern <input type=number id=" . $pq . "_2 name=". $pq . " value=''></li>";
      $a .= "</ul>";
   }

   if ($pq == "A2Q14")
   {
      $q =  "Socio-economic status(As per B.G Prasad socioeconomic classification)";  
      $a = "<ul  style='list-style-type:none;' >"; 
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Upper' > Upper class</li>";
      $a .= "<li><input type=radio id=" . $pq . "_2 name=". $pq . " value='Uppermid'> Upper middle class </li>";
      $a .= "<li><input type=radio id=" . $pq . "_3 name=". $pq . " value='Middle'> Middle class</li>";
      $a .= "<li><input type=radio id=" . $pq . "_4 name=". $pq . " value='Lowermid'> Lower middle class </li>";
      $a .= "<li><input type=radio id=" . $pq . "_5 name=". $pq . " value='Lower'> Lower </li>";
      $a .= "</ul>";
   }

   if ($pq == "A2Q15A")
   {
       $q = "Domicile";

       $a = "Urban:  ";
       $a .= "Non slum<input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes'  ";
       if ($inp == "Yes")
          $a .= " checked ";
       $a .= ">";
       $a .= " slum<input type=radio id=" . $pq . "_2 name=" . $pq . " value='No' ";
       if ($inp == "No")
          $a .= " checked ";
       $a .= ">";
   }


   if ($pq == "A2Q15B")
   {
      $q =  "";  
      $a = "<ul  style='list-style-type:none;' >"; 
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Rural' > Rural</li>";
      $a .= "<li><input type=radio id=" . $pq . "_2 name=". $pq . " value='Tribal'> Tribal </li>";
      $a .= "</ul>";
   }

   if ($pq == "A2Q16")
  {
      $q = "Height(in meters)";
      $a = "<input type=number id=" . $pq . " name=" . $pq . " value='" . $inp . "'>";
  }

  if ($pq == "A2Q17")
  {
      $q = "weight(in Kgs) ";
      $a = "<input type=number id=" . $pq . " name=" . $pq . " value='" . $inp . "'>";
  }

  if ($pq == "A2Q18A")
  {
     $q = "Use of Smokeless Tobacco";
   
     $a = "<input type=radio id=" . $pq . " name=" . $pq . " value='Nonuser' > Non user";
   
  }
  if ($pq == "A2Q18B")
  {
     $q = "";
     $a = "Current User <ul  style='list-style-type:none;' >";
     $a .= "<li>Type <input type=text id=" . $pq . "_1 name=" . $pq . " value='' >  </li>";
     $a .= "<li>Quantity per day  <input type=text id=" . $pq . "_2 name=" . $pq . " value='' ></li>";
     $a .= "<li>Duration in years  <input type=text id=" . $pq . "_3 name=" . $pq . " value='' ></li>";
     $a .= "<li>Duration in months  <input type=text id=" . $pq . "_4 name=" . $pq . " value='' ></li>";
     $a .= "</ul>";
  }

  if ($pq == "A2Q18C")
  {
     $q = "";
     $a = "Past User<input type=radio id=" . $pq . "_1name=" . $pq . " value='Nonuser'> 
     $a .=<ul  style='list-style-type:none;' >";
     $a .= "<li>Quit using since:</li>";
     $a .= "<li>Years  <input type=text id=" . $pq . "_2 name=" . $pq . " value='' ></li>";
     $a .= "<li>Months  <input type=text id=" . $pq . "_3 name=" . $pq . " value='' ></li>";
     $a .= "</ul>";
  }

  if ($pq == "A2Q19A")
  {
     $q = "Smoking status";
   
     $a = "<input type=radio id=" . $pq . " name=" . $pq . " value='neversmoker' > Never smoker";
   
  }
  if ($pq == "A2Q19B")
  {
     $q = "";
     $a = "Current Smoker <ul  style='list-style-type:none;' >";
     $a .= "<li>Type <input type=text id=" . $pq . "_1 name=" . $pq . " value='' >  </li>";
     $a .= "<li>Quantity per day  <input type=text id=" . $pq . "_2 name=" . $pq . " value='' ></li>";
     $a .= "<li>Duration in years  <input type=text id=" . $pq . "_3 name=" . $pq . " value='' ></li>";
     $a .= "<li>Duration in months  <input type=text id=" . $pq . "_4 name=" . $pq . " value='' ></li>";
     $a .= "</ul>";
  }

  if ($pq == "A2Q19C")
  {
     $q = "";
     $a = "Ex-smoker<ul  style='list-style-type:none;' >";
     $a .= "<li>Quit since:</li>";
     $a .= "<li>Years  <input type=text id=" . $pq . "_1 name=" . $pq . " value='' ></li>";
     $a .= "<li>Months  <input type=text id=" . $pq . "_2 name=" . $pq . " value='' ></li>";
     $a .= "</ul>";
  }



  if ($pq == "A3Q20A")
  {
     $q = "Alcohol Use";
   
     $a = "<input type=radio id=" . $pq . " name=" . $pq . " value='neversmoker' > Never user";
   
  }
  if ($pq == "A3Q20B")
  {
     $q = "";
     $a = "currentr user <ul  style='list-style-type:none;' >";
     $a .= "<li>Type <input type=text id=" . $pq . "_1 name=" . $pq . " value='' >  </li>";
     $a .= "<li>Quantity per day  <input type=text id=" . $pq . "_2 name=" . $pq . " value='' ></li>";
     $a .= "<li>Duration in years  <input type=text id=" . $pq . "_3 name=" . $pq . " value='' ></li>";
     $a .= "<li>Duration in months  <input type=text id=" . $pq . "_4 name=" . $pq . " value='' ></li>";
     $a .= "</ul>";
  }

  if ($pq == "A3Q20C")
  {
     $q = "";
     $a = "Ex-user<ul  style='list-style-type:none;' >";
     $a .= "<li>Quit since:</li>";
     $a .= "<li>Years  <input type=text id=" . $pq . "_1 name=" . $pq . " value='' ></li>";
     $a .= "<li>Months  <input type=text id=" . $pq . "_2 name=" . $pq . " value='' ></li>";
     $a .= "</ul>";
  }

  if ($pq == "A3Q21")
   {
      $q = "HIV/AIDS";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='negative' > Negative </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='positive' > Positive </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='indeterminate' > Indeterminate </li>";
      $a .= "<li><input type=radio id=" . $pq . "_4 name=". $pq . " value='notdocumented'> Notdocumented </li>";
      $a .= "</ul>";
   }

   if ($pq == "A3Q22")
   {
      $q = "Antiretroviral therapy status";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='notreprted' > Notreported </li>";
      $a .= "</ul>";
   }

   if ($pq == "A3Q23")
   {
      $q = "Diabetes mellitus";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='unknown' >Unknown </li>";
      $a .= "</ul>";
   }

   if ($pq == "A3Q24")
   {
      $q = "Hypertension";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='unknown' > Unknown </li>";
      $a .= "</ul>";
   }


   
   if ($pq == "A3Q25")
   {
      $q = "Asthama or other respiratory tract infections";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='unknown' > Unknown </li>";
      $a .= "</ul>";
   }


   if ($pq == "A3Q26")
  {
      $q = "Other co-morbidities";
      $a = "Drug Resistance: <ul style='list-style-type:none;'>";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      //ADD specify text

      $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='No' onclick='setVisibility(\"A2Q26\", \"hidden\");'" ;
      if ($inp == "No" )
         $a .= " checked ";
      $a .= "> Unknown</li>";
      $a .= "</ul>";
   }


    
   if ($pq == "A3Q27")
   {
      $q = "Housing condtition";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='pakka' > Paka </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='kaccha' > Kaccha </li>";
      $a .= "</ul>";
   }


   if ($pq == "A3Q28")
   {
      $q = "Separate kitchen";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "</ul>";
   }


   
   if ($pq == "A3Q29")
   {
      $q = "Cooking Fuel";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='lpg' > LPG </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='nonlpg' > Non LPG </li>";
      $a .= "<li>Specify  <input type=text id=" . $pq . "_3 name=" . $pq . " value='' ></li>";
      $a .= "</ul>";
   }


   if ($pq == "A3Q30")
   {
      $q = "Dietary habits";
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='Lacto-vegetarian'> Lacto-vegetarian  </li>";
      $a .= "<li><input type=radio id=" . $pq . "_2 name=" . $pq . " value='Lacto-ovo vegetarian'> Lacto-ovo vegetarian</li>";
      $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='Pescatarian'> Pescatarian</li>";
      $a .= "<li><input type=radio id=" . $pq . "_4 name=" . $pq . " value='vegan'> vegan</li>";
      $a .= "<li><input type=radio id=" . $pq . "_5 name=" . $pq . " value='Non vegetarian' > Non vegetarian</li>";
      $a .= "</ul>";
   }

   if ($pq == "A3Q31A")
   {
      $q = "Physical activity level";
      $a = "Work<ul  style='list-style-type:none;' >";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value=''>Sedentary  </li>";
      $a .= "<li><input type=radio id=" . $pq . "_2 name=" . $pq . " value='' >Moderately Active</li>";
      $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='' >Vigorous Active</li>";
     
      $a .= "</ul>";
   }
   if ($pq == "A3Q31B")
   {
      $q = "(Adults aged 18-64 years should do at least 150 minutes of moderate-intensity physicl activitythrought out the week,";
      $a = "Travel<ul  style='list-style-type:none;' >";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value=''>Sedentary  </li>";
      $a .= "<li><input type=radio id=" . $pq . "_2 name=" . $pq . " value='' >Moderately Active</li>";
      $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='' >Vigorous Active</li>";
      $a .= "</ul>";
   }

   if ($pq == "A3Q31C")
   {
      $q = "or do atleast 75 minutes of vigorous-intensity physical activity throught the week, or an equivalent combination of moderate and vigorous intensity activity.)";
      $a = "Leisure time<ul  style='list-style-type:none;' >";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value=''>Sedentary  </li>";
      $a .= "<li><input type=radio id=" . $pq . "_2 name=" . $pq . " value='' >Moderately Active</li>";
      $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='' >Vigorous Active</li>";
      $a .= "</ul>";
   }


    
   if ($pq == "A4Q32")
   {
      $q = "Over crowding"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "</ul>";
   }


   if ($pq == "A4Q33")
   {
      $q = "Lighting: for every 10 feet of floor area you need one foot of natural light area"; 
      $a = "At Home<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='adequate' > Adequate </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='inadequate' > inadequate </li>";
      $a .= "</ul>";
   }

   if ($pq == "A4Q34")
   {
      $q = "Ventilaion: natural ventilation must equal 5% of the floor area."; 
      $a = "At Home<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='adequate' > Adequate </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='inadequate' > inadequate </li>";
      $a .= "</ul>";
   }

    
   if ($pq == "A4Q35")
   {
      $q = "Separate room for patient"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "</ul>";
   }

    
   if ($pq == "A4Q36")
   {
      $q = "Previous history of TB Treatement"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no'> No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes'> Yes </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Default'> Default </li>";
      $a .= "</ul>";
   }
    
   if ($pq == "A4Q37")
   {
      $q = "BCG Vaccination Status(presence of BCG scar on the left or right deltoid region of arm)"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Vaccinated' > Vaccinated </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Notvaccinated' > Not Vaccinated </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='unknown' > Unknown </li>";
      $a .= "</ul>";
   }
    
   if ($pq == "A4Q38")
   {
      $q = "Migration(Work related travel in last one year)"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "<li>Reasons for migration  <input type=text id=" . $pq . "_3 name=" . $pq . " value='' >  </li>";
      $a .= "</ul>";
   }

   if ($pq == "A4Q38a")
   {
      $q = "If migratinf hoe frequently you do Migrate(Work related travel in last one year)"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='often' > often </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='occasional' > occasional </li>";
     
      $a .= "</ul>";
   }


   if ($pq == "A4Q39")
   {
      $q = "Migration(Work related travel in last one year)"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='dntknw' > Dont Known </li>";
      $a .= "</ul>";
   }
   
   if ($pq == "A4Q39a")
   {
      $q = "If previous contact with an active TB patient is yes, is the member of?"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > Family </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Work place </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='reasons' > Recreation site  </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_4 name=" . $pq . " value='others' > Others  </li>";
      //ADD spcify textbox
      $a .= "</ul>";
   }

   if ($pq == "A4Q40")
   {
      $q = "Waiting time at the healt facility"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=text id=" . $pq . "_1 name=" . $pq . " value='' ><li>";
      $a .= "</ul>";
   }


   if ($pq == "A4Q41")
   {
      $q = "Out of package expenditure for TB treatment"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=text id=" . $pq . "_1 name=" . $pq . " value='' ><li>";
      $a .= "</ul>";
   }


   if ($pq == "A4Q42")
   {
      $q = "Reaons for out of pocket expenditure for health"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='visit' > Travel to visit health facility </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='food' > Food </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='stay' > Stay  </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_4 name=" . $pq . " value='others' > Diagnostics  </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_5 name=" . $pq . " value='treatement' > Treatment </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_6 name=" . $pq . " value='stay' > Hospital charges  </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_7 name=" . $pq . " value='others' > others(Specify)<input type=text/></li>";
      //ADD spcify textbox
      $a .= "</ul>";
   }

   if ($pq == "A4Q43")
   {
      $q = "Health care seeking behviour"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='public' > Public </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='private' > Private </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='ngo' > NGO  </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_4 name=" . $pq . " value='traditional healer'>Traditional healer  </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_5 name=" . $pq . " value='pharmacy' > Pharmacy </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_6 name=" . $pq . " value='self-medic' > Self-medication </li>";
      $a .= "</ul>";
   }

   if ($pq == "A5Q44")
   {
      $q = "Distance from health centre(Km):where TB diagnosis & treatement facilities are available(availability of laboratory services,reagents,drugs,treatement facilities)."; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=text id=" . $pq . "_1 name=" . $pq . " value='' ><li>";
      $a .= "</ul>";
   }


   if ($pq == "A5Q45")
   {
      $q = "Mode of transport to health centre"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='own' > Own vehicle </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='public' >Public Transport </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='private' > Private transport  </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_4 name=" . $pq . " value='others' > Others  </li>";
      //ADD spcify textbox
      $a .= "</ul>";
   }

   
   if ($pq == "A5Q46")
   {
      $q = "How frequently do you visit to health facilit in a month"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=text id=" . $pq . "_1 name=" . $pq . " value='' ><li>";
      $a .= "</ul>";
   }

   if ($pq == "A5Q47")
   {
      $q = "Are DOT providers available at your village or vicinity?"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "</ul>";
   }

   if ($pq == "A5Q48")
   {
      $q = "Do you face any problems in availing treatment for TB?"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' > NO<li>";
      $a .= "</ul>";
   }

   if ($pq == "A5Q48A")
   {
      $q = ""; 
      $a = "Yes<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='expences' > Expences of treatment </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='sideeffect' > Side effects of drugs </li>";
      $a .= "<li> <input type=radio id=" . $pq . "_3 name=" . $pq . " value='needless' > Needless are revieved of symptoms </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_4 name=" . $pq . " value='tomanydrug' > To many drugs </li>";
      $a .= "<li> <input type=radio id=" . $pq . "_5 name=" . $pq . " value='longtreatment' > Long duration of the treatment </li>";
     
      $a .= "</ul>";
   }

   if ($pq == "A5Q49")
   {
      $q = "Do you have any barriers in seeking TB treatment"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='yes' > Yes<input type=text  </li>";

      
      $a .= "</ul>";
   }


   if ($pq == "A5Q50")
   {
      $q = "Any life style changes you intend to bring?"; 
      $a = "Yes<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='nochange' > No change </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='drugs' > Drugs </li>";
      $a .= "<li> <input type=radio id=" . $pq . "_3 name=" . $pq . " value='nutrition' > Better nutrition </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_4 name=" . $pq . " value='Regularexcercise' > Regular excercise </li>";
      $a .= "<li> <input type=radio id=" . $pq . "_5 name=" . $pq . " value='Yoga' > Yoga </li>";
      $a .= "<li> <input type=radio id=" . $pq . "_6 name=" . $pq . " value='Isolation' > Isolation </li>";
     
      $a .= "</ul>";
   }

   if ($pq == "A5Q51")
   {
      $q = "Do you cover the mouth with handkerchief/mask while interacting with family or other members?"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "</ul>";
   }

   if ($pq == "A5Q52")
   {
      $q = "Do you wear mask while going out or travelling?"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes </li>";
      $a .= "</ul>";
   }
   
   if ($pq == "A5Q53")
   {
      $q = "BCC vaccination status of children living in the household"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Notvacced' > Not vaccinated </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Vaccinated' > Vaccinated </li>";
      $a .= "</ul>";
   }


   if ($pq == "A5Q54")
   {
      $q = "Do you get any monetary or other benefits from government?"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='no' > No </li>";
      $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='yes' > Yes(Specify)<input type=text </li>";
      $a .= "</ul>";
   }


   
   // "PART C (to be filled by laboratory)";
   if ($pq == "A5Q55")
   {
      $q = "Type of genotype"; 
      $a = "<ul  style='list-style-type:none;' >";
      $a .= "<li> <input type=text id=" . $pq . "_1 name=" . $pq . " value='' ><li>";
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
      echo getQuestion ("A1Q8", $A1Q8);
      echo getQuestion ("A1Q9", $A1Q9);

      $curPage = "A1";
   }
   else if ($curPage == "A2")
   {
      echo getQuestion ("A2Q10",$A2Q10); 
      echo getQuestion ("A2Q11",$A2Q11); 
      echo getQuestion ("A2Q12",$A2Q12);
      echo getQuestion ("A2Q13",$A2Q13); 
      echo getQuestion ("A2Q14",$A2Q14); 
      echo getQuestion ("A2Q15A",$A2Q15A); 
      echo getQuestion ("A2Q15B",$A2Q15B); 
      echo getQuestion ("A2Q16",$A2Q16);
      echo getQuestion ("A2Q17",$A2Q17);
      echo getQuestion ("A2Q18A",$A2Q18A);
      echo getQuestion("A2Q18B",$A2Q18B);
      echo getQuestion("A2Q18C",$A2Q18C);
      echo getQuestion("A2Q19A",$A2Q19A);
      echo getQuestion("A2Q19B",$A2Q19B);
      echo getQuestion("A2Q19C",$A2Q19C);

      $curPage = "A2";

   }  
   else if ($curPage == "A3")
    {
      echo getQuestion("A3Q20A",$A3Q20A);
      echo getQuestion("A3Q20B",$A3Q20B);
      echo getQuestion("A3Q20C",$A3Q20C);
      echo getQuestion("A3Q21",$A3Q21);
      echo getQuestion("A3Q22",$A3Q22);
      echo getQuestion("A3Q23",$A3Q23);
      echo getQuestion("A3Q24",$A3Q24);
      echo getQuestion("A3Q25",$A3Q25);
      echo getQuestion("A3Q26",$A3Q26);
      echo getQuestion("A3Q27",$A3Q27);
      echo getQuestion("A3Q28",$A3Q28);
      echo getQuestion("A3Q29",$A3Q29);
      echo getQuestion("A3Q30",$A3Q30);
      echo getQuestion("A3Q31A",$A3Q31A);
      echo getQuestion("A3Q31B",$A3Q31B);
      echo getQuestion("A3Q31C",$A3Q31C);

      $curPage = "A3";

    }
    else if ($curPage == "A4")
    {
      echo getQuestion("A4Q32",$A4Q32);
      echo getQuestion("A4Q33",$A4Q33);
      echo getQuestion("A4Q34",$A4Q34);
      echo getQuestion("A4Q35",$A4Q35);
      echo getQuestion("A4Q36",$A4Q36);
      echo getQuestion("A4Q37",$A4Q37);
      echo getQuestion("A4Q38",$A4Q38);
      echo getQuestion("A4Q38a",$A4Q38a);
      echo getQuestion("A4Q39",$A4Q39);
      echo getQuestion("A4Q39a",$A4Q39a);
      echo getQuestion("A4Q40",$A4Q40);
      echo getQuestion("A4Q41",$A4Q41);
      echo getQuestion("A4Q42",$A4Q42);
      echo getQuestion("A4Q43",$A4Q43);

      $curPage = "A4";
    }
    else if ($curPage == "A5")
    {
      echo getQuestion("A5Q44",$A5Q44);
      echo getQuestion("A5Q45",$A5Q45);
      echo getQuestion("A5Q46",$A5Q46);
      echo getQuestion("A5Q47",$A5Q47);
      echo getQuestion("A5Q48",$A5Q48);
      echo getQuestion("A5Q48A",$A5Q48A);
      echo getQuestion("A5Q49",$A5Q49);
      echo getQuestion("A5Q50",$A5Q50);
      echo getQuestion("A5Q51",$A5Q51);
      echo getQuestion("A5Q52",$A5Q52);
      echo getQuestion("A5Q53",$A5Q53);
      echo getQuestion("A5Q54",$A5Q54);
      echo getQuestion("A5Q55",$A5Q55);

      $curPage = "A5";
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

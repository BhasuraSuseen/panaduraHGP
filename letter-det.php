
<?php

            
             if(!empty($_POST["keyword"])){

              $letid=$_POST["keyword"];
             require"connect.php";  
             $letdetailsq=mysqli_query($conn,"SELECT * FROM letter WHERE letter_id='$letid'");
             $array=mysqli_fetch_assoc($letdetailsq);
            
             echo "<br><label><b><u>RECEIVED DETAILS</u></b><label><br>";
            echo "<br><label><b>Letter ID : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array["letter_id"]."<br>";
             echo "<label><b>Date recived : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array["date"]."<br>";
             echo "<label><b>Subject : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array["subject"]."<br>";
             echo "<label><b>Received from : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array["address"]."<br>";
             echo "<label><b>Type : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array["type"]."<br>";
             $letter_id = $array["letter_id"];
             $date = $array["date"];
             $subject = $array["subject"];
             $address = $array["address"];
             $type = $array["type"];
             $LC_to_MS = "";
             $MS_to_AO = "";
             $AO_to_LC = "";

             if(is_null($array['mcms'])){
              echo "<label><b>Letter Clerk to Medical Superintendent date : </b><label><br>&emsp;&emsp;&emsp;&emsp;Letter not forwarded<br>";
               $LC_to_MS = "";
             }
             else{
              echo "<label><b>Letter Clerk to Medical Superintendent date : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array["mcms"]."<br>";
              $LC_to_MS = $array["mcms"];
             }
              if(is_null($array['msao'])){
              echo "<label><b>Medical Superintendent to Admin Officer date : </b><label><br>&emsp;&emsp;&emsp;&emsp;Letter not forwarded<br>";
              $MS_to_AO="";
             }
             else{
             echo "<label><b>Medical Superintendent to Admin Officer date : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array["msao"]."<br>";
              $MS_to_AO = $array["msao"];
             }
              if(is_null($array['aomc'])){
             echo "<label><b>Admin Officer to Letter Clerk date : </b><label><br>&emsp;&emsp;&emsp;&emsp;Letter not forwarded<br>";
              $AO_to_LC = "";
             }
             else{
             echo "<label><b>Admin Officer to Letter Clerk date : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array["aomc"]."<br>";
              $AO_to_LC = $array["aomc"];
             }
             
             $current_location='';
             if (is_null($array["mceb"])==FALSE){
              if ($array["eb"]==1){
                $current_location="EB1";
              }
              elseif ($array["eb"]==2){
                $current_location="EB2";
              }
              elseif ($array["eb"]==3){
                $current_location="EB3";
              }
              elseif ($array["eb"]==4){
                $current_location="EB4";
              }
              elseif ($array["eb"]==5){
                $current_location="EB5";
              }
              elseif ($array["eb"]==6){
                $current_location="EB6";
              }
              elseif ($array["eb"]==7){
                $current_location="EB7";
              }
              elseif ($array["eb"]==8){
                $current_location="EB8";
              }     
             }
             else {
              if(is_null($array["aomc"])==FALSE){
                $current_location="LC2";
              }
              else{
                if(is_null($array["msao"])==FALSE){
                $current_location="AO";
                }
                else{
                  if(is_null($array["mcms"])==FALSE){
                    $current_location="MS";
                  }
                  else{
                    $current_location="LC1";
                  }
                }
              }
             }
            echo "<lable><b>Current Location : </b></label><br>&emsp;&emsp;&emsp;&emsp;".$current_location;
            }
            echo "<br><br><br><label><b><u>REPLY DETAILS</u></b><label><br>";
          
            $letreply=mysqli_query($conn,"SELECT * FROM letter_rep WHERE letter_id='$letid'");
            $array1=mysqli_fetch_assoc($letreply);
            mysqli_close($conn); 
            if($array1 > 0){
              echo "<br><label><b>Reply Letter ID : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array1["rep_id"]."<br>";
             echo "<label><b>Date replied : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array1["date"]."<br>";
             echo "<label><b>Subject : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array1["subject"]."<br>";
             echo "<label><b>Reply Address : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array1["address"]."<br>";
             echo "<label><b>Type : </b><label><br>&emsp;&emsp;&emsp;&emsp;". $array1["type"]."<br>";
           }else{
            echo "<br><label><b>NO REPLIES YET</b><label><br>";
           }
            
            
              ?>

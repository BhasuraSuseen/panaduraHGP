
<?php

            
             if(!empty($_POST["keyword"])){

              $letid=$_POST["keyword"];
             require "connect.php";  
             $letdetailsq=mysqli_query($conn,"SELECT * FROM letter WHERE letter_id='$letid'");
             $array=mysqli_fetch_assoc($letdetailsq);
             mysqli_close($conn); 
             echo "<br><label>RECEIVED DETAILS<label><br>";
            echo "<br><label>Letter ID : <label>". $array["letter_id"]."<br>";
             echo "<label>Date recived : <label>". $array["date"]."<br>";
             echo "<label>Subject : <label>". $array["subject"]."<br>";
             echo "<label>Recived from : <label>". $array["address"]."<br>";
             echo "<label>Type : <label>". $array["type"]."<br>";
             $letter_id = $array["letter_id"];
             $date = $array["date"];
             $subject = $array["subject"];
             $address = $array["address"];
             $type = $array["type"];
             $LC_to_MS = "";
             $MS_to_AO = "";
             $AO_to_LC = "";

             if(is_null($array['mcms'])){
              echo "<label>Letter Clerk to Medical Superintendent date : <label>Letter not forwarded<br>";
               $LC_to_MS = "";
             }
             else{
              echo "<label>Letter Clerk to Medical Superintendent date : <label>". $array["mcms"]."<br>";
              $LC_to_MS = $array["mcms"];
             }
              if(is_null($array['msao'])){
              echo "<label>Medical Superintendent to Admin Officer date : <label>Letter not forwarded<br>";
              $MS_to_AO="";
             }
             else{
             echo "<label>Medical Superintendent to Admin Officer date : <label>". $array["msao"]."<br>";
              $MS_to_AO = $array["msao"];
             }
              if(is_null($array['aomc'])){
             echo "<label>Admin Officer to Letter Clerk date : <label>Letter not forwarded<br>";
              $AO_to_LC = "";
             }
             else{
             echo "<label>Admin Officer to Letter Clerk date : <label>". $array["aomc"]."<br>";
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
                $current_location="MC2";
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
                    $current_location="MC";
                  }
                }
              }
             }
            echo "<lable>Current Location : </label>".$current_location;
            }
            echo "<br><br><br><label>REPLY DETAILS<label><br>";
            require "connect.php";
            $letreply=mysqli_query($conn,"SELECT * FROM letter_rep WHERE letter_id='$letid'");
            $array1=mysqli_fetch_assoc($letreply);
            mysqli_close($conn); 
            if($array1 > 0){
              echo "<br><label>Reply Letter ID : <label>". $array1["rep_id"]."<br>";
             echo "<label>Date replied : <label>". $array1["date"]."<br>";
             echo "<label>Subject : <label>". $array1["subject"]."<br>";
             echo "<label>Reply Address : <label>". $array1["address"]."<br>";
             echo "<label>Type : <label>". $array1["type"]."<br>";
           }else{
            echo "<br><label>NO REPLIES YET<label><br>";
           }
            
            
              ?>

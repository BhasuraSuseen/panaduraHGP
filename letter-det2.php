
<?php

            
             if(!empty($_POST["keyword"])){

              $letid=$_POST["keyword"];
             require"connect.php";  
             $letdetailsq=mysqli_query($conn,"SELECT * FROM letter WHERE letter_id='$letid'");
             $array=mysqli_fetch_assoc($letdetailsq);
             echo"<table>";
             echo"<tr>
                      <th><b>RECEIVED DETAILS</b></th>
                      <th></th>
                    </tr>";
            echo"<tr>
                      <th>Letter ID</th>
                      <th><b> ". $array["letter_id"]." </b></th>
                    </tr>";
            echo"<tr>
                      <th>Date Received</th>
                      <th><b> ". $array["date"]." </b></th>
                    </tr>";
            echo"<tr>
                      <th>Subject</th>
                      <th><b> ". $array["subject"]." </b></th>
                    </tr>";
             echo"<tr>
                      <th>Received From</th>
                      <th><b> ". $array["address"]." </b></th>
                    </tr>";
             echo"<tr>
                      <th>Type</th>
                      <th><b> ". $array["type"]." </b></th>
                    </tr>";
            
             
             $letter_id = $array["letter_id"];
             $date = $array["date"];
             $subject = $array["subject"];
             $address = $array["address"];
             $type = $array["type"];
             $LC_to_MS = "";
             $MS_to_AO = "";
             $AO_to_LC = "";

             if(is_null($array['mcms'])){
              echo"<tr>
                      <th>Letter Clerk to Medical Superintendent date </th>
                      <th>Letter not forwarded</th>
                    </tr>";
               $LC_to_MS = "";
             }
             else{
              echo"<tr>
                      <th>Letter Clerk to Medical Superintendent date </th>
                      <th><b>". $array["mcms"]."</b></th>
                    </tr>";
              $LC_to_MS = $array["mcms"];
             }
              if(is_null($array['msao'])){
              echo"<tr>
                      <th>Medical Superintendent to Admin Officer date </th>
                      <th>Letter not forwarded</th>
                    </tr>";
              $MS_to_AO="";
             }
             else{
              echo"<tr>
                      <th>Medical Superintendent to Admin Officer date </th>
                      <th><b>". $array["msao"]."</b></th>
                    </tr>";
              $MS_to_AO = $array["msao"];
             }
              if(is_null($array['aomc'])){
                echo"<tr>
                      <th>Admin Officer to Letter Clerk date</th>
                      <th>Letter not forwarded</th>
                    </tr>";
              $AO_to_LC = "";
             }
             else{
              echo"<tr>
                      <th>Admin Officer to Letter Clerk date</th>
                      <th><b> ". $array["aomc"]." </b></th>
                    </tr>";
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
             echo"<tr>
                      <th>Current Location</th>
                      <th><b> ".$current_location."</b> </th>
                    </tr>";
            
            }
            echo"</table><br>";
            echo"<table>";
            echo"<tr>
                      <th><b>REPLY DETAILS</b></th>
                      <th></th>
                    </tr>";
          
            $letreply=mysqli_query($conn,"SELECT * FROM letter_rep WHERE letter_id='$letid'");
            $array1=mysqli_fetch_assoc($letreply);
            mysqli_close($conn); 
            if($array1 > 0){
             echo"<tr>
                      <th>Reply Letter ID</th>
                      <th><b>". $array1["rep_id"]."</b></th>
                    </tr>"; 
              echo"<tr>
                      <th>Date replied</th>
                      <th><b>". $array1["date"]."</b></th>
                    </tr>";
             echo"<tr>
                      <th>Subject</th>
                      <th><b>". $array1["subject"]."</b></th>
                    </tr>";
             echo"<tr>
                      <th>Reply Address</th>
                      <th><b>". $array1["address"]."</b></th>
                    </tr>";
             echo"<tr>
                      <thType</th>
                      <th><b>". $array1["type"]."</b></th>
                    </tr>";
             
           }else{
            
            echo"<tr>
                      <th>No Replies Yet !</th>
                      <th></th>
                    </tr>";
           }
            echo"</table>";
            
              ?>

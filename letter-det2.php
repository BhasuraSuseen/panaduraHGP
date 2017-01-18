
<?php
            // letter detail retriving
            
             if(!empty($_POST["keyword"])){

              $letid=$_POST["keyword"];
             require"connect.php";  
             $letdetailsq=mysqli_query($conn,"SELECT * FROM letter WHERE letter_id='$letid'");
             $array=mysqli_fetch_assoc($letdetailsq);
            echo "<br><b>RECEIVED DETAILS</b><br>";
            echo"<table>";
             
            echo"<tr>
                      <th><b>Letter ID</b></th>
                      <th> ". $array["letter_id"]." </th>
                    </tr>";
            echo"<tr>
                      <th><b>Date Received</b></th>
                      <th> ". $array["date"]." </th>
                    </tr>";
            echo"<tr>
                      <th><b>Subject</b></th>
                      <th> ". $array["subject"]." </th>
                    </tr>";
             echo"<tr>
                      <th><b>Received From</b></th>
                      <th> ". $array["address"]." </th>
                    </tr>";
             echo"<tr>
                      <th><b>Type</b></th>
                      <th> ". $array["type"]." </th>
                    </tr>";
            echo"<tr>
                      <th><b>Recipient</b></th>
                      <th> ". $array["recipient"]." </th>
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
                      <th><b>Letter Clerk to Medical Superintendent Date </b></th>
                      <th>Letter not forwarded</th>
                    </tr>";
               $LC_to_MS = "";
             }
             else{
              echo"<tr>
                      <th><b>Letter Clerk to Medical Superintendent Date </b></th>
                      <th>". $array["mcms"]."</th>
                    </tr>";
              $LC_to_MS = $array["mcms"];
             }
              if(is_null($array['msao'])){
              echo"<tr>
                      <th><b>Medical Superintendent to Admin Officer Date </b></th>
                      <th>Letter not forwarded</th>
                    </tr>";
              $MS_to_AO="";
             }
             else{
              echo"<tr>
                      <th><b>Medical Superintendent to Admin Officer Date </b></th>
                      <th>". $array["msao"]."</th>
                    </tr>";
              $MS_to_AO = $array["msao"];
             }
              if(is_null($array['aomc'])){
                echo"<tr>
                      <th><b>Admin Officer to Letter Clerk Date</b></th>
                      <th>Letter not forwarded</th>
                    </tr>";
              $AO_to_LC = "";
             }
             else{
              echo"<tr>
                      <th><b>Admin Officer to Letter Clerk Date</b></th>
                      <th> ". $array["aomc"]." </th>
                    </tr>";
              $AO_to_LC = $array["aomc"];
             }
             
             $current_location='';
             if ((is_null($array["mceb"])==FALSE)and($array['imgname']!='')){
              $softcopypath = "lettercopies/";
              $softcopypath .= $letter_id .".pdf";
              echo("<button onclick=\"location.href='".$softcopypath." '\">Received Letter Soft copy</button>");

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
                      <th><b>Current Location</b></th>
                      <th> ".$current_location." </th>
                    </tr>";
            
            }
            echo"</table>";
            // letter Reply detail detail retriving
            echo "<br><br><b>REPLY DETAILS</b><br>";
           echo"<table>";
            $letreply=mysqli_query($conn,"SELECT * FROM letter_rep WHERE letter_id='$letid'");
            $array1=mysqli_fetch_assoc($letreply);
            mysqli_close($conn); 
            if($array1 > 0){

             echo"<tr>
                      <th><b>Reply Letter ID</b></th>
                      <th>". $array1["rep_id"]."</th>
                    </tr>"; 
              echo"<tr>
                      <th><b>Date replied</b></th>
                      <th>". $array1["date"]."</th>
                    </tr>";
             echo"<tr>
                      <th><b>Subject</b></th>
                      <th>". $array1["subject"]."</th>
                    </tr>";
             echo"<tr>
                      <th><b>Reply Address</b></th>
                      <th>". $array1["address"]."</th>
                    </tr>";
             echo"<tr>
                      <th><b>Type</b></th>
                      <th>". $array1["type"]."</th>
                    </tr>";
              $letter_id1 =  $array1["letter_id"];
              $softcopypath1 = "letterreplies/";
              $softcopypath1 .= $letter_id1 ."reply.pdf";
              if($array1['file']!=''){
              echo("<button onclick=\"location.href='".$softcopypath1." '\">Replied Letter Soft copy</button>");
            }
           }else{
            
            echo"<tr>
                      <th>No Replies Yet !</th>
                      <th></th>
                    </tr>";
           }
            echo"</table>";
            
              ?>

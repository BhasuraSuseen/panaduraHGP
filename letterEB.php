<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body> 

	<div class="all_container">
		<div class="left_side_bar">
            <div class="left_side_bar_top">                   
            </div>
            <div class="left_side_bar_down">
                <ul id="nav">
                        <li  id="open_mail_1" class="letter_panel_list">  
				<i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
			</li>
                </ul>
           </div>
        </div>
		<div class="container">
            <div class="middle_top">
			    <div class="middle_top_left">
                    <h1>#<spanh1>OMS</spanh1></h1>
                </div>
                <div class="middle_top_middle">
                <script type="text/javascript">
                            tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
                            tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

                            function GetClock(){
                            var d=new Date();
                            var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
                            if(nyear<1000) nyear+=1900;
                            var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

                            if(nhour==0){ap=" AM";nhour=12;}
                            else if(nhour<12){ap=" AM";}
                            else if(nhour==12){ap=" PM";}
                            else if(nhour>12){ap=" PM";nhour-=12;}

                            if(nmin<=9) nmin="0"+nmin;
                            if(nsec<=9) nsec="0"+nsec;

                            document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
                            }

                            window.onload=function(){
                            GetClock();
                            setInterval(GetClock,1000);
                            }
                            </script>
                            <div id="clockbox"></div>
                      </div>
                      <div class="middle_top_right">
                      <?php 
                        require "connect.php";
                        session_start();
                          echo"<a>".$_SESSION['username']."</a>";?>
			  <a href="index.php"><button class="button">Log Out</button></a>
                      </div>
            </div>
			
			
            <div class="middle_left">
                <a>Post box and news feed</a>
            </div>
            <div class="middle_right">
                <button class="button button1">GA</button>
            </div>
		</div>
		<div class="right_side_bar"> 
            <svg xmlns="http://www.w3.org/2000/svg" class="search-panel-query-icon" width="24px" height="24px" viewBox="0 0 24 24"  >
                <path fill="#455A64" d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
             </svg>
             
        </div>
         <div id="pop_background"></div>
            <div id="pop_box_hr_1">
                        <b>New Letter Details</b>
                        <!--entering details of letters into databse for the first time -->
                        <form name="new_letter" action="letterEB.php" method="post" accept-charset="utf-8">
                        <input type="number" name="let_id" placeholder="Letter ID" required><br>
                        <input type="date" name="fdate" placeholder="Date received" required><br>
                        <input type="text" name="address" placeholder="Address"><br>
                        <input type="radio" name="lettype" value="Post Card" required>Post Card
                        <input type="radio" name="lettype" value="Normal Letter" required>Normal Letter
                        <input type="radio" name="lettype" value="Registered Post" required>Registered Post
                        <input type="radio" name="lettype" value="Other" required>Other<br>
                        <input type="submit" value="Add new letter" name="submit">
                        <input type="reset" value="Reset">
                        </form>
                        <b>Enter MC to MS date</b>
                        <form name="mctoms" action="letterEB.php" method="post" accept-charset="utf-8">
                              <label>Letter ID</label>
                          <?php  
                          
                                $abc=mysqli_query($conn,"select letter_id from letter where mcms is NULL");
                          if(mysqli_num_rows($abc)>0){
                          $select= '<select name="lid2">';
                          while($rs=mysqli_fetch_array($abc)){
                         
                          $select.='<option value="' .$rs[0]. '">'.$rs[0].'</option>';
                           }
                          }
                          else{
                          $select='<select><option></option></select>';
                            }
                          echo $select;
                          echo '</select>'?>
                          <input type="date" name="datemcms" placeholder="Date sent to MS" required>
                          <input type="submit" name="submitt" value="Enter Date">
                          <input type="reset" name="reset" value="Reset">

                        </form>
                        <!--methana enter karanne AO to MC date -->
                        <b>Enter AO to MC date</b>
                        <form name="mctoms" action="letterEB.php" method="post" accept-charset="utf-8"> 
                        <label>Letter ID</label>
                         <?php  
     
                                $ab=mysqli_query($conn,"select letter_id from letter where aomc is NULL and msao IS NOT NULL");

                         
                          if(mysqli_num_rows($ab)>0){
                          $select1= '<select name="lid1">';
                          while($rd=mysqli_fetch_array($ab)){
                         
                          $select1.='<option value="' .$rd[0]. '">'.$rd[0].'</option>';
                           
                          }
                          }
                          else{
                            $select1='<select><option></option></select>';
                          }
                          echo $select1;
                          echo '</select>';?>
                          <label>Forward to EB</label>
                          <select name="eb" >
                          <option>EB NO.1</option>
                          <option>EB NO.2</option>
                          <option>EB NO.3</option>
                          <option>EB NO.4</option>
                          <option>EB NO.5</option>
                          <option>EB NO.6</option>
                          <option>EB NO.7</option>
                          <option>EB NO.8</option>
                          </select>
                          <input type="date" name="dateaomc" placeholder="Date from AO" required><br>
                          <input type="text" name="sub" placeholder="Subject">
                          <input type="submit" name="submittt" value="Enter Date">
                          <input type="reset" name="reset" value="Reset">

                        </form>
                        <?php
                         if(isset($_POST["submit"])){
                            $id= $_POST['let_id'];
                            $date= $_POST['fdate'];
                            $type=$_POST['lettype'];
                            $addr=$_POST['address'];

                            /*check if the given id already exists*/
                            $letidheck="select * from letter where letter_id='$id'";
                            $result=mysqli_query($conn,$letidheck);
                            if(mysqli_num_rows($result)>=1){
                            echo $id." is already taken";
                            }   
                            else{
                                $sql="INSERT INTO letter (letter_id,date,address,type) VALUES('$id','$date','$addr','$type')";
                                echo $sql;
                                mysqli_query($conn,$sql);
                                echo $id . "was entered successfully";
                            }
                            
                         }
                         /*ac to mc date and subject enter form */
                          if(isset($_POST["submittt"])){
                        $sub=$_POST['subject'];
                        $lid1=$_POST['lid1'];
                        $dateaomc=$_POST['dateaomc'];
                        $eb=$_POST['eb'];
                        $sql2="UPDATE letter SET subject ='$sub', aomc='$dateaomc',eb='$eb' WHERE letter_id='$lid1'";
                        mysqli_query($conn,$sql2);
                        echo $lid1 . "was updated";


                          }
                          /*mc to ms date enter form */
                          if(isset($_POST["submitt"])){

                        $lid2=$_POST['lid2'];
                        $datemcms=$_POST['datemcms'];

                        $sql3="UPDATE letter SET mcms='$datemcms'WHERE letter_id='$lid2'";
                        mysqli_query($conn,$sql3);
                        echo $lid2 . "was updated";
                        }
                          
                        ?>
            </div>
 	</div>
     
        <script>
         $(document).ready(function(){
            $('#open_mail_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_hr_1').fadeIn();
                return false;
            });
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_hr_1').fadeOut();
 
                return false;
            });
         });
     </script>
 </body>
 </html>

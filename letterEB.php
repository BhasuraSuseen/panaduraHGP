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
		    <?php
require "connect.php";
//mail clerk 1 letter count//
$mcsql1="select * from letter where date is NOT NULL and mcms IS NULL";
$a=mysqli_query($conn,$mcsql1);
$a1=mysqli_num_rows($a);
//echo $a1;
//medical spurintendant letter count//
$mssql1="select * from letter where mcms is NOT NULL and msao IS NULL";
$b=mysqli_query($conn,$mssql1);
$b1=mysqli_num_rows($b);
//echo $b1;
//admin officer letter count//
$aosql1="select * from letter where msao is NOT NULL and aomc IS NULL";
$c=mysqli_query($conn,$aosql1);
$c1=mysqli_num_rows($c);
//echo $c1;
//mail clerk letter count 2//
$mcsql2="select * from letter where aomc is NOT NULL and mceb IS NULL";
$d=mysqli_query($conn,$mcsql2);
$d1=mysqli_num_rows($d);
//echo $d1;
//eb1 letter count//
$eb1sql="select * from letter where mceb is NOT NULL and eb='1'";
$eb1=mysqli_query($conn,$eb1sql);
$eb11=mysqli_num_rows($eb1);
//echo $eb11;
//eb2 letter count//
$eb2sql="select * from letter where mceb is NOT NULL and eb='2'";
$eb2=mysqli_query($conn,$eb2sql);
$eb22=mysqli_num_rows($eb2);
//echo $eb22;
//eb3 letter count//
$eb3sql="select * from letter where mceb is NOT NULL and eb='3'";
$eb3=mysqli_query($conn,$eb3sql);
$eb33=mysqli_num_rows($eb3);
//echo $eb33;
//eb4 letter count//
$eb4sql="select * from letter where mceb is NOT NULL and eb='4'";
$eb4=mysqli_query($conn,$eb4sql);
$eb44=mysqli_num_rows($eb4);
//echo $eb44;
//eb5 letter count//
$eb5sql="select * from letter where mceb is NOT NULL and eb='5'";
$eb5=mysqli_query($conn,$eb5sql);
$eb55=mysqli_num_rows($eb5);
//echo $eb55;
//eb6 letter count//
$eb6sql="select * from letter where mceb is NOT NULL and eb='6'";
$eb6=mysqli_query($conn,$eb6sql);
$eb66=mysqli_num_rows($eb6);
//echo $eb66;
//eb7 letter count//
$eb7sql="select * from letter where mceb is NOT NULL and eb='7'";
$eb7=mysqli_query($conn,$eb7sql);
$eb77=mysqli_num_rows($eb7);
//echo $eb77;
//eb8 letter count//
$eb8sql="select * from letter where mceb is NOT NULL and eb='8'";
$eb8=mysqli_query($conn,$eb8sql);
$eb88=mysqli_num_rows($eb8);
//echo $eb88;
?>
                		<p> Hellow </p>
    <script>
      d3.select("p").text("D3 is working");
      var width = 600;
      var height = 600;
      var nodes = [{"name": "LC1", "value" : 0, "x_axis": 50, "y_axis": 300},
                  {"name": "MS", "value" : 0, "x_axis": 150, "y_axis": 300},
                  {"name": "AO", "value" : 0, "x_axis": 250, "y_axis": 300},
                  {"name": "LC2", "value" : 0, "x_axis": 350, "y_axis": 300},
                  {"name": "EB1", "value" : 0, "x_axis": 500, "y_axis": 40},
                  {"name": "EB2", "value" : 0, "x_axis": 500, "y_axis": 120},
                  {"name": "EB3", "value" : 0, "x_axis": 500, "y_axis": 200},
                  {"name": "EB4", "value" : 0, "x_axis": 500, "y_axis": 280},
                  {"name": "EB4", "value" : 0, "x_axis": 500, "y_axis": 360},
                  {"name": "EB6", "value" : 0, "x_axis": 500, "y_axis": 440},
                  {"name": "EB7", "value" : 0, "x_axis": 500, "y_axis": 520},
                  {"name": "EB8", "value" : 0, "x_axis": 500, "y_axis": 600}
                 ];
        var links = [{"x1": 50, "y1": 300, "x2": 150, "y2": 300},
                      {"x1": 150, "y1": 300, "x2": 250, "y2": 300},
                      {"x1": 250, "y1": 300, "x2": 350, "y2": 300},
                      {"x1": 350, "y1": 300, "x2": 500, "y2": 40},
                      {"x1": 350, "y1": 300, "x2": 500, "y2": 120},
                      {"x1": 350, "y1": 300, "x2": 500, "y2": 200},
                      {"x1": 350, "y1": 300, "x2": 500, "y2": 280},
                      {"x1": 350, "y1": 300, "x2": 500, "y2": 360},
                      {"x1": 350, "y1": 300, "x2": 500, "y2": 440},
                      {"x1": 350, "y1": 300, "x2": 500, "y2": 520},
                      {"x1": 350, "y1": 300, "x2": 500, "y2": 600}
                 ];
                 nodes[0].value = 50;
                 nodes[1].value = 46;
		 nodes[2].value = 37;
                 nodes[3].value = 22;
		 nodes[4].value = 5;
                 nodes[5].value = 7;
		 nodes[6].value = 1;
                 nodes[7].value = 9;
		 nodes[8].value = 11;
                 nodes[9].value = 3;
		 nodes[10].value = 8;
                 nodes[11].value = 6;
      var canvas = d3.select("#middle_left").append("svg")
        .attr('width', width)
        .attr('height', height);
      var lines = canvas.selectAll("line")
              .data(links)
              .enter()
                .append("line")
                .attr("x1", function (d) { return d.x1;})
                .attr("y1", function (d) { return d.y1;})
                .attr("x2", function (d) { return d.x2;})
                .attr("y2", function (d) { return d.y2;})
                .attr("stroke-width", 5)
                .attr("stroke", "#90A4AE");
      var circles = canvas.selectAll("circle")
          .data(nodes)
          .enter()
              .append("circle")
              .attr("cx", function (d) { return d.x_axis; })
              .attr("cy", function (d) { return d.y_axis; })
              .attr("r", width * 0.03)
              .attr("fill","#ECEFF1")
              .attr("stroke", "#607D8B")
              .attr("stroke-width", width * 0.003); //radius of circle
      canvas.selectAll("text")
          .data(nodes)
          .enter()
              .append("text")
              .attr("x", function (d) { return d.x_axis - 20; })
              .attr("y", function (d) { return d.y_axis + 5; })
              .attr("fill", "#607D8B")
              .text(function(d){return d.name + '\n'+ d.value });
    
      //d3.json("mydata.json",function(data){
      // })
    </script>
            </div>
            <div class="middle_right">
                
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
                                $sql="INSERT INTO letter (letter_id, date, address,type) VALUES ('$id','$date', '$addr','$type')";
                                echo $sql;
                                echo $date;
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

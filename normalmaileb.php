
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script  src="http://d3js.org/d3.v3.min.js"></script>
<style>
    body {
    background-color: #ECEFF1;
    font-family: 'Open Sans';
    color: #607D8B ;
    font-weight: 600; 
    }
    
</style>

</head>
<body> 
<?php
require "connect.php";
  session_start();
  if($_SESSION['username']==''){
    header("Location:  index.php");
  }
  
?>
	<div class="all_container">
		  <div class="left_side_bar">
          <div class="left_side_bar_top">                   
          </div>
          <div class="left_side_bar_down">
              <ul id="nav">
                  <li  id="open_mail_1" title="Update Letter Details"  class="letter_panel_list">  
				          <i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;">
                  </i>
			            </li>
                  <li  id="open_mail_1" title="Reply to letters"  class="letter_panel_list">  
                  <i> <img src="images/mailrep.ico" style="width:80%;height:auto; opacity: 0.6; padding: 5px;">
                  </i>
                  </li>
              </ul>
          </div>
      </div>
		  <div class="container">
          <div class="middle_top">
			       <div class="middle_top_left">
                <img src="images/oms4.png"  style= "padding: 5px;">
              </div>
             <div class="middle_top_middle">
              </div>
                      <div class="middle_top_right">
                        <?php
                          echo"<a>".$_SESSION['username']."</a>";?><br>
			                   <a href="logout.php">Log Out</a>
                        </div>
              </div>
	 
			     
			
          <div id="middle_leftp1">
            
          </div>
          <div id="middle_rightp1">
 
          </div>				             
 	</div>
		<div class="right_side_bar"> 
               
          	</div>
		 <div id="pop_background"></div>
            <div id="pop_box_hr_1">
                       
            </div>
	</div>
     <div>
    <form name="mctoeb" action="normalmaileb.php" method="post" accept-charset="utf-8">
    <b>Enter Letter EB to EB date</b><br>
  <label>Letter ID</label>
      <?php  
      $eb=$_SESSION['ebno'];
      $abcd=mysqli_query($conn,"select letter_id from letter where mceb is NULL and eb ='".$eb."'");
      if(mysqli_num_rows($abcd)>0){
      $select= '<select name="lid">';
      while($rsl=mysqli_fetch_array($abcd)){
     
      $select.='<option value="' .$rsl[0]. '">'.$rsl[0].'</option>';
       }
      }
       else{
        $select='<select><option></option></select>';
      }
      echo $select;
      echo '</select><br><br>'?>
      <input type="date" name="datemceb" placeholder="Date recieved from Letter EB" required><br>
      <input type="submit" name="submitt" value="Enter Date">
      <input type="reset" name="reset" value="Reset">
  </form>
  <?php
   if(isset($_POST["submitt"])){
    if(isset($_POST['lid'])){

$lid=$_POST['lid'];
$datemceb=$_POST['datemceb'];

$sql="UPDATE letter SET mceb='$datemceb' WHERE letter_id='$lid'";
mysqli_query($conn,$sql);
$message= $lid. " was updated";
  echo  "<script type='text/javascript'>alert('$message');</script>";
}
else{
  $message="No letters to reply";
  echo  "<script type='text/javascript'>alert('$message');</script>";
  
}

}
?>  </div>
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

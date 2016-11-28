
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
    }
    .node{
      fill:ECEFF1;
    }
    .link{
      stroke: #90A4AE;
      stroke-width: 10px;
    }
    .arc {
    fill: #ef5350;
  }
   .arcb {
    fill: #CFD8DC;
  }
  #suggesstion-box{z-index: 1500; height: 100px; overflow-y: scroll; display: none;}
  #letterid-list{list-style:none;margin:0;padding:0;width:100%; z-index: 1500;}
  #letterid-list li{padding: 5px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;z-index: 1500;}
  #letterid-list li:hover{background:#F0F0F0;}

</style>
				<script src="http://d3js.org/d3.v3.min.js"></script>
				<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
				<script>
				$(document).ready(function(){
				  $("#search-box").keyup(function(){
				    $.ajax({
				    type: "POST",
				    url: "readCountry.php",
				    data:'keyword='+$(this).val(),
				    beforeSend: function(){
				      $("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
				    },
				    success: function(data){
				      $("#suggesstion-box").show();
				      $("#suggesstion-box").html(data);
				      $("#search-box").css("background","#FFF");
				    }
				    });
				  });
				  $("#suggesstion-box").click(function(){
				    $.ajax({
				    type: "POST",
				    url: "readCountry.php",
				    data:'keyword='+$(this).val(),
				    beforeSend: function(){
				      
				    },
				    success: function(data){
				     
				    }
				    });
				  });
				  
				  $("#search-box1").keyup(function(){
				    $.ajax({
				    type: "POST",
				    url: "readCountry.php",
				    data:'keyword1='+$(this).val(),
				    beforeSend: function(){
				      $("#search-box1").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
				    },
				    success: function(data){
				      $("#suggesstion-box").show();
				      $("#suggesstion-box").html(data);
				      $("#search-box1").css("background","#FFF");
				    }
				    });
				  });
				    $("#search-box2").keyup(function(){
				    $.ajax({
				    type: "POST",
				    url: "readCountry.php",
				    data:'keyword2='+$(this).val(),
				    beforeSend: function(){
				      $("#search-box2").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
				    },
				    success: function(data){
				      $("#suggesstion-box").show();
				      $("#suggesstion-box").html(data);
				      $("#search-box1").css("background","#FFF");
				    }
				    });
				  });
				});

				function selectletterid(val) {
				$("#search-box").val(val);
				$("#suggesstion-box").hide();
				func1(val);
				}
				function selectletterid1(val) {
				$("#search-box1").val(val);
				$("#suggesstion-box").hide();
				func1(val);
				}
				function selectaddress(val) {
				$("#search-box2").val(val);
				$("#suggesstion-box").hide();
				func1(val);
				}
				function func1(data){
				$.ajax({
				    type: "POST",
				    url: "newgraph.php",
				    data:'keyword='+data,
				    beforeSend: function(){
				      
				    },
				    success: function(data){
				     $("#svgcontent").html(data)
				    }
				  });
				 
				}

				</script>
</head>
<body> 

	<div class="all_container">
		  <div class="left_side_bar">
          <div class="left_side_bar_top">                   
          </div>
          <div class="left_side_bar_down">
              <ul id="nav">
                 <li id="open_mail_1" style="border-left: 4px solid #c62828;">  
						<i> <img src="images/web.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
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
                          require "connect.php";
                          session_start();
                          if($_SESSION['username']==''){
                            header("Location:  index.php");
                          }
                          echo"<a>".$_SESSION['username']."</a>";?><br>
			                   <a href="logout.php">Log Out</a>
                        </div>
              </div>
	 
			     
			
          <div id="middle_leftp1">
             
				
				
				<input type="text" id="search-box"  placeholder=" Select by letter ID" style="float:left margin: 10px; "/>
				<input type="text" id="search-box1" placeholder=" Select by Subject" style="float:left;margin: 10px;" />
				<input type="text" id="search-box2" placeholder=" Select by Address" style="float:left;margin: 10px;" />
				<div id="suggesstion-box"></div>
				<div id ="svgcontent"></div>				             				           				
				
          </div>
          <div id="middle_rightp1">
 
          </div>				             
 	</div>
		<div class="right_side_bar"> 
               <div class="right_side_bar_top">                   
          </div>
          <div class="right_side_bar_down">
              <ul id="nav">
                 <li id="open_hr_1" style="border-right: 4px solid #2980b9;"> 

						<i> <img src="images/businessman-7.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_diet_1" style="border-right: 4px solid #03C9A9;"> 

						<i> <img src="images/food-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
              </ul>
          </div> 
          	</div>
		 <div id="pop_background"></div>
            <div id="pop_box_hr_1">
			<form name="mstoao" action="adminofficer.php" method="post" accept-charset="utf-8">
				<b>Enter MS to MC date</b></br>
				  <label>Letter ID</label>
						  <?php  
				     
							$abc=mysqli_query($conn,"select letter_id from letter where msao is NULL and mcms is NOT NULL");
				      if(mysqli_num_rows($abc)>0){
				      $select= '<select name="select">';
				      while($rs=mysqli_fetch_array($abc)){
				     
				      $select.='<option value="' .$rs[0]. '">'.$rs[0].'</option>';
				       }
				      }
				      else{
				        $select='<select><option></option></select>';
				      }
				      echo $select;
				      echo '</select>'?>
				      <input type="date" name="datemsao" placeholder="Date from MS" required>
				      <input type="submit" name="submitt" value="Enter Date">
				      <input type="reset" name="reset" value="Reset">
					</form>
				
				<?php

				 /*ms to ao date enter form */
				  if(isset($_POST["submitt"])){

				$lid=$_POST['select'];
				$datemsao=$_POST['datemsao'];

				$sql="UPDATE letter SET msao='$datemsao' WHERE letter_id='$lid'";
				mysqli_query($conn,$sql);
				echo $lid . "was updated";
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

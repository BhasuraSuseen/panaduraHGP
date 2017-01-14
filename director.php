
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

</style>
</head>
<body> 

	<div class="all_container">
		  <div class="left_side_bar">
          <div class="left_side_bar_top">                   
          </div>
          <div class="left_side_bar_down">
              <ul id="nav">
                    
				            <li id="open_hr_1" style="border-left: 4px solid #2980b9;"> 

						<i> <img src="images/businessman-7.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
					</li>
					 <li id="open_diet_1" style="border-left: 4px solid #03C9A9;"> 

						<i> <img src="images/food-1.png" style="width:80%;height:auto; opacity: 0.6; padding: 5px;"></i>
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
              <?php
            
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
                    
                    <script>
                     
                      var width = 1000;
                      var height = 600;
                     var nodes = [{"name": "LC1", "value" : 0, "x_axis": 80, "y_axis": 300},
				  {"name": "MS", "value" : 0, "x_axis": 280, "y_axis": 300},
				  {"name": "AO", "value" : 0, "x_axis": 480, "y_axis": 300},
				  {"name": "LC2", "value" : 0, "x_axis": 680, "y_axis": 300},
				  {"name": "EB1", "value" : 0, "x_axis": 940, "y_axis": 55},
				  {"name": "EB2", "value" : 0, "x_axis": 940, "y_axis": 125},
				  {"name": "EB3", "value" : 0, "x_axis": 940, "y_axis": 195},
				  {"name": "EB4", "value" : 0, "x_axis": 940, "y_axis": 265},
				  {"name": "EB5", "value" : 0, "x_axis": 940, "y_axis": 335},
				  {"name": "EB6", "value" : 0, "x_axis": 940, "y_axis": 405},
				  {"name": "EB7", "value" : 0, "x_axis": 940, "y_axis": 475},
				  {"name": "EB8", "value" : 0, "x_axis": 940, "y_axis": 545}
				 ];
			var links = [{"x1": 80, "y1": 300, "x2": 280, "y2": 300},
				      {"x1": 280, "y1": 300, "x2": 480, "y2": 300},
				      {"x1": 480, "y1": 300, "x2": 680, "y2": 300},
				      {"x1": 680, "y1": 300, "x2": 800, "y2": 300},
				      {"x1": 800, "y1": 50, "x2": 800, "y2": 550},
				      {"x1": 800, "y1": 55, "x2": 850, "y2": 55},
				      {"x1": 800, "y1": 125, "x2": 850, "y2": 125},
				      {"x1": 800, "y1": 195, "x2": 850, "y2": 195},
				      {"x1": 800, "y1": 265, "x2": 850, "y2": 265},
				      {"x1": 800, "y1": 335, "x2": 850, "y2": 335},
				      {"x1": 800, "y1": 405, "x2": 850, "y2": 405},
				      {"x1": 800, "y1": 475, "x2": 850, "y2": 475},
				      {"x1": 800, "y1": 545, "x2": 850, "y2": 545}
				 ];
                                nodes[0].value = <?php echo $a1 ?>;
                                nodes[1].value = <?php echo $b1 ?>;
                                nodes[2].value = <?php echo $c1 ?>;
                                nodes[3].value = <?php echo $d1 ?>;
                                nodes[4].value = <?php echo $eb11 ?>;
                                nodes[5].value = <?php echo $eb22 ?>;
                                nodes[6].value = <?php echo $eb33 ?>;
                                nodes[7].value = <?php echo $eb44 ?>;
                                nodes[8].value = <?php echo $eb55 ?>;
                                nodes[9].value = <?php echo $eb66 ?>;
                                nodes[10].value = <?php echo $eb77 ?>;
                                nodes[11].value = <?php echo $eb88 ?>;
			 var count = 0;
			      for (i = 0; i < 12; i++) { 
				  count = count + nodes[i].value;
			      }

                       var canvas = d3.select("#middle_leftp1").append("svg")
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
			var a0 = (nodes[0].value  /  count) * 2 ;
			var a1 = (nodes[1].value  /  count) * 2  ;
			var a2 = (nodes[2].value  /  count) * 2  ;
			var a3 = (nodes[3].value  /  count) * 2  ;
			var a4 = (nodes[4].value  /  count) * 2  ;
			var a5 = (nodes[5].value  /  count) * 2  ;
			var a6 = (nodes[6].value  /  count) * 2  ;
			var a7 = (nodes[7].value  /  count) * 2  ;
			var a8 = (nodes[8].value  /  count) * 2  ;
			var a9 = (nodes[9].value  /  count) * 2  ;
			var a10 = (nodes[10].value  /  count) * 2  ;
			var a11 = (nodes[11].value  /  count) * 2  ;
			var arc = d3.svg.arc()
			      .innerRadius(width * 0.045)
			      .outerRadius(width * 0.055)
			      .startAngle(0)
			      .endAngle(a0 * Math.PI); 
			var arc1 = d3.svg.arc()
			      .innerRadius(width * 0.045)
			      .outerRadius(width * 0.055)
			      .startAngle(0)
			      .endAngle(a1 * Math.PI);
			var arc2 = d3.svg.arc()
			      .innerRadius(width * 0.045)
			      .outerRadius(width * 0.055)
			      .startAngle(0)
			      .endAngle(a2 * Math.PI); 
			var arc3 = d3.svg.arc()
			      .innerRadius(width * 0.045)
			      .outerRadius(width * 0.055)
			      .startAngle(0)
			      .endAngle(a3 * Math.PI); 
			var arc4 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(a4 * Math.PI); 
			var arc5 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(a5 * Math.PI); 
			var arc6 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(a6 * Math.PI); 
			var arc7 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(a7 * Math.PI); 
			var arc8 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(a8 * Math.PI); 
			var arc9 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(a9 * Math.PI); 
			var arc10 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(a10 * Math.PI); 
			var arc11 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(a11 * Math.PI);
			var arc12 = d3.svg.arc()
			      .innerRadius(width * 0.045)
			      .outerRadius(width * 0.055)
			      .startAngle(0)
			      .endAngle(2 * Math.PI);
			var arc13 = d3.svg.arc()
			      .innerRadius(width * 0.03)
			      .outerRadius(width * 0.035)
			      .startAngle(0)
			      .endAngle(2 * Math.PI);
		    var arcs1 = canvas.selectAll("g.a")
			  .data(nodes)
			  .enter()
			      .append("g")
			      .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
			      .append("path")                          
			      .attr("class", "arcb")
			      .attr("d", function(d){if(d.name == "LC1"){return arc12(d)}if(d.name == "MS"){return arc12(d)}if(d.name == "AO"){return arc12(d)}if(d.name == "LC2"){return arc12(d)}if(d.name == "EB1"){return arc13(d)}if(d.name == "EB2"){return arc13(d)}if(d.name == "EB3"){return arc13(d)}if(d.name == "EB4"){return arc13(d)}if(d.name == "EB5"){return arc13(d)}if(d.name == "EB6"){return arc13(d)}if(d.name == "EB7"){return arc13(d)}if(d.name == "EB8"){return arc13(d)}} );
		      var arcs = canvas.selectAll("g.b")
			  .data(nodes)
			  .enter()
			      .append("g")
			      .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
			      .append("path")                          
			      .attr("class", "arc")
			      .attr("d", function(d){if(d.name == "LC1"){return arc(d)}if(d.name == "MS"){return arc1(d)}if(d.name == "AO"){return arc2(d)}if(d.name == "LC2"){return arc3(d)}if(d.name == "EB1"){return arc4(d)}if(d.name == "EB2"){return arc5(d)}if(d.name == "EB3"){return arc6(d)}if(d.name == "EB4"){return arc7(d)}if(d.name == "EB5"){return arc8(d)}if(d.name == "EB6"){return arc9(d)}if(d.name == "EB7"){return arc10(d)}if(d.name == "EB8"){return arc11(d)}} );

                             var circles = canvas.selectAll("circle")
				  .data(nodes)
				  .enter()
				      .append("circle")
				      .attr("cx", function (d) { return d.x_axis; })
				      .attr("cy", function (d) { return d.y_axis; })
				      .attr("r",function (d,i) { if(i > 3){return width * 0.03}else{return width * 0.045} })
				      .attr("fill","#ECEFF1")
				      .attr("stroke", "#607D8B")
				      .attr("stroke-width", width * 0.003)
				      .on("click", click1)
				      ; //radius of circle
                                  canvas.selectAll("text.a")
					  .data(nodes)
					  .enter()
					      .append("text")
					      .attr("x", function (d) { return d.x_axis - 16; })
					      .attr("y", function (d) { return d.y_axis + 11; })
					      .attr("fill", "#607D8B")
					      .attr("text-align", "center")
					      .attr("font-size", 30)
					      .text(function(d){return d.value });
				      canvas.selectAll("text.b")
					  .data(nodes)
					  .enter()
					      .append("text")
					      .attr("x", function (d,i) { if(i < 4){return d.x_axis - 25;}else{return d.x_axis - 85;} })
					      .attr("y", function (d,i) { if(i < 4){return d.y_axis + 80; }else{return d.y_axis +10;}})
					      .attr("fill", "#607D8B")
					      .attr("text-align", "center")
					      .attr("font-size", function (d,i) { if(i < 4){return 30; }else{return 25;}})
					      .text(function(d){return d.name });
                              
                             function click1(d){
                          /*this.parentNode.appendChild(this);*/
                        d3.select(this)
                           /* .style("pointer-events", "none")*/
                            .transition()
                            .duration(1500)
                            .ease("elastic")
                            .attr("r", width * 0.05)
                            .each("start",function(d){d3.select(this).attr("stroke","#ef5350");})
                            .each("end",function(d){d3.select(this).on("click", click2);});

                        }  
                               function click2(d){
                         /* this.parentNode.appendChild(this);*/
                        d3.select(this)
                           /* .style("pointer-events", "none")*/
                            .transition()
                            .duration(1500)
                            .ease("elastic")
                            .attr("r", width * 0.045)
                            .each("start",function(d){d3.select(this).attr("stroke","#607D8B");})
                            .each("end",function(d){d3.select(this).on("click", click1);});
                        }    
                      //d3.json("mydata.json",function(data){
                      // })
                    </script>
          </div>
          <div id="middle_rightp1">
 
          </div>				             
 	</div>
		<div class="right_side_bar"> 
               
          	</div>
		 <div id="pop_background"></div>
            <div id="pop_box_hr_1"></div>
		<div id="pop_box_report_2">
      
                <div style="width: 100%; background-color: #2980b9;"><a style="font-size: 16px; color: #fafafa; padding: 10px;"> DIET REPORT </a></div>
                <div style="width:100%;background: #fff; padding: 10px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> 
                   <label  style="width: 100%" id="lbpop1"></label><br>
				 <?php include 'report.php';?>
		
		<center><button style="width: 100px;" >Download</button></center>
                </div>    
</div>
		    
                       
            
	</div>
     
        <script>
         $(document).ready(function(){
            $('#open_hr_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_hr_1').fadeIn();
                return false;
            });
	$('#open_diet_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_report_2').fadeIn();
                return false;
            });
            $('#pop_background').click(function(){
                $('#pop_background').fadeOut();
                $('#pop_box_hr_1').fadeOut();
 		$('#pop_box_report_2').fadeOut();
                return false;
            });
         });
        </script>
 </body>
 </html>

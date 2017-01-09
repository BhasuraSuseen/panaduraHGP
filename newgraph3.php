
<?php

            require "connect.php";
             if(!empty($_POST["keyword"])){

              $letid=$_POST["keyword"];
              
             $letdetailsq=mysqli_query($conn,"SELECT * FROM letter WHERE letter_id='$letid'");
             $array=mysqli_fetch_assoc($letdetailsq);
            /*echo "<br><label>Letter ID : <label>". $array["letter_id"]."<br>";
             echo "<label>Date recived : <label>". $array["date"]."<br>";
             echo "<label>Subject : <label>". $array["subject"]."<br>";
             echo "<label>Recived from : <label>". $array["address"]."<br>";
             echo "<label>Type : <label>". $array["type"]."<br>";*/
             $letter_id = $array["letter_id"];
             $date = $array["date"];
             $subject = $array["subject"];
             $address = $array["address"];
             $type = $array["type"];
             $LC_to_MS = "";
             $MS_to_AO = "";
             $AO_to_LC = "";

             if(is_null($array['mcms'])){
             /* echo "<label>Letter Clerk to Medical Superintendent date : <label>Letter not forwarded<br>";*/
               $LC_to_MS = "";
             }
             else{
             /* echo "<label>Letter Clerk to Medical Superintendent date : <label>". $array["mcms"]."<br>";*/
              $LC_to_MS = $array["mcms"];
             }
              if(is_null($array['msao'])){
              /*echo "<label>Medical Superintendent to Admin Officer date : <label>Letter not forwarded<br>";*/
              $MS_to_AO="";
             }
             else{
             /* echo "<label>Medical Superintendent to Admin Officer date : <label>". $array["msao"]."<br>";*/
              $MS_to_AO = $array["msao"];
             }
              if(is_null($array['aomc'])){
             /* echo "<label>Admin Officer to Letter Clerk date : <label>Letter not forwarded<br>";*/
              $AO_to_LC = "";
             }
             else{
            /*  echo "<label>Admin Officer to Letter Clerk date : <label>". $array["aomc"]."<br>";*/
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
            /* echo "<lable>Current Location : </label>".$current_location;*/
            }
            
              ?>
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
mysqli_close($conn); 
?>

    <script id = "scriptid1"src="http://d3js.org/d3.v3.min.js"></script>

    <script id = "scriptid2">
      d3.select("p").text("D3 is working");
      var width = 800;
      var height = 600;
      var nodes = [
                  {"name": "EB1", "value" : 0, "x_axis": 100, "y_axis": 55},
                  {"name": "EB2", "value" : 0, "x_axis": 100, "y_axis": 125},
                  {"name": "EB3", "value" : 0, "x_axis": 100, "y_axis": 195},
                  {"name": "EB4", "value" : 0, "x_axis": 100, "y_axis": 265},
                  {"name": "EB5", "value" : 0, "x_axis": 100, "y_axis": 335},
                  {"name": "EB6", "value" : 0, "x_axis": 100, "y_axis": 405},
                  {"name": "EB7", "value" : 0, "x_axis": 100, "y_axis": 475},
                  {"name": "EB8", "value" : 0, "x_axis": 100, "y_axis": 545}
                 ];
      
                 nodes[0].value = <?php echo $eb11 ?>;
                  nodes[1].value = <?php echo $eb22 ?>;
                  nodes[2].value = <?php echo $eb33 ?>;
                  nodes[3].value = <?php echo $eb44  ?>;
                  nodes[4].value = <?php echo $eb55 ?>;
                  nodes[5].value = <?php echo $eb66 ?>;
                  nodes[6].value = <?php echo $eb77 ?>;
                  nodes[7].value = <?php echo $eb88 ?>;
                  
      var nodes3 = [{"name": "Letter ID : ", "value" : 0, "x_axis": 20, "y_axis": 25},
                  {"name": "Date received ................. ", "value" : "", "x_axis": 20, "y_axis": 70},
                  {"name": "Subject ............................ ", "value" : "", "x_axis": 20, "y_axis": 85},
                  {"name": "Received from ................ ", "value" : "", "x_axis": 20, "y_axis": 100},
                  {"name": "Type ................................. ", "value" : "", "x_axis": 20, "y_axis": 115},
                  {"name": "Letter Clerk to Medical Superintendent date : ", "value" : "", "x_axis": 100, "y_axis": 250},
                  {"name": "Medical Superintendent to Admin Officer date :", "value" : "", "x_axis": 250, "y_axis": 250},
                  {"name": "Admin Officer to Letter Clerk date : ", "value" : "", "x_axis": 400, "y_axis": 250}
                 ];
                  nodes3[0].value = <?php echo $letter_id ?>;
                  nodes3[1].value = "<?php echo $date ?>";
                  nodes3[2].value = "<?php echo $subject ?>";
                  nodes3[3].value = "<?php echo $address ?>";
                  nodes3[4].value = "<?php echo $type ?>";
                  nodes3[5].value = "<?php echo $LC_to_MS ?>";
                  nodes3[6].value = "<?php echo $MS_to_AO ?>";
                  nodes3[7].value = "<?php echo $AO_to_LC ?>";
                  
      var current_location = "<?php echo $current_location ?>";
                 
      var count = 0;
      for (i = 0; i < 8; i++) { 
          count = count + nodes[i].value;
      }


      var canvas = d3.select("#svgcontent").append("svg")
        .attr('width', width)
        .attr('height', height)
        ;
      
                
     
        var a0 = (nodes[0].value  /  count) * 2 ;
        var a1 = (nodes[1].value  /  count) * 2  ;
        var a2 = (nodes[2].value  /  count) * 2  ;
        var a3 = (nodes[3].value  /  count) * 2  ;
        var a4 = (nodes[4].value  /  count) * 2  ;
        var a5 = (nodes[5].value  /  count) * 2  ;
        var a6 = (nodes[6].value  /  count) * 2  ;
        var a7 = (nodes[7].value  /  count) * 2  ;
        
         
        var arc4 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a0 * Math.PI); 
        var arc5 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a1 * Math.PI); 
        var arc6 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a2 * Math.PI); 
        var arc7 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a3 * Math.PI); 
        var arc8 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a4 * Math.PI); 
        var arc9 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a5 * Math.PI); 
        var arc10 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a6 * Math.PI); 
        var arc11 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a7 * Math.PI);
        var arc12 = d3.svg.arc()
              .innerRadius(width * 0.045)
              .outerRadius(width * 0.055)
              .startAngle(0)
              .endAngle(2 * Math.PI);
        var arc13 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(2 * Math.PI);
    var arcs1 = canvas.selectAll("g.a")
          .data(nodes)
          .enter()
              .append("g")
              .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
              .append("path")                          
              .attr("class", "arcb")
              .attr("d", function(d){if(d.name == "EB1"){return arc13(d)}if(d.name == "EB2"){return arc13(d)}if(d.name == "EB3"){return arc13(d)}if(d.name == "EB4"){return arc13(d)}if(d.name == "EB5"){return arc13(d)}if(d.name == "EB6"){return arc13(d)}if(d.name == "EB7"){return arc13(d)}if(d.name == "EB8"){return arc13(d)}} );
      var arcs = canvas.selectAll("g.b")
          .data(nodes)
          .enter()
              .append("g")
              .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
              .append("path")                          
              .attr("class", "arc")
              .attr("d", function(d){if(d.name == "EB1"){return arc4(d)}if(d.name == "EB2"){return arc5(d)}if(d.name == "EB3"){return arc6(d)}if(d.name == "EB4"){return arc7(d)}if(d.name == "EB5"){return arc8(d)}if(d.name == "EB6"){return arc9(d)}if(d.name == "EB7"){return arc10(d)}if(d.name == "EB8"){return arc11(d)}} );
      
    /*  canvas.append("path")
          .attr("class", "arc")
          .attr("d", arc);*/
      var circles = canvas.selectAll("circle")
          .data(nodes)
          .enter()
              .append("circle")
              .attr("cx", function (d) { return d.x_axis; })
              .attr("cy", function (d) { return d.y_axis; })
              .attr("r", width * 0.03)
              .attr("fill","#ECEFF1")
              .attr("stroke",function (d) { if(d.name == current_location){return "#ef5350"}else{return "#607D8B"} })
              .attr("stroke-width", function (d) { if(d.name == current_location){return width * 0.005}else{return width * 0.003} })
              .on("click", click1)
              ;
               //radius of circle
      
      canvas.selectAll("text.a")
          .data(nodes)
          .enter()
              .append("text")
              .attr("x", function (d) { return d.x_axis - 10; })
              .attr("y", function (d) { return d.y_axis + 11; })
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", 30)
              .text(function(d){return d.value });
      canvas.selectAll("text.b")
          .data(nodes)
          .enter()
              .append("text")
              .attr("x", function (d,i) { return d.x_axis - 85;} )
              .attr("y", function (d,i) { return d.y_axis +10;})
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function (d,i) { return 25;})
              .text(function(d){return d.name });
       canvas.selectAll("text.c")
          .data(nodes3)
          .enter()
              .append("text")
              .attr("x", function (d) { return d.x_axis })
              .attr("y", function (d) { return d.y_axis + 20})
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function(d,i){ return 14;  })
              .text(function(d,i){return d.value; });
        
        canvas.selectAll("text.d")
          .data(nodes4)
          .enter()
              .append("text")
              .attr("x", function (d,i) { return d.x_axis - 85; })
              .attr("y", function (d,i) { return d.y_axis +10;})
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function (d,i) { return 25;})
              .text(function(d){return d.name  });
       
       function click1(d){
    /*this.parentNode.appendChild(this);*/
  d3.select(this)
     /* .style("pointer-events", "none")*/
      .transition()
      .duration(1500)
      .ease("elastic")
      .attr("stroke-width", width * 0.005)
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
      .attr("stroke-width", width * 0.003)
      .each("start",function(d){d3.select(this).attr("stroke","#607D8B");})
      .each("end",function(d){d3.select(this).on("click", click1);});
  }    


      d3.json("mydata.json",function(data){


       })


    </script>

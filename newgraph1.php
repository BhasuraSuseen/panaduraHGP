
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
             $location='';
             if (is_null($array["mceb"])==FALSE){
              if ($array["eb"]==1){
                $current_location="EB1";
                $location="EB";
              }
              elseif ($array["eb"]==2){
                $current_location="EB2";
                $location="EB";
              }
              elseif ($array["eb"]==3){
                $current_location="EB3";
                $location="EB";
              }
              elseif ($array["eb"]==4){
                $current_location="EB4";
                $location="EB";
              }
              elseif ($array["eb"]==5){
                $current_location="EB5";
                $location="EB";
              }
              elseif ($array["eb"]==6){
                $current_location="EB6";
                $location="EB";
              }
              elseif ($array["eb"]==7){
                $current_location="EB7";
                $location="EB";
              }
              elseif ($array["eb"]==8){
                $current_location="EB8";
                $location="EB";
              }     
             }
             else {
              if(is_null($array["aomc"])==FALSE){
                $current_location="LC2";
                $location="LC2";
              }
              else{
                if(is_null($array["msao"])==FALSE){
                $current_location="AO";
                $location="AO";
                }
                else{
                  if(is_null($array["mcms"])==FALSE){
                    $current_location="MS";
                    $location="MS";
                  }
                  else{
                    $current_location="LC1";
                    $location="LC1";
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
$rplysql="select * from letter_rep where letter_id ='".$letter_id."'";
$r=mysqli_query($conn,$rplysql);
$r1=mysqli_num_rows($r);
$replied = "F";
if($r1>0){
  $replied = "T";
}
mysqli_close($conn); 
?>
    
    <script id = "scriptid1"src="http://d3js.org/d3.v3.min.js"></script>
    <script id = "scriptid2">
      /* Svg dynamic graph script created Using D3(Data driven document ) library*/
      var width = 800;
      var height = 600;
      /* jason objects for graph nodes*/
      var nodes = [{"name": "LC1", "name1": "Letter Clerk", "value" : 0, "x_axis": 60, "y_axis": 300},
                  {"name": "MS","name1": "Medical Superintendent", "value" : 0, "x_axis": 210, "y_axis": 300},
                  {"name": "AO", "value" : 0, "x_axis": 360, "y_axis": 300},
                  {"name": "LC2", "value" : 0, "x_axis": 510, "y_axis": 300},
                  {"name": "EB1", "value" : 0, "x_axis": 740, "y_axis": 55},
                  {"name": "EB2", "value" : 0, "x_axis": 740, "y_axis": 125},
                  {"name": "EB3", "value" : 0, "x_axis": 740, "y_axis": 195},
                  {"name": "EB4", "value" : 0, "x_axis": 740, "y_axis": 265},
                  {"name": "EB5", "value" : 0, "x_axis": 740, "y_axis": 335},
                  {"name": "EB6", "value" : 0, "x_axis": 740, "y_axis": 405},
                  {"name": "EB7", "value" : 0, "x_axis": 740, "y_axis": 475},
                  {"name": "EB8", "value" : 0, "x_axis": 740, "y_axis": 545}
                 ];
      /* jason objects for graph nodes name tags*/
      var noden = [{"name": "Letter Clerk", "value" : 0, "x_axis": 60, "y_axis": 300},
                  {"name": "Medical Superintendent", "value" : 0, "x_axis": 210, "y_axis": 300},
                  {"name": "Administrative Officer", "value" : 0, "x_axis": 360, "y_axis": 300},
                  {"name": "Letter Clerk Revisited ", "value" : 0, "x_axis": 510, "y_axis": 300},
                  {"name": "EB head", "value" : 0, "x_axis": 740, "y_axis": 55},
                  {"name": "Letter Clerk", "value" : 0, "x_axis": 740, "y_axis": 125},
                  {"name": "Diet Clerk", "value" : 0, "x_axis": 740, "y_axis": 195},
                  {"name": "Nurse Clerk", "value" : 0, "x_axis": 740, "y_axis": 265},
                  {"name": "Paramedical Clerk", "value" : 0, "x_axis": 740, "y_axis": 335},
                  {"name": "Doctor's Clerk", "value" : 0, "x_axis": 740, "y_axis": 405},
                  {"name": "Maintanance Clerk", "value" : 0, "x_axis": 740, "y_axis": 475},
                  {"name": "Minor Staff Clerk", "value" : 0, "x_axis": 740, "y_axis": 545}
                 ];
       /* jason object for Letter detai circle tags*/
      var nodesl=[{"name": "Letter", "value" : 0,"location" : "","type" : "Normal Letter","replied" : "F", "x_axis": 285, "y_axis": 120}];
      var nodesr=[{"name": "Reply Status",  "x_axis": 110, "y_axis": 120},
                  {"name": "Normal Letter",  "x_axis": 330, "y_axis": 50},
                  {"name": "Registered Post",  "x_axis": 370, "y_axis": 100},
                  {"name": "Post Card",  "x_axis": 370, "y_axis": 150},
                  {"name": "Other Letter",  "x_axis": 330, "y_axis": 200}
                  ];
      /* dynamic data allocation for nodes*/
      nodesl[0].location="<?php echo $location ?>";
      nodesl[0].type="<?php echo $type ?>";
      nodesl[0].replied="<?php echo $replied ?>";
        var links = [{"x1": 60, "y1": 300, "x2": 210, "y2": 300},
                      {"x1": 210, "y1": 300, "x2": 360, "y2": 300},
                      {"x1": 360, "y1": 300, "x2": 510, "y2": 300},
                      {"x1": 510, "y1": 300, "x2": 610, "y2": 300},
                      {"x1": 610, "y1": 52, "x2": 610, "y2": 547},
                      {"x1": 610, "y1": 55, "x2": 650, "y2": 55},
                      {"x1": 610, "y1": 125, "x2": 650, "y2": 125},
                      {"x1": 610, "y1": 195, "x2": 650, "y2": 195},
                      {"x1": 610, "y1": 265, "x2": 650, "y2": 265},
                      {"x1": 610, "y1": 335, "x2": 650, "y2": 335},
                      {"x1": 610, "y1": 405, "x2": 650, "y2": 405},
                      {"x1": 610, "y1": 475, "x2": 650, "y2": 475},
                      {"x1": 610, "y1": 545, "x2": 650, "y2": 545}
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

      /*var nodes3 = [{"name": "Letter ID : ", "value" : 0, "x_axis": 20, "y_axis": 25},
                  {"name": "Date received ................. ", "value" : "", "x_axis": 20, "y_axis": 70},
                  {"name": "Subject ............................ ", "value" : "", "x_axis": 20, "y_axis": 85},
                  {"name": "Received from ................ ", "value" : "", "x_axis": 20, "y_axis": 100},
                  {"name": "Type ................................. ", "value" : "", "x_axis": 20, "y_axis": 115},
                  {"name": "Letter Clerk to Medical Superintendent date : ", "value" : "", "x_axis": 100, "y_axis": 250},
                  {"name": "Medical Superintendent to Admin Officer date :", "value" : "", "x_axis": 250, "y_axis": 250},
                  {"name": "Admin Officer to Letter Clerk date : ", "value" : "", "x_axis": 400, "y_axis": 250}
                 ];*/
      var nodes3 = [{"name": "Letter ID : ", "value" : 0, "x_axis": 245, "y_axis": 90},
                  {"name": "Date received ................. ", "value" : "", "x_axis": 235, "y_axis": 120},
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
      /* letter counts and propotion calculation*/
      var current_location = "<?php echo $current_location ?>";
                 
      var count = 0;
      for (i = 0; i < 12; i++) { 
          count = count + nodes[i].value;
      }


      var canvas = d3.select("#svgcontent").append("svg")
        .attr('width', width)
        .attr('height', height)
        ;
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
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a4 * Math.PI); 
        var arc5 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a5 * Math.PI); 
        var arc6 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a6 * Math.PI); 
        var arc7 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a7 * Math.PI); 
        var arc8 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a8 * Math.PI); 
        var arc9 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a9 * Math.PI); 
        var arc10 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a10 * Math.PI); 
        var arc11 = d3.svg.arc()
              .innerRadius(width * 0.03)
              .outerRadius(width * 0.038)
              .startAngle(0)
              .endAngle(a11 * Math.PI);
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
        var arc14 = d3.svg.arc()
              .innerRadius(width * 0.08)
              .outerRadius(width * 0.09)
              .startAngle(0)
              .endAngle(2 * Math.PI);
        var arc15 = d3.svg.arc()
              .innerRadius(width * 0.08)
              .outerRadius(width * 0.09)
              .startAngle(0)
              .endAngle(0.25 * Math.PI);
        var arc16 = d3.svg.arc()
              .innerRadius(width * 0.08)
              .outerRadius(width * 0.09)
              .startAngle(0.25 * Math.PI)
              .endAngle(0.5 * Math.PI);
        var arc17 = d3.svg.arc()
              .innerRadius(width * 0.08)
              .outerRadius(width * 0.09)
              .startAngle(0.5 * Math.PI)
              .endAngle(0.75 * Math.PI);
        var arc18 = d3.svg.arc()
              .innerRadius(width * 0.08)
              .outerRadius(width * 0.09)
              .startAngle(0.75 * Math.PI)
              .endAngle(1 * Math.PI);
        var arc19 = d3.svg.arc()
              .innerRadius(width * 0.08)
              .outerRadius(width * 0.09)
              .startAngle(1 * Math.PI)
              .endAngle(2 * Math.PI);   
    /* Graph drawing layer by layer these are svg drawings*/
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
      
    /*  canvas.append("path")
          .attr("class", "arc")
          .attr("d", arc);*/
      var circles = canvas.selectAll("circle")
          .data(nodes)
          .enter()
              .append("circle")
              .attr("cx", function (d) { return d.x_axis; })
              .attr("cy", function (d) { return d.y_axis; })
              .attr("r",function (d,i) { if(i > 3){return width * 0.03}else{return width * 0.045} })
              .attr("fill","#ECEFF1")
              .attr("stroke",function (d) { if(d.name == current_location){return "#ef5350"}else{return "#607D8B"} })
              .attr("stroke-width", function (d) { if(d.name == current_location){return width * 0.005}else{return width * 0.003} })
              .on("click", click1)
              ;
      var arcs2 = canvas.selectAll("g.c")
          .data(nodesl)
          .enter()
              .append("g")
              .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
              .append("path")                          
              .attr("class", "arcb")
              .attr("d", function(d){return arc14(d)} );
      
      var arcs3 = canvas.selectAll("g.f")
          .data(nodesl)
          .enter()
              .append("g")
              .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
              .append("path")                          
              .attr("class", "arcc")
              .attr("d", function(d){ return arc16(d)} );
      var arcs4 = canvas.selectAll("g.g")
          .data(nodesl)
          .enter()
              .append("g")
              .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
              .append("path")                          
              .attr("class", "arcc")
              .attr("d", function(d){ return arc18(d)} );

      var arcs5 = canvas.selectAll("g.d")
          .data(nodesl)
          .enter()
              .append("g")
              .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
              .append("path")                          
              .attr("class", "arc")
              .attr("d", function(d){if(d.type == "Normal Letter"){return arc15(d)} if(d.type == "Registered Post"){return arc16(d)} if(d.type == "Post Card"){return arc17(d)} if(d.type == "Other"){return arc18(d)} } );
      var arcs6 = canvas.selectAll("g.e")
          .data(nodesl)
          .enter()
              .append("g")
              .attr("transform",function(d) {return "translate(" + d.x_axis + " , " + d.y_axis + ")";})
              .append("path")                          
              .attr("class", "arc")
              .attr("d", function(d){ if(d.replied == "T"){return arc19(d)}} );

      var circles1 = canvas.selectAll("circle.a")
          .data(nodesl)
          .enter()
              .append("circle")
              .attr("cx", function (d) { return d.x_axis; })
              .attr("cy", function (d) { return d.y_axis; })
              .attr("r",width * 0.08)
              .attr("fill","#ECEFF1")
              .attr("stroke","#607D8B")
              .attr("stroke-width", width * 0.003)
              .on("click", click1)
              ;
               //radius of circle
      /* text layers*/
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
              .attr("x", function (d,i) { if(i < 4){return d.x_axis - 25;}else{return d.x_axis - 85;} })
              .attr("y", function (d,i) { if(i < 4){return d.y_axis + 80; }else{return d.y_axis +10;}})
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function (d,i) { if(i < 4){return 30; }else{return 25;}})
              .text(function(d){return d.name });
      canvas.selectAll("text.f")
          .data(noden)
          .enter()
              .append("text")
              .attr("x", function (d,i) { if(i < 4){return d.x_axis - 35;}else{return d.x_axis - 110;} })
              .attr("y", function (d,i) { if(i < 4){return d.y_axis + 90; }else{return d.y_axis +20;}})
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function (d,i) { if(i < 4){return 10; }else{return 9;}})
              .text(function(d){return d.name });
     /*  canvas.selectAll("text.c")
          .data(nodes3)
          .enter()
              .append("text")
              .attr("x", function (d) { return d.x_axis })
              .attr("y", function (d) { return d.y_axis + 20})
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function(d,i){if(i < 1){return 16 }else{ return 14}   })
              .text(function(d,i){if(i < 5){return (d.name + d.value)}else{ return d.value}   });*/
        canvas.selectAll("text.c")
          .data(nodes3)
          .enter()
              .append("text")
              .attr("x", function (d) { return d.x_axis })
              .attr("y", function (d) { return d.y_axis + 20})
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function(d,i){if(i == 0){return 30 }if(i == 1){return 20 }if(i > 4){ return 14}   })
              .text(function(d,i){if(i < 2){return (d.value)}if(i>4){return d.value}});
        
       /* canvas.selectAll("text.d")
          .data(nodes4)
          .enter()
              .append("text")
              .attr("x", function (d,i) { if(i < 4){return d.x_axis - 25;}else{return d.x_axis - 85;} })
              .attr("y", function (d,i) { if(i < 4){return d.y_axis + 80; }else{return d.y_axis +10;}})
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function (d,i) { if(i < 4){return 30; }else{return 25;}})
              .text(function(d){return d.name  });*/
        canvas.selectAll("text.e")
          .data(nodesr)
          .enter()
              .append("text")
              .attr("x", function (d,i) { return d.x_axis })
              .attr("y", function (d,i) { return d.y_axis })
              .attr("fill", "#607D8B")
              .attr("text-align", "center")
              .attr("font-size", function (d,i) { return 14; })
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

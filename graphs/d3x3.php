
    <p> Hellow </p>
    <?php
        $val1 = 10;
        $val2 = 12;
    ?>
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
                 nodes[1].value = <?php echo $val1 ?>;
                 nodes[2].value = <?php echo $val2 ?>;
      var canvas = d3.select(".middle_left").append("svg:svg")
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


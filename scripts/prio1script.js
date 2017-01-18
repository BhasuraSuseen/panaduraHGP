$(document).ready(function(){
  $('#open_report_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_report_1').fadeIn();
                return false;
  });
   $('#open_diet_1').click(function(){
                $('#pop_background').fadeIn();
                $('#pop_box_report_2').fadeIn();
                return false;
  });
  $('#open_mail_1').click(function(){
      $('#pop_background').fadeIn();
      $('#pop_box_mail_1').fadeIn();
      return false;
  });
     $('#open_mail_2').click(function(){
     $('#pop_background').fadeIn();
     $('#pop_box_mail_2').fadeIn();
      return false;
  });
  $('#pop_background').click(function(){
     $('#pop_background').fadeOut();
     $('#pop_box_mail_1').fadeOut();
     $('#pop_box_mail_2').fadeOut();
     $('#pop_box_report_1').fadeOut();
     $('#pop_box_report_2').fadeOut();
 
      return false;
  });
// Search box ajax functions
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
    url: "readPrio1.php",
    data:'keyword='+$(this).val(),
    beforeSend: function(){
      
    },
    success: function(data){
     
    }
    });
  });
  //these ajax post messeges will get data from database. while typing in the search boxess
  $("#search-box1").keyup(function(){
    $.ajax({
    type: "POST",
    url: "readPrio1.php",
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
    url: "readPrio1.php",
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
//Graph genertion, letter data retrive function calls 
function selectletterid(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
func1(val);
func2(val);
document.getElementById("search-box").value="";
document.getElementById("search-box1").value="";
document.getElementById("search-box2").value="";
}
function selectletterid1(val) {
$("#search-box1").val(val);
$("#suggesstion-box").hide();
func1(val);
func2(val);
document.getElementById("search-box").value="";
document.getElementById("search-box1").value="";
document.getElementById("search-box2").value="";
}
function selectaddress(val) {
$("#search-box2").val(val);
$("#suggesstion-box").hide();
func1(val);
func2(val);
document.getElementById("search-box").value="";
document.getElementById("search-box1").value="";
document.getElementById("search-box2").value="";
}

//function for dynamic graph generation, dynamic data are passed through this function, then the svg graph will be generated 
function func1(data){
$.ajax({
    type: "POST",
    url: "newgraph1.php",
    data:'keyword='+data,
    beforeSend: function(){
      
    },
    success: function(data){
     $("#svgcontent").html(data)
    }
  });
 
}
//function for letter deatail retriving 
function func2(data){
$.ajax({
    type: "POST",
    url: "letter-det.php",
    data:'keyword='+data,
    beforeSend: function(){
      
    },
    success: function(data){
     $("#lettercontent").html(data)
    }
  });
 
}

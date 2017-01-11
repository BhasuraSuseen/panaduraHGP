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

  $("#search-box").keyup(function(){
    $.ajax({
    type: "POST",
    url: "readPrio2.php",
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
    url: "readPrio2.php",
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
    url: "readPrio2.php",
    data:'keyword1='+$(this).val(),
    beforeSend: function(){
      $("#search-box1").css("background","#FFF ");
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
    url: "readPrio2.php",
    data:'keyword2='+$(this).val(),
    beforeSend: function(){
      $("#search-box2").css("background","#FFF ");
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
func2(val);
}
function selectletterid1(val) {
$("#search-box1").val(val);
$("#suggesstion-box").hide();
func1(val);
func2(val);
}
function selectaddress(val) {
$("#search-box2").val(val);
$("#suggesstion-box").hide();
func1(val);
func2(val);
}
function func1(data){
$.ajax({
    type: "POST",
    url: "newgraph2.php",
    data:'keyword='+data,
    beforeSend: function(){
      
    },
    success: function(data){
     $("#svgcontent").html(data)
    }
  });
 
}
function func2(data){
$.ajax({
    type: "POST",
    url: "letter-det2.php",
    data:'keyword='+data,
    beforeSend: function(){
      
    },
    success: function(data){
     $("#lettercontent").html(data)
    }
  });
 
}

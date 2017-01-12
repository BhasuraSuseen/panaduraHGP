var obj;

function abc(a){
alet(a);
}

function checkBrowser() {
    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else {
        obj = new ActiveXobject("Microfoft.ActiveXobject");
    }
}
function loadParadata() {
    checkBrowser();
    obj.onreadystatechange = function() {


        if (obj.readyState === 4 && obj.status === 200) {
           // alert(obj.responseText);
            var text = obj.responseText;

            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;

        }
    };
    obj.open("POST", "./attendence/viewParaArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();


}

function loadDrdata() {
    checkBrowser();
    obj.onreadystatechange = function() {


        if (obj.readyState === 4 && obj.status === 200) {

            var text = obj.responseText;

            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;

        }
    };
    obj.open("POST", "./attendence/viewDoctorArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();


}

function loadEbdata() {
    checkBrowser();
       
    obj.onreadystatechange = function() {


       if (obj.readyState === 4 && obj.status === 200) {
            //alert(obj.responseText);
            var text = obj.responseText;

            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;

        }
    };
    obj.open("POST", "./attendence/viewEbArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();

}


function loadNurcedata() {
    checkBrowser();
    obj.onreadystatechange = function() {


        if (obj.readyState === 4 && obj.status === 200) {

            var text = obj.responseText;

            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;

        }
    };
    obj.open("POST", "./attendence/viewNurceArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();


}

function loadMinordata() {
    checkBrowser();
    obj.onreadystatechange = function() {


        if (obj.readyState === 4 && obj.status === 200) {

            var text = obj.responseText;

            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;

        }
    };
    obj.open("POST", "./attendence/viewMinorArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();


}

function saveAttends(name, date, attend) {
   
   
    try {
 alert("attendance awa");
        checkBrowser();
        
        
        obj.onreadystatechange = function() {


            //           if (obj.readyState === 4 && obj.status === 200) {
           //alert(obj.responseText);
//                       
//                    if (obj.responseText == "Hri mcn") {
//
//                         alert(obj.responseText);
//                    } else {
//                        alert("Not Added!!");
//                    }
//
//
            //            }
        };
        obj.open("POST", "./attendence/saveattends.php", true);
        obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj.send("nic=" + name + "&date=" + date + "&attend=" + attend);

    } catch (err) {
    }

}

//function chng(){
//    
//   document.getElementById('a5').src = "WWW.YIFY-TORRENTS.COM.jpg";
//    
//}
//function chng_out(){
//    
//   document.getElementById('a5').src = "mthu.jpg";
//    
//}
//
//
//
//
//    if (!Modernizr.touch || !Modernizr.inputtypes.date) {
//        $('input[type=date]')
//            .attr('type', 'text')
//            .datepicker({
//                // Consistent format with the HTML5 picker
//                dateFormat: 'yy-mm-dd'
//            });
//    }
//
function searchAttends(day,id) {
    checkBrowser();

    obj.onreadystatechange = function() {

        //alert(obj.responseText);
        if (obj.readyState === 4 && obj.status === 200) {

            var text = obj.responseText;
            
            //alert(obj.responseText);
//
//            var abc;
//
//            if (text == '0'){
//                abc = "Absent";
//            }else if(text == '1'){
//                abc = "Present";
//            }else if(text == null){
//                abc = "valid error";
//            }else{
//                abc = text;
//            }
            
            
//            alert(obj.responseText);
            document.getElementById('st6').innerHTML = text;
          

        }
    };
    obj.open("POST", "./attendence/search.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send("nic=" + id + "&day=" + day);


}


    var obj;

    function checkBrowser() {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }

    function saveLeave(leave, type, reqType, nic) {
        try {

            checkBrowser();
            obj.onreadystatechange = function() {

                if (obj.readyState === 4 && obj.status === 200) {


                        alert(obj.responseText);
//                    if (obj.responseText == "Hri mcn") {
//
//                    } else {
//                        alert("Not Added!!")
//                    }


                }
            };
            obj.open("POST", "./attendence/saveLeave.php", true);
            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            obj.send("leave=" + leave + "&type=" + type + "&rtype=" + reqType + "&nic=" + nic);



        } catch (err) {
        }
    }


            
 function getpdf() {
  

        checkBrowser();
        obj.onreadystatechange = function() {
        alert 'okkkk'
        };
        obj.open("POST", "report.php", true);
        obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj.send();
 }


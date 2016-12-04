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
    obj.open("POST", "viewParaArp.php", true);
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
    obj.open("POST", "viewDoctorArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();


}

function loadEbdata() {
    checkBrowser();
   
    obj.onreadystatechange = function() {


       if (obj.readyState === 4 && obj.status === 200) {
            alert(obj.responseText);
            var text = obj.responseText;

            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;

        }
    };
    obj.open("POST", "viewEbArp.php", true);
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
    obj.open("POST", "viewNurceArp.php", true);
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
    obj.open("POST", "viewMinorArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();


}

function saveAttends(name, date, attend) {
    try {

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
        obj.open("POST", "saveattends.php", true);
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
    obj.open("POST", "search.php", true);
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
            obj.open("POST", "saveLeave.php", true);
            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            obj.send("leave=" + leave + "&type=" + type + "&rtype=" + reqType + "&nic=" + nic);



        } catch (err) {
        }
    }


function tableToJson(table) {
var data = [];

// first row needs to be headers
var headers = [];
for (var i=0; i<table.rows[0].cells.length; i++) {
headers[i] = table.rows[0].cells[i].innerHTML.toUpperCase().replace(/ /gi,'');
}
data.push(headers);
// go through cells
for (var i=1; i<table.rows.length; i++) {

var tableRow = table.rows[i];
var rowData = {};

for (var j=0; j<tableRow.cells.length; j++) {

rowData[ headers[j] ] = tableRow.cells[j].innerHTML;

}

data.push(rowData);
}

return data;
}




function callme(){
 var table = tableToJson($('tbl1').get(0));
 var doc = new jsPDF('l','pt','letter',true);


 $.each(table, function(i, row){
 $.each(row, function(j,cell){
 if(j=="DATE" | i==0){
 doc.cell(20,50,150,30,cell,i);
 }
 else{
 doc.cell(20,50,150,30,cell,i);
 }

 });
 });

 doc.save('Report.pdf');
 }



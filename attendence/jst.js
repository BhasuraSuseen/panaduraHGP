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
function loadParadata(day) {
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
    obj.send("day="+day);


}

function loadDrdata(day) {
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
    obj.send("day="+day);


}

function loadEbdata(day) {
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
    obj.send("day="+day);

}


function loadNurcedata(day) {
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
    obj.send("day="+day);


}

function loadMinordata(day) {
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
    obj.send("day="+day);


}

function saveAttends(name, date, attend) {
   
   
    try {
 //alert("Attendence Recorded!");
        checkBrowser();
        
        
        obj.onreadystatechange = function() {

        };
        obj.open("POST", "./attendence/saveattends.php", true);
        obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj.send("nic=" + name + "&date=" + date + "&attend=" + attend);

    } catch (err) {
    }

}

function searchAttends(day,id) {
    checkBrowser();

    obj.onreadystatechange = function() {

        //alert(obj.responseText);
        if (obj.readyState === 4 && obj.status === 200) {

            var text = obj.responseText;
  
                   
//            alert(obj.responseText);
            document.getElementById('st6').innerHTML = text;
          

        }
    };
    obj.open("POST", "./attendence/search.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send("nic=" + id + "&day=" + day);


}


  

    function saveLeave(nic, lvType,des,rqtype ) {
        try {

            checkBrowser();
            obj.onreadystatechange = function() {

                if (obj.readyState === 4 && obj.status === 200) {


                        alert("Leave Record Added!");
                }
            };
            obj.open("POST", "./leave/saveLeave.php", true);
            obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            obj.send("nic=" + nic +  "&lvtype=" + lvType +"&descr="+des + "&rqType=" + rqtype);



        } catch (err) {
        }
    }






var obj;



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


            // if (obj.responseText == "Hri mcn") {


//            alert(obj.responseText);
//            
//            
//            var f = JSON.parse(obj.responseText);
//            
//            alert(f);



            var text = obj.responseText;
            
            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;



//                    } else {
//                        alert("Not Added!!");
//                    }


        }
    };
    obj.open("POST", "attendence/viewParaArp.php", true);
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
    obj.open("POST", "attendence/viewDoctorArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();


}

function loadEbdata() {
    checkBrowser();
    obj.onreadystatechange = function() {


        if (obj.readyState === 4 && obj.status === 200) {

            var text = obj.responseText;
            
            document.getElementById('st1').innerHTML = JSON.parse(text).a;
            document.getElementById('st2').innerHTML = JSON.parse(text).b;
            document.getElementById('st3').innerHTML = JSON.parse(text).c;

        }
    };
    obj.open("POST", "attendence/viewEbArp.php", true);
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
    obj.open("POST", "attendence/viewNurceArp.php", true);
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
    obj.open("POST", "attendence/viewMinorArp.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send();


}

function saveAttends(name, date, attend) {
    try {

        checkBrowser();
        obj.onreadystatechange = function() {

           
     //           if (obj.readyState === 4 && obj.status === 200) {
// alert(obj.responseText);
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
        obj.open("POST", "attendence/saveattends.php", true);
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
//            alert(text);

            var abc = "Present";

            if (text == '0'){
                abc = "Absent";
            }
            
            document.getElementById('st5').innerHTML = abc;
          

        }
    };
    obj.open("POST", "search.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send("nic=" + id + "&day=" + day);


}

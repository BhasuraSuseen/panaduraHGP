
<link rel="stylesheet" type="text/css" href="./styles/attend styl.css" media="screen" />
<select id="ser" style="width: 30%; height: 35px">
    <option value="sdfjsdeesfsdd">Select Dpt: Type</option>
    <option value="doctor">Doctor</option>
    <option value="nurce">Nurse</option>
    <option value="eb">EB Office</option>
    <option value="para">Para Medical Officer</option>
    <option value="minor">Minor Staff</option>
  </select>
<button class="attblack_button" style="width: 30%" onclick="hrser(document.getElementById('ser').value)">Search</button>

    <label id="lbview"></label>
<script>


var obj;



function checkBrowser() {
    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else {
        obj = new ActiveXobject("Microfoft.ActiveXobject");
    }
}

function hrser(type){
   // alert(type)
      checkBrowser();
    obj.onreadystatechange = function() {


        if (obj.readyState === 4 && obj.status === 200) {

            var text = obj.responseText;

            document.getElementById('lbview').innerHTML = text;
           
        }
    };
    obj.open("POST", "hrreportview.php", true);
    obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    obj.send("type="+type);

}
</script>



Type:<input type="text" id="ser">
<button onclick="hrser(document.getElementById('ser').value)">Search</button>
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
    alert(type)
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


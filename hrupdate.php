
 
    <!--<form action="upload.php" method="post" enctype="multipart/form-data" target="iframe">-->
    <input type="text" name="nic1" id="nic1" placeholder="NIC NO "><button style="width: 100px" onclick="get(document.getElementById('nic1').value)">Search</button>
    <!--Employee photo :-->
    <!--<input type="file" name="fileToUpload" id="fileToUpload">-->
    <!--<input type="submit" value="Upload Image" name="submit">-->
    </form>
        <!--<<iframe class="iframe1" name="iframe" height="75px"></iframe>-->

    <form action="hrup.php" method="post" target="iframehr">
     * Fields that are not editable
        <table style="width: 90%"><tr>
            
                <td>First Name<br><input id="fname" name="fname" style="width: 88%" type="text" name="fname" readonly>*</td>
                <td>Last Name<br><input id="lname" name="lname" style="width: 88%" type="text" name="lname" readonly>*</td>
            </tr></table>
        <table style="width: 90%"><tr>
                Birth Date
            <td><input id="bdate" type="date" name="bdate" style="width: 88%" readonly>*</td>

            </tr>
        </table>
        <table style="width: 90%">
            <tr><td> Address
                    <input id="address" type="text" name="address" style="width: 100%"></td></tr></table>
        <table style="width: 90%">
            <tr><td>NIC No<br><input id="nic" type="text" name="nic" style="width: 88%" readonly>*</td>
                <td>Contact No<br><input id="cno" type="int" name="cnumber"  style="width: 88%"></td>
                <td>Gender <br><input id="gender" type="text" name="gender"  style="width: 88%" readonly>*</td>
            </tr></table>
        Employee Type<br>
        <select>
            <option id="etype"></option>
            <option>Doctor</option>
            <option>Para Medical Officer</option>
            <option>Minor Staff</option>
            <option>Nurce</option>
            <option>EB Officer</option>

        </select>

        <table style="width: 90%"><tr><td>
                    First Employment Date<br>
                    <input type="Date" name="fedate" id="fedate" style="width: 88%" readonly>*</td>
                <td>Employment Commencement Date<br>
                    <input type="Date" id="ecdate" name="ecdate" style="width: 88%" readonly>*</td></tr>
            <tr> <td>Socond Grade Promotion Date<br>
                    <input type="Date" name="sgpdate" id="sgpdate" style="width: 100%" ></td>
                <td> First Grade Promotion Date<br>
                    <input type="Date" name="fgpdate" id="fgpdate" style="width: 100%"></td></tr>
            <tr><td>    Special Grade Promotion Date<br>
                    <input type="Date" name="cgpdate" id="cgpdate" style="width: 100%"></td>
                <td>Salary<br>
                    <input type="number" name="salary" id="salary" style="width: 100%"></td></tr> 
            <tr><td>Salary Incremental Date<br>
                    <input type="Date" name="sidate" id="sidate" style="width: 100%"></td>
                <td>Remarks<br><input type="text" name="remarks" id="remarks" style="width: 100%"></td>
            </tr></table>

        <input type="submit" value="Update" name = "submit">
    </form>
    <iframe class="iframehr" name="iframehr"  height="3%" width="70%"></iframe>

    <!--?php include 'employee_hr/hr.php'; ?-->

</div>
<script>

    var obj;
    function checkBrowser() {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }
    function get(id) {
        checkBrowser();
        obj.onreadystatechange = function() {


            
          if (obj.readyState === 4 && obj.status === 200) {

                var text1 = obj.responseText;
                //alert(text1);
//                
//                if(text1 == ""){
//                    alert("Check thID!");
//                }else{
                var edd =JSON.parse(text1);
                //alert(edd.etype);

                document.getElementById('nic').value =edd.nic;
                document.getElementById('fname').value = edd.fname;
                document.getElementById('lname').value = edd.lname;
                document.getElementById('bdate').value = edd.bday;
                document.getElementById('address').value = edd.address;
                document.getElementById('cno').value = edd.cno;
                document.getElementById('gender').value = edd.gender;
                document.getElementById('etype').innerHTML = edd.etype;
                document.getElementById('fedate').value = edd.fedate;
                document.getElementById('ecdate').value = edd.ecdate;
                document.getElementById('sgpdate').value = edd.sgpdate;
                document.getElementById('fgpdate').value = edd.fgpdate;
                document.getElementById('cgpdate').value = edd.cgpdate;
                document.getElementById('salary').value = edd.salary;
                document.getElementById('sidate').value = edd.sidate;
                document.getElementById('remarks').value = edd.remarks;
               
//            }

            }
        };
        obj.open("POST", "./hrget.php", true);
        obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj.send("nic=" + id);


    }

</script>

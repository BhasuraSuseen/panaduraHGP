<html>
<body>
<form action="menu_view.php" method="POST">
            Day 
            <select name="day">
                <option  value="sunday">Sunday</option>
                <option  value="monday">Monday</option>
                <option  value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option  value="friday">Friday</option>
                <option  value="saturday">Saturday</option>
            </select>  


            Catogary 
            <select  name="type">
                <option value="c_s1">Children S1</option>
                <option  value="c_s2">Children S2</option>
                <option value="c_s3">Children S3</option>
                <option  value="patients">Patients</option>
                <option  value="dd">Diabetics Patients</option>
                <option  value="staff">Staff</option>
            </select>

            <input type="submit" value="Submit" name="submit">

        </form>

</body>
</html>
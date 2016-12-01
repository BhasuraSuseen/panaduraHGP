
          
            <div id="pop_box_hr_data_record_left">
                 <form action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
                    <input type="text" name="nic" placeholder="NIC NO ">
                    Select Employee photo to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
                <iframe class="iframe1" name="iframe"></iframe>
                
                <form action="hr.php" method="post" target="iframehr">
                    First Name      
                    <input type="text" name="fname" placeholder="First Name">
                    Last Name      
                    <input type="text" name="lname" placeholder="Last Name">
                    Birth Date
                    <input type="date" name="bdate" placeholder="Birth Date yyyy-mm-dd">
                    Address      
                    <input type="text" name="address" placeholder="Address">
                    Contact Number      
                    <input type="int" name="cnumber" placeholder="Contact NO">
                    Gender      
                    <input type="text" name="gender" placeholder="Gender M/F">
                    NIC      
                    <input type="text" name="nic" placeholder="NIC NO ">
                    Employee Type
                    <input type="text" name="etype" placeholder="Employee type">
                    
             </div>
             <div id="pop_box_hr_data_record_right">
                    First Employment Date
                    <input type="Date" name="fedate" placeholder="FE Date ">
                    Employment Commencement Date
                    <input type="Date" name="ecdate" placeholder="EC Date ">
                    Socond Grade Promotion Date
                    <input type="Date" name="sgpdate" placeholder="SGP Date ">
                    First Grade Promotion Date
                    <input type="Date" name="fgpdate" placeholder="FGP Date ">
                    Special Grade Promotion Date
                    <input type="Date" name="cgpdate" placeholder="CGP Date ">
                    <input type="number" name="salary" placeholder="Salary"> 
                    Salary Incremental Date
                    <input type="Date" name="sidate" placeholder="SI Date ">
                    <input type="text" name="remarks" placeholder="Remarks">
                    
                                       
                    <input type="submit" value="Save" name = "submit">
                </form>
                <iframe class="iframehr" name="iframehr"></iframe>

   
      

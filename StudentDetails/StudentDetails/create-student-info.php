<?php
include 'header.php';
if (isset($_POST['create_student'])) {
    $student_obj->create_student_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">View Student List</a> 
        <h3>Create Student Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" name="student_name" id="student_name" class="form-control" required maxlength="50">
            </div>
             <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="" selected>Select</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="rollno">RollNo:</label>
                <input type="text" class="form-control" name="rollno" id="rollno" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <!--<input type="text" class="form-control" name="course" id="course"  maxlength="50">-->
                <select class="form-control" name="course" id="course">
                    <option value="" selected>Select</option>
                    <option value="UG" >UG</option>
                    <option value="PG" >PG</option>
                </select>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <select class="form-control" name="department" id="department">
                    <option value="" selected>Select</option>
                    <option value="Department" >B.E ECE</option>
                    <option value="Department" >B.E EEE</option>
                     <option value="Department" >B.E COMPUTER SCIENCE</option>
                      <option value="Department" >B.TECH INFORMATION TECHNOLOGY</option>
                       <option value="Department" >M.E CS</option>
                        <option value="Department" >M.Sc IT</option>
                </select>
            </div> 
             <div class="form-group">
                <label for="yr">Year:</label>
                         <select class="form-control" name="yr" id="yr">
                    <option value="yr" selected>Select</option>
                    <option value="yr" >I</option>
                    <option value="yr" >II</option>
                    <option value="yr" >III</option>
                    <option value="yr" >III</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="batch">Batch:</label>
                  <select class="form-control" name="batch" id="batch">
                    <option value="batch" selected>Select</option>
                    <option value="batch" >2012-2016</option>
                    <option value="batch" >2013-2017</option>
                    <option value="batch" >2014-2018</option>
                    <option value="batch" >2015-2019</option>
                    </select>
            </div>
             <div class="form-group">
                <label for="alumni">Alumni:</label>
                <select class="form-control" name="alumni" id="gender">
                    <option value="" selected>Select</option>
                    <option value="Yes" >Yes</option>
                    <option value="No" >No</option>
                </select>
            </div> 
<!--            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" id="country" class="form-control"  maxlength="50">
            </div>-->
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>


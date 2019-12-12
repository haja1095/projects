<?php
include 'header.php';
if (isset($_GET['id'])) {
    $student_info = $student_obj->view_student_by_student_id($_GET['id']);
    if (isset($_POST['update_student']) && $_GET['id'] === $_POST['id']) {
        $student_obj->update_student_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">View Student List</a> 
        <h3>Update Student Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($student_info['student_id'])) {
            echo $student_info['student_id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" name="student_name" value="<?php if (isset($student_info['student_name'])) {
                   echo $student_info['student_name'];
        } ?>" id="student_name" class="form-control" required maxlength="50">
            </div>
               <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="">Select</option>
                    <option value="Male" <?php if (isset($student_info['gender']) && $student_info['gender'] == 'Male') {
            echo 'selected';
        } ?>>Male</option>
                    <option value="Female" <?php if (isset($student_info['gender']) && $student_info['gender'] == 'Female') {
            echo 'selected';
        } ?>>Female</option>

                </select>

            </div> 
            <div class="form-group">
                <label for="rollno">RollNO:</label>
                <input type="rollno" class="form-control" value="<?php if (isset($student_info['rollno'])) {
            echo $student_info['rollno'];
        } ?>" name="rollno" id="email_address" required maxlength="50">
            </div>
             <div class="form-group">
                <label for="course">Course:</label>
                <select class="form-control" name="course" id="course">
                    <option value="">Select</option>
                    <option value="UG" <?php if (isset($student_info['course']) && $student_info['course'] == 'UG') {
            echo 'selected';
        } ?>>UG</option>
                    <option value="PG" <?php if (isset($student_info['course']) && $student_info['course'] == 'PG') {
            echo 'selected';
        } ?>>PG</option>

                </select>

            </div> 
             <div class="form-group">
                <label for="department">Department:</label>
                <select class="form-control" name="department" id="department">
                    <option value="">Select</option>
                    <option value="department" <?php if (isset($student_info['department']) && $student_info['department'] == 'B.E ECE') {
            echo 'selected';
        } ?>>B.E ECE</option>
                    <option value="department" <?php if (isset($student_info['department']) && $student_info['department'] == 'B.E EEE') {
            echo 'selected';
        } ?>>B.E EEE</option>
<option value="department" <?php if (isset($student_info['department']) && $student_info['department'] == 'B.E COMPUTER SCIENCE') {
            echo 'selected';
        } ?>>B.E COMPUTER SCIENCE</option>
		<option value="department" <?php if (isset($student_info['department']) && $student_info['department'] == 'B.E INFORMATION TECHNOLOGY') {
            echo 'selected';
        } ?>>B.E INFORMATION TEACHNOLOGY</option>
		<option value="department" <?php if (isset($student_info['department']) && $student_info['department'] == 'M.E CS') {
            echo 'selected';
        } ?>>M.E CS</option>
		<option value="department" <?php if (isset($student_info['department']) && $student_info['department'] == 'M.Sc IT') {
            echo 'selected';
        } ?>>M.Sc IT</option>
                </select>

            </div> 
 <div class="form-group">
                <label for="yr">Year:</label>
                <select class="form-control" name="yr" id="yr">
                    <option value="">Select</option>
                    <option value="yr" <?php if (isset($student_info['yr']) && $student_info['yr'] == 'I') {
            echo 'selected';
        } ?>>I</option>
                    <option value="yr" <?php if (isset($student_info['yr']) && $student_info['yr'] == 'II') {
            echo 'selected';
        } ?>>II</option>
<option value="yr" <?php if (isset($student_info['yr']) && $student_info['yr'] == 'III') {
            echo 'selected';
        } ?>>III</option>
		<option value="yr" <?php if (isset($student_info['yr']) && $student_info['yr'] == 'IV') {
            echo 'selected';
        } ?>>IV</option>
                </select>
            </div> 
    
             <div class="form-group">
                <label for="batch">Batch:</label>
                <select class="form-control" name="batch" id="batch">
                    <option value="">Select</option>
                    <option value="batch" <?php if (isset($student_info['batch']) && $student_info['batch'] == '2012-2016') {
            echo 'selected';
        } ?>>2012-2016</option>
                    <option value="batch" <?php if (isset($student_info['batch']) && $student_info['batch'] == '2013-2017') {
            echo 'selected';
        } ?>>2013-2017</option>
<option value="batch" <?php if (isset($student_info['batch']) && $student_info['batch'] == '2014-2018') {
            echo 'selected';
        } ?>>2014-2018</option>
		<option value="batch" <?php if (isset($student_info['batch']) && $student_info['batch'] == '2015-2019') {
            echo 'selected';
        } ?>>2015-2019</option>
                </select>
            </div> 
 <div class="form-group">
                <label for="alumni">Alumni:</label>
                <select class="form-control" name="alumni" id="alumni">
                    <option value="">Select</option>
                    <option value="Yes" <?php if (isset($student_info['alumni']) && $student_info['alumni'] == 'Yes') {
            echo 'selected';
        } ?>>Yes</option>
                    <option value="No" <?php if (isset($student_info['alumni']) && $student_info['alumni'] == 'No') {
            echo 'selected';
        } ?>>No</option>
                </select>
            </div> 
            <input type="submit" class="button button-green  pull-right" name="update_student" value="Update"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>


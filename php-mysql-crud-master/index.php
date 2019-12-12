<?php
include 'header.php';
$student_list = $student_obj->student_list();
?>
<div class="container " > 
    <div class="row content">
        <a  href="create-student-info.php"  class="button button-purple mt-12 pull-right">Create Student</a> 
        <h3>Student List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>RollNo</th>
                    <th>Course</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Batch</th>
                    <th>Alumni</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($student_list->num_rows > 0) {
  while ($row = $student_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["student_name"] ?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["rollno"] ?></td>
                <td><?php echo $row["course"] ?></td>
                <td><?php echo $row["department"] ?></td>
                <td><?php echo $row["yr"] ?></td>
                <td><?php echo $row["batch"] ?></td>
                <td><?php echo $row["alumni"] ?></td>
                <td class="text-right">
                    <a  href="<?php echo 'delete-student-info.php?id=' . $row["student_id"] ?>" class="button button-red">Delete</a>
                    <a  href="<?php echo 'update-student-info.php?id=' . $row["student_id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-student-info.php?id=' . $row["student_id"] ?>" class="button button-green">View</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  


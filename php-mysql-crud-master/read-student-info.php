<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: index.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="index.php"  class="button button-purple mt-12 pull-right">View Student List</a> 
     
 <h3>View Student Info</h3>
       
    
     <hr/>
   
   
 
      
    <label >Name:</label>
   <?php  if(isset($student_info['student_name'])){echo $student_info['student_name']; }?>

<br/>
  <label >Gender:</label>
   <?php  if(isset($student_info['gender'])){echo $student_info['gender'];} ?>
  <br/>
    <label >RollNo:</label>
      <?php  if(isset($student_info['rollno'])){echo $student_info['rollno'];} ?>
    <br/>

  <label >Course:</label>
   <?php  if(isset($student_info['course'])){echo $student_info['course'];} ?>
  <br/>
    <label >Department:</label>
      <?php  if(isset($student_info['department'])){echo $student_info['department'];} ?>
    <br/>
<label >Year:</label>
   <?php  if(isset($student_info['yr'])){echo $student_info['yr'];} ?>
  <br/>
  <label >Batch:</label>
   <?php  if(isset($student_info['batch'])){echo $student_info['batch'];} ?>
  <br/>
  <label >Alumni:</label>
   <?php  if(isset($student_info['alumni'])){echo $student_info['alumni'];} ?>
  <br/>
    <a href="<?php echo 'update-student-info.php?id='.$student_info["student_id"] ?>" class="button button-blue">Edit</a>
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>


<?php
class Users extends AppModel {

   var $name = 'User';   
    var $validate =array(
    'Name' =>array( 
               'alphaNumeric' =>array(
               'rule' => array('minLength',2),
               'required' => true, 
               'message' => 'Enter should be minimum 2 only')               
               ),
    'Email' =>array( 
               'alphaNumeric' =>array(
               'rule' => array('minLength',4),
               'required' => true, 
               'message' => 'Enter should be minimum 4 only')               
               )
    
            
//    'dob' =>array( 
//               'alphaNumeric' =>array(
//               'rule' => array('minLength',50),
//               'required' => true, 
//               'message' => 'Enter should be minimum 50 only')               
//               )
    
            );
   
}
?>
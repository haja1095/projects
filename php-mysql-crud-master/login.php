<?php
include 'student list()';
$login = $student_obj->login();
?>
<div class="container " > 
    <div class="row content">
        <!--<a  href="create-student-info.php"  class="button button-purple mt-12 pull-right">Login</a>--> 
        
        <?php
//        if (isset($_SESSION['message'])) {
//            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
//            unset($_SESSION['message']);
//        }
        ?>
        <script>
    function loginvalidation(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        var valid = true;

        if(email == ""){
        	   valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        }

        if(password == ""){
        	   valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        return valid;
    }
    </script>
</head>
<body>
    <div class="demo-content">
        <form action="" method="POST"
            onsubmit="return loginvalidation();">

           <div class="row">
                <label>Email</label> <span id="email_error"></span>
                <div>
                    <input type="text" name="email" id="email"
                        class="form-control"
                        placeholder="Enter your Email ID">
                </div>
            </div>

            <div class="row">
                <label>Password</label><span id="password_error"></span>
                <div>
                    <input type="Password" name="password" id="password"
                        class="form-control"
                        placeholder="Enter your password">

                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit"
                        class="btn login">Login</button><br/>
                </div>
            </div>
            <div class="row">
                <div>
                    <a href="signup.php"><button type="button"
                            name="submit" class="btn signup">Signup</button></a><br/>
                </div>
            </div>
        </form>
    </div>
</body>
<!--</html>-->

<?php
/* @var $login type */
if ($login) {
  while ($row = $login->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["username"] ?></td>
                <td><?php echo $row["password"] ?></td>
               
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>


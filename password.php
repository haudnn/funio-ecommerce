<?php
include('./config/db.php');
$name = '';
$email = '';    
$level = '';
$username ='';
$image='';
$old_password = '';
$new_password = '';
if(isset($_GET['id'])) { 
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE user_id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $old =$row['user_password'];
        $level = $row['user_level'];
        $name = $row['user_name'];
        $email = $row['user_email'];
        $username = $row['user_username'];
        $image = $row['user_img'];
    }
}
if (isset($_POST['btnEdit'])) {
    $id = $_GET['id'];
    $old_password= md5($_POST['oldpass']);
    $new_password = $_POST['newpass'];
    if ($old !=  $old_password){
        $_SESSION['wrong'] = 'wrong';
        exit(header('Location: profile.php'));
    }else {     
        $update_password =  md5($_POST['newpass']);
    }
    $query = "UPDATE user set user_img='$image', user_name='$name', user_email='$email',user_username='$username' ,user_password='$update_password' WHERE user_id=$id";
    $result= mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }
    else {
        $_SESSION['successfully'] = 'successfully';
        header('Location: profile.php');
    }
}
?>
<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
        <div class="update-profile-container">
                <div class="update-profile-wrapper">
                    <div class="update-profile-modal">
                        <p class="update-profile-tittle">Update Password</p>
                    </div>
                    <form action="password.php?id=<?php echo $_SESSION["login"][0]?>" method="POST" enctype="multipart/form-data">
                        <div class="update-profile-form">
                            <div class="update-profile-form-group">
                                <label class="update-profile-form-header">Old Password</label>
                                <input type="password" class="update-profile-form-input" id="oldpass" name="oldpass">
                                <i class="far fa-eye-slash" id="togglePassword"></i>
                            </div>
                            <div class="update-profile-form-group">
                                <label class="update-profile-form-header">New Password</label>
                                <input type="password" class="update-profile-form-input" id="newpass"name="newpass">
                                <i class="far fa-eye-slash" id="togglePassword2"></i>
                            </div>
                            <div class="update-profile-form-group">
                                <button type="submit" name="btnEdit" class="upadate-btn">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <?php include('includes/footer.php'); ?>
        <script src="assets/js/emtycart.js"></script>
        <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#oldpass');
            togglePassword.addEventListener('click', function (e) {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
            });
            const togglePassword2 = document.querySelector('#togglePassword2');
            const newpassword = document.querySelector('#newpass');
            togglePassword2.addEventListener('click', function (e) {
                const type = newpassword.getAttribute('type') === 'password' ? 'text' : 'password';
                newpassword.setAttribute('type', type);
            });
            
            
        </script>
    </div>
</body>
</html>
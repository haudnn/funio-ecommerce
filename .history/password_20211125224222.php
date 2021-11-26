<?php
include('./config/db.php');
?>

<?php include('includes/header.php'); ?>
    <div class="wrapper">
        <?php include('includes/nav.php'); ?>
        <div class="update-profile-container">
                <div class="update-profile-wrapper">
                    <div class="update-profile-modal">
                        <p class="update-profile-tittle">Update Password</p>
                    </div>
                    <form action="update.php?id=<?php echo $_SESSION["login"][0]?>" method="POST" enctype="multipart/form-data">
                        <div class="update-profile-form">
                            <div class="update-profile-form-group">
                                <label class="update-profile-form-header">Old Password</label>
                                <input type="text" class="update-profile-form-input" name="oldpass">
                            </div>
                            <div class="update-profile-form-group">
                                <label class="update-profile-form-header">Email</label>
                                <input type="email" class="update-profile-form-input" name="newpass">
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <?php include('includes/footer.php'); ?> 
    </div>
</body>
</html>
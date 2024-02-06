<?php require('inc/header.php'); ?>

    
<div class="container">
        <form method="POST"  action="signup.handel.php">
            <h2 class="mb-2 fw-bold">Sign Up</h2>
            <div class="mb-3">
                <label for="text" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" 
                <?php if (isset($_SESSION['userName'])) {
                        echo "value= '".$_SESSION['userName']."'";
                        unset($_SESSION['userName']);
                    } ?> >
                
                    <?php if(isset($_SESSION['nameErr'])) { ?>
                        <span style='color:red;'>
                        <div class="alert alert-danger">
                            <?=$_SESSION['nameErr'] ?>
                            <?php
                            unset($_SESSION['nameErr']);
                            ?>
                        </div>
                        </span>
                    <?php } ?>  
                
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="useremail"
                <?php if (isset($_SESSION['userEmail'])) {
                        echo "value= '".$_SESSION['userEmail']."'";
                        unset($_SESSION['userEmail']);
                    } ?>>
                <span style='color:red;'>
                    <?php if(isset($_SESSION['emailErr'])) { ?>
                        <div class="alert alert-danger">
                            <?=($_SESSION['emailErr'])?>
                            <?php
                            unset($_SESSION['emailErr']);
                            ?>
                        </div>
                    <?php } ?>  
                </span>
            </div>
            <div class="mb-3">
                <label for="password1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password1" name="userpassword"
                <?php if (isset($_SESSION['userPass'])) {
                        echo "value= '".$_SESSION['userPass']."'";
                        unset($_SESSION['userPass']);
                    } ?>>
                <span style='color:red;'>
                    <?php if(isset($_SESSION['passErr'])) { ?>
                        <div class="alert alert-danger">
                            <?=$_SESSION['passErr']?>
                            <?php
                            unset($_SESSION['passErr']);
                            ?>
                        </div>
                    <?php } ?>  
                </span>
            <div class="mb-3">
                <label for="password2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password2"  name="userpass2"
                <?php if (isset($_SESSION['userPass2'])) {
                        echo "value= '".$_SESSION['userPass2']."'";
                        unset($_SESSION['userPass2']);
                    } ?>>
                <span style='color:red;'>
                    <?php if(isset($_SESSION['confirmPassErr'])) { ?>
                        <div class="alert alert-danger">
                            <?=$_SESSION['confirmPassErr']?>
                            <?php
                            unset($_SESSION['confirmPassErr']);
                            ?>
                        </div>
                    <?php } ?>  
                </span>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-danger" value="submit" name="submit">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>

</body>
</html>
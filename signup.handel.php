<?php
    session_start();
    $con =mysqli_connect("localhost","root","","user_registeration");
    if(isset($_POST['submit'])){
        $name=trim(htmlspecialchars($_POST['username']));
        $email=trim(htmlspecialchars($_POST['useremail']));
        $pass=trim(htmlspecialchars($_POST['userpassword']));
        $confirmPass=trim(htmlspecialchars($_POST['userpass2']));
    
        //!checking empty fields
        
        if(empty($name)){
            $nameErr="name is required";
        }elseif(! is_string($name)){
            $nameErr='Name must be a string';
        }

        if(empty($email)){
            $emailErr="Email is required.";
        }else{
            // Check if the email is already used
            $checkEmailQuery = "SELECT * FROM signup WHERE useremail = '$email'";
            $checkEmailResult = mysqli_query($con, $checkEmailQuery);
            if (mysqli_num_rows($checkEmailResult) > 0) {
                $emailErr = "Email is already in use";
            }
        }
        if(! is_string($email)){
            $emailErr='Email must be a string.';
        }
        // Password Validation
        if(empty($pass)){
            $passErr = "Password is required";
            }
              // Confirm password validation
            if (empty($confirmPass)) {
                $confirmPassErr = "Please confirm the password";
            } elseif ($pass !== $confirmPass) {
                $confirmPassErr = "Passwords do not match";
            }
    }

    if(empty($nameErr) && empty($emailErr) && empty($passErr) && empty($confirmPassErr)){
        //!Hash and salt passwords before storing them to database
        // $passEnc=crypt($_POST["userpassword"],PASSWORD_DEFAULT);
        $query = 'INSERT INTO signup(username, useremail, userpassword) VALUES
        ("'.$_POST['username'].'", "'.$_POST['useremail'].'", "'.$pass.'")';
        $result= mysqli_query($con,$query);
        if($result){
            header("location:login.php");
        }
    }else{
        $_SESSION['nameErr']=$nameErr;
        $_SESSION['emailErr']=$emailErr;
        $_SESSION['passErr']=$passErr;
        $_SESSION['confirmPassErr']=$confirmPassErr;
        $_SESSION['userName']=$name;
        $_SESSION['userEmail']=$email;
        $_SESSION['userPass']=$pass;
        $_SESSION['userPass2']=$confirmPass;
        header("location:signup.php");
    }
    
?> 
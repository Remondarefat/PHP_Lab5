<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <form method="POST" action="<?php $_PHP_SELF ?>" >
                <h2 class="mb-2 fw-bold">Login</h2>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="useremail">
                    <span style='color:red;'>
                    
                </span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="userpassword">
                    <span style='color:red;'>
                    
                </span>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-danger" value="submit" name="submit">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </form>
    </div>


<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "user_registeration";
if(isset($_POST["submit"])){
if(!empty($_POST["useremail"]) && !empty($_POST["userpassword"])){

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$email = $_POST["useremail"];
$pass = $_POST["userpassword"];

$query = "SELECT * FROM signup WHERE useremail = '$email';";

$result= mysqli_query($conn,$query);

if(mysqli_num_rows($result) ){
    $userAccount = mysqli_fetch_assoc($result);
    if($pass == $userAccount["userpassword"] && $email == $userAccount["useremail"] ){
        session_start();
        // unset($_SESSION['emailErr']);
        // unset($_SESSION['passErr']);
        $_SESSION['login']= true;
        $_SESSION['userName']= $userAccount['username'];
        header("location:Welcom.php");
    }else{
        echo "<p class='text-danger text-center'>Credential are not Correct.</p>";     
    }
    }else{
        echo "<p class='text-danger text-center'>User not found.</p>";
    }
}else{
    echo "<p class='text-danger text-center'>Please fill all inputs.</p>";
}
}
?> 
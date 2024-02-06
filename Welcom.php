<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <h2 class='text-center text-success mt-5'>Welcome <?php echo $_SESSION["userName"] ?> to our home page.</h2>
    <div class="text-center mt-5">
    <form action="<?php $_PHP_SELF ?>" method="POST">
    <input type="submit" name="signout" value="Sign out" class="btn btn-danger mt-5">
    </form>
    </div>
    
    
    <?php 
if(isset($_POST["signout"])){
    session_destroy();
    setcookie("PHPSESSID","",time()-3600,"/");
    header("Location: login.php");
}

?>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
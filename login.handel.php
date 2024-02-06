<?php

// session_start();

// if(isset($_POST['submit'])){
//     $con =mysqli_connect("localhost","root","","user_registeration");
//     $email=trim(htmlspecialchars($_POST['useremail']));
//     $pass=trim(htmlspecialchars($_POST['userpassword']));
//     //!checking empty fields
   
//     if(empty($email)){
//         $emailErr="Email is required.";
//         echo $email;
//     }elseif(! is_string($email)){
//         $emailErr='Email must be a string.';
//     }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
//         $emailErr='Email is not valied';
//         }
//     // Password Validation
//     if(empty($pass)){
//         $passErr = "Password is required";
//         }
        
// }

// if(empty($emailErr) && empty($passErr) ){
//     $email=trim(htmlspecialchars($_POST['useremail']));
//     $query = "SELECT * FROM signup  WHERE useremail='$email' ;";
//     $result= mysqli_query($con,$query);

//     if(mysqli_num_rows($result)==1){
//         $userAcount=mysqli_fetch_assoc($result);
//         $isLogin=password_verify($pass, $userAcount['userpassword']);
//         if($isLogin==1){
//             $_SESSION['login']=true;
//             $_SESSION['userName']=$userAcount['username'];
//             header("location:Welcom.php");
//         }else{
//             $passErr ="Credential are not Correct";    
//         }
//     }else{
//         $passErr = "User not found";
//         header("location:login.php");

//     }
// }else{
//     $_SESSION['emailErr']=$emailErr;
//     $_SESSION['passErr']=$passErr;
//     header("location:login.php");
// }
?> 

<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['insertdairy'])){
    $dairyname=$_POST['dairyname'];
    
    $mgfname=$_POST['mgfname'];
    $mglname=$_POST['mglname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $taluq=$_POST['taluq'];
    $village=$_POST['village'];
    $phone=$_POST['phone'];
    
    $userverify=mysqli_query($connection,"SELECT username from dairy where username='$username'");
    $uresult=mysqli_num_rows($userverify);
    if($uresult>0){
        echo '<script> alert("This Username is Already ASSIGNED");</script>';
        
   
    }
    else{

    $query="INSERT INTO dairy(`dairyname`,`mgfname`, `mglname`,`email`, `username`, `password`, `taluq`, `village`, `phone`) VALUES('$dairyname',' $mgfname', '$mglname','$email','$username','$password','$taluq','$village','$phone')";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Saved");</script>';
        header('Location: adddairy.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
        header('Location: adddairy.php');
    }
    }
    
    
}

?>
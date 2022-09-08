<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: dairylogin.php");
    exit;
}


?>

<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['updatedairy'])){
    $edid=$_POST['edid'];
    $dairyname=$_POST['dairyname'];
    
    $mgfname=$_POST['mgfname'];
    $mglname=$_POST['mglname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $taluq=$_POST['taluq'];
    $village=$_POST['village'];
    $phone=$_POST['phone'];
    
    $query="UPDATE dairy SET dairyname='$dairyname',mgfname='$mgfname',mglname='$mglname',email='$email',username='$username',Password='$password',taluq='$taluq',village='$village',phone='$phone' WHERE did='$edid'";
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
    
    


?>

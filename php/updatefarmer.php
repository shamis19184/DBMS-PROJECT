<?php  
 session_start()

 ?>
<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['updatefarmerdata'])){
    $fid=$_POST['fid'];
    $did=$_SESSION['did'];
    
    $fname=$_POST['ffname'];
    
    $lname=$_POST['flname'];
     $village=$_POST['village'];
    $age=$_POST['age'];
   
   
    $phone=$_POST['phone'];
   $query="UPDATE farmerdetails SET fname='$fname', lname='$lname', village='$village',Age='$age',contact='$phone' WHERE fid='$fid'";
$query_run=mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Saved");</script>';
        header('Location: addfarmer.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
        header('Location: addfarmer.php');
    }
}

    ?>
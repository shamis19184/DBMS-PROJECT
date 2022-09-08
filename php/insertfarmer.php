<?php  
 session_start()

 ?>
<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['insertfarmer'])){
    $did=$_SESSION['did'];
    
    $fname=$_POST['ffname'];
    
    $lname=$_POST['flname'];
     $village=$_POST['village'];
    $age=$_POST['age'];
   
   
    $phone=$_POST['phone'];
   $query="INSERT INTO farmerdetails(`fname`, `lname`, `village`, `Age`, `contact`, `dairyid`) VALUES('$fname','$lname','$village','$age','$phone','$did')";
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
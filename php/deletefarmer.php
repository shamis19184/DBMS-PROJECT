<?php  
 session_start()

 ?>
<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['deletefarmerdata'])){
    $dfid=$_POST['dfid'];
    $did=$_SESSION['did'];
   
   $query="DELETE FROM farmerdetails WHERE fid='$dfid'";
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
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: dairylogin.php");
    exit;
}


?>

<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['deletedairy'])){
    $ddid=$_POST['ddid'];
    
    $query="DELETE FROM `dairy` WHERE did='$ddid'";
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
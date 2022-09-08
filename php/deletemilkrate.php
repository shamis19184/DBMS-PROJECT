<?php
$connection=mysqli_connect("localhost","root","","dairymg");
if(isset($_POST['deletemilkrate'])){
   
    $fat=$_POST['fat']; 
    echo $fat;

    $query="DELETE FROM milkrate WHERE fat='$fat'";
    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo '<script> alert("Data Saved");</script>';
        header('Location: addmilkrate.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
        header('Location: addmilkrate.php');
    }
    }
    
    


?>

<?php


$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['insertmilkrate'])){
    $fat=$_POST['fat'];
    
  
    $rate=$_POST['rate'];
   
    

    $query="INSERT INTO milkrate(`fat`,`rate`) VALUES ('$fat','$rate')";
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
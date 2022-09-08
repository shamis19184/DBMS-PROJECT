<?php  
 session_start()

 ?>
<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['insertsales'])){
    $did=$_SESSION['did'];
    
    $cfname=$_POST['cfname'];
    
    $clname=$_POST['clname'];
     $litre=$_POST['litre'];
    $rate=$_POST['rate'];
    $date=date('Y-m-d',strtotime($_POST['date']));
    $phone=$_POST['phone'];
   
   
    
   $query="INSERT INTO sales( `cfname`, `clname`, `litre`, `rate`, `date`, `phone`, `dairyid`) VALUES ('$cfname','$clname','$litre','$rate','$date','$phone','$did')";
$query_run=mysqli_query($connection,$query);
    if($query_run){
        echo '<script> alert("Data Saved");</script>';
        header('Location: sales.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
        header('Location: sales.php');
    }
}

    ?>
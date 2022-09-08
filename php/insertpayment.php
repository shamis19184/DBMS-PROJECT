<?php  
 session_start()

 ?>
<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['insertpayment'])){
    
     $did=$_POST['dairyid'];
    $pno=$_POST['pno'];
    $amt=$_POST['amt'];
    $status=$_POST['status'];
     $date=date('Y-m-d', strtotime($_POST['paydate']));
    
   
   
    
   $query="INSERT INTO payment( `amt`, `date`, `pno`, `did`,`status`) VALUES ('$amt','$date','$pno','$did','$status')";
$query_run=mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Data Saved");</script>';
        header('Location: milkpurchase.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
        header('Location: milkpurchase.php');
    }
}

    ?>
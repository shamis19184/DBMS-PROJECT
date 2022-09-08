<?php  
 session_start()

 ?>
<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['insertpurchase'])){
    $did=$_SESSION['did'];
    
    $farmerid=$_POST['fid'];
    $litre=$_POST['litre'];
    $fat=$_POST['fat'];
     $rate=$_POST['rate'];
    $totalpayable=$_POST['totalpayable'];
     $date=date('Y-m-d', strtotime($_POST['date']));
   
   
    
   $query="INSERT INTO milkpurchase( `farmerid`, `litre`, `fat`, `rate`, `totalpayable`, `date`, `dairyid`) VALUES ('$farmerid','$litre','$fat','$rate','$totalpayable','$date','$did')";
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
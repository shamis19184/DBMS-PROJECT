<?php
session_start();
print_r($_SESSION);

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: dairylogin.php");
    exit;
}

?>
  

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Welcome Manager</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dairy Manager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./addfarmer.php">Add Farmer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./sales.php">Add Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./viewmilkrate.php">View Milk Rates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./milkpurchase.php">Add Milk Purchase</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./viewpayments.php"> Payment details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./dairylogout.php">Logout</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
      <div class="jumbtron">
        <div class="card">
          <h2 style="text-align:center">Welcome Manager</h2>
        </div>
           <div class="card">
          <h4 style="text-align:center"><u>Farmers Briefing</u> </h4>
        </div>
        <div class="card">
          <div class="card-body">
            <?php
            $connection=mysqli_connect("localhost","root","","dairymg");
            $did=$_SESSION['did'];
            $query="SELECT * FROM farmerdetails WHERE dairyid='$did'";
            $query_run =mysqli_query($connection,$query);
            ?>
            <table class="table table-bordered">
              <thead>
                <tr>
                  
                  <th scope="col">Farmer Id</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">village</th>
                  <th scope="col">Age</th>
                  <th scope="col">Phone No</th>
               
                </tr>
              </thead>
              <?php
            if($query_run){
              foreach($query_run as $row){
                ?>
              <tbody>
                <tr>
                  <td><?php echo $row['fid'];?></td>
                  <td><?php  echo $row['fname']; ?></td>
                  <td><?php  echo $row['lname']; ?></td>
                  <td><?php  echo $row['village']; ?></td>
                  <td><?php  echo $row['Age']; ?></td>
                  <td><?php echo $row['contact'];   ?></td>
                  
                </tr>
              </tbody>
              <?php
              }
              
            }
            else{
                echo "No Record Found";
              }
              ?>
            </table>
          </div>
        </div>
       </div>
<div class="jumbtron">
   <div class="card">
          <h4 style="text-align:center"><u>Sales Briefing</u></h4>
        </div>
               <div class="card">
          <div class="card-body">
            <?php
            $connection=mysqli_connect("localhost","root","","dairymg");
            $did=$_SESSION['did'];
            $query="SELECT * FROM sales WHERE dairyid='$did'";
            $query_run =mysqli_query($connection,$query);
            ?>
            <table class="table table-bordered">
              <thead>
                <tr>
                  
                  <th scope="col">Sales Id</th>
                  <th scope="col">Date</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Qty</th>
                  <th scope="col">Amt</th>
                  <th scope="col">Phone No</th>
               
                </tr>
              </thead>
              <?php
            if($query_run){
              foreach($query_run as $row){
                ?>
              <tbody>
                <tr>
                  <td><?php echo $row['sid'];?></td>
                  <td><?php echo $row['date'];?></td>
                  <td><?php  echo $row['cfname']; ?></td>
                  <td><?php  echo $row['clname']; ?></td>
                  <td><?php  echo $row['litre']; ?></td>
                  <td><?php  echo $row['rate']; ?></td>
                  <td><?php echo $row['phone'];   ?></td>
                  
                </tr>
              </tbody>
              <?php
              }
              
            }
            else{
                echo "No Record Found";
              }
              ?>
            </table>
          </div>
        </div>
      </div>
      <div class="jumbtron">
 <div class="card">
          <h4 style="text-align:center"><u>Purchases Briefing</u></h4>
        </div>

              <div class="card">
          <div class="card-body">
            <?php
            $connection=mysqli_connect("localhost","root","","dairymg");
            $did=$_SESSION['did'];
            $query="SELECT * FROM milkpurchase WHERE dairyid='$did'";
            $query_run =mysqli_query($connection,$query);
            ?>
            <table class="table table-bordered">
              <thead>
                <tr>
                  
                  <th scope="col">Pno</th>
                  <th scope="col">Farmer Id</th>
                  <th scope="col">Date</th>
                  <th scope="col">Qty(litres)</th>
                  <th scope="col">Fat</th>
                  <th scope="col">Total Payable</th>
               
                </tr>
              </thead>
              <?php
            if($query_run){
              foreach($query_run as $row){
                ?>
              <tbody>
                <tr>
                  <td><?php echo $row['pno'];?></td>
                  <td><?php  echo $row['farmerid']; ?></td>
                  <td><?php  echo $row['date']; ?></td>
                  <td><?php  echo $row['litre']; ?></td>
                  <td><?php  echo $row['fat']; ?></td>
                  <td><?php echo $row['totalpayable'];   ?></td>
                  
                </tr>
              </tbody>
              <?php
              }
              
            }
            else{
                echo "No Record Found";
              }
              ?>
            </table>
          </div>
        </div>
        </div>
    </div>
    

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

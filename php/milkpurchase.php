<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: dairylogin.php");
    exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Purchase Details</title>
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
          <a class="nav-link active" aria-current="page" href="./dairy.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./addfarmer.php">Add Farmer </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./sales.php">Add Sales </a>
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
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div
      class="modal fade"
      id="milkpurchasemodal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Milk Purchase Details</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <form action="./insertpurchase.php" method="POST" name="myform">
            <div class="modal-body">
              <div class="form-group">
                <label> Farmer Id</label>
                <input
                  type="text"
                  name="fid"
                  class="form-control"
                  id=""
                  maxlength="8"
                  placeholder="Enter Farmer Id"
                  required
                  autofocus
                />
              </div>
               <div class="form-group">
                <label>Qty</label>
                <input
                  type="text"
                  name="litre"
                  class="form-control"
                  id=""
                  maxlength="5"
                  placeholder=" Enter qty in litre"
                  required
                  autofocus
                />
              </div>

               <div class="form-group">
                <label>Fat%</label>
                <input
                  type="text"
                  name="fat"
                  class="form-control"
                  id=""
                  maxlength="4"
                  placeholder="Enter the Fat% in milk"
                  required
                  autofocus
                />
              </div>
              <div class="form-group">
                <label> Rate </label>
                <input
                  type="text"
                  name="rate"
                  class="form-control"
                  id=""
                  maxlength="8"
                  placeholder=" Enter the rate/litre"
                  required
                  autofocus
                   onkeyup="calculate(this.value)"
                />
                <p>Based On FAT%</p>
              </div>


              

             

              <div class="form-group">
                <label>Date</label>
                <input
                  type="date"
                  name="date"
                  class="form-control"
                  id="date"
                  placeholder="Enter the date"
                  required
                  autofocus
                />
              </div>

              <div class="form-group">
                <label>Total Payable</label>
                <input
                  type="text"
                  name="totalpayable"
                  class="form-control"
                  id=""
                  placeholder="Enter the total payable amt"
                  required
                  autofocus
                />
              </div>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"> </script>  
<script type = "text/javascript">  
function calculate() {   
 if(isNaN(document.forms["myform"]["litre"].value) || document.forms["myform"]["litre"].value=="") {   
 var text2 = 0;   
 } else {   
 var text2 = parseInt(document.forms["myform"]["litre"].value);   
 }   
 if(isNaN(document.forms["myform"]["rate"].value) || document.forms["myform"]["rate"].value=="") {   
 var text4 = 0;   
 } else {   
 var text4 = parseFloat(document.forms["myform"]["rate"].value);   
 }   
 document.forms["myform"]["totalpayable"].value = (text2*text4);   
 }  
</script>  

            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button type="submit" name="insertpurchase" class="btn btn-primary">
                Save Data
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
<!-- ##################################payment########################## -->

<div
      class="modal fade"
      id="paymodal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Payment Details</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <form action="./insertpayment.php" method="POST">
            <div class="modal-body">

              <input type="hidden" name="pno" id="pno">
              <input type="hidden" name="dairyid" id="did">

              <div class="form-group">
                <label>Amount</label>
                <input
                  type="text"
                  name="amt"
                  class="form-control"
                  id="amt"
                  placeholder="Enter The Payment Amount"
                  required
                  autofocus
                />
              </div>
               <div class="form-group">
                <label> Date</label>
                <input
                  type="date"
                  name="paydate"
                  class="form-control"
                  id="pdate"
                  placeholder=" Enter The Date"
                  required
                  autofocus
                />
              </div>

               <div class="form-group">
                <label for="Status">Set Payment Status</label>

                   <input type="checkbox" id="" name="status" value="Paid" required autofocus>
<label for="status"> Paid</label><br>
                      
                     
              </div>
             

            
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button type="submit" name="insertpayment" class="btn btn-primary">
                Add Payment
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>








<!-- ##################################payment END ########################## -->
    <div class="container">
      <div class="jumbtron">
        <div class="card">
          <h2 style="text-align:center">Add Milk Purchase Details</h2>
        </div>
        <div class="card">
          <div class="card-body">
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#milkpurchasemodal"
            >
              Add Data
            </button>
          </div>
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
                  <th scope="col">Dairy Id</th>
                  <th scope="col">Farmer Id</th>
                  <th scope="col">Date</th>
                  <th scope="col">Qty(litres)</th>
                  <th scope="col">Fat</th>
                  <th scope="col">Total Payable</th>
                  <th scope="col">Pay</th>


               
                </tr>
              </thead>
              <?php
            if($query_run){
              foreach($query_run as $row){
                ?>
              <tbody>

             
               
                <tr>
                  <td><?php echo $row['pno'];?> </td>
                  <td><?php  echo $row['dairyid']; ?></td>
                  <td><?php  echo $row['farmerid']; ?></td>
                  <td><?php  echo $row['date']; ?></td>
                  <td><?php  echo $row['litre']; ?></td>
                  <td><?php  echo $row['fat']; ?></td>
                  <td><?php echo $row['totalpayable'];   ?></td>
                  
                   
            
                  
                   <td>

                   <button type="button"  class="btn btn-success paybtn"> PAY </button>
                   </td>
                 
                  <td>
                   
                  </td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

 <script>

$(document).ready(function() {
  $('.paybtn').on('click', function(){
    $('#paymodal').modal('show');
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      console.log(data);

       $('#pno').val(data[0]);
        $('#did').val(data[1]);
      $('#amt').val(data[6]);
     
       
      


  });
});   


</script>

<script>
      var todayDate = new Date();
      var month = todayDate.getMonth() + 1; 
      var year = todayDate.getUTCFullYear() ; 
      var tdate = todayDate.getDate(); 
      if(month < 10){
        month = "0" + month 
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("date").setAttribute("min", maxDate);
      console.log(maxDate);
    </script>

<script>
      var todayDate = new Date();
      var month = todayDate.getMonth() + 1; 
      var year = todayDate.getUTCFullYear() ; 
      var tdate = todayDate.getDate(); 
      if(month < 10){
        month = "0" + month 
      }
      if(tdate < 10){
        tdate = "0" + tdate;
      }
      var maxDate = year + "-" + month + "-" + tdate;
      document.getElementById("pdate").setAttribute("min", maxDate);
      console.log(maxDate);
    </script>


  </body>
</html>
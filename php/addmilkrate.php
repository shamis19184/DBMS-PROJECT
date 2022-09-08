<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
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
   
    <title>Add Milk Rate</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./admin.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./adddairy.php">Add Dairy</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./addmilkrate.php">Add Milk Rate</a>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Button trigger modal -->


<!-- ########################################################################### -->
<!-- EDIT POP UP FORM -->
<div
      class="modal fade"
      id="editmodal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Milk Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <form action="./updatemilkrate.php" method="POST">

            <div class="modal-body">

              
              
               <input type="hidden" name="fat" id="fat">

              <div class="form-group">
                <label>Rate</label>
                <input
                  type="text"
                  name="rate"
                  class="form-control"
                  id="rate"
                  maxlength="4"
                  placeholder=" Enter the rate"
                  required
                  autofocus
                />
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
              <button type="submit" name="updatemilkrate" class="btn btn-primary">
               Update  Data
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>


<!-- #############################EDIT END######################################## -->

<!-- ###########################DELETE BEGIN################################################ -->
<!-- DELETE POP UP FORM -->
<div
      class="modal fade"
      id="deletemodal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Milk Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <form action="./deletemilkrate.php" method="POST">

            <div class="modal-body">
              <input type="hidden" name="fat" id="fat_d">

            <h6>Would You Like To <strong>DELETE</strong> This Data</h6>

             
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
               No
              </button>
              <button type="submit" name="deletemilkrate" class="btn btn-primary">
               Yes
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>


<!-- ##########################DELETE END ########################################### -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="milkaddmodal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Milk Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <form action="./insertmilkrate.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <label>Fat</label>
                <input
                  type="text"
                  name="fat"
                  class="form-control"
                  id=""
                  maxlength="4"
                  placeholder="Enter the Fat content"
                  required
                  autofocus
                />
              </div>
              <div class="form-group">
                <label>Rate</label>
                <input
                  type="text"
                  name="rate"
                  class="form-control"
                  id=""
                  maxlength="4"
                  placeholder=" Enter the rate"
                  required
                  autofocus
                />
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
              <button type="submit" name="insertmilkrate" class="btn btn-primary">
                Save Data
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="jumbtron">
        <div class="card">
          <h2 style="text-align:center">Add Milk Rate</h2>
        </div>
        <div class="card">
          <div class="card-body">
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#milkaddmodal"
            >
              Add Data
            </button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <?php
            $connection=mysqli_connect("localhost","root","","dairymg");
            $query="SELECT * FROM milkrate";
            $query_run =mysqli_query($connection,$query);
            ?>
            <table  class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col"> Fat</th>
                  <th scope="col">Rate</th>
                   <th scope="col">Edit</th>
                   <th scope="col">Delete</th>
                </tr>
              </thead>
              <?php
            if($query_run){
              foreach($query_run as $row){
                ?>
              <tbody>
                <tr>
                  <td><?php echo $row['fat'];?></td>
                  <td><?php  echo $row['rate']; ?></td>
                  <td>
                    <button type="button" class="btn btn-success editbtn">EDIT</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger deletebtn">DELETE

                    </button>
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
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    

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
<!-- datatable -->





  <script>

$(document).ready(function() {
  $('.deletebtn').on('click', function(){
    $('#deletemodal').modal('show');
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      console.log(data);

      
      $('#fat_d').val(data[0]);
     
      


  });
});   
    </script>






    <script>

$(document).ready(function() {
  $('.editbtn').on('click', function(){
    $('#editmodal').modal('show');
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      console.log(data);

      
      $('#fat').val(data[0]);
      $('#rate').val(data[1]);
      


  });
});   
    </script>
  </body>
</html>
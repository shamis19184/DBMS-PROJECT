<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: dairylogin.php");
    exit;
}


?>

<?php
$connection=mysqli_connect("localhost","root","","dairymg");

if(isset($_POST['insertdairy'])){
    $dairyname=$_POST['dairyname'];
    
    $mgfname=$_POST['mgfname'];
    $mglname=$_POST['mglname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $taluq=$_POST['taluq'];
    $village=$_POST['village'];
    $phone=$_POST['phone'];
    
    $userverify=mysqli_query($connection,"SELECT username from dairy where username='$username'");
  
    $uresult=mysqli_num_rows($userverify);
   
   
    if($uresult>0 ){
        echo '<script> alert("This Username is Already ASSIGNED");</script>';
       
   
    }
  
    else{

    $query="INSERT INTO dairy(`dairyname`,`mgfname`, `mglname`,`email`, `username`, `password`, `taluq`, `village`, `phone`) VALUES('$dairyname',' $mgfname', '$mglname','$email','$username','$password','$taluq','$village','$phone')";
    $query_run=mysqli_query($connection,$query);

    if($query_run){
      $subject="Login Info";
      $message="Your Username is .$username and password is .$password";
      $from="FROM: dairymanagement14@gmail.com";
      mail($email,$subject,$message,$from);
        echo '<script> alert("Data Saved");</script>';
        header('Location: adddairy.php');
    }
    else{
        echo '<script> alert("Data Not Saved");</script>';
        header('Location: adddairy.php');
    }
    }
    
    
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

    <title>Add Dairy</title>
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

    <!-- Modal -->
    <div
      class="modal fade"
      id="dairyaddmodal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Dairy Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <form action="adddairy.php" method="POST">
            <div class="modal-body">
              <div class="form-group">
                <label>Dairy Name</label>
                <input
                  type="text"
                  name="dairyname"
                  class="form-control"
                  id=""
                  maxlength="15"
                  placeholder="Enter Dairy Name"
                  required
                  autofocus
                />
              </div>
               <div class="form-group">
                <label> First Name</label>
                <input
                  type="text"
                  name="mgfname"
                  class="form-control"
                  id=""
                  maxlength="15"
                  placeholder=" Enter Manager First Name"
                  required
                  autofocus
                />
              </div>
              <div class="form-group">
                <label> Last Name</label>
                <input
                  type="text"
                  name="mglname"
                  class="form-control"
                  id=""
                  maxlength="15"
                  placeholder=" Enter Manager Last Name"
                  required
                  autofocus
                />
              </div>

               <div class="form-group">
                <label>Enter Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id=""
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" size="30"
                  placeholder=" Enter Your Email"
                  required
                  autofocus
                />
              </div>

              <div class="form-group">
                <label>Authorized Person</label>
                <input
                  type="text"
                  name="username"
                  class="form-control"
                  id=""
                  maxlength="12"
                  placeholder=" Enter User Name"
                  required
                  autofocus
                />
                
                
              </div>

              <div class="form-group">
                <label>Password</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id=""
                  minlength="4" maxlength="8"
                  placeholder=" Enter Password"
                  required
                  autofocus
                />
                <p>Password must be 4-8 characters in length</p>
              </div>

              <div class="form-group">
                <label>Taluq</label>
                <input
                  type="text"
                  name="taluq"
                  class="form-control"
                  id=""
                    maxlength="15"
                  placeholder="Enter Taluq"
                  required
                  autofocus
                />
              </div>

              <div class="form-group">
                <label>Village</label>
                <input
                  type="text"
                  name="village"
                  class="form-control"
                  id=""
                   maxlength="15"
                  placeholder="Enter Village"
                  required
                  autofocus
                />
              </div>

              <div class="form-group">
                <label>Contact Details</label>
                <input
                  type="text"
                  name="phone"
                  class="form-control"
                  id=""
                  minlength="10" maxlength="13"
                  placeholder="Enter Phone number"
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
              <button type="submit" name="insertdairy" class="btn btn-primary">
                Save Data
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
<!-- #########################Edit Modal############################ -->


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
            <h5 class="modal-title" id="exampleModalLabel">Edit Dairy Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <form action="./updatedairy.php" method="POST">
            <div class="modal-body">
              <input type="hidden" name="edid" id="edid">
              <div class="form-group">
                <label>Dairy Name</label>
                <input
                  type="text"
                  name="dairyname"
                  class="form-control"
                  id="dairyname"
                  maxlength="15"
                  placeholder="Enter Dairy Name"
                  required
                  autofocus
                />
              </div>
               <div class="form-group">
                <label> First Name</label>
                <input
                  type="text"
                  name="mgfname"
                  class="form-control"
                  id="mgfname"
                  maxlength="15"
                  placeholder=" Enter Manager First Name"
                  required
                  autofocus
                />
              </div>
              <div class="form-group">
                <label> Last Name</label>
                <input
                  type="text"
                  name="mglname"
                  class="form-control"
                  id="mglname"
                  maxlength="15"
                  placeholder=" Enter Manager Last Name"
                  required
                  autofocus
                />
              </div>

               <div class="form-group">
                <label>Enter Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="email"
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" size="30"
                  placeholder=" Enter Your Email"
                  required
                  autofocus
                />
              </div>

              <div class="form-group">
                <label>Authorized Person</label>
                <input
                  type="text"
                  name="username"
                  class="form-control"
                  id="username"
                  maxlength="12"
                  placeholder=" Enter User Name"
                  required
                  autofocus
                />
                
                
              </div>

              <div class="form-group">
                <label>Password</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id="password"
                  minlength="4" maxlength="8"
                  placeholder=" Enter Password"
                  required
                  autofocus
                />
              </div>

              <div class="form-group">
                <label>Taluq</label>
                <input
                  type="text"
                  name="taluq"
                  class="form-control"
                  id="taluq"
                  maxlength="15"
                  placeholder="Enter Taluq"
                  required
                  autofocus
                />
              </div>

              <div class="form-group">
                <label>Village</label>
                <input
                  type="text"
                  name="village"
                  class="form-control"
                  id="village"
                  maxlength="15"
                  placeholder="Enter Village"
                  required
                  autofocus
                />
              </div>

              <div class="form-group">
                <label>Contact Details</label>
                <input
                  type="text"
                  name="phone"
                  class="form-control"
                  id="phone"
                  minlength="10" maxlength="13"
                  placeholder="Enter Phone number"
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
              <button type="submit" name="updatedairy" class="btn btn-primary">
                Update Data
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>




<!-- ##################################### End Edit Modal######################## -->




<!-- ########################Delete Modal ################################ -->

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
            <h5 class="modal-title" id="exampleModalLabel">Delete Dairy Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <form action="./deletedairy.php" method="POST">
            <div class="modal-body">

            <input type="hidden" name="ddid" id="ddid">
             <h6>Would You Like To <strong>DELETE</strong>This Data</h6>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                No
              </button>
              <button type="submit" name="deletedairy" class="btn btn-primary">
                Yes
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>


<!-- #################################END DELETE MODAL ####################### -->
    <div class="container">
      <div class="jumbtron">
        <div class="card">
          <h2 style="text-align:center">Add Dairy Details</h2>
        </div>
        <div class="card">
          <div class="card-body">
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#dairyaddmodal"
            >
              Add Data
            </button>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <?php
            $connection=mysqli_connect("localhost","root","","dairymg");
            $query="SELECT did, dairyname,mgfname, mglname,username,Password,email,taluq,village, phone FROM dairy";
            $query_run =mysqli_query($connection,$query);
            ?>
            <table  class="table">
              <thead>
                <tr>
                  <th scope="col">Dairy Id</th>
                  <th scope="col">Dairy Name</th>
                  <th scope="col">Manager First Name</th>
                  <th scope="col">Manager Last Name</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Email</th>
                  <th scope="col">Taluq</th>
                  <th scope="col">Village</th>
                  <th scope="col">Phone No</th>
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
                  <td><?php echo $row['did'];?></td>
                  <td><?php  echo $row['dairyname']; ?></td>
                  <td><?php  echo $row['mgfname']; ?></td>
                  <td><?php  echo $row['mglname']; ?></td>
                  <td><?php  echo $row['username']; ?></td>
                  <td><?php  echo $row['Password']; ?></td>
                  <td><?php  echo $row['email']; ?></td>
                  <td><?php echo $row['taluq'];   ?></td>
                  <td><?php  echo $row['village'];   ?></td>
                  <td><?php  echo $row['phone']; ?></td>
                  <td>
                    <button type="button" class="btn btn-success editbtn">EDIT</button>
                  </td>
                  <td> 
                    <button type="button" class="btn btn-danger deletebtn">DELETE</button>
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





 <script>

$(document).ready(function() {
  $('.editbtn').on('click', function(){
    $('#editmodal').modal('show');
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      console.log(data);

      
      $('#edid').val(data[0]);
       $('#dairyname').val(data[1]);
        $('#mgfname').val(data[2]);
         $('#mglname').val(data[3]);
          $('#username').val(data[4]);
        $('#password').val(data[5]);
         $('#email').val(data[6]);
          $('#taluq').val(data[7]);
           $('#village').val(data[8]);
            $('#phone').val(data[9]);
     
      


  });
});   
    </script>







     <script>

$(document).ready(function() {
  $('.deletebtn').on('click', function(){
    $('#deletemodal').modal('show');
      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      console.log(data);

      
      $('#ddid').val(data[0]);
     
      


  });
});   
    </script>


  </body>
</html>

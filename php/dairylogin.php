<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include './db_connect.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
  $sql = "select * from dairy where username='$username' and Password='$password' ";
  $result= mysqli_query($conn, $sql);
  $num =mysqli_num_rows($result);

  if($num == 1){
    
     while($row = mysqli_fetch_assoc($result)) {
    $did=$row["did"];
     }
        $login= true;
         session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['did']= $did;
        header("location: dairy.php");
       
    
      }
      else{
        $showError = "Invalid Credentials";
      }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="./bg.css" />

    <!-- Bootstrap CSS -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Dairy Login</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dairy Management</a>
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
              <a class="nav-link active" aria-current="page" href="./index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Login
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="./login.php">Admin Login</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./dairylogin.php"
                    >Dairy Login</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="./dairyregister.php">Dairy Register</a></li>
              </ul>
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
    
 <?php
    if($showError){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '. $showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>


    <div class="container">
      <div class="login">
        <div class="text-center mt-5">
          <form
            action="./dairylogin.php"
            method="post"
            style="max-width: 480px; margin: auto"
          >
            <img
              class="mt-4 mb-4"
              src="./login2.jpg"
              height="72"
              alt="Dairy login logo"
            />
            <h1 class="h3 mb-3 font-weight-normal">Login To Dairy System</h1>
            <label for="username" class="sr-only"></label>
            <input
              type="text"
              name="username"
              id="username"
              class="form-control"
              placeholder="Username"
              required
              autofocus
            />
            <label for="password" class="sr-only"></label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              class="form-control"
            />
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me" /> Remember me
              </label>
            </div>
            <div class="mt-3">
              <button class="btn btn-lg btn-primary btn-block mb-4">
                Log in
              </button>
            </div>
          </form>
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

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

    <title>Dairy Management System</title>
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
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="./contactus.php">Contact Us</a>
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
                <li><a class="dropdown-item" href="./dairylogin.php">Dairy Login</a></li>
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
    <div class="container">
    <div
      id="carouselExampleCaptions"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./crousel1.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Welocme To Dairy Management System</h5>
            <p>Milk Collection,Sales and Records</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./crousel2.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>The Best Dairy Management System</h5>
            <p>Milk Collection,Sales and Records</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./crousel3.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>One Solution For Dairy Management</h5>
            <p>Milk Collection,Sales and Records</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
    <div class="container">
       <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-5">
         Fun Dairy Facts
        </h2>
        </section>
        </div>


    <div class="container my-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div
            class="
              row
              g-0
              border
              rounded
              overflow-hidden
              flex-md-row
              mb-4
              shadow-sm
              h-md-250
              position-relative
            "
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Milk</strong>
              <h3 class="mb-0">Fun Facts About Milk</h3>

              <p class="card-text mb-auto">
                About 73% of calcium available in the food supply is provided by
                milk and milk products.
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img
                class="bd-placeholder-img"
                width="200"
                height="250"
                src="./thumb1.jpeg"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div
            class="
              row
              g-0
              border
              rounded
              overflow-hidden
              flex-md-row
              mb-4
              shadow-sm
              h-md-250
              position-relative
            "
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Cow</strong>
              <h3 class="mb-0">Fun Facts About Cows</h3>

              <p class="mb-auto">
                The avereage cow produces 8 gallons of milk per day, thats over
                100 glasses of milk!
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <!--  -->
              <img
                class="bd-placeholder-img"
                width="200"
                height="250"
                src="./thumb2.jpeg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="container my-4">
      <div class="row mb-2">
        <div class="col-md-6">
          <div
            class="
              row
              g-0
              border
              rounded
              overflow-hidden
              flex-md-row
              mb-4
              shadow-sm
              h-md-250
              position-relative
            "
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Cheese</strong>
              <h3 class="mb-0">Fun Facts About Cheese</h3>

              <p class="card-text mb-auto">
                Eating just 2 slices of cheese a day can help reduce the risk of type 2 diabetes by 12%
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img
                class="bd-placeholder-img"
                width="200"
                height="250"
                src="./thumb3.jpeg"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div
            class="
              row
              g-0
              border
              rounded
              overflow-hidden
              flex-md-row
              mb-4
              shadow-sm
              h-md-250
              position-relative
            "
          >
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success">Chocolate</strong>
              <h3 class="mb-0">Fun Facts About Milk Chocolate</h3>

              <p class="mb-auto">
                Low-fat chocolate milk is often used as a source of protein for athletes! With calcium, electrolytes, vitamin A, potassium, vitamin B and more
              </p>
            </div>
            <div class="col-auto d-none d-lg-block">
              <!--  -->
              <img
                class="bd-placeholder-img"
                width="200"
                height="250"
                src="./thumb4.jpeg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
       <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-5">
         About US
        </h2>
        <p class="text-center w-responsive mx-auto mb-5">
          Based in Udupi with clients and team members all over the globes we are a team of expert designers. We develop and use the latest tech to support your business needs.
          Our mission keeps us focused and accountable,our vission drives us and our values dictate how we succeed. To understand HOW we are different, we invite you to learn with us.
          

        </p>
        </section>
        </div>
        <div class="container">
       <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-5">
        Contact US
        </h2>
        <p class="text-center w-responsive mx-auto mb-5">
          Do you have any questions? Please do not hesitate to contact us
          directly. Our team will come back to you within a matter of hours to
          help you.
          <br>
          Email: dairymanagemnt@gmail.com
         <br>
        Phone: + 91 34345 3535 
                

        </p>
        
        </section>
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
    
    <footer class="blog-footer bg-dark">
      <p style="text-align: center; color:white;">Copyright&copy;2022</p>

      <p style="text-align: center">
        <a href="#">Back to top</a>
      </p>
    </footer>
  </body>
</html>

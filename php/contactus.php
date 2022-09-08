<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <!-- Bootstrap core CSS -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Material Design Bootstrap -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"
      rel="stylesheet"
    />
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
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contactus.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center my-5">
          Contact Us
        </h2>
        <p class="text-center w-responsive mx-auto mb-5">
          Do you have any questions? Please do not hesitate to contact us
          directly. Our team will come back to you within a matter of hours to
          help you.
        </p>

        <div class="row">
          <div class="col-md-9 mb-md-0 mb-5">
            <form id="contactform">
              <div class="row">
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" name="name" class="form-control" />
                    <label for="name">Your Name</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" name="email" class="form-control" />
                    <label for="email">Your Email</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" name="subject" class="form-control" />
                    <label for="subject">Subject</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="md-form">
                    <textarea
                      type="text"
                      name="message"
                      rows="3"
                      class="form-control md-textarea"
                    ></textarea>
                    <label for="message">Your Message</label>
                  </div>
                </div>
              </div>

              <div class="text-center text-md-left">
                <button class="btn btn-primary" type="submit">Send</button>
              </div>
            </form>
          </div>

          <div class="col-md-3 text-center text-primary">
            <ul class="list-unstyled mb-0">
              <li>
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <p class="text-dark">Udupi , ui 3845, Karnataka</p>
              </li>

              <li>
                <i class="fas fa-phone mt-4 fa-2x"></i>
                <p class="text-dark">+ 91 34345 3535</p>
              </li>

              <li>
                <i class="fas fa-envelope mt-4 fa-2x"></i>
                <p class="text-dark">dairymanagement@gmail.com</p>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>

    <!-- JQuery -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></script>
    <!-- Bootstrap tooltips -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
    ></script>
    <!-- Bootstrap core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
    ></script>
    <!-- MDB core JavaScript -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"
    ></script>
  </body>
</html>

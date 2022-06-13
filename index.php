<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallpaper Gallary</title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
      rel="stylesheet"
    />
    <link rel = "stylesheet"
href="./css/style.css">    
</head>




<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarLeftAlignExample"
          aria-controls="navbarLeftAlignExample"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
              >
                Category
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#nature">Nature</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#flowers">Flower</a>
                </li>
                
                <li>
                  <a class="dropdown-item" href="#digitalArt">Digital art</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a
              >
            </li>
          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>

   <!-- Carousel start -->
   <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-mdb-interval="10000">
          <img src="img/digital art 1.jpg" class="d-block w-100" alt="Wild Landscape"/>
        </div>
        <div class="carousel-item" data-mdb-interval="2000">
          <img src="img/daisy.jpg" class="d-block w-100" alt="Camera"/>
        </div>
        <div class="carousel-item">
          <img src="img/grass & water drop.jpg" class="d-block w-100" alt="Exotic Fruits"/>
        </div>
      </div>
      <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Carousel end-->
  <a  id="digitalArt">
    <section class="my-4">
          <div class="py-4">
            <h2 class="text-center">Digital Art</h2>
          </div>
        <div class="container-fluid"> 
          <div class="row">
            

              <div class="col-lg4 col-md-4 col-12">
              <img src="img/digital art 3.jpg"  class="img-fluid mb-3">
            </div>

            <div class="col-lg4 col-md-4 col-12">
            <img src="img/digital art 4.jpg"  class="img-fluid mb-3">
            </div>

            <div class="col-lg4 col-md-4 col-12">
            <img src="img/digital art 5.jpg"  class="img-fluid mb-3">
            </div>
            </a>
           
          </div>
        </div> 
    </section>


    <a  id="flowers"> 
    <section class="my-4">
          <div class="py-4">
            <h2 class="text-center">Flowers</h2>
          </div>
        <div class="container-fluid"> 
          <div class="row">
            

              <div class="col-lg4 col-md-4 col-12">
              <img src="img/cherry.jpg"  class="img-fluid mb-3">
            </div>

            <div class="col-lg4 col-md-4 col-12">
            <img src="img/cluster petaled flower.jpg"  class="img-fluid mb-3">
            </div>

            <div class="col-lg4 col-md-4 col-12">
            <img src="img/orchid.jpg"  class="img-fluid mb-3">
            </div>
           
              
           
          </div>
        </div> 
    </section>
    </a>



    <a  id="nature">
    <section class="my-4">
          <div class="py-4">
            <h2 class="text-center">Nature</h2>
          </div>
        <div class="container-fluid"> 
          <div class="row">
            

              <div class="col-lg4 col-md-4 col-12">
              <img src="img/landscape.jpg"  class="img-fluid mb-3">
            </div>

            <div class="col-lg4 col-md-4 col-12">
            <img src="img/forest.jpg"  class="img-fluid mb-3">
            </div>

            <div class="col-lg4 col-md-4 col-12">
            <img src="img/Mountain and lake.jpg"  class="img-fluid mb-3">
            </div>
              
           
          </div>
        </div> 
    </section>
    </a>
    <hr>

    <section class="my-4 shadow-lg p-3" id="contact">
    <div class="py-4">
      <h2 class="text-center">Contact us</h2>
    </div>

    <div class="w-25 m-auto ">
      <form action="form.php" method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="userName" name="userName" class="form-control">
        </div>
        <div class="form-group">
          <label for="userEmail">Email</label>
          <input type="email" id="userEmail" name="userEmail" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone-no">Phone Number</label>
          <input type="number" id="phone-no" name="userNumber" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary mt-3" name="submitBtn">

      </form>
    </div>
    </section>

    <footer class="my-4" id="about">
      <div class="py-4">
        <h3>About me</h3>
      </div>
      <div class="container-fluid">
        <h4 class="text-center"></h4>
        <p class="text-center">I am one of the many who is trying to become a Web developer. This web page is only for educational purpose and the images and illustrations are from <a href="https://www.wallpaperflare.com/">wallpaper flare<a> and go to their rightful owners.</p>
      </div>

      <div class="bg-dark">
        <p class="text-center text-white">Copyright&copy;2022</p>
      </div>

    </footer>



    
    
















    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
    ></script>
</body>
</html>
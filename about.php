<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

  <title>About Us</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php"><h2>Nikamy_Numlians<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog Entries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post-details.php">Post Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>more about us!</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Banner Ends Here -->

  <section class="about-us">
    <div class="container">
      <!-- Updated content for About Us section -->
      <div class="row">
        <div class="col-lg-12">
          <img src="assets/images/about-us.jpg" alt="">
          <p>Welcome to Nikamy_Numlians! We are a team of dedicated individuals passionate about creating a platform for bloggers and readers. Our website is a blend of creativity, technology, and a shared love for the art of blogging.</p>
        </div>
      </div>

      <!-- Team Members -->
      <div class="row">
        <!-- Hassan -->
        <div class="col-lg-4">
          <h4>Hassan (Backend Developer)</h4>
          <p>Our database maestro, Hassan, is the architect behind the scenes. With an unparalleled knack for designing efficient databases and building a robust backend, he ensures that our website runs smoothly and securely.</p>
        </div>


        <!-- Burhan Zaki -->
        <div class="col-lg-4">
          <h4>Burhan Zaki (Backend Developer)</h4>
          <p>Burhan is our coding wizard, Burhan Zaki ensures that your data is safe and sound. He's the security expert who keeps everything locked down.</p>
        </div>

        <!-- Maria Bano -->
        <div class="col-lg-4">
          <h4>Maria Bano (Frontend Developer)</h4>
          <p>Maria Bano is the creative genius behind the eye-catching designs you see on our website. Her attention to detail and artistic flair make your browsing experience truly delightful.</p>
        </div>

        <!-- Aamilik -->
        <div class="col-lg-4">
          <h4>Aamilik (Frontend Developer)</h4>
          <p>Aamilik is our frontend magician. He takes Maria Bano's designs and turns them into a user-friendly interface that you'll love navigating.</p>
        </div>

        <!-- Abdulah Senior -->
        <div class="col-lg-4">
          <h4>Abdulah Senior (Frontend Developer)</h4>
          <p>Abdulah Senior is the experienced hand on our frontend team. His wisdom and expertise ensure that our website is user-centric and intuitive.</p>
        </div>

        <!-- Abdulah Junior -->
        <div class="col-lg-4">
          <h4>Abdulah Junior (SEO Engineer)</h4>
          <p>Abdulah Junior is our SEO whiz, working tirelessly to ensure that our content ranks well and is easily discoverable. He's the guy who helps you find us in the vast sea of the internet.</p>
        </div>

        <!-- Muhamad Sufiyan -->
        <div class="col-lg-4">
          <h4>Muhamad Sufiyan (Content Writer)</h4>
          <p>Muhamad Sufiyan is the creative soul who crafts engaging and informative blogs for your reading pleasure. His words breathe life into our platform.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Your existing footer code remains unchanged -->
  <!-- ... -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>

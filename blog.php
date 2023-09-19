<?php
// Include your database connection file (config.php) here
include('config.php');
// Create an empty array to store the fetched posts
$posts = [];

// $sql = "SELECT posts.*, authors.name, COUNT(comments.comment_id) AS comment_count
// FROM posts
// INNER JOIN authors ON posts.author_id = authors.author_id
// LEFT JOIN comments ON posts.post_id = comments.post_id
// GROUP BY posts.post_id";
$sql = "SELECT posts.*, authors.name, COUNT(comments.comment_id) AS comment_count
        FROM posts
        INNER JOIN authors ON posts.author_id = authors.author_id
        LEFT JOIN comments ON posts.post_id = comments.post_id
        GROUP BY posts.post_id
        ORDER BY posts.created_at DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Fetch and store each row of data in the $posts array
  while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
  }
}



$recentPosts = []; // Initialize the array to store posts

// Fetch data from the database and populate $recentPosts
$rs = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 5"; // Adjust your SQL query as needed
$rse = $conn->query($rs);

if ($rse->num_rows > 0) {
  while ($row = $rse->fetch_assoc()) {
    $recentPosts[] = $row;
  }
}

$secondrecentPosts = []; // Initialize the array to store posts

// Fetch data from the database and populate $recentPosts
$rs = "SELECT * FROM posts ORDER BY created_at asc LIMIT 5"; // Adjust your SQL query as needed
$rse = $conn->query($rs);

if ($rse->num_rows > 0) {
  while ($row = $rse->fetch_assoc()) {
    $secondrecentPosts[] = $row;
  }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>Posts</title>

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
        <a class="navbar-brand" href="index.php">
          <h2>Nikamy_Numlians<em>.</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item active">
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
              <h4>Recent Posts</h4>
              <h2>Our Recent Blog Entries</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->


  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">






<div class="col-lg-6">
  <div class="blog-post">
    <div class="blog-thumb">
      <img src="assets/images/blog-thumb-01.jpg" alt="">
    </div>
    <div class="down-content">
      <span>Lifestyle</span>
      <a href="post-details.php">
        <h4>Donec tincidunt leo</h4>
      </a>
      <ul class="post-info">
        <li><a href="#">Admin</a></li>
        <li><a href="#">May 31, 2020</a></li>
        <li><a href="#">12 Comments</a></li>
      </ul>
      <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet
        eleifend.</p>
      <div class="post-options">
        <div class="row">
          <div class="col-lg-12">
            <ul class="post-tags">
              <li><i class="fa fa-tags"></i></li>
              <li><a href="#">Best Templates</a>,</li>
              <li><a href="#">TemplateMo</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-6">
  <div class="blog-post">
    <div class="blog-thumb">
      <img src="assets/images/blog-thumb-02.jpg" alt="">
    </div>
    <div class="down-content">
      <span>Lifestyle</span>
      <a href="post-details.php">
        <h4>Suspendisse et metus</h4>
      </a>
      <ul class="post-info">
        <li><a href="#">Admin</a></li>
        <li><a href="#">May 22, 2020</a></li>
        <li><a href="#">26 Comments</a></li>
      </ul>
      <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet
        eleifend.</p>
      <div class="post-options">
        <div class="row">
          <div class="col-lg-12">
            <ul class="post-tags">
              <li><i class="fa fa-tags"></i></li>
              <li><a href="#">Best Templates</a>,</li>
              <li><a href="#">TemplateMo</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>









              <div class="col-lg-12">
                <ul class="page-numbers">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="row">
              <div class="col-lg-12">
                <div class="sidebar-item search">
                  <form id="search_form" name="gs" method="GET" action="#">
                    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                  </form>
                </div>
              </div>


              <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                  <div class="sidebar-heading">
                    <h2>Recent Posts</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <?php foreach ($recentPosts as $recentPost): ?>
                        <li>
                          <a href="post-details.php?id=<?php echo $recentPost['post_id']; ?>">
                            <h5>
                              <?php echo $recentPost['title']; ?>
                            </h5>
                            <span>
                              <?php echo date('F j, Y', strtotime($recentPost['created_at'])); ?>
                            </span>
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="sidebar-item categories">
                  <div class="sidebar-heading">
                    <h2>Categories</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li><a href="#">- Nature Lifestyle</a></li>
                      <li><a href="#">- Awesome Layouts</a></li>
                      <li><a href="#">- Creative Ideas</a></li>
                      <li><a href="#">- Responsive Templates</a></li>
                      <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                      <li><a href="#">- Creative &amp; Unique</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="sidebar-item tags">
                  <div class="sidebar-heading">
                    <h2>Tag Clouds</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Creative</a></li>
                      <li><a href="#">HTML5</a></li>
                      <li><a href="#">Inspiration</a></li>
                      <li><a href="#">Motivation</a></li>
                      <li><a href="#">PSD</a></li>
                      <li><a href="#">Responsive</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Behance</a></li>
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Dribbble</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright 2023 Stand Blog Co.

              | Design: <a rel="nofollow" href="" target="_parent">Nikamy_Numlians</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


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
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>
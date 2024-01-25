<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>polls@NCIT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link type="image/png" sizes="32x32" rel="icon" href="./assets/images/dark_fav.png">
  <link rel="stylesheet" href="./4.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary nav-padd fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./assets/images/light_logo.png" alt="logo" height="30" class="img-mar" id="logoimg">NCITArena</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#feature-section">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about-section">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  User
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Student</a></li>
                  <li><a class="dropdown-item" href="#">Administration</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#footer-sec">Contact Us</a></li>
                </ul>
              </li>
            </ul>
            <img src="./assets/images/icons8-moon-100.png" alt="moon" height="40" id="lightdark"/>
          </div>
        </div>
      </nav>

      <section id="main-sec">
      <div class=" hero-item row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="https://gatton.uky.edu/sites/default/files/iStock-networkWEB.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><span id="main-text">NCITArena</span> </h1>
          <p class="lead">Welcome to NCIT Arena, the dynamic platform where your opinion truly matters! At NCIT Arena, we believe in fostering a vibrant community where every student's voice contributes to shaping the collective narrative.NCIT Arena is more than just a poll website; it's a virtual space designed exclusively for the students of NCIT to share their thoughts, perspectives, and insights</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="./signin.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Sign In</button></a>
            <a href="./signup.php"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Sign Up</button></a>
          </div>
        </div>
      </div>
      </section>

      <section id="feature-section">
      <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom" style="padding: 3rem;">&nbsp;</h2>
        <!--
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
              <img src="./assets/images/icons8-poll-50.png" alt="poll" height="40"/>
            </div>
            <h3 class="fs-2 text-body-emphasis">Polls</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
              Call to action
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <img src="./assets/images/icons8-event-64.png" alt="events" height="40"/>
            </div>
            <h3 class="fs-2 text-body-emphasis">Events</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
              Call to action
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <img src="./assets/images/icons8-book-50.png" alt="books" height="40"/>
            </div>
            <h3 class="fs-2 text-body-emphasis">Resources</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
              See More
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
        </div>
      </div>
      </section>
      
      
      <section id="about-section">
      <div class="container marketing">

        <!-- Three columns of text below the carousel
        <div class="row item-head">
          <div class="col-lg-4">
            <img src="./assets/images/me.jpg" alt="me" id="profile-me" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <h2 class="top-head fw-normal">Heading</h2>
            <p>Co-Creator of polls@NCIT</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div><!-- /.col-lg-4
          <div class="col-lg-4">
            <img src="./assets/images/me.jpg" alt="me" id="profile-me" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <h2 class="top-head fw-normal">Pravin</h2>
            <p>Co-Creator of polls@NCIT</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div><!-- /.col-lg-4
          <div class="col-lg-4">
            <img src="./assets/images/me.jpg" alt="me" id="profile-me" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <h2 class="top-head fw-normal">Heading</h2>
            <p>Co-Creator of polls@NCIT</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
          </div><!-- /.col-lg-4 
        </div><!-- /.row -->
      
    
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider" style="color: aliceblue;">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Polls:</h2>
            <p class="lead">NCIT Arena "polls" is used to collect student opinions on various issues within the college. These polls identify concerns, gather preferences, and guide decision-making. Through clear communication and active participation, students contribute valuable insights that influence actions taken to enhance the overall college experience.</p>
          </div>
          <div class="col-md-5">
            <img src="./assets/images/poll.png" alt="notes" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-bor" width="500" height="500">
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Event: </h2>
            <p class="lead">The "Event" in NCITArena serves as a dynamic platform where NCIT clubs share upcoming activities. It's a hub for students to discover diverse events, encouraging active participation , creating a dynamic and inclusive environment that reflects the diversity and vitality of the NCIT community.. Explore, engage, and be part of the excitement at NCIT!</p>
          
          </div>
          <div class="col-md-5 order-md-1">
            <img src="./assets/images/event.png" alt="notes" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-bor" width="500" height="500">
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Resource:</h2>
            <p class="lead">The "Resource" column in NCIT Arena serves as a collaborative space where students can share and access notes, internal exam questions, and other educational materials. It facilitates a community-driven approach to learning, allowing students to benefit from each other's resources, and enhancing the overall educational experience at NCIT</p>
          </div>
          <div class="col-md-5">
            <img src="./assets/images/SHARE YOUR NOTES.png" alt="notes" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-bor" width="500" height="500">
          </div>
        </div>
    
        <!--hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div>
      </section>

      <section id="footer-sec">
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
              <img src="./assets/images/light_logo.png" alt="logo" height="40" id="footerlogo">
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024 NCITArena</span>
          </div>
      
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="./assets/images/icons8-twitter-50.png" alt="twitter" id="twitter"/></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="./assets/images/icons8-instagram-50.png" alt="instagram" id="insta"/></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="./assets/images/icons8-facebook-50.png" alt="facebook" id="facebook"/></a></li>
          </ul>
        </footer>
      </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./logic.js"></script>
  </body>
</html>
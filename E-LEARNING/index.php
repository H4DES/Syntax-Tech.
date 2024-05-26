<?php
    session_start();

    include("./login-register/config.php");
    if(!isset($_SESSION['valid'])){
       header("Location: index2.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-LEARNING</title>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/style.css" />
  </head>
  <body class="">
    <!--NAVBAR - START-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">E-LEARNING</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#courses">Best Courses</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Best Course
              </a>
              <ul
                class="dropdown-menu dropdown-menu-dark"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <li>
                  <a class="dropdown-item" href="#webdevelopment">Web Development</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#frontend"
                    >Frontend Development</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#courses"
                    >Backend Development</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#courses"
                    >Desktop Development</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#courses" id="pills-machine-tab" data-bs-toggle="pill" data-bs-target="#pills-machine" >Machine Learning</a>
                </li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="#blog">Blogs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Contact Us</a>
            </li>
          </ul>

          <!-- <a href="#" class="btn btn-primary">Create Account</a>
          <a href="#" class="btn btn-brand">Login Account</a> -->
          <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profile</button> -->
          <a href="#" class="profile-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <div class="rounded-circle profile-image">
              <img src="assets/images/User profile.png" class="w-100 h-100" alt="Profile Picture">
            </div>
          </a>
          <h3><span class="badge bg-secondary mt-2 ms-1">Profile</span></h3>
        </div>
      </div>
    </nav>

<div class="container">
      <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact us with:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <div class="modal-body d-flex justify-content-center px-5">
          <div class="card me-4 text-center" style="width: 18rem;">
            <img src="./assets/images/GMAIL.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gmail</h5>
                <!-- <p class="card-text">Facebook</p> -->
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=bernardporlas93@gmail.com&body=Hello,%20Syntax%20Tech%20Development%20Team!%0D%0A%0D%0AI'm%20interested%20in%20learning%20more%20about%20Programming!%20%0D%0A%0D%0A%20" target="_blank" class="btn btn-dark">Send mail</a>
              </div>
          </div>

        <div class="card text-center" style="width: 18rem;">
          <img src="./assets/images/GIT HUB.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">GitHub</h5>
              <!-- <p class="card-text"></p> -->
              <a href="https://github.com/H4DES/Syntax-Tech." target="_blank" class="btn btn-dark">Collaborate</a>
             </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

            <?php
                $user_id = $_SESSION['user_id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE user_id = $user_id");
               
                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['username'];
                    $res_fullname = $result['fullname'];
                    $res_email = $result['email'];
                    $res_country = $result['country'];
                    $res_created = $result['account_created'];
                    $res_id = $result['user_id'];

                    $formatted_res_created = date("Y-m-d", strtotime($res_created));
                }

                // echo "<a href='edit.php'?id=$res_id'>Change Profile</a>";
            ?>
      <!-- PROFILE MODAL START -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel"><h3><span class="badge bg-secondary mt-2 ms-1">Profile Settings</span></h3></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body text-center">
        <div class="alert alert-dark" role="alert">
          <h4 class="text-center"><b><?php echo $res_Uname ?></b></h4>
        </div>

        <div class="alert alert-dark" role="alert">
          <p class="text-center"><b><?php echo $res_fullname ?></b></p>
        </div>

        <div class="alert alert-dark" role="alert">
          <p class="text-center">Country: <b><?php echo $res_country ?></b></p>
        </div>

        <!-- <a href="#" id="bookmarkLink"><i class="ri-bookmark-3-line" id="icon" style="font-size: 30px;"></i></a> -->
          <!-- <div class="alert alert-dark" role="alert">
            <p id="courseCompletedText" class="text-center">Course Completed: 0</p>
          </div> -->

        <div class="alert alert-dark" role="alert">
          <p class="text-center">Account Created: <b><?php echo $formatted_res_created ?></b></p>
        </div>
        
          <!-- <p>
            <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Button with data-bs-target
            </button>
          </p> -->

        <a href="logout.php"> <button type="button" class="btn btn-dark mt-3">Account Logout</button> </a>
        <!-- <button type="button" class="btn btn-dark">Account Logout</button> -->
      </div>
    </div>
    <!--NAVBAR - END-->
    
    <!--HERO SLIDER - START-->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item text-center bg-primary bg-cover vh-100 active slide-1" data-bs-interval="3000">
          <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">Develop your skills</h1>
                <a href="#courses" class="btn btn-dark">Learn Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-2" data-bs-interval="2500">
          <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">
                  Always Upskill
                </h1>
                <a href="#courses" class="btn btn-dark">Learn Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-3" data-bs-interval="2500">
          <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">
                  Trust the process
                </h1>
                <a href="#courses" class="btn btn-dark">Learn Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item text-center bg-primary bg-cover vh-100 slide-4" data-bs-interval="2500">
          <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h6>THIS IS E-LEARNING</h6>
                <h1 class="display-1 fw-bold">
                  Enjoy Learning
                </h1>
                <a href="#courses" class="btn btn-dark">Learn Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#heroSlider"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#heroSlider"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--HERO SLIDER - END-->

    <!--ABOUT US - START-->
    <section id="about">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-lg-5">
            <img src="assets/images/Syntax Tech Logo.png" alt="" />
          </div>
          <div class="col-lg-7">
            <h1>About us</h1>
            <div class="divider my-4"></div>
            <p>
            Welcome to Syntax Technology Development Team! We're a group of students passionate about web development, and we're excited to introduce our latest project: E-LEARNING. A web app to discover the best programming courses online.
            </p>
            <p>
            At Syntax Tech, we understand the challenge of navigating countless resources. That's why we've curated top-quality programming courses to streamline your learning journey.
            </p>
            <p>
            Our platform is intuitive, informative, and accessible to all levels of learners. From beginners to seasoned developers, our web app supports you every step of the way. Join us as we combine our love for coding with our commitment to education, making learning programming more accessible and enjoyable for everyone.
            </p>
            <!-- Button trigger modal -->
            <a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#team" >Our Team</a>
            <!-- Button trigger modal -->

            <!-- Modal -->
<div class="modal fade" id="team" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Syntax Technology Development Team</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

    <div class="modal-body">
      <div class="team">
        <div class="container">
          <div class="section-title text-center">
            <h2>TEAM</h2>
              <div class="underline"></div>
              <p>We are syntax technology development team.</p>
         </div>
          <div class="row">
          <!-- PERSON 1 101 x 102 orig size: 342 x 342-->
            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="teampic"><img src="./assets/images/person1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Bernard Raine B. Porlas</h4>
                    <span>Fullstack Web Developer</span>
          
                    <p>My role is to develop the website from front-end to back-end of our website.</p>
                      <div class="social">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        <a href=""> <i class="bi bi-whatsapp"></i> </a>
                      </div>
                  </div>
              </div>
            </div>

            <!-- PERSON 2 -->
    <div class="col-lg-6 mt-4 mt-lg-0">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person2.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Messy Bensorto</h4>
          <span>Web Developer</span>
          <p>My role is also to develop the website and make website responsive.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 3 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person3.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Rico P. Teodoro</h4>
          <span>UI/UX Designer</span>
          <p>My role is to make a primary design to our website and make it interactive.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 4 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person4.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Genevive Cruz</h4>
          <span>UI/UX Designer</span>
          <p>My role is to make the website more user friendly and make it presentable.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 5 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person5.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Norie Jane G. Tubera</h4>
          <span>Content Writer</span>
          <p>My role as content writer is to write the content about the website and the courses.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 6 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person6.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Norsamie K. Akmad</h4>
          <span>Content Writer</span>
          <p>My role as content writer is to gather all resources like image and url of the website.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 7 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person7.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Summer D. Ballesteros</h4>
          <span>Content Writer</span>
          <p>My role as content writer is to support the gathering of url and the images of website.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 8 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person8.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Jubani Usman</h4>
          <span>Content Writer</span>
          <p>My role as content writer is to gather description of the courses.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

    <!-- PERSON 9 -->
    <div class="col-lg-6 mt-4">
      <div class="member d-flex align-items-start">
        <div class="teampic"><img src="./assets/images/person9.jpg" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>Jude Jovenal</h4>
          <span>Content Writer</span>
          <p>My role as a content writer is to support also the gathering of description of the courses that website used.</p>
          <div class="social">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
            <a href=""> <i class="bi bi-whatsapp"></i> </a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
        </div>
                      </div>

                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!--ABOUT US - END-->

    <!--COURSES - START-->
      <section id="courses" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 intro-text">
            <h1>The Best Programming Courses</h1>
            <p>
            Discover the best programming courses online with Syntax Tech!
            </p>
          </div>
        </div>
      </div>

      <div class="container">
          <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
            <!-- WEB DEVELOPMENT NAV-ITEM -->
              <li class="nav-item pb-2" role="presentation">
                  <button class="nav-link active" id="pills-webdevelopment-tab" data-bs-toggle="pill" data-bs-target="#pills-webdevelopment" type="button" role="tab" aria-controls="pills-webdevelopment" aria-selected="true">Web Development</button>
              </li>

              <!-- FRONT END DEVELOPMENT NAV-ITEM -->
              <li class="nav-item pb-2" role="presentation">
                  <button class="nav-link" id="pills-frontend-tab" data-bs-toggle="pill" data-bs-target="#pills-frontend" type="button" role="tab" aria-controls="pills-frontend" aria-selected="false">Frontend Development</button>
              </li>

              <!-- BACK END DEVELOPMENT NAV-ITEM -->
              <li class="nav-item pb-2" role="presentation">
                  <button class="nav-link" id="pills-backend-tab" data-bs-toggle="pill" data-bs-target="#pills-backend" type="button" role="tab" aria-controls="pills-backend" aria-selected="false">Backend Development</button>
              </li>

              <!-- MACHINE LEARNING NAV-ITEM -->
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-machine-tab" data-bs-toggle="pill" data-bs-target="#pills-machine" type="button" role="tab" aria-controls="pills-machine" aria-selected="false">Machine Learning</button>
              </li>
          </ul>

          <!-- INTRO 4 COURSES -->
          <div class="tab-content" id="pills-tabContent">

            <!-- 1st course -->
            <div class="tab-pane fade show active" id="pills-webdevelopment" role="tabpanel" aria-labelledby="pills-webdevelopment-tab">
              
            <!-- START OF 4 CARDS -->
            <div class="row gy-5" id="webdevelopment">
              <!-- CARD 1 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/js/default.asp" target="_blank"><img src="./assets/images/js.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/js/default.asp">JavaScript</a></h5>
                    <p class="small">Master JavaScript from basics to advanced concepts in this comprehensive course by w3schools.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 2 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/REACT/DEFAULT.ASP" target="_blank"><img src="./assets/images/React JS.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/REACT/DEFAULT.ASP">React JS</a></h5>
                    <p class="small">Unlock the power of React JS with this course guiding you from basic to advanced techniques by w3schools.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 3 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-get-started.php" target="_blank"><img src="./assets/images/Bootstrap.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-get-started.php">Bootstrap</a></h5>
                    <p class="small">Bootstrap mastery made simple. Learn to create responsive and stunning web designs by Tutorial Republic</p>
                  </div>
                </div>
              </div>

              <!-- CARD 4 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.codecademy.com/enrolled/courses/learn-node-js" target="_blank"><img src="./assets/images/Node JS.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.codecademy.com/enrolled/courses/learn-node-js">Node JS</a></h5>
                    <p class="small">Discover the versatility of Node.js, Learn to build scalable applications with ease by Codeacademy</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 2nd course -->
          <div class="tab-pane fade" id="pills-frontend" role="tabpanel" aria-labelledby="pills-frontend-tab">
          
          <!-- START OF 4 CARDS -->
          <div class="row gy-5" id="frontend">
              <!-- CARD 1 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/html/default.asp" target="_blank"><img src="./assets/images/html.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-starline"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/html/default.asp">Html 5 - w3schools</a></h5>
                    <p class="small">HTML5 essentials at your fingertips. Master modern web development with ease. Difficulty.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 2 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/css/default.asp" target="_blank"><img src="./assets/images/css.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/css/default.asp">Css 3 - w3schools</a></h5>
                    <p class="small">Elevate your web styling with CSS mastery. From basics to advanced techniques, and enhance your web designs.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 3 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://vuejs.org/tutorial/#step-1" target="_blank"><img src="./assets/images/vue js.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://vuejs.org/tutorial/#step-1">Vue JS</a></h5>
                    <p class="small">Master Vue.js with direct tutorials from Vue Mastery. Code and create dynamic web interfaces effortlessly.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 4 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.figma.com/community/file/1246509771284738232/free-figma-web-design-tutorial" target="_blank"><img src="./assets/images/figma.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.figma.com/community/file/1246509771284738232/free-figma-web-design-tutorial">Figma Web Design</a></h5>
                    <p class="small">Master web design in Figma. Create stunning visuals effortlessly with this intuitive tool by Figma community.</p>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <!-- 3rd course -->
            <div class="tab-pane fade" id="pills-backend" role="tabpanel" aria-labelledby="pills-backend-tab">
            
            <!-- START OF 4 CARDS -->
            <div class="row gy-5" id="backend">
              <!-- CARD 1 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/php/" target="_blank"><img src="./assets/images/php.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/php/">PHP</a></h5>
                    <p class="small">Unlock the power of PHP mastery. Dive into building dynamic websites with ease through this comprehensive course by w3schools.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 2 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/sql/" target="_blank"><img src="./assets/images/sql.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/sql/">SQL - w3schools</a></h5>
                    <p class="small">Unlock the world of SQL mastery. From fundamentals to advanced querying, delve into the art of managing databases with ease.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 3 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/mongodb/index.php" target="_blank"><img src="./assets/images/mongoDB.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/mongodb/index.php">MongoDB</a></h5>
                    <p class="small">Dive into MongoDB mastery. Explore the world of NoSQL databases and learn to wield MongoDB with confidence by w3schools.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 4 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.codecademy.com/learn/learn-python-3" target="_blank"><img src="./assets/images/python.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.codecademy.com/learn/learn-python-3">Python</a></h5>
                    <p class="small">Embark on your Python journey. From basic to advanced concepts, master the versatile language by Codeacademy.</p>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <!-- 4th course -->
            <div class="tab-pane fade" id="pills-machine" role="tabpanel" aria-labelledby="pills-machine-tab">
            
            <!-- START OF 4 CARDS -->
            <div class="row gy-5" id="machine">
              <!-- CARD 1 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/python/python_ml_getting_started.asp" target="_blank"><img src="./assets/images/python-machine-learning.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/python/python_ml_getting_started.asp">Py Machine Learning</a></h5>
                    <p class="small">Embark on machine learning with python. Explore algorithms, data analysis, and the intricacies of ML with ease by w3schools.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 2 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.tutorialspoint.com/tensorflow/tensorflow_introduction.htm" target="_blank"><img src="./assets/images/tensorflow.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.tutorialspoint.com/tensorflow/tensorflow_introduction.htm">Tensorflow</a></h5>
                    <p class="small">Unlock the potential of TensorFlow. Delve into deep learning concepts and build powerful models with ease by Tutorials Point.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 3 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.w3schools.com/python/numpy/default.asp" target="_blank"><img src="./assets/images/numpy.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-half-fill"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.w3schools.com/python/numpy/default.asp">NumPy</a></h5>
                    <p class="small">Dive into NumPy mastery. Explore advanced numerical computing techniques and elevate your Python skills effortlessly by w3schools.</p>
                  </div>
                </div>
              </div>

              <!-- CARD 4 -->
              <div class="col-lg-3 col-sm-6">
                <div class="menu-item bg-white shadow-on-hover">
                  <a href="https://www.geeksforgeeks.org/deep-learning-tutorial/" target="_blank"><img src="./assets/images/deep-learning.png" alt="" /></a>
                  <div class="menu-item-content p-4">
                    <div>
                      <span class="difficulty">Difficulty: </span>
                      <span class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                      </span>
                    </div>
                    <h5 class="mt-1 mb-2"><a href="https://www.geeksforgeeks.org/deep-learning-tutorial/">Deep Learning</a></h5>
                    <p class="small">Dive into the fascinating world of deep learning. Explore advanced neural networks, algorithms, and AI techniques with ease.</p>
                  </div>
                </div>
              </div>
            </div>
            </div>
      </div>
      </section>
    <!--COURSES - END-->

    <!--Blog Post - START-->
      <section id="blog">
        <div class="container">
          <div class="row">
            <div class="col-12 intro-text">
                <h1>Technology Blogs</h1>
                <p>All blogs and article about latest technology.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="blog-post d-flex shadow-on-hover">
                <img src="./assets/images/Claude AI blog.png" alt="">
                <div class="blog-post-content p-4">
                  <p>Article from AutoGPT · February 17, 2024</p>
                  <h4><a href="#">Claude AI by Anthropic AI: Breaking Down Barriers and Limitations</a></h4>
                  <!-- <p>Claude AI, developed by Anthropic AI, is an AI chatbot that excels in tasks like summarization, editing, Q&A, decision-making, and code-writing?</p> -->
                  <a target="_blank" href="https://autogpt.net/claude-ai-breaking-down-barriers-and-limitations/">Read More</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="blog-post d-flex shadow-on-hover">
                <img src="./assets/images/Devin AI.png" alt="">
                <div class="blog-post-content p-4">
                  <p>Article from The Economic Times · March 20, 2024</p>
                  <h4><a href="#">The new AI disruption tool: Devin(e) or Devil for software engineers?</a></h4>
                  <a target="_blank" href="https://economictimes.indiatimes.com/news/company/corporate-trends/the-new-ai-disruption-tool-devine-or-devil-for-software-engineers/articleshow/108654112.cms?from=mdr">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--Blog Post - END-->

    <!-- FOOTER -->
    <footer class="bg-dark">
      <div class="footer-top">
          <div class="container">
              <div class="row gy-5">
                  <div class="col-lg-3 col-sm-6">
                      <!-- <a href="#"><img src="./assets/images/logo-white.svg" alt=""></a> -->
                      <h2>E-LEARNING</h2>
                      <div class="line"></div>
                      <p>We're a group of students passionate about web development</p>
                      <div class="social-icons">
                          <a href="https://www.facebook.com/bernardraine.porlas"><i class="ri-facebook-fill"></i></a>
                          <a href="https://github.com/H4DES/Syntax-Tech."><i class="ri-github-fill"></i></a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <h5 class="mb-0 text-white">Road maps</h5>
                      <div class="line"></div>
                      <ul>
                          <li><a href="https://academind.com/tutorials/web-development-roadmap-2024">Web Development</a></li>
                          <li><a href="https://www.geeksforgeeks.org/frontend-developer-roadmap/">Front End Development</a></li>
                          <li><a href="https://roadmap.sh/backend">Back End Development</a></li>
                          <li><a href="https://www.scaler.com/blog/machine-learning-roadmap/">Machine Learning</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <h5 class="mb-0 text-white">Programming Websites</h5>
                      <div class="line"></div>
                      <ul>
                          <li><a href="https://www.freecodecamp.org/">freeCodeCamp</a></li>
                          <li><a href="https://www.sololearn.com/en/">Sololearn</a></li>
                          <li><a href="https://www.hackerrank.com/">Hackerrank</a></li>
                          <li><a href="https://leetcode.com/">Leetcode</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <h5 class="mb-0 text-white">Contact</h5>
                      <div class="line"></div>
                      <ul>
                          <li>South Cotabato, Gensan 9500</li>
                          <li>+63 965 918 3687</li>
                          <li>bernardporlas93@gmail.com</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <div class="row g-4 justify-content-between">
                  <div class="col-auto">
                      <p class="mb-0">© Copyright Syntax Tech. All Rights Reserved</p>
                  </div>
              </div>
          </div>
      </div>
  </footer>

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>

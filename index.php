<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MedEaseLinkup home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monospace">
    <link rel="stylesheet" href="index_styles.css">
    <style>
        nav{
            background-color: rgb(148, 148, 223);
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            /* color: white; */
            font-size: 20px;
            height: 12vh;
        }
        .navigation-ul{
            display: flex;
            justify-content: space-between;
        }
        .navigation-li{
            list-style-type: none;
            padding: 10px;
        }
        .navigation-li .navigation-a{
            text-decoration: none;
            font-weight: bold;
            color: rgb(105, 94, 94);
        }
        .searchbar input{
            padding: 10px;
            border-radius: 25px;
            border: none;
            width: 20vw;
        }
        .top{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

  <body>
    <!--Navigation Bar Start-->
        <!-- Navigation Bar Start -->
        <nav>
            <div class="top">
                <img style="border-radius: 50%;width: 60px; height: 60px;" src="images/mylogo.jpg" alt="logo">
                <h2 style="padding: 20px; font-weight: bold;">MedEaseLinkUp</h2>
            </div>
           <div class="navigation" style="padding-top: 12px;">
                <ul class="navigation-ul">
                    <li class="navigation-li"><a class="navigation-a" href="index.php">Home</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#">About</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#">Resources</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#">Contact Us</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="user_type.php">Register</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="user_type.php">Login</a></li>
    
                </ul>
           </div> 
           <div class="searchbar">
                <input type="search" name="searchbar" id="search" placeholder="Search..">
           </div>
        </nav>
        <!-- navbar end -->

      <!-- <nav style="background-color: blue;" class="navbar navbar-expand-lg bg-body-tertiary bg-secondary nav justify-content-center" >
        <div class="container-fluid">  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item"> -->
                <!-- <a class="nav-link active" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Blog</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Log In
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Doctor</a></li>
                  <li><a class="dropdown-item" href="#">Patient</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Support Staff</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> -->
      
    <!--Navigation Bar End-->

    <!--Image Carousel-->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="doctor-1.jpg" height="700px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Hello there</h5>
                <p>Welcome to MedEaseLinkup.</p>
              </div>
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="doctor-2.jpg" height="700px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Hello there</h5>
                <p>Welcome to MedEaseLinkup.</p>
              </div>
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="doctor-5.jpg" height="700px" width="auto"class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>Hello there</h5>
                <p>Welcome to MedEaseLinkup.</p>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


   <!-- body-content start -->
    <div>
        <br><br><br>
        <h1 class="member-header" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size: 43px;">Become A Member</h1>
        <div class="divider" style="border-bottom: 1.95px dotted rgb(35, 59, 51); margin-right: 630px; margin-left: 630px; margin-bottom: 5px; margin-top: 2px;"></div>
        <br>
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <iframe width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen" src="https://www.youtube.com/embed/tgbNymZ7vqYautoplay=1&mute=1">
                </iframe>
              </div>
              <div class="col member">
                <br><br><br>
                <h4 id="member-header-2">Practice-Changing Updates</h4>
                <br>
                <p class="member-p"> <b>MedEaseLinkup</b> provides clinicians with real-time practice-changing updates, so the best available evidence is always at their fingertips.</p>
                <button type="button" class="btn btn-outline-primary btn-lg member-btn free_trial_btn">Request A Free Trial</button>
              </div>
            </div>
          </div>
    </div>

    <!-- Page Divider Start -->
    <!-- <div class="divider" style="border-bottom: 3px solid rgb(35, 59, 51); margin-right: 80px; margin-left: 80px; margin-bottom: 50px; margin-top: 50px;"></div> -->
    <!-- Page Divider End -->

    <br><br>
    <div class="container overflow-hidden text-center">
        <div class="row gy-5">
            <div class="col-6">
                <div class="p-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="doctor-4.jpg" height="150px" width="150px" alt="..." class="rounded-circle float-start">
                        </div>
                        <div class="col-8">
                            <h5>
                                Fast Answers at the Point of Care
                            </h5>
                            <p style="text-align: left;">
                                When a clinician has a question at the point of care, they need an answer fast. Supported by powerful search technology, DynaMed quickly identifies and surfaces the right content. Key takeaways, targeted synopses, and clearly defined recommendations reduce time to answer. And for times that call for a deeper dive into the research, DynaMed also provides one-click links to primary literature.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="doctor-5.jpg" height="150px" width="150px" alt="..." class="rounded-circle float-start">
                        </div>
                        <div class="col-8">
                            <h5 style="text-align: center;">Confidence in Practice</h5>
                            <p style="text-align: left;">
                                To provide exceptional care, clinicians must have the utmost confidence in the information they use to diagnose and manage patients. DynaMed ensures peace of mind in the clinical decision-making process with content based on a rigorous, seven-step evidence-based methodology, robust systematic literature surveillance with daily updates, and clinical expertise that both complements and clarifies the evidence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="doctor-6.jpg" height="150px" width="150px" alt="..." class="rounded-circle float-start">
                        </div>
                        <div class="col-8">
                            <h5>
                                A Personalized Solution
                            </h5>
                            <p style="text-align: left;">
                                Starting from the homepage, clinicians can quickly reference recent practice-changing updates and content relevant to their expertise. Additionally, DynaMed offers clinicians the opportunity to affiliate with multiple organizations, allowing for easy access at any site, and continuous tracking of DynaMed usage for CME and MOC credits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="doctor-7.jpg" height="150px" width="150px" alt="..." class="rounded-circle float-start">
                        </div>
                        <div class="col-8">
                            <h5>
                                Anytime, Anywhere Access
                            </h5>
                            <p style="text-align: left;">
                                For a decision support tool to be embraced at the point of care, it must be able to seamlessly integrate into the clinical workflow. DynaMed anticipates and responds to the needs of the time-crunched clinician with features including EHR integration, on-the-go access via a convenient mobile app, and streamlined single sign-on capabilities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

      <!-- Page Divider Start -->
      <div class="divider" style="border-bottom: 3px solid rgb(35, 59, 51); margin-right: 100px; margin-left: 100px; margin-bottom: 1; margin-top: 50px;"></div>
      <!-- Page Divider End -->

      <br><br>
      <div class="container text-center">
        <h3>At A Glance</h3>
        <div class="divider" style="border-bottom: 1.95px dotted rgb(35, 59, 51); margin-right: 600px; margin-left: 600px; margin-bottom: 5px; margin-top: 2px;"></div>
        <br>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <div class="col">
                <div class="p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-calendar-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5ZM1 14V4h14v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1Zm7-6.507c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                    </svg>
                    <br><br>
                    <p class="glance-txt">Daily Updates</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-folder-symlink-fill" viewBox="0 0 16 16">
                        <path d="M13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2l.04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3zM2.19 3c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293L7.586 3H2.19zm9.608 5.271-3.182 1.97c-.27.166-.616-.036-.616-.372V9.1s-2.571-.3-4 2.4c.571-4.8 3.143-4.8 4-4.8v-.769c0-.336.346-.538.616-.371l3.182 1.969c.27.166.27.576 0 .742z"/>
                    </svg>
                    <br><br>
                    <p class="glance-txt">Overviews & Recommendations</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-capsule-pill" viewBox="0 0 16 16">
                        <path d="M11.02 5.364a3 3 0 0 0-4.242-4.243L1.121 6.778a3 3 0 1 0 4.243 4.243l5.657-5.657Zm-6.413-.657 2.878-2.879a2 2 0 1 1 2.829 2.829L7.435 7.536 4.607 4.707ZM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8Zm-.5 1.042a3 3 0 0 0 0 5.917V9.042Zm1 5.917a3 3 0 0 0 0-5.917v5.917Z"/>
                    </svg>
                    <br><br>
                    <p class="glance-txt">Micromedex Drug Content</p>
                </div> 
            </div>
            <div class="col">
                <div class="p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                        <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z"/>
                    </svg>
                    <br><br>
                    <p class="glance-txt">Alerts When Topics Change</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-google-play" viewBox="0 0 16 16" >
                        <path d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295ZM1 13.396V2.603L6.846 8 1 13.396ZM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z"/>
                    </svg>
                    <br><br>
                    <p class="glance-txt">Free Mobile App</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-fingerprint" viewBox="0 0 16 16">
                        <path d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z"/>
                        <path d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115V7Zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z"/>
                        <path d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z"/>
                        <path d="M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z"/>
                        <path d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49Z"/>
                    </svg>
                    <br><br>
                    <p class="glance-txt">Single Sign-On</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                        <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                    </svg>
                    <br><br>
                    <p class="glance-txt">Robust Multimedia</p>
                </div>
            </div>
            <div class="col">
                <div class="p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" fill="currentColor" class="bi bi-motherboard-fill" viewBox="0 0 16 16">
                        <path d="M5 7h3V4H5v3Z"/>
                        <path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2H1Zm11 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7Zm2 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM3.5 10a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6Zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6ZM4 4h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0V3a1 1 0 0 0-1 1Zm7 7.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 0-.5.5Z"/>
                    </svg>
                    <br><br>
                    <p class="glance-txt">CME and MOC</p>
                </div>
            </div>

        </div>  
      </div>

      <!-- Pricing Start -->
      <br>
      <div>
        <h3 style="text-align: center;">Welcome To The Silicon Valley</h3>
        <br>
        <p style="text-align: center;">Get The Membership Card and Get To Enjoy Premium Priviledges From the <a href="index.html"><b>MedEaseLinkUp</b></a> Platform. Check Out The PriceList Below.</p>
      </div>
      <div class="container text-center">
        <div class="row align-items-center">
          <div class="col" style="border-top: 1px solid rgb(13, 13, 14); border-right: 1px solid rgb(122, 122, 230); margin: 5px; max-width: 450px;">
            <div>
                <br>
                <h4 style="text-align: center;">Basic</h4>
                <p style="text-align: center; font-size: 20px;">Best For Students</p>
            </div>
            <div>
                <h1 style="text-align: center;">Free</h1>
            </div>
            <br>
            <div>
                <ul style="list-style-type: none; margin: auto;">
                    <li>
                        <p style="text-align: center;">
                            <svg style="color: red; align-items:left;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Initial System Configuration
                        </p>
                    </li>
                    <li>
                        <p style=" padding-right: 15px;" >
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Robust Multimedia
                        </p>
                    </li>
                    <li>
                        <p>
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Micromedex Drug Content
                        </p>
                    </li>
                    <li>
                        <p>
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Alerts When Topics Change
                        </p>
                    </li>
                    <li>
                        <p style="padding-right: 40px;">
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Daily Updates
                        </p>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-outline-primary btn-lg member-btn" style="float: center; margin: 5px; border-radius: 22.5px;">Join?</button>
          </div>

          <div class="col" style="border-top: 1px solid rgb(122, 122, 230); border-right: 1px solid rgb(13, 13, 14); margin: 5px; max-width: 450px;">
            <div>
                <br>
                <h4 style="text-align: center;">Starter</h4>
                <p style="text-align: center; font-size: 20px;">Best For Families</p>
            </div>
            <div>
                <h1 style="text-align: center;">KES 50,000</h1>
            </div>
            <br>
            <div>
                <ul style="list-style-type: none; margin: auto;">
                    <li>
                        <p style="text-align: center;">
                            <svg style="color: red; align-items:left;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Initial System Configuration
                        </p>
                    </li>
                    <li>
                        <p style=" padding-right: 15px;" >
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Robust Multimedia
                        </p>
                    </li>
                    <li>
                        <p>
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Micromedex Drug Content
                        </p>
                    </li>
                    <li>
                        <p>
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Alerts When Topics Change
                        </p>
                    </li>
                    <li>
                        <p style="padding-right: 40px;">
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Daily Updates
                        </p>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-outline-primary btn-lg member-btn" style="float: center; margin: 5px; border-radius: 22.5px;">Join?</button>
          </div>

          <div class="col" style="border-right: 1px solid rgb(122, 122, 230); border-top: 1px solid rgb(13, 13, 14); margin: 5px; max-width: 450px;">
            <div>
                <br>
                <h4 style="text-align: center;">Premium</h4>
                <p style="text-align: center; font-size: 20px;">Best For Companies</p>
            </div>
            <div>
                <h1 style="text-align: center;">KES 75,000</h1>
            </div>
            <br>
            <div>
                <ul style="list-style-type: none; margin: auto;">
                    <li>
                        <p style="padding-right: 5px;">
                            <svg style="color: red; align-items:left;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Initial System Configuration
                        </p>
                    </li>
                    <li>
                        <p style=" padding-right: 20px;" >
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Robust Multimedia
                        </p>
                    </li>
                    <li>
                        <p>
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Micromedex Drug Content
                        </p>
                    </li>
                    <li>
                        <p>
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Alerts When Topics Change
                        </p>
                    </li>
                    <li>
                        <p style="padding-right: 40px;">
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-balloon-heart" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721L8 2.42Zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063.045.041.089.084.132.129.043-.045.087-.088.132-.129 3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3.177 3.177 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398Z"/>
                            </svg>
                            Daily Updates
                        </p>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-outline-primary btn-lg member-btn" style="float: center; margin: 5px; border-radius: 22.5px;">Join?</button>
          </div>
        </div>
      </div>
      <!-- Pricing End -->
   <!-- body-content end -->


   <!-- Footer Start -->
   <br>
   <footer style="background-color: rgba(230, 229, 215, 0.308);">
    <div class="container text-center">
        <div class="row align-items-center">
          <div class="col">
            <h3><span>M</span>ed<span>Ease</span><span>Li</span>nku<span>p</span></h3>
          </div>

          
          <div class="col">
            <br>
            <h5 style="text-align: center;">About Us</h5>
            <div class="col">
            <ul style="list-style-type: none;" class="footer_links">
                <li><a href="#">Company</a></li>
                <li><a href="#">Offices</a></li>
                <li><a href="#">Leadership</a></li>
                <li><a href="#">Corporate Responsibility</a></li>
            </ul>
            </div>  
          </div>

          <div class="col">
            <br>
            <h5>Technology</h5>
            <div class="col">
            <ul style="list-style-type: none;" class="footer_links">
                <li><a href="#">Open for Research</a></li>
                <li><a href="#">Open Source</a></li>
                <li><a href="#">Accessibility</a></li>
                <li><a href="#">Open Access</a></li>
            </ul>
            </div>
          </div>

          <div class="col">
            <br><br>
            <h5>Helpful Links</h5>
            <div class="col">
                <ul style="list-style-type: none;" class="footer_links">
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">News Center</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQ's</a></li>
                </ul>
            </div>
          </div>
          
          <div class="col">
            <h5>Sign In</h5>
            <div class="col">
                <ul style="list-style-type: none;" class="footer_links">
                    <li><a href="#">MedEaseLinkUp Doctor</a></li>
                    <li><a href="#">MedEaseLinkUp Patient</a></li>
                    <li><a href="#">MedEaseLinkUp Support</a></li>
                    <li></li>
                </ul>
            </div>
          </div>
          <br><br>
        </div>

        <!-- Footer-Divider Start-->
        <div class="divider" style="border-bottom: 3px solid rgb(35, 59, 51); margin-right: 80px; margin-left: 80px; margin-bottom: 50px; margin-top: 50px;"></div>
        <!-- Footer-Divider End -->
    </div>
    
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <p> <a href="#">Privacy Policy</a>  |  <a href="#">Cookie Policy</a>  |  <a href="#">Terms of Use</a> </p>
          </div>
          <div class="col">
            <p>&copy;MedEaseLinkUp Services. All Rights Reserved.</p>
          </div>
          <div class="col">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="27px" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="27px" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="margin: 5px; color: rgb(112, 23, 129);">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="27px" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16" style=" margin: 5px; color: rgb(13, 14, 12);">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="27px" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="27px" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16" style="margin: 5px; color: rgb(80, 83, 74);">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="27px" fill="currentColor" class="bi bi-snapchat" viewBox="0 0 16 16" style="margin: 5px; color: rgb(169, 196, 97);">
                        <path d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="27px" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16" style=" margin: 5px; color: rgb(97, 145, 25);">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27px" height="27px" fill="currentColor" class="bi bi-wordpress" viewBox="0 0 16 16">
                        <path d="M12.633 7.653c0-.848-.305-1.435-.566-1.892l-.08-.13c-.317-.51-.594-.958-.594-1.48 0-.63.478-1.218 1.152-1.218.02 0 .039.002.058.003l.031.003A6.838 6.838 0 0 0 8 1.137 6.855 6.855 0 0 0 2.266 4.23c.16.005.313.009.442.009.717 0 1.828-.087 1.828-.087.37-.022.414.521.044.565 0 0-.371.044-.785.065l2.5 7.434 1.5-4.506-1.07-2.929c-.369-.022-.719-.065-.719-.065-.37-.022-.326-.588.043-.566 0 0 1.134.087 1.808.087.718 0 1.83-.087 1.83-.087.37-.022.413.522.043.566 0 0-.372.043-.785.065l2.48 7.377.684-2.287.054-.173c.27-.86.469-1.495.469-2.046zM1.137 8a6.864 6.864 0 0 0 3.868 6.176L1.73 5.206A6.837 6.837 0 0 0 1.137 8z"/>
                        <path d="M6.061 14.583 8.121 8.6l2.109 5.78c.014.033.03.064.049.094a6.854 6.854 0 0 1-4.218.109zm7.96-9.876c.03.219.047.453.047.706 0 .696-.13 1.479-.522 2.458l-2.096 6.06a6.86 6.86 0 0 0 2.572-9.224z"/>
                        <path fill-rule="evenodd" d="M0 8c0-4.411 3.589-8 8-8 4.41 0 8 3.589 8 8s-3.59 8-8 8c-4.411 0-8-3.589-8-8zm.367 0c0 4.209 3.424 7.633 7.633 7.633 4.208 0 7.632-3.424 7.632-7.633C15.632 3.79 12.208.367 8 .367 3.79.367.367 3.79.367 8z"/>
                    </svg>
                </a>
          </div>
        </div>
    </div>
    <br><br>
   </footer>
   <!-- Footer End -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
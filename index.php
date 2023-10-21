<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MedEaseLinkup home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monospace">
    <link rel="stylesheet" href="mystyle.css">
</head>

  <body>
    <!-- Not yet scalable to smaller screen sizes
    yet to add services, about and blog/news article-->
        <!-- Navigation Bar Start -->
        <nav>
            <div class="top">
                <img style="border-radius: 50%;width: 60px; height: 60px;" src="images/mylogo.jpg" alt="logo">
                <h2 style="padding: 20px; font-weight: bold;">MED-EASE</h2>
            </div>
            <div class="searchbar">
                <input type="search" name="searchbar" id="search" placeholder="Search..">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>
            </div>
           <div class="navigation" style="padding-top: 12px;">
                <ul class="navigation-ul">
                    <li class="navigation-li"><a class="navigation-a" href="index.php">Home</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#ourservices">Services</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#about">About</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#blog">Blog</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#testimonials">Testimonials</a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#"><b>REGISTER</b></a></li>
                    <li class="navigation-li"><a class="navigation-a" href="#"><b>LOGIN</b></a></li>
                </ul>
           </div> 

        </nav>
        <!-- navbar end -->

    <!--Image Carousel-->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="doctor-1.jpg" height="500px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <div class="welcomeText">
                    <p>Welcome to MedEaseLinkup</p>
                </div>
              </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="doctor-2.jpg" height="500px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="welcomeText">
                    <p>Welcome to MedEaseLinkup</p>
                </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="doctor-5.jpg" height="500px" width="auto"class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <div class="welcomeText">
                    <p>Welcome to MedEaseLinkup</p>
                </div>
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
    <!-- Carousel end -->
    <!-- Arrow up -->
    <div class="arrowup"><a href="#"><b>↑</b></a></div>
    <!-- Arrow up -->
    <!-- Services start -->
    <div class="servicesCont" id="ourservices">
        <div class="serviceContainer">
        <h2><b>OUR SERVICES</b></h2> <hr>
        <p class="serviceText">Welcome to Med-Ease online medical platform, where we provide a diverse spectrum of services tailored to meet the unique needs of both healthcare professionals and patients.</p>
        <hr>   
        <div class="servicebtn">
                <h3 class="servbtn" id="patientBtn">Patient</h3>
                <h3 class="servbtn" id="doctorBtn">Doctor</h3>
            </div>
          <div class="userCont">
            <div class="patientCont">
                <ul>
                    <li class="patient-list">
                        <p>Book appointments</p>
                        <ul>
                            <li>Schedule appointments with ease</li>
                            <li>Browse specialists for tailored care</li>
                            <li>Receive reminders for hassle-free planning</li>
                        </ul>
                    </li>
                    <li class="patient-list">
                        <p>Online Consultations</p>
                        <ul>
                            <li>Consultations from home</li>
                            <li>Connect with certified doctors</li>
                            <li>Get diagnoses and recommendations</li>
                        </ul>
                    </li>
                    <li class="patient-list">
                        <p>Prescription Management</p>
                        <ul>
                            <li>Store and access your records</li>
                            <li>Request refills effortlessly</li>
                            <li>Maintain your health journey</li>
                        </ul>
                    </li>
                    <li class="patient-list">
                        <p>Secure Messaging</p>
                        <ul>
                            <li>Private doctor-patient chats</li>
                            <li>Seek advice and clarification</li>
                            <li>Trust your data's safety</li>
                        </ul>
                    </li>
                    <li class="patient-list">
                        <p>Health Resources:</p>
                        <ul>
                            <li>Access reliable healthcare info</li>
                            <li>Stay informed and make choices</li>
                            <li>Empower your health decisions</li>
                        </ul>
                    </li>
                </ul>

            </div>
            <div class="separater" style="border: 1px solid rgb(8, 13, 80);"></div>
            <div class="doctorCont">
                <ul>
                    <li class="doctor-list">
                        <p>Practice Management</p>
                        <ul>
                            <li>Streamline your practice</li>
                            <li>Manage appointments and records</li>
                            <li>Communicate securely</li>
                        </ul>
                    </li>
                    <li class="doctor-list">
                        <p>Doctor Collaboration</p>
                        <ul>
                            <li>Connect with peers</li>
                            <li>Share knowledge, get insights</li>
                            <li>Expand professional network</li>
                        </ul>
                    </li>
                    <li class="doctor-list">
                        <p>Subscription Plans</p>
                        <ul>
                            <li>Customize your practice</li>
                            <li>Control patient load and income</li>
                            <li>Choose what suits you best</li>
                        </ul>
                    </li>
                    <li class="doctor-list">
                        <p>Professional Growth</p>
                        <ul>
                            <li>Stay updated and skilled</li>
                            <li>Access educational resources</li>
                            <li>Deliver top-notch care</li>
                        </ul>
                    </li>
                </ul>
            </div>
          </div>
          <div class="registerLink"><a href="#">REGISTER</a></div>
        </div>
    </div>
    <!-- Services end -->
    <!-- About us start -->
    <div class="aboutCont" id="about">
        <h2><b>ABOUT US</b></h2>
        <div class="aboutContent">
            <div class="topabout">
            <h3>Our Commitment to Care</h3>
            <p>At Med-Ease, we are dedicated to providing you with a reliable, accessible, and compassionate online medical experience. We understand the importance of your health and well-being, and that's why we've designed our platform with your needs in mind.</p>
            </div>
            <div class="middleabout">
                <h3>Why You Can Trust Us:</h3>
                <p><b>Expertise:</b> Our platform is powered by a network of certified healthcare professionals who are passionate about delivering quality care. You can trust that you're in the capable hands of experienced doctors and medical experts.</p>
                <p><b>Security:</b> Your health data and personal information are treated with the utmost care and security. We employ robust data encryption and privacy measures to ensure your confidentiality.</p>
                <p><b>Convenience:</b> We're here to make healthcare accessible and convenient for you. With online consultations, appointment scheduling, and prescription management, we put your health in your hands.</p>
            </div><hr>
            <div class="bottomabout">
                <div class="missionvission">
                    <div class="missionCont" style="margin-right: 20px;">
                        <h2><u>OUR MISSION</u></h2>
                        <h3><i>Empowering Healthcare, Simplifying Lives</i></h3>
                        <blockquote>Our mission is to empower individuals with seamless access to healthcare services. We aim to remove the barriers that often stand between patients and their health needs. Med-Ease strives to simplify the healthcare journey, making it more convenient and accessible for everyone.</blockquote>
                    </div>
                    <div class="visionCont" style="margin-left: 20px;">
                        <h2><u>OUR VISSION</u></h2>
                        <h3><i>Connecting Communities, Enhancing Health</i></h3>
                        <blockquote>We envision a world where healthcare knows no boundaries. Med-Ease is committed to connecting communities with top-tier medical care, transcending geographical limitations. We see a future where healthcare is universally accessible, and individuals have the tools to take control of their well-being.</blockquote>
                    </div>   
                </div>

                <div class="valuesCont">
                    <h2><u>OUR VALUES</u></h2>
                    <ul>
                        <li><b>Quality:</b> We are dedicated to delivering the highest standards of medical care and service excellence.</li>
                        <li><b>Compassion:</b> Our approach is rooted in empathy and a deep understanding of the human aspect of healthcare.</li>
                        <li><b>Innovation:</b> We embrace cutting-edge technology to bring you the most advanced and efficient medical solutions.</li>
                        <li><b>Accessibility:</b> We believe that healthcare should be within reach for all, regardless of location or circumstances.</li>
                        <li><b>Integrity:</b> Honesty and transparency are at the core of our interactions and operations.</li>
                    </ul>
                </div>
            </div><hr>
            <div class="toContactUs">
                <p><b>Ready to Learn More? Have Questions?</b></p>
                <p>We're here to assist you on your journey to better health. If you have any questions, need assistance, or want to explore how Med-Ease can serve your healthcare needs, please don't hesitate to reach out to us.</p>
                <span>👇</span>
                <p><a href="#contactus" style="color: rgb(8, 13, 80);font-size: 20px;text-decoration: dotted; letter-spacing: .03em;"><b>Contact Us Today</b></a></p>
            </div>
            
        </div>
    </div>
    <!-- About us end -->
    <!-- Blog/ news section start -->
    <div class="blogCont" id="blog">
    <div class="blogContainer">
        
        <div class="topBlog">
            <h2><b>Med-Ease Blog</b></h2>
            <p><b><i>Stay Informed, Stay Healthy!</i></b></p>
        </div>
        <div class="blogArticles">
            <p style="width: 70vw; margin: auto;">Get the latest news in healthcare, wellness, and medical advancements. Our mission is to provide you with valuable insights, health tips, and updates to help you lead a healthier, happier life. Here, you'll find a collection of articles, news, and expert opinions on a wide range of healthcare topics.</p>  
       
            <div class="article">
                <p style="color: rgb(8, 13, 80)"><i><b><u>The Future of Telemedicine: Exploring the Impact of Remote Healthcare</u></b></i></p>
                <p>In this article, we delve into the evolving world of telemedicine and how it's shaping the future of healthcare. Discover the benefits, challenges, and the role of telehealth in your medical journey.</p>
                <p><b>Read more ..</b></p>
            </div>
            <div class="article">
                <p style="color: rgb(8, 13, 80)"><i><b><u>The Future of Telemedicine: Exploring the Impact of Remote Healthcare</u></b></i></p>
                <p>We offer practical advice on maintaining your physical and mental well-being, especially during uncertain times. Explore simple steps to prioritize your health in the comfort of your home.</p>
                <p><b>Read more ..</b></p>
            </div>
            <div class="article">
                <p style="color: rgb(8, 13, 80)"><i><b><u>Doctor's Corner: Insights from Medical Experts</u></b></i></p>
                <p>Our "Doctor's Corner" series features interviews with healthcare professionals. Learn from experienced doctors as they share their expertise, discuss patient experiences, and provide medical insights.</p>
                <p><b>Read more ..</b></p>
            </div>
        </div>
        <div class="extrablog">
            <p style="font-size: 20px;"><b>Featured Topics</b></p>
            <ul>
               <li><b>Healthy Living:</b> Explore tips for leading a healthier lifestyle, from nutrition and fitness to mental well-being.</li>
                <li><b>Medical Technology:</b> Stay up to date with the latest advancements in medical technology, including telehealth and digital healthcare solutions.</li>
                <li><b>Patient Stories:</b> Real-life accounts of individuals who have benefited from Med-Ease services.</li>
            </ul>
        </div>
        <div class="topBlog">
            &copy; MedEaseLinkUp Services. All Rights Reserved.
        </div>
    </div>
    </div>
    <!-- Blog end -->
    <!-- Testimonials -->
    <div class="testimonialCont" id="testimonials">
    <h2>TESTIMONIALS</h2>
    <div class="testimonials">
        
        <div class="testimony">
            <img src="doctor-1.jpg" alt="image" width="100px" height="100px" style="border-radius: 50%;">
            <p>John Doe</p>
            <blockquote>&quot;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, veniam harum? Reiciendis, autem accusantium. Possimus rem esse neque enim&quot;</blockquote>
        </div>
        <div class="testimony">
            <img src="doctor-1.jpg" alt="image" width="100px" height="100px" style="border-radius: 50%;">
            <p>John Doe</p>
            <blockquote>&quot;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, veniam harum? Reiciendis, autem accusantium. &quot;</blockquote>
        </div>
        <div class="testimony">
            <img src="doctor-1.jpg" alt="image" width="100px" height="100px" style="border-radius: 50%;">
            <p>John Doe</p>
            <blockquote>&quot;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci, veniam harum? Reiciendis, autem accusan ess!&quot;</blockquote>
        </div>
    </div>
    </div>

    <!-- Testimonials End -->
     <!-- Contact Us Form start -->
     <div class="contactusCont" id="contactus">
        <h2><b>CONTACT US</b></h2>
        <form action="" method="post">
            <label for="email" id="email">Email Address:</label><br>
            <input type="email" name="email" id="email" placeholder="Enter Your Email.."><br>
            <label for="message" id="message">Message:</label><br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter enquiry.."></textarea><br>
            <input style="width: 300px; background-color:black; color: white;border: none;" type="submit" id="submitbtn"  value="Submit">
        </form>
     </div>
     <!-- Contact us end -->
   <!-- body-content end -->


   <!-- Footer Start -->
   <footer>
    <div class="container text-center" style="border-bottom: 3px solid black;">
        <div class="row align-items-center" style="padding: 30px;">
          <div class="col">
            <img src="images/mylogo.jpg" alt="logo" width="60px" height="60px" style="border-radius: 50%;">
            <h3>MED-EASE</h3>
          </div>
            <div class="col bottomnav">    
            <h5>Navigation</h5>
                <ul style="list-style-type: none;" class="footer_links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#ourservices">Services</a></li>
                    <li><a href="#blog">News Article</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                </ul>
            </div> 
            <div class="col social-icons">
                <h5>Social Profile links</h5>
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
                </a><br>
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
    
    <div class="container text-center" style="margin-top: 30px;">
        <div class="row align-items-start">
          <div class="col copyright">
            <p> <a href="#">Privacy Policy</a>  |  <a href="#">Cookie Policy</a>  |  <a href="#">Terms of Use</a> </p>
          </div>
          <div class="col">
            <p>&copy; MedEaseLinkUp Services. All Rights Reserved.</p>
          </div>

        </div>
    </div>
    <br><br>
   </footer>
   <!-- Footer End -->
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
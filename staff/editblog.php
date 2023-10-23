<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="staff_style.css">
    <title>Med-Ease</title>
</head>
<body>
    <div class="sidebar">
        <div class="mylogo">
        <img src="mylogo.jpg" alt="" style="border-radius: 50%;" width="60px" height="60px">
        </div>
        <div class="sidebarnav">
        <ul>
            <li><a href="staff_dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                </svg></a></li>
            <li><a href="#" style="color: black;"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                </svg></a></li>
            <li><a href="patientappointments.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg></a></li>
            <li><a href="faqanswers.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                </svg></a></li>
            <li><a href="messaging.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                </svg></a></li>
            </ul>
        </div>
    </div>
    <div class="contentMain">
        <nav>
            <h1>MED-EASE</h1>
            <div class="search">
                <input type="search" name="search" id="search" placeholder="Search..">
                <div class="searchicon"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </div>
            </div>
            <div class="myprofile">
                <img src="doctor-2.jpg" alt="" width="60px" height="60px" style="border-radius: 50%;"><br>
                <p class="nametag" style="margin-top: -25px;"><span><b>John Doe</b></span><span id="profilearrow"> ▾ </span></p>
            </div>
        </nav>
        <div class="myprofile staffprofile">
            <img src="doctor-2.jpg" alt="" width="60px" height="60px" style="border-radius: 50%;"><br>
            <p class="nametag"><span><b>John Doe</b></span></p>
            <ul>
                <li><b>Phone Number: </b>0116576788</li>
                <li><b>Email: </b>johndoe@gmail.com</li>
                <li><b>Date Of Birth: </b>16/06/2003</li>
                <li><b>Gender: </b>Male</li>
            </ul>
            <div class="profbtns">
                <span id="outprofile">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </span>
                <span id="logout"><a href="#" style="color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg></a>
                </span>
            </div>
        </div>
            <div class="editblogCont">
                <h2 style="text-align: center;"><b>EDIT MED-EASE BLOG</b></h2>
                <div class="updateContainers">
                    <div class="addblog">
                        <button>ADD</button>
                    </div>
                    <div class="editblog">
                        <button>EDIT</button>
                    </div>
                    <div class="deleteblog">
                        <button>DELETE</button>
                    </div>
                </div>
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
                            <p style="color: rgb(8, 13, 80)"><i><b><u>Staying Healthy at Home: Wellness Tips During Challenging Times</u></b></i></p>
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
            </div>
        </div> 

    </div>
    <footer>
        <p>&copy; MedEaseLinkUp Services. All Rights Reserved.</p>
    </footer>
    <script src="staff.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
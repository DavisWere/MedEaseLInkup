<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="doctor_style.css">
    <title>Med-Ease</title>
</head>
<body>
        <div class="sidebar">
            <div class="mylogo">
            <img src="mylogo.jpg" alt="" style="border-radius: 50%;" width="60px" height="60px">
            </div>
           <div class="sidebarnav">
           <ul>
                <li><a href="doctor_dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                  </svg></a></li>
                <li><a href="patient_records.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard2-pulse-fill" viewBox="0 0 16 16">
                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                    <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                  </svg></a></li>
                <li><a href="finances.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                  </svg></a></li>
                <li><a href="#" style="color: black;"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                  </svg></a></li>
                <li><a href="contact.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/>
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
            <div class="myprofile doctorprofile">
                    <img src="doctor-2.jpg" alt="" width="60px" height="60px" style="border-radius: 50%;"><br>
                    <p class="nametag"><span><b>John Doe</b></span></p>
                    <small>Rating</small>
                    <img src="rating.png" alt="" width="120px">
                    <ul>
                      <li><b>Specialty: </b>Dentist</li>
                      <li><b>Subscription: </b>Basic</li>
                      <li><b>Phone Number: </b>0116576788</li>
                      <li><b>Email: </b>johndoe@gmail.com</li>
                    </ul>
                    <div class="profbtns">
                      <span id="outprofile">  
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                          </svg>
                      </span>
                      <span id="logout"><a href="../index.php" style="color: black;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                          <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                          </svg></a>
                      </span>
                    </div>
            </div>
            <div class="subscribeContainer">
                <!-- subscription starts -->
                <div>
                    <h2><b>SUBSCRIPTION PACKAGES</b></h2>
                    <br>
                    <p style="width: 60vw;margin: auto;">At Med-Ease, we understand that healthcare professionals have unique needs. That's why we offer a range of subscription packages, each designed to provide you with the tools and services to enhance your medical practice. Whether you're looking to expand your patient base, improve your online presence, or access advanced medical features, we have a plan that's right for you.</p>
                </div>
                <div class="container text-center" style="margin-top: 20px;">
                    
                    <h3 style="padding: 20px;">Our Subscription Plans</h3>
                    <div class="subCont">
                        <div class="subscriptionContainer">
                            <h3>BASIC</h3>
                            <h4>Free</h4>
                            <ul style="list-style-type: none; margin: auto;">
                                <li>Up to 2 patients daily in your care</li>
                                <li>Access to our secure messaging system</li>
                                <li>Appointment scheduling and management</li>
                                <li>Patient medical records and prescription history</li>
                            </ul>
                            
                        </div>
                        <div class="separator" style="border: 1px solid; height: 350px"></div>
                        <div class="subscriptionContainer">
                            <h3>PRO</h3>
                            <h4>KSH. 5,000 MONTHLY</h4>
                            <ul style="list-style-type: none; margin: auto;">
                                <li>Up to 40 patients daily in your care</li>
                                <li>Enhanced profile visibility for patients</li>
                                <li>Secure messaging for doctor-to-doctor communication</li>
                                <li>Detailed earnings reports and transaction history</li>
                            </ul>
                            <button>Subscribe</button>
                        </div>
                        <div class="separator" style="border: 1px solid; height: 350px"></div>
                        <div class="subscriptionContainer">
                            <h3>PREMIUM</h3>
                            <h4>KSH. 7,500 MONTHLY</h4>
                            <ul style="list-style-type: none; margin: auto;">
                                <li>No patient limit—care for as many patients as needed</li>
                                <li>Exclusive access to premium resources and professional development</li>
                                <li>Top-tier profile visibility for maximum patient reach</li>
                            </ul>
                            <button>Subscribe</button>
                        </div>
                    </div>
                </div><hr>
                <p style="font-size: 17px;width: 70vw;padding: 20px;margin: auto;margin-top: 30px;margin-bottom: 30px;">Have questions about our subscription plans or how they can benefit your medical practice? <span style="color: rgb(8, 13, 80);"><u>Contact our support team</u></span> for personalized assistance.</p>
                               <!-- subscription ends -->
            </div>   
        </div>
    </div>
    <footer>
        <p>&copy; MedEaseLinkUp Services. All Rights Reserved.</p>
    </footer>
    <script src="doctor.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
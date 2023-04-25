<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <section class="nav-display" id="nav-display">
        <div class="d-flex justify-content-end">
            <i class="fa-solid fa-xmark text-light p-4" id="close-nav" style="font-size:2rem;"></i>
        </div> 
        <ul class="nav-ul" id="nav-ul">
            <li class="li"><a class="text-light" href="index.php">Home</a></li>
            <li class="li"><a class="text-light" href="pages/history.php">Our History</a></li>
            <li class="li"><a class="text-light" id="sights-scene">Sights & Scenes</a></li>
            <div class="m-auto position-relative px-3 py-2" id="sights_display" style="width:200px !important;left:-10%;background-color:rgb(3, 102, 46);border-radius:10px;display:none;">
                <li><a class="text-light text-start" href="pages/gallery.php">Our Gallery</a></li>
                <li><a class="text-light text-start" href="pages/tourist.php">Tourist Attraction</a></li>
                <li><a class="text-light text-start" href="pages/occasion.php">Occasions & Festivals</a></li>
                <li><a class="text-light text-start" href="pages/reservations.php">Reservations</a></li>
            </div>
            <li class="li"><a class="text-light"  href="index.php">Contact Us</a></li>
        </ul>
    </section>
    <section class="first-section">
        <nav class="d-flex justify-content-between align-items-center position-relative">
            <div class="logo-box m-0">
                <p class="text-light m-0">Logo</p>
            </div>
            <ul class="nav-ul m-0">
                <li><a class="text-light" href="index.php">Home</a></li>
                <li><a class="text-light" href="pages/history.php">Our History</a></li>
                <li><a class="text-light" id="sights_lg">Sights & Scenes</a><i class="fa-solid fa-chevron-down text-light mx-1" style="font-size:0.8rem;"></i></li>
                <li><a class="text-light"  href="index.php">Contact Us</a></li>
            </ul>
            <img src="logos/toggle.png" class="m-0" id="toggle-nav" alt="" width="25px">
            <div class="position-absolute" id="sights_lg_display" style="top:100%;right:10%;width:206px;display:none;">
                <div class="d-block py-2" style="background-color:rgba(3, 120, 54, 0.806);border-radius:10px;">
                    <ul class="nav-ul d-block" style="position:relative;left:-15%;">
                        <li class="py-1"><a class="text-light text-start py-4" href="pages/gallery.php">Our Gallery</a></li>
                        <li  class="py-1"><a class="text-light text-start py-3" href="pages/tourist.php">Tourist Attraction</a></li>
                        <li  class="py-1"><a class="text-light text-start py-3" href="pages/occasion.php">Occasions & Festivals</a></li>
                        <li  class="py-1"><a class="text-light text-start py-3" href="pages/reservations.php">Reservations</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <!-- the line of design -->
        <div class="everything">
            <div class="lines-of-design ">
                <div class="m-auto divison-line m-auto">
    
                </div>
                <div class="circle-division ">
                    <div class="circle-division-itself-first m-auto my-0"></div>
                    <div class="circle-division-itself m-auto my-0"></div>
                    <div class="circle-division-itself m-auto my-0"></div>
                    <div class="circle-division-itself m-auto my-0"></div>
                    <div class="circle-division-itself m-auto my-0"></div>
                </div>
                <div class="circle-division second-circle-division">
                    <div class=" m-auto my-0"><p>Home</p></div>
                    <div class=" m-auto my-0"></div>
                    <div class=" m-auto my-0"></div>
                    <div class=" m-auto my-0"></div>
                    <div class=" m-auto my-0"></div>
                </div>
            </div>
        </div>


        <!-- text-region -->
        <div class="text-welcoming-region d-block d-lg-block d-md-block">
            <p class="heading-text">GYAKITI</p>
            <p class="description-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, debitis itaque distinctio eveniet assumenda corrupti.
            </p>
        </div>

        <div class="card-housing">
            <div class="card m-auto">
                <div class="d-block px-4 py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-main-text">Festivals</p>
                        <div class="card-logo-img"></div>
                    </div>
                    <p style="color:rgba(255, 255, 255, 1);">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, officia!</p>
                    <p style="color:rgba(255, 255, 255, 0.7);">Explore</p>
                </div>
            </div>
            <div class="card m-auto">
                <div class="d-block px-4 py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-main-text">Tourism</p>
                        <div class="card-logo-img"></div>
                    </div>
                    <p style="color:rgba(255, 255, 255, 1);">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, officia!</p>
                    <p style="color:rgba(255, 255, 255, 0.7);">Explore</p>
                </div>
            </div>
            <div class="card m-auto">
                <div class="d-block px-4 py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-main-text">Reservation</p>
                        <div class="card-logo-img"></div>
                    </div>
                    <p style="color:rgba(255, 255, 255, 1);">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis, officia!</p>
                    <p style="color:rgba(255, 255, 255, 0.7);">Explore</p>
                </div>
            </div>
        </div>
    </section>
    <section class="second-section">
        <div class="inside-second-section">
            <p class="text-center inside-second-section-first-text">Lorem ipsum dolor sit amet.</p>
            <p class="inside-second-section-description-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem quibusdam velit alias recusandae doloribus accusamus.</p>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 col-md-10 col-12 vedio-tag m-auto p-0"></div>
                    <div class="col-lg-6 col-md-10 col-12 vedio-text m-auto p-0 pt-3">
                        <p>Borem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent.</p>
    
                        <div class="d-flex justify-content-end pt-5">
                            <button class="vedio-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="third-section">
        <div class="royal-family">
            <p class="royal-family-main-text">the royal family</p>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-7 col-md-6 col-12 d-flex align-items-center">
                        <p class="royal-fimaly-col-text text-start">Borem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent.</p>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12 bg-dark" style="height: 270px;">
                        <!-- <img src="" alt=""> -->
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 col-12 bg-dark" style="height: 270px;">
                        <!-- <img src="" alt=""> -->
                    </div>
                    <div class="col-lg-7 col-md-6 col-12">
                        <p class="royal-fimaly-col-text px-3 text-end">Borem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum</p>
                        <div class="d-flex justify-content-end">
                            <button class="royal-btn">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="fourth-section py-5">
        <div class="testimonial-section">
            <p>TESTIMONIALS</p>
            <div class="card-for-testimonial p-lg-5 p-md-5 p-3 d-flex justify-content-between">
                <div class="testimonial-image"></div>
                <div class="d-block mt-3">
                    <p class="testmoinal-heading">Borem ipsum dolor sit </p>
                    <p>Borem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan,.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="fifth-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12 ms-auto">
                    <div class="d-block py-4">
                        <p class="location">LOCATION</p>
                        <p class="location-description">
                            Borem ipsum dolor sit amet, consectetur adipiscing elit

                            Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim
                        </p>
                    
                    </div>
                </div>   
                <div class="col-lg-6 col-md-7 col-12 me-auto">
                    <form class="form">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <label for="">First name</label>
                                <input type="text">
                            </div>
                            <div class="col-lg-6 col-12">
                                <label for="">Last name</label>
                                <input type="text">
                            </div>
                            <div class="col-12">
                                <label for="">Email Adress</label>
                                <input type="text">
                            </div>
                            <div class="col-12">
                                <label for="">Message</label>
                                <textarea name="" id="" cols="10" rows="5"></textarea>
                            </div>
                        </div>
                        <button class="submit-form-btn mt-4">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="inside-footer">
            <p>Logo</p>
           <div class="d-block">
                <img src="logos/instagram.png" class="mx-2" alt="" width="40px">
                <img src="logos/facebook.png" class="mx-2" alt="" width="40px">
                <img src="logos/twitter.png" class="mx-2" alt="" width="40px">
                <img src="logos/youtube.png" class="mx-2" alt="" width="40px">
           </div> 
        </div>
    </footer>



    <script src="functions/nav.js"></script>
</body>
</html>
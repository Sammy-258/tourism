<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/reservation.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../../bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body >
    <section class="nav-display" id="nav-display">
        <div class="d-flex justify-content-end">
            <i class="fa-solid fa-xmark text-light p-4" id="close-nav" style="font-size:2rem;"></i>
        </div> 
        <ul class="nav-ul" id="nav-ul">
            <li class="li"><a class="text-light" href="../index.php">Home</a></li>
            <li class="li"><a class="text-light" href="../pages/history.php">Our History</a></li>
            <li class="li"><a class="text-light" id="sights-scene">Sights & Scenes</a></li>
            <div class="m-auto position-relative px-3 py-2" id="sights_display" style="width:200px !important;left:-10%;background-color:rgb(3, 102, 46);border-radius:10px;display:none;">
                <li><a class="text-light text-start" href="../pages/gallery.php">Our Gallery</a></li>
                <li><a class="text-light text-start" href="./pages/tourist.php">Tourist Attraction</a></li>
                <li><a class="text-light text-start" href="../pages/occasion.php">Occasions & Festivals</a></li>
                <li><a class="text-light text-start" href="../pages/reservations.php">Reservations</a></li>
            </div>
            <li class="li"><a class="text-light"  href="../index.php">Contact Us</a></li>
        </ul>
    </section>
    <section class="first-section">
        <nav class="d-flex justify-content-between align-items-center position-relative">
            <div class="logo-box m-0">
                <p class="text-light m-0">Logo</p>
            </div>
            <ul class="nav-ul m-0">
                <li><a class="text-light" href="../index.php">Home</a></li>
                <li><a class="text-light" href="../pages/history.php">Our History</a></li>
                <li><a class="text-light" id="sights_lg">Sights & Scenes</a><i class="fa-solid fa-chevron-down text-light mx-1" style="font-size:0.8rem;"></i></li>
                <li><a class="text-light"  href="../index.php">Contact Us</a></li>
            </ul>
            <img src="../logos/toggle.png" class="m-0" id="toggle-nav" alt="" width="25px">
            <div class="position-absolute" id="sights_lg_display" style="top:100%;right:10%;width:206px;display:none;">
                <div class="d-block py-2" style="background-color:rgba(3, 120, 54, 0.806);border-radius:10px;">
                    <ul class="nav-ul d-block" style="position:relative;left:-15%;">
                        <li class="py-1"><a class="text-light text-start py-3" href="../pages/gallery.php">Our Gallery</a></li>
                        <li class="py-1"><a class="text-light text-start py-3" href="../pages/tourist.php">Tourist Attraction</a></li>
                        <li class="py-1"><a class="text-light text-start py-3" href="../pages/occasion.php">Occasions & Festivals</a></li>
                        <li class="py-1"><a class="text-light text-start py-3" href="../pages/reservations.php">Reservations</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>

    </section>
    <section class="second-section my-5">
        <div class="container">
            <div class="col-lg-12 m-auto">
                <div class="row">
                    <div class="col-12">
                        <p class="first-main-text">LOREM  IPSUM</p>
                        <div class="stars-div m-0">
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                        </div>
                      
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-7">
                            <div class="form-reservation">
                                <form action="" class="p-4">
                                    <p class="form-heading">Availability</p>
                                    <div class="d-block">
                                        <label for="">Check-in date</label>
                                        <input type="text" class="form-control" placeholder="check-in-date">
                                    </div>
                                    <div class="d-block my-5">
                                        <label for="">Check-out date</label>
                                        <input type="text" class="form-control" placeholder="check-out-date">
                                    </div>
                                    <div class="d-block mt-5 mb-4">
                                        <label for="">Number of occupants</label>
                                        <input type="text" class="form-control" placeholder="Number of occupants">
                                    </div>
                                    <div class="d-block">
                                        <div class="d-flex align-items-center">
                                            <input type="checkbox" class="input-checkbox m-0">
                                            <label for="" class="m-0 mx-2">I need a ride</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-5">
                            <div class="map mt-4">
                                <img src="images/map.png" alt="">
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div class="d-lg-flex d-md-flex d-block justify-content-between align-items-center">
                        <p class="about-main-text m-0">ABOUT LOREM IPSUM</p>
                        <div class="d-flex align-items-center m-lg-0 m-md-0 my-3">
                            <div class="stars-div m-0">
                                <span class="star-icon-colorless">&#9733;</span>
                                <span class="star-icon-colorless">&#9733;</span>
                                <span class="star-icon-colorless">&#9733;</span>
                                <span class="star-icon-colorless">&#9733;</span>
                            </div>
                            <img src="logo/Vector.png" class="mx-lg-4 mx-md-4 m-auto" alt="">
                            
                            <button class="reserve-btn ms-auto">Reserve</button>
                        </div>
                    </div>
                    <p class="about-description-text">Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a. Jorem ipsum dolor sit amet, consectetur adipiscing</p>
                    <div class="d-flex align-items-start mb-2">
                        <i class="fa-solid fa-location-dot mt-1 fs-4"></i>
                        <p class="m-0 location-main-text mx-2">Jorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                    <img src="images/reservation_display.png" class="reservation_image" alt="">

                    <div class="row mt-3 ">
                        <div class="col-lg-4 col-md-4 col-6">
                            <img src="images/other_display1.png" class="display_other_images" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <img src="images/other_display2.png" class="display_other_images" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-8 m-auto mt-3 mt-lg-0 mt-md-0">
                            <img src="images/other_display3.png" class="display_other_images" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8 col-md-7 col-12">
                    <p class="more-description">
                    Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet f. Alimagna. Nam metus lacus, porttitor eu mauris a, blandit ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend. Nulla varius volutpat turpis sed lacinia. Nam eget mi in</p> 

                    <p class="more-description">ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend. Nulla varius volutpat turpis sed lacinia. Nam eget mi in purus lobortis eleifend. Sed nec ante dictum sem condimentum ullamcorpe
                    </p>
                </div>
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="d-block further-details p-4">
                        <p class="further-details-main-text">Property Highlights</p>
                        <p class="further-details-description-text">Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a. Jorem ipsum </p>
                        <p class="further-details-main-text">Property Highlights</p>
                        <p class="further-details-description-text">Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a. Jorem ipsum </p>
                        <button class="further-details-btn">Reserve</button>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="d-lg-flex d-md-flex d-block justify-content-between align-items-center">
                    <p class="travelers-text text-start m-0">
                        Travelers who viewed the Lorem Ipsum also viewed these properties
                    </p>
                    <p class="travelers-show-more text-end m-0">Show more</p>
                </div>
                <div class="swiper mySwiper my-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card p-0 position-relative" style="width:100%;">
                                <img src="../images/reservation1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="stars-div m-0">
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                        </div>
                                        <p class="reservation-price m-0">$30.00</p>
                                    </div>
                                </div>
                                <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                    <p class="tourist-name">LOREM IPSUM</p>
                                </div>
                            </div>
                        
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-0 position-relative" style="width:100%;">
                                <img src="../images/reservation6.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="stars-div m-0">
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                        </div>
                                        <p class="reservation-price m-0">$30.00</p>
                                    </div>
                                </div>
                                <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                    <p class="tourist-name">LOREM IPSUM</p>
                                </div>
                            </div>
                        
                        </div>
                        <div class="swiper-slide">
                            <div class="card p-0 position-relative" style="width:100%;">
                                <img src="../images/reservation3.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="stars-div m-0">
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                        </div>
                                        <p class="reservation-price m-0">$30.00</p>
                                    </div>
                                </div>
                                <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                    <p class="tourist-name">LOREM IPSUM</p>
                                </div>
                            </div>
                        
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="card p-0 position-relative" style="width:100%;">
                                <img src="../images/reservation4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="stars-div m-0">
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                        </div>
                                        <p class="reservation-price m-0">$30.00</p>
                                    </div>
                                </div>
                                <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                    <p class="tourist-name">LOREM IPSUM</p>
                                </div>
                            </div>
                        
                        </div>
                        
                        <div class="swiper-slide">
                            <div class="card p-0 position-relative" style="width:100%;">
                                <img src="../images/reservation5.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="stars-div m-0">
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                            <span class="star-icon">&#9733;</span>
                                        </div>
                                        <p class="reservation-price m-0">$30.00</p>
                                    </div>
                                </div>
                                <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                    <p class="tourist-name">LOREM IPSUM</p>
                                </div>
                            </div>
                        
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>

        </div>
    </section>



    <footer>
        <div class="inside-footer">
            <p>Logo</p>
           <div class="d-block">
                <img src="../logos/instagram.png" class="mx-2" alt="" width="40px">
                <img src="../logos/facebook.png" class="mx-2" alt="" width="40px">
                <img src="../logos/twitter.png" class="mx-2" alt="" width="40px">
                <img src="../logos/youtube.png" class="mx-2" alt="" width="40px">
           </div> 
        </div>
    </footer>


    <script src="../functions/nav.js"></script>
    <script src="https://kit.fontawesome.com/02d4e47823.js" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: "auto",
        spaceBetween: 10,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
    });
    </script>
</body>
</html>
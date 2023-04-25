<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tourist.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../../bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body>
    <section class="nav-display" id="nav-display">
        <div class="d-flex justify-content-end">
            <i class="fa-solid fa-xmark text-light p-4" id="close-nav" style="font-size:2rem;"></i>
        </div> 
        <ul class="nav-ul" id="nav-ul">
            <li class="li"><a class="text-light" href="../index.php">Home</a></li>
            <li class="li"><a class="text-light" href="history.php">Our History</a></li>
            <li class="li"><a class="text-light" id="sights-scene">Sights & Scenes</a></li>
            <div class="m-auto position-relative px-3 py-2" id="sights_display" style="width:200px !important;left:-10%;background-color:rgb(3, 102, 46);border-radius:10px;display:none;">
                <li><a class="text-light text-start" href="gallery.php">Our Gallery</a></li>
                <li><a class="text-light text-start" href="./pages/tourist.php">Tourist Attraction</a></li>
                <li><a class="text-light text-start" href="occasion.php">Occasions & Festivals</a></li>
                <li><a class="text-light text-start" href="reservations.php">Reservations</a></li>
            </div>
            <li class="li"><a class="text-light"  href="../index.php">Contact Us</a></li>
        </ul>
    </section>
    <section class="main-section">
        <div class="first-section">
        <nav class="d-flex justify-content-between align-items-center position-relative">
                <div class="logo-box m-0">
                    <p class="text-light m-0">Logo</p>
                </div>
                <ul class="nav-ul m-0">
                    <li><a class="text-light" href="../index.php">Home</a></li>
                    <li><a class="text-light" href="history.php">Our History</a></li>
                    <li><a class="text-light" id="sights_lg">Sights & Scenes</a><i class="fa-solid fa-chevron-down text-light mx-1" style="font-size:0.8rem;"></i></li>
                    <li><a class="text-light"  href="../index.php">Contact Us</a></li>
                </ul>
                <img src="../logos/toggle.png" class="m-0" id="toggle-nav" alt="" width="25px">
                <div class="position-absolute" id="sights_lg_display" style="top:100%;right:10%;width:206px;display:none;">
                    <div class="d-block py-2" style="background-color:rgba(3, 120, 54, 0.806);border-radius:10px;">
                        <ul class="nav-ul d-block" style="position:relative;left:-15%;">
                            <li class="py-1"><a class="text-light text-start py-4" href="gallery.php">Our Gallery</a></li>
                            <li  class="py-1"><a class="text-light text-start py-3" href="tourist.php">Tourist Attraction</a></li>
                            <li  class="py-1"><a class="text-light text-start py-3" href="occasion.php">Occasions & Festivals</a></li>
                            <li  class="py-1"><a class="text-light text-start py-3" href="reservations.php">Reservations</a></li>
                        </ul>
                        
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row mt-5" style="margin-top:7rem !important;">
                    <div class="col-lg-6 mt-5">
                        <p class="welcoming-text-heading">EXPERIENCE OUR LANDS</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-9 py-5 my-4 m-auto">
            <p class="text-center">Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet f. Alimagna. Nam metus </p>
        </div>
    </section>
    <div class="d-flex position-relative ms-auto" style="width:fit-content;height:fit-content;margin-right:3rem;top:-10rem;">
            
        <p class="swiper-button-prev mx-2"></p>
        <p class="swiper-button-next mx-2"></p>
    </div>
    <section class="second-section position-relative swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="col-lg-10 swiper-slide">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <p class="carousel-main-text">EXPERIENCE OUR LANDS</p>
                        <p class="carousel-description-text">
                            Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie
                        </p>
                       
                        <div class="stars-div">
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                        </div>
                        <button class="carousel-btn">Explore</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 swiper-slide">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <p class="carousel-main-text">EXPERIENCE OUR LANDS</p>
                        <p class="carousel-description-text">
                            Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie
                        </p>
                        <div class="stars-div">
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                            <span class="star-icon">&#9733;</span>
                        </div>
                        <button class="carousel-btn">Explore</button>
                    </div>
                </div>
            </div>
        </div>
        
    </section>


    <section class="third-section position-relative" style="top:-5rem;">
        <div class="container">
            <div class="col-lg-12 m-auto">
                <div class="col-lg-6">
                    <p class="third-heading-text">EXPLORE GYAKITI</p>
                    <p class="third-description-text">Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a.</p>
                </div>
                <div class="row gy-5 mt-1">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card p-0 position-relative" style="width:100%;">
                            <img src="../images/tourist1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                <div class="d-flex justify-content-between">
                                    <div class="stars-div">
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                    </div>
                                    <button class="tourist-btn">Explore</button>
                                </div>
                            </div>
                            <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                <p class="tourist-name">LOREM IPSUM</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card p-0 position-relative" style="width:100%;">
                            <img src="../images/tourist2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                <div class="d-flex justify-content-between">
                                    <div class="stars-div">
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                    </div>
                                    <button class="tourist-btn">Explore</button>
                                </div>
                            </div>
                            <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                <p class="tourist-name">LOREM IPSUM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card p-0 position-relative" style="width:100%;">
                            <img src="../images/tourist3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                <div class="d-flex justify-content-between">
                                    <div class="stars-div">
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                    </div>
                                    <button class="tourist-btn">Explore</button>
                                </div>
                            </div>
                            <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                <p class="tourist-name">LOREM IPSUM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card p-0 position-relative" style="width:100%;">
                            <img src="../images/tourist4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                <div class="d-flex justify-content-between">
                                    <div class="stars-div">
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                    </div>
                                    <button class="tourist-btn">Explore</button>
                                </div>
                            </div>
                            <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                <p class="tourist-name">LOREM IPSUM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card p-0 position-relative" style="width:100%;">
                            <img src="../images/tourist5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                <div class="d-flex justify-content-between">
                                    <div class="stars-div">
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                    </div>
                                    <button class="tourist-btn">Explore</button>
                                </div>
                            </div>
                            <div class="d-block position-absolute px-3" style="bottom:8rem;">
                                <p class="tourist-name">LOREM IPSUM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card p-0 position-relative" style="width:100%;">
                            <img src="../images/tourist6.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Jorem ipsum dolor sit amet, consectetur adipiscing<p>
                                <div class="d-flex justify-content-between">
                                    <div class="stars-div">
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                        <span class="star-icon">&#9733;</span>
                                    </div>
                                    <button class="tourist-btn">Explore</button>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
      slidesPerView: "auto",
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      mousewheel: true,
      keyboard: true,
    });
    </script>
</body>
</html>
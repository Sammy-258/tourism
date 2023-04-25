<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/gallery.css">
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../../bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
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
    <section class="first-section">
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

    </section>

    <section class="second-section pb-5 mb-5">
        <div class="col-lg-9 col-12 col-md-10 m-auto">
            <p class="text-center py-5">
                Jorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet f. Alimagna. Nam metus
            </p>
        </div>
        <div class="gallery-div">
           <div class="first-gallery-div">
                <div class="gallery first-image ">
                    <img src="../images/gallery1.png" alt="">
                </div>
                <div class="gallery second-image ">
                    <img src="../images/gallery2.png" alt="">
                </div>
                <div class="gallery third-image">
                    <img src="../images/gallery3.png" alt="">
                </div>
           </div>
           <div class="second-gallery-div">
                <div class="gallery first-image-second">
                    <img src="../images/gallery4.png" alt="">
                </div>
                <div class="gallery second-image-second">
                    <img src="../images/gallery5.png" alt="">
                </div>
           </div>
           <div class="third-gallery-div">
                <div class="gallery first-image ">
                    <img src="../images/gallery6.png" alt="">
                </div>
                <div class="gallery second-image d-none d-lg-block d-md-block">
                    <img src="../images/gallery7.png" alt="">
                </div>
                <div class="gallery third-image">
                    <img src="../images/gallery8.png" alt="">
                </div>
           </div>
           
        </div>
        <div class="fourth-gallery-div">
            <div class="first-third-image d-lg-block d-md-block d-none">
                <img src="../images/gallery9.png" alt="">
            </div>
            <div class="second-third-image">
                <img src="../images/gallery10.png" alt="">
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
</body>
</html>
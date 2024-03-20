<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <!-- Include Swiper and GLightbox CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="path/to/bootstrap.css">
    <title>PORTFOLIO - AI TECHNOLOGY SERVICES </title>
    <meta name="description"
        content="Explore our website to drive innovation across your organization and unlock the full potential of AI TECHNOLOGY SERVICES. Embrace the future confidently with us.">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="portfolio1">
        <br><br><br><br>

        <h1 class="text-center  py-3 shadow-lg text-dark" Style="font-size:35px;text-shadow: 2px 2px 5px white;">
            <b>PORTFOLIO</b>
        </h1>
        <div class="text-center py-2  px-4 text-dark" id="buttons">
            <button class="btn" onclick="filterObjects('All')">All</button>
            <button class="btn" onclick="filterObjects('Web development')">Web Development</button>
            <button class="btn" onclick="filterObjects('IOS')">IOS</button>
            <button class="btn" onclick="filterObjects('Android')">Android</button>
        </div>

        <!-- min-vh-100 -->
        <section class="gallery ">
             <div class="container-fluid px-5 py-1 shadow-lg">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 py-2 px-3" data-aos="zoom-out-up">
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
                        <img src="img/pf.jpg" class="gallery-item img-fluid" alt="gallery" data-filter="Android"
                            onclick="openModal('img/pf.jpg')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Web development">
                        <img src="img/pf1.png" class="gallery-item" alt="gallery" data-filter="Web development"
                            onclick="openModal('img/pf1.png')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="IOS">
                        <img src="img/pf2.webp" class="gallery-item" alt="gallery" data-filter="IOS"
                            onclick="openModal('img/pf2.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
                        <img src="img/pf3.png" class="gallery-item" alt="gallery" data-filter="Android"
                            onclick="openModal('img/pf3.png')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Web development">
                        <img src="img/pf6.webp" class="gallery-item" alt="gallery" data-filter="Web development"
                            onclick="openModal('img/pf6.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="IOS">
                        <img src="img/pf7.webp" class="gallery-item" alt="gallery" data-filter="IOS"
                            onclick="openModal('img/pf7.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
                        <img src="img/pf5.webp" class="gallery-item" alt="gallery" data-filter="Android"
                            onclick="openModal('img/pf5.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Web development">
                        <img src="img/pf8.jpg" class="gallery-item" alt="gallery" data-filter="Web development"
                            onclick="openModal('img/pf8.jpg')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="IOS">
                        <img src="img/blur.1.webp" class="gallery-item" alt="gallery" data-filter="IOS"
                            onclick="openModal('img/blur.1.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
                        <img src="img/pf10.avif" class="gallery-item" alt="gallery" data-filter="Android"
                            onclick="openModal('img/pf10.avif')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Web development">
                        <img src="img/pf11.avif" class="gallery-item" alt="gallery" data-filter="Web development"
                            onclick="openModal('img/pf11.avif')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="IOS">
                        <img src="img/pf12.webp" class="gallery-item" alt="gallery" data-filter="IOS"
                            onclick="openModal('img/pf12.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
                        <img src="img/pf13.webp" class="gallery-item" alt="gallery" data-filter="Android"
                            onclick="openModal('img/pf13.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Web development">
                        <img src="img/pf14.webp" class="gallery-item" alt="gallery" data-filter="Web development"
                            onclick="openModal('img/pf14.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="IOS">
                        <img src="img/port1.webp" class="gallery-item" alt="gallery" data-filter="IOS"
                            onclick="openModal('img/port1.webp')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
                        <img src="img/pf4n.png" class="gallery-item" alt="gallery" data-filter="Android"
                            onclick="openModal('img/pf4n.png')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Web development">
                        <img src="img/portn.png" class="gallery-item" alt="gallery" data-filter="Web development"
                            onclick="openModal('img/portn.png')">
                    </div>
                    <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="IOS">
                        <img src="img/port2.webp" class="gallery-item" alt="gallery" data-filter="IOS"
                            onclick="openModal('img/port2.webp')">
                    </div>

                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="gallery-Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button text-right" id="btn-close" data-dismiss="modal" aria-label="Close"><i
                                class="fa-solid fa-xmark" style="text-align:center;"></i></button>
                    </div>
                    <div class="modal-body">
                        <!-- <img src="img/pf.jpg" class="modal-img" alt="modal img"> -->
                        <div id="carouselExampleControls" class="carousel slide modal-img" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="by" src="img/pf.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf1.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf2.webp" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf3.png" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf6.webp" alt="Fifth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf7.webp" alt="Sixth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf8.jpg" alt="Seventh slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/blur.1.webp" alt="Eighth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf11.avif" alt="Ninth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf12.webp" alt="Ninth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf10.avif" alt="Ninth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="by" src="img/pf10.avif" alt="Ninth slide">
                        </div>
                        
                    </div>
                   
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"   data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- portfolio end -->
    <!-- footer start -->
    <?php include 'footer.php'; ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox@1.0.8/dist/glightbox.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</body>


</html>
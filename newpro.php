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
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
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
        <style>
          *{
            margin:0px;
            padding:0;
            
          }
  .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 10px;
  margin-bottom: 10px;
}
.gallery-item{
  height:225px;
  width:350px;
  border: 2px solid black;
}
.by{
  height:420px;
  width:765px;

}
.L{
  width:50px;
  height:50px;

}
.R{
  width:50px;
  height:50px;
}
@media (min-width:360px) and (max-width:778px){
  .by{
  height:420px;
  width:765px;
  }
 }
</style>
</head>
 <body >
      <?php include 'header.php'; ?> 
    <div class="portfolio1 p-0">
        <br><br><br><br>
        <h1 class="text-center py-3 shadow-lg text-dark" Style="font-size:35px;text-shadow: 2px 2px 5px white;">
            <b>PORTFOLIO</b></h1>      
           <div class="text-center py-2  px-4 text-dark" id="buttons">
            <button class="btn" onclick="filterObjects('All')">ALL</button>
            <button class="btn" onclick="filterObjects('Web development')">WEB DEVELOPMENT</button>
            <button class="btn" onclick="filterObjects('IOS')">IOS</button>
            <button class="btn" onclick="filterObjects('Android')">ANDROID</button>
      </div>
<!------ Include the above in your HEAD tag ---------->
<section class="gallery ">
   <div class="container-fluid px-5 py-1 shadow-lg">
      <div class="row row-cols-lg-1 row-cols-md-2 row-cols-sm-3 py-2 px-3" data-aos="zoom-out-up">
           <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
           <a href="img/pf.jpg" data-image-id=""  data-toggle="modal"   data-title="" data-image="img/pf.jpg" data-target="#image-gallery">
            <img class="gallery-item" src="img/pf.jpg"  alt="gallery" data-filter="Android" onclick="openModal('img/pf.jpg')">
          </a></div>
          <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="web development">
           <a href="img/pf1.png" data-image-id=""  data-toggle="modal"   data-title="" data-image="img/pf1.png" data-target="#image-gallery">
            <img class="gallery-item" src="img/pf1.png"  alt="gallery" data-filter="web development" onclick="openModal('img/pf1.png')">
          </a></div>
          <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="IOS">
           <a href="img/pf2.webp" data-image-id=""  data-toggle="modal"   data-title="" data-image="img/pf2.webp" data-target="#image-gallery">
            <img class="gallery-item" src="img/pf2.webp"  alt="gallery" data-filter="IOS" onclick="openModal('img/pf2.webp')">
          </a></div>
          <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
           <a href="img/pf3.png" data-image-id=""  data-toggle="modal"   data-title="" data-image="img/pf3.png" data-target="#image-gallery">
            <img class="gallery-item" src="img/pf3.png"  alt="gallery" data-filter="Android" onclick="openModal('img/img/pf3.png')">
          </a></div>
          <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="web development">
           <a href="img/pf6.webp" data-image-id=""  data-toggle="modal"   data-title="" data-image="img/pf6.webp" data-target="#image-gallery">
            <img class="gallery-item" src="img/pf6.webp"  alt="gallery" data-filter="web development" onclick="openModal('img/pf6.webp')">
          </a></div>
          <div class="gy-4 col-lg-4 col-md-6 col-sm-12" data-category="Android">
           <a href="img/pf7.webp" data-image-id=""  data-toggle="modal"   data-title="" data-image="img/pf.jpg" data-target="#image-gallery">
            <img class="gallery-item" src="img/pf7.webp"  alt="gallery" data-filter="Android" onclick="openModal('img/pf7.webp')">
          </a></div>

            
            <div class="gy-4 col-lg-4 col-md-6 col-sm-12 " data-category="IOS">
                <a  href="img/pf1.png" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf1.png" data-target="#image-gallery">
                    <img class="gallery-item" src="img/pf1.png"  data-filter="Android" onclick="openModal('img/pf1.png')" ></a> </div>
             <div class="gy-4 col-lg-4 col-md-6 col-sm-12 " data-category="web development">
                <a  href="img/pf2.webp" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf2.webp"
                   data-target="#image-gallery">
                    <img class="gallery-item" src="img/pf2.webp"
                         alt="Another alt text" data-filter="Web development"  onclick="openModal('img/pf2.webp')"> </a> </div>
             <div class="gy-4 col-lg-4 col-md-6 col-sm-12 ">
                <a href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img/pf3.png" data-target="#image-gallery" >
                    <img class="gallery-item" src="img/pf3.png" alt="Another alt text" data-filter="IOS" onclick="openModal('img/pf3.png')"> </a>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf6.webp" data-target="#image-gallery"> <img class="gallery-item"
                         src="img/pf6.webp" alt="Another alt text" data-filter="Android" onclick="openModal('img/pf6.png')"></a>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf7.webp" data-target="#image-gallery"> <img class="gallery-item"
                         src="img/pf7.webp" alt="Another alt text" data-filter="Web development" onclick="openModal('img/pf7.webp')"> </a>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf5.webp"  data-target="#image-gallery">
                    <img class="gallery-item"
                         src="img/pf5.webp"
                         alt="Another alt text" data-filter="IOS" onclick="openModal('img/pf5.webp')"></a>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf8.jpg"  data-target="#image-gallery">
                  <img class="gallery-item"
                         src="img/pf8.jpg" alt="Another alt text" data-filter="Android" onclick="openModal('img/pf8.jpg')"> </a> </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb"> <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""  data-image="img/blur.1.webp" data-target="#image-gallery">
                    <img class="gallery-item" src="img/blur.1.webp" alt="Another alt text" data-filter="Web development" onclick="openModal('img/blur.1.webp')"></a></div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf10.avif" data-target="#image-gallery">
                    <img class="gallery-item"  src="img/pf10.avif" alt="Another alt text" data-filter="IOS" onclick="openModal('img/pf10.avif')"></a> </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf11.avif" data-target="#image-gallery"> <img class="gallery-item"
                    src="img/pf11.avif" alt="Another alt text" data-filter="Android" onclick="openModal('img/pf11.avif')"> </a> </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf12.webp" data-target="#image-gallery"> <img class="gallery-item"
                    src="img/pf12.webp" alt="Another alt text" data-filter="Web development" onclick="openModal('img/pf12.webp')"> </a></div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf13.webp" data-target="#image-gallery"> <img class="gallery-item"
                    src="img/pf13.webp" alt="Another alt text" data-filter="IOS" onclick="openModal('img/pf13.webp')"> </a></div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf14.webp" data-target="#image-gallery"> <img class="gallery-item"
                    src="img/pf14.webp" alt="Another alt text" data-filter="Android" onclick="openModal('img/pf14.webp')"> </a></div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/port1.webp" data-target="#image-gallery"> <img class="gallery-item"
                    src="img/port1.webp" alt="Another alt text" data-filter="Web development" onclick="openModal('img/port1.webp')"> </a> </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/pf4n.png" data-target="#image-gallery"> <img class="gallery-item"
                    src="img/pf4n.png" alt="Another alt text" data-filter="IOS" onclick="openModal('img/pf4n.png')"> </a> </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/portn.png" data-target="#image-gallery"> <img class="gallery-item"
                    src="img/portn.png" alt="Another alt text" data-filter="Android" onclick="openModal('img/portn.png')"> </a> </div>
            <div class="col-lg-4 col-md-6 col-xs-12 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                   data-image="img/port2.webp" data-target="#image-gallery"> <img class="gallery-item"
                    src="img/port2.webp" alt="Another alt text" data-filter="Web development" onclick="openModal('img/port12.webp')"></a></div></div>
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="image-gallery-title"></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
                 </div>
                </div>
            </div>
         </div> 
    </div>

</div> 

<?php include 'footer.php'; ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    let modalId = $('#image-gallery');
    let currentImageIndex = 0;

    function updateGallery(imageId) {
      const $image = $('[data-image-id="' + imageId + '"]');
      $('#image-gallery-title').text($image.data('title'));
      $('#image-gallery-image').attr('src', $image.data('image'));
      disableButtons();
    }

    function disableButtons() {
      const totalImages = $('[data-image-id]').length;
      $('#show-previous-image').toggle(currentImageIndex !== 0);
      $('#show-next-image').toggle(currentImageIndex !== totalImages - 1);
    }

    $('#show-next-image, #show-previous-image').click(function () {
      if ($(this).attr('id') === 'show-previous-image') {
        currentImageIndex--;
      } else {
        currentImageIndex++;
      }
      updateGallery(currentImageIndex);
    });

    $(document).keydown(function (e) {
      if (modalId.is(':visible')) {
        switch (e.which) {
          case 37: // left
            if (currentImageIndex > 0) {
              currentImageIndex--;
              updateGallery(currentImageIndex);
            }
            break;
          case 39: // right
            const totalImages = $('[data-image-id]').length;
            if (currentImageIndex < totalImages - 1) {
              currentImageIndex++;
              updateGallery(currentImageIndex);
            }
            break;
          default:
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
      }
    });

    // Example call of loadGallery function
    updateGallery(currentImageIndex);
  });

  function filterObjects(category) {
    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach(item => {
      const itemCategory = item.getAttribute('data-filter');
      item.parentElement.style.display = (category === 'All' || category === itemCategory) ? 'block' : 'none';
    });
  }
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    let modalId = $('#image-gallery');
    let currentImageIndex = 0;

    function updateGallery(imageId) {
      const $image = $('[data-image-id="' + imageId + '"]');
      $('#image-gallery-title').text($image.data('title'));
      $('#image-gallery-image').attr('src', $image.data('image'));
      disableButtons();
    }

    function disableButtons() {
      const totalImages = $('[data-image-id]').length;
      $('#show-previous-image').toggle(currentImageIndex !== 0);
      $('#show-next-image').toggle(currentImageIndex !== totalImages - 1);
    }

    $('#show-next-image, #show-previous-image').click(function () {
      if ($(this).attr('id') === 'show-previous-image') {
        currentImageIndex--;
      } else {
        currentImageIndex++;
      }
      updateGallery(currentImageIndex);
    });

    $(document).keydown(function (e) {
      if (modalId.is(':visible')) {
        switch (e.which) {
          case 37: // left
            if (currentImageIndex > 0) {
              currentImageIndex--;
              updateGallery(currentImageIndex);
            }
            break;
          case 39: // right
            const totalImages = $('[data-image-id]').length;
            if (currentImageIndex < totalImages - 1) {
              currentImageIndex++;
              updateGallery(currentImageIndex);
            }
            break;
          default:
            return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
      }
    });

    // Example call of loadGallery function
    updateGallery(currentImageIndex);
  });

  function filterObjects(category) {
    const galleryItems = document.querySelectorAll('.gallery-item');
    galleryItems.forEach(item => {
      const itemCategory = item.getAttribute('data-filter');
      item.parentElement.style.display = (category === 'All' || category === itemCategory) ? 'block' : 'none';
    });
  }
</script>

    
   
    <!-- <script src="script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox@1.0.8/dist/glightbox.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>




    
</body>
</html>
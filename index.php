<?php


$images = array(
  'Vector_Art' => array(
      'VA1.png',
      'VA2.png',
      'VA3.png',
      'VA4.png',
      'VA5.png',
      'VA6.png',
      'VA7.png',
      'VA8.png',
      'VA9.png',
      'VA10.png',
      // Add more Vector Art images here
  ),
  'Illustration' => array(
    'Illu5.png',
    'Illu6.png',
    'Illu7.png',
    'Illu8.png',
    'Illu1.png',
    'Illu2.png',
    'Illu3.png',
    'Illu4.png',
    'Illu9.png',
    'Illu10.png',
    'Illu11.png',
      // Add more Illustration images here
  ),
   'Logo' => array(
      'Logo5.png',
      'Logo6.png',
      'Logo1.png',
      'Logo2.png',
      'Logo3.png',
      'Logo4.png',
      'LogoFS.png',
      // Add more Logo images here
  ),
  
  'UI_Design' => array(
    'UID11.png',
    'UID12.png',
    'UID13.png',
    'UID1.png',
    'UID2.png',
    'UID3.png',
    'UID4.png',
    'UID5.png',
    'UID6.png',
    'UID7.png',
    'UID8.png',
    'UID9.png',
    'UID10.png',
    
      // Add more UI Design images here
  ),
  'Project' => array(
      'ComingSoon.jpg',
      // Add more project images here
  ),
  'Original_Character' => array(
      'OC6.png',
      'OC7.png',
      'OC8.png',
      'OC9.png',
      'OC10.png',
      'OC11.png',
      'OC12.png',
      'OC13.png',
      'OC.png',
      'OC2.png',
      'OC3.jpg',
      'OC4.png',
      'OC5.png',
      // Add more Original Character images here
  ),


  'Icon' => array(
    'ComingSoon.jpg',
      // Add more Icon images here
  ),
 
  'Concept_Art' => array(
    'CA1.png',
    'CA2.png',
    'CA3.png',
    'CA4.png',
    'CA5.png',
    'CA6.png',
    'CA7.png',
      // Add more Concept Art images here
  ),
  'Fan_Art' => array(
      'FA1.png',
      'FA2.png',
      'FA3.png',
      'FA4.png',
      // Add more Fan Art images here
  )
);

$categories = array_keys($images);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Art Dump Pau</title>
    <link rel="icon" href="images/Logo/Logo1.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
<div class="container-logo background-content"></div>
    <nav class="navbar navbar-expand-lg fixed-top text-uppercase">
        <div class="container">
        <div class="logo-image">
         <a   href="#main"><img  class="navbar-brand" src="images/logo-name.png" alt=""></a>
        </div>
         
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link px-lg-4 rounded" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-lg-4 rounded" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-lg-4 rounded" href="#about">About</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

      <!-- main section -->
      <section class="main py-5" id="main">
        <div class="container py-5">
          <div class="row py-5 align-items-center">
            <div class="col-lg-6 py-5 d-flex justify-content-center align-items-center order-lg-1"> <!-- Move the col-lg-6 div to the left -->
              <div class="picture-image hidden"  
          
              >
                <img src="images/ProfilePic/mwuahko4.png" alt="mwuahko1"> <!-- Resize the image using style -->
              </div>
            </div>
          
              <div class="col-lg-6 py-5 order-lg-2 home-container hidden">
                <div class="typeText">
                  <h3><span class="typing-text"></span></h3>
                </div>
                <div class="reveal-type">
                  <h6 class="text-black-50" id="reveal-type">Artist</h6>
                </div>
                <div class="works-btn">
                  <a href="#portfolio" class="btn bt1">
                    <p>My Works</p>
                  </a>
                </div>
              </div>       
       
          </div>
        </div>
      </section>
  
      <!-- Portfolio section -->
      <section class="portfolio" id="portfolio">
        <div class="container py-5">
          <h1 class="text-center pb-5">Portfolio</h1>
          <div class="control">
            <div class="scrollable-container">
              <ul class="scrollable-list">
                <li class="button active" data-bs-filter="filter">All</li>
                  <?php       
                    foreach ($categories as $category):
                    $displayCategory = str_replace('_', ' ', $category);
                  ?>       
                  <li class="button" data-bs-filter="<?= $category; ?>"><?= $displayCategory; ?></li>
                <?php endforeach; ?>                   
              </ul>
            </div>
          </div>
          <br>      
          <div class="row d-flex flex-wrap justify-content-between" id="portfolio-items">         
                <div class="image-container">        
                  <?php foreach ($images as $category => $imageList):?>
                      <?php foreach ($imageList as $image): ?>
                        <?php if($image !== 'ComingSoon.jpg'):?>             
                        <div class="hidden col-lg-3 col-md-4 item filter <?= $category;?>" > 
                            <img src="images/<?= $category ?>/<?=$image ?>" class="img-fluid portfolio-image" alt="">
                            <span class="image-overlay" data-bs-toggle="modal" data-bs-target="#portfoliomodal" data-image-src="images/<?= $category ?>/<?=$image ?>"><i class="fas fa-plus"></i></span>
                        </div> 
                        <?php elseif($category !== 'All'): ?>  
                          <div class="hidden col-lg-3 col-md-4 item filter <?= $category;?>" > 
                            <img src="images/<?= $category ?>/<?=$image ?>" class="img-fluid portfolio-image" alt="">
                            <span class="image-overlay" data-bs-toggle="modal" data-bs-target="#portfoliomodal" data-image-src="images/<?= $category ?>/<?=$image ?>"><i class="fas fa-plus"></i></span>
                        </div> 
                        <?php endif;?>                         
                      <?php endforeach;?>  
                  <?php endforeach;?>
                </div>           
          </div>
        </div>
          <!-- MODAL FOR IMAGE POPUP (For mobile devices) -->
      <div class="portfolio-modal modal fade mt-5" id="portfoliomodal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-md" role="document">
              <div class="modal-content text-center">
                  <div class="modal-body text-center">
                      <div class="container-fluid py-3">
                          <div class="row justify-content-center">
                              <div class="col-lg-12">
                                  <img src="" class="img-fluid rounded" alt="" id="modalImage">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      </section>
          <!-- About section -->

      <section class="about py-5" id="about">
        <div class="container py-5">
          <div class="row align-items-center">
            <div class="col-lg-5 pt-3">
              <div class="about-container">

             
            <div class="content-right">

              <h1>About Me.</h1>
              <p>Artist</p>
              <p class="py-1">Hello there, I'm <span class="font-weight-bold" style="font-weight: bold;"> Pauline Andrea M. De Guzman </span> I am a
                2D Artist/Graphic Illustrator and Designer | Digital Artist | Game Design/UI and UX Design | Technical Artist | Concept Artist
                <br><br><span class="text-gray font-italic">"Creativity is everywhere"</span>
              </p>
            </div>
            <br>
              <div class="col-lg-12 mt-4"> 
              <ul class="list-unstyled d-flex justify-content-center social-icons"> 
              
                <li class="mx-4">
                <div class="icon-container">
                  <a href="https://www.facebook.com/pausartworks" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook">
                  <i class="bi bi-facebook h2"></i>
                  </a>
                  <p class="icon-label">Facebook</p>
                  </div>
                </li>
                  
                <li class="mx-4">
                <div class="icon-container">
                  <a href="https://www.instagram.com/pausartworks/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram">
                    <i class="bi bi-instagram h2"></i>
                  </a>
                  <p class="icon-label">Instagram</p>
                </div>
                </li>
                <li class="mx-4">
                <div class="icon-container">
                  <a href="https://www.linkedin.com/in/pauandreadg/" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="LinkedIn">
                    <i class="bi bi-linkedin h2"></i>
                  </a>
                  <p class="icon-label">LinkedIn</p>
                </div>
                </li>
                <li class="mx-4">
                  <div class="icon-container email-icon">
                    <a href="mailto:pauandreadg@gmail.com"
                      data-clipboard-text="pauandreadg@gmail.com"
                      data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email" id="copyEmail">
                      <i class="bi bi-envelope h2"></i>
                    </a>
                    <p class="icon-label">Gmail</p>
                  </div>
                </li>
                <li class="mx-4">
                <div class="icon-container">
                  <a href="https://www.canva.com/design/DAFSEfk-eBw/dNHOcOODKmlufqlRPxMtPg/view?" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Canva">
                    <i class="bi bi-image-alt h2"></i>
                  </a>
                  <p class="icon-label">Canva</p>
                </div>
                </li>
              </ul>
            </div>
            <div id="notification" class="d-none"></div>
            </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 picture-image">
              <img src="images/ProfilePic/mwuahko5.png" alt="" class="img-fluid">
            </div>

          
          </div>
        </div>
      </section>

  <!-- FOOTER -->

<footer class="bg-dark p-2 text-center">
  <div class="container">
    <p class="text-white">All Rights reserved Pauline De Guzman.</p>
  </div>
</footer>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


      <script src="app.js"></script> 
      

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
   
    
</body>



</html>
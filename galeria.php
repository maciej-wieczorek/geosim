<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GEOSIM - Galeria</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="socialmedia.css">
  <link rel="stylesheet" href="css/fontello.css" type="text/css">
</head>

<body onload="padding()" onresize="padding()">
  <!--Zajebiste menu tutaj-->
  <header>
    <nav class="navbar navbar-light bg-nav navbar-expand-lg">
      <a class="navbar-brand" href="index.html">
        <img src="img/GEOSIM_LOGO.png" class="d-inline-block mr-1 align-middle " alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu"
        aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainmenu">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html"> Start </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="onas.html"> O&nbsp;nas </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="geologia.html"> Geologia </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="geotechnika.html"> Geotechnika </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="laboratorium.html">Laboratorium </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="galeria.php">Galeria </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.html">Kontakt </a>
          </li>
        </ul>
        
      </div>
    </nav>
  </header>
  <div class="container">
    <section>
      <!--Przesuwane obrazki tutaj-->
      <div id="carouselExampleControls" class="carousel slide mb-3" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="d-block w-100" src="images/1.png" alt="Slide">
            <div class="carousel-caption">
              <p class="podpis">Sprzedaż i montaż szyb samochodowych</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/2.png" alt="Slide">
            <div class="carousel-caption">
              <p class="podpis">Na życzenie istnieje możliwość dojazdu do klienta</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/3.png" alt="Slide">
            <div class="carousel-caption">
              <p class="podpis">Profesjonalne przyciemnianie szyb</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/4.png" alt="Slide">
            <div class="carousel-caption">
              <p class="podpis">Zapewniamy dożywotnią szczelność spoiny</p>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/5.png" alt="Slide">
            <div class="carousel-caption">
              <p class="podpis">Zapraszamy do zapoznania się z naszą ofertą</p>
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
      <!--Treść strony tutaj-->
      <!--tu bedzie jakis skrypcik na fotogalerie-->
      <div class="container">
        <div class="gallery">
          <?php 
        $image_extensions = array("png","jpg","jpeg","gif","PNG","JPG","JPEG","GIF");
       
        $dir = 'images/phocagallery/';

        $dir_alt_l = "images/phocagallery/thumbs/phoca_thumb_l_";
        $dir_alt_m = "images/phocagallery/thumbs/phoca_thumb_m_";

         if (is_dir($dir)){
        
          if ($dh = opendir($dir)){
           $count = 1;
       
           while (($file = readdir($dh)) !== false){
       
            if($file != '' && $file != '.' && $file != '..'){
        
             if (!file_exists($dir_alt_l.$file)) {
                $thumbnail_path = $dir_alt_m.$file;
             }
             else $thumbnail_path = $dir_alt_l.$file;
       
             $image_path = $dir.$file;
        
             $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
             $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
       
             if(!is_dir($image_path) && 
                in_array($thumbnail_ext,$image_extensions) && 
                in_array($image_ext,$image_extensions)){
          ?>
          <a href="<?php echo $image_path; ?>">
            <img src="<?php echo $thumbnail_path; ?>" alt="" title="" />
          </a>
          <?php
            if( $count%4 == 0){
          ?>
          <div class="clear"></div>
          <?php
              }
              $count++;
             }
            }
        
           }
           closedir($dh);
          }
         }
        ?>
        </div>
      </div>
    </section>
  </div>
  <aside class="sticky-social">
    <a href="https://www.facebook.com/pages/category/Geologic-Service/GeoSim-Dawid-Simi%C5%84ski-247277702723309/" target="_blank" class="sociallink"><i class="icon-facebook"></i></a>
  </aside>
  <!--Stopka tutaj-->
  <footer>
    <hr class="przerwa">
    <div class="row">
      <div class="col-6 col-md-5 col-lg-4 footer_logo">
        <a class="footer" href="http://opentechnologies.pl" target="_blank"><img src="img/logoopen.png"
            class="_resimage"></a>
      </div>
      <div class="col-6 col-md-7 col-lg-8 footer_text">
        <p>&copy; GEOSIM 2019 Paweł&nbsp;Albanowski, Adrian&nbsp;Ciborski, Szymon&nbsp;Głowacki,
          Jakub&nbsp;Hemmerling, Mikołaj&nbsp;Marcińczak &&nbsp;Maciej&nbsp;Wieczorek</p>
      </div>
    </div>
  </footer>
  </div>
  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <link href='lightbox/dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="lightbox/dist/simple-lightbox.js"></script>
  <script type='text/javascript'>
    $(document).ready(function () {
      var gallery = $('.gallery a').simpleLightbox();
    });
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>
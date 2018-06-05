<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 50%;
      height: 50%;
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://ibhuluimcom-a.akamaihd.net/ib.huluim.com/show/1304?region=US&size=952x536.png" alt="Naturo" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png" alt="php" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://cdne.diariocorreo.pe/thumbs/uploads/img/2016/09/24/mis-khalifa-enciende-las-re-jpg_604x0.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="http://www.sciencemag.org/sites/default/files/styles/article_main_large/public/sn-dark%20web.png?itok=O7J9fokh" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="http://static.alfabetajuega.com/abj_public_files/alfabetajuega-dragon-ball-super-goku-25112017.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://scontent-bog1-1.xx.fbcdn.net/v/t1.15752-9/34584076_10214657849913266_1192853619444023296_n.jpg?_nc_cat=0&oh=8f90e90065bfcccb9ba7818e49a57b6d&oe=5BC4C020" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>

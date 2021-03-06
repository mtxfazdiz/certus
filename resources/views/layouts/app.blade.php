<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title') {{config('app.name')}} </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-left" href="{{ url('/') }}">
              	<img src="pic/logo.png">
              </a>
              
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/ofirmie') }}">O firmie</a></li>
                <li><a href="{{ url('/jakdzialamy') }}">Jak działamy?</a></li>
                <li><a href="{{ url('/pozyczki') }}">Pożyczki</a></li>
                <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <a href="{{ url('/kontakt') }}">
                  <img src="pic/gotowka_certus.png">
              </a>
              </ul>
              
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="/pic/banner1.jpg" alt="First slide">
          




        </div>
        <div class="item">
          <img class="second-slide" src="/pic/banner2.jpg" alt="Second slide">
          
        </div>
        <div class="item">
          <img class="third-slide" src="/pic/banner3.jpg" alt="Third slide">
          <div class="container">
            
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    @yield('content')

    <!-- FOOTER -->
    <footer>
      <div class="jumbotron" id="myjumbo"><!-- start jumbo -->
        <div class="container">
          <!-- <p class="pull-right"><a href="#">Do góry</a></p>  -->
          
          <p class="pull-right"><b>+48 570 930 602</b></p> 
          <p class="pull-right"><b>+48 732 890 752</b></p> 
          <p class="pull-right"><a href="{{ url('/jakdzialamy') }}"><b>Szybka pożyczka, gotówka nawet w 15 minut!</b></a></p> 
          <p>&copy; 2016 Certus Pożyczki. <b>Wszelkie prawa zastrzeżone.</b>
          <h2></h2>
          <p class="just">
            <span>
              Szybka pożyczka gotówkowa, bez sprawdzania, pożyczki pod zastaw. Najlepsze pożyczki Braniewo, Bartoszyce, Kętrzyn, Gronowo, Młoteczno, Bemowizna , Frombork, Stępień, Pierzchały, Płoskinia, Chruściel, Lipowina, Milejewo, Pogrodzie, Kadyny, Suchacz, Tolkmicko, Stegna, Kąty, Rybackie, Krynica Morska, Elbląg, Pasłęk, Gronowo Górne, Górowo Iławeckie, Kamińsk, Lelkowo, Głębock, Bezledy, Pieniężno, Orneta, Zagaje, Wyszkowo, Lidzbark Warmiński, Korsze, Reszel, Bisztynek.
            </span>
          </p>

        </div>
      </div><!-- end jumbo -->
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


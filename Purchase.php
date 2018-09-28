<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bitmomo</title>

    <!-- Bootstrap core CSS -->
   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
   
    <link rel="stylesheet" href="css/my.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">BitMomo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#purchase">Purchase</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="rates.php">Rates</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" id="purchase">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-sm-6 my-auto">
            <div class="header-content mx-auto">
            
              <div class="jumbotron">
                    <h2 class="mb-5 text-primary" >Bitcions to Momo<span class="text-danger"> 550$</span></h2>
                <form method="POST" action="purchase1.php">  
                    <input class="form-control" type="text" name="btcaddrees1" required="" placeholder="Bitcoin Address" maxlength="34" minlength="34">
                    <input class="form-control" type="password" name="btcpassword" required="" placeholder=" Btc Password">
                    <input class="form-control" type="number" name="amount1" value="20" required="" placeholder="Amount" min="20" max="1000">
                    <input class="form-control" type="tel" name="momonumber1" required="" placeholder="Momo Number" maxlength="9" minlength="9" autocomplete="off">
                    <button class="btn btn-outline btn-xl  bg-info">Purchase</button>
                </form>

              
            
          </div></div></div>
          <div class="col-sm-6 my-auto">
            <div class="header-content mx-auto">
                
                <div class="jumbotron">
                        <h2 class="mb-5 text-primary">Momo to Bitcoins<span class="text-danger"> 580$</span></h2>
                    <form>
                        <input class="form-control" type="text" name="btcAddress" required="" placeholder="Momo Number" maxlength="9" minlength="9">
                        <input class="form-control" type="password" name="MomoPassword" required="" placeholder="Momo Password">
                        <input class="form-control" type="number" name="amount" value="20" required="" placeholder="Amount" min="20" max="1000">
                        <input class="form-control" type="tel" name="Bitcion Adress" required="" placeholder="Bitcion Address" maxlength="34" minlength="34" autocomplete="off">
                        <button class="btn btn-outline btn-xl  bg-info">Purchase</button>
                    </form>
               
            </div>
          </div>
         
        </div>
      </div>
    </header>

   

    

  

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>Contact Us On</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-whatsapp"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; Coresoft 2018. All Rights Reserved.</p>
        
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>

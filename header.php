<!DOCTYPE html><html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href=
"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <meta name="robots" content="noindex, nofollow">
    <title>FUNDAS@50</title>
    <link rel="icon" type="image/x-icon" href="images/fundas_logo.png">


    <style>
      .loader {
        width: auto;
        display: inline-block;
        margin-left: 15px;
      }
      div#amessage, div#message {
        margin-top: 15px;
        color: green;
      }
      div#message .error_message, div#amessage .error_message{
        color: red;
      }
      .progress-container {
          margin-top: 15px;
          position: relative;
          height: 20px;
      }

      .progress-bar {
          width: 0;
          height: 100%;
          background-color: #2ecc71;
          border-radius: 5px;
          transition: width 0.3s;
      }

      .progress-text {
          position: absolute;
          top: 0;
          left: 50%;
          transform: translateX(-50%);
          color: #333;
          font-size: 14px;
          display: none;
      }

      .file-details {
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin-top: 15px;
      }

      .file-name {
          color: rgb(19, 2, 255);
      }

      .modal {
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgba(0, 0, 0, 0.9);
      }

      .modal-content {
          margin: auto;
          display: block;
          max-width: 80%;
          max-height: 80%;
      }

      .close {
          color: #fff;
          font-size: 35px;
          font-weight: bold;
          position: absolute;
          top: 15px;
          right: 25px;
          cursor: pointer;
      }
    </style>
  </head>
  <body class="home-one">

    <!-- Header strat -->
    <header class="abs-header border-bottom header p-2 shadow-sm">
  <div class="container">
    <div class="row align-items-end">
      <div class="align-items-sm-center col-md-2">
        <a href="index.php" class="logo">
          <img src="images/fundas_logo.png" alt="" class="logo_fundas">
        </a>
      </div>
      <div class="align-self-md-center col-md-10 justify-content-around">
        <nav class="primary-menu">
          <a href="javascript:void(0);" class="mobile-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
          <ul> 
            <!-- <li><a href="#" class="px-0">Login</a></li> -->
            <li class="dropdown nav_dropdown">
              <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Programme
              </a>
              <div class="dropdown-menu menu_dropdown">
                <a class="border-bottom dropdown-item" href="index.php#programme">Schedule</a>
                <a class="dropdown-item" href="#">Download</a>
              </div>
            </li>

            <li class="dropdown nav_dropdown">
              <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Profiles
              </a>
              <div class="dropdown-menu">
                <a class="border-bottom dropdown-item" href="index.php#yearbook">Fundas Network</a>
                <a class="dropdown-item" href="index.php#memoriam">In Memoriam</a>
              </div>
            </li>

            <li class="dropdown nav_dropdown">
              <a class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                Gallery
              </a>
              <div class="dropdown-menu">
                <a class="border-bottom dropdown-item" href="gallery_2025.php">2025</a>
                <a class="border-bottom dropdown-item" href="#gallery-artworks">2017</a>
                <a class="border-bottom dropdown-item" href="#gallery-videos">2001</a>
                <a class="dropdown-item" href="#gallery-photos">1977</a>
              </div>
            </li>
            <!-- <li><a href="#programme" class="px-0">Download</a></li> -->
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

    <!-- Header strat -->
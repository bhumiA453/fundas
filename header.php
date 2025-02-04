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

      .clear-button {
          padding: 5px 12px;
          background-color: #e74c3c;
          color: #fff;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          transition: background-color 0.3s;
          display: none;
      }

      .clear-button:hover {
          background-color: #c0392b;
      }

      .error{
        color: red !important;
      }
    </style>
  </head>
  <body class="home-one">

    <!-- Header strat -->
    <header class="abs-header border-bottom header p-2 shadow-sm">
      <div class="container">
        <div class="row align-items-center">
  <div class="col-md-2 d-flex justify-content-between align-items-center">
    <a href="index.php" class="logo">
      <img src="images/fundas_logo.png" alt="" class="logo_fundas">
    </a>
    <!-- Hamburger button -->
    <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="cursor:pointer;">
      <i class="fa fa-bars" aria-hidden="true" style="font-size: 21px;"></i>
    </button>
  </div>

  <div class="col-md-10">
    <nav class="bg-white navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="font-size: 16px;">
          <li class="nav-item dropdown" style="cursor:pointer;">
            <a class="dropdown-toggle font-weight-normal nav-link text-dark" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Programme
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item border-bottom" href="index.php#programme">Schedule</a>
              <a class="dropdown-item" href="#">Download</a>
            </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link text-dark font-weight-normal" href="index.php#announcement">Announcement <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark font-weight-normal" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profiles
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item border-bottom" href="index.php#yearbook">FUNDAS NETWORK</a>
              <a class="dropdown-item" href="index.php#memoriam">IN MEMORIAM</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark font-weight-normal" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Gallery
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item border-bottom" href="gallery_2025.php">2025</a>
                <a class="border-bottom d-flex dropdown-item justify-content-between" href="#" onclick="toggleSubMenu(event)">2017 <i class="align-content-center fa fa-caret-down" aria-hidden="true"></i></a>
                <div id="submenu2017" class="dropdown-submenu" style="display: none;">
                    <a class="dropdown-item border-bottom" href="gallery_2017.php">Photos</a>
                    <a class="dropdown-item border-bottom" href="profile.php">Profile</a>
                </div>
            <a class="dropdown-item border-bottom" href="gallery_2001.php">2001</a>
            <a class="dropdown-item" href="gallery_1977.php">1977</a>
          </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

      </div>




    </header>

    <!-- Header strat -->
<?php include('header.php') ?>
<!-- Banner section start -->
<section class="banner border-bottom container-fluid">

  <div class="spa-img">
    <img src="images/spa.png" alt="" class="banner_img">
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-9 mt-4">
        <div class="banner-content mt-5 pl-4">
          <!-- <span>spa & beauty center</span> -->
          <h3 class="text-dark">1975 - 2025</h3>
          <h2>Golden Reunion</h2>
          <h3 class="text-dark">IIMA 1975 Entry Batch</h3>
          <h4 class="font-weight-bold text-dark">Celebrating 50 Years of Friendships</h4>
          <p>Can you believe that 50 years have passed since we first met at the Indian Institute of Management swank campus at Vastrapura, Ahmedabad? Time has flown real fast!</p>
          <p>We came from diverse backgrounds and geographies and quickly gelled together as a group of friends. We had simple ambitions like most young people: build a career, start a family, look after our parents and give back to society. After graduating, each of us got busy in pursuing our goals and dreams and moved to different parts of the world. </p>
          <p>This Golden Reunion, Fundas@50, gives us a chance to rekindle the friendships that started 5 decades ago. To relish and relive the moments we enjoyed way back then.</p>
          <p>Welcome to Fundas@50 Celebrations at Sterling Resorts, Puri, Odisha (22-25 February 2025)..</p>
          <!-- <a href="view-profile.php?image=#" class="btn">login</a> -->
          <!-- <a class="video-btn" data-fancybox="" href="view-profile.php?image=https://www.youtube.com/watch?v=QWUPm0ND7HY">
          <i class="ti-control-play"></i>
          Watch our story
        </a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner section end -->

<!-- About section start -->
<section id="programme" class="about">
  <!-- <img src="images/celebration_1.png" alt="" class="flower-1">
<img src="images/balloon.png" alt="" class="flower-2"> -->

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-12 m-auto">
        <div class="sec-heading">

          <span class="tagline">Program Schedule & Excursion Details </span>
          <h3 class="sec-title">Fundas@50 Reunion: 22nd to 25th February 2025 </h3>
          <h4>Location: Sterling Resort, Puri</h4>
        </div>
        <a href="pdf/schedule_pdf.pdf" target="_blank" class="btn btn-round">View the Schedule</a>
      </div>
    </div>
  </div>
</section>


<!-- yearbook section start -->
<!-- <section id="yearbook_2" class="about pb-3 pt-3" style="background-color:#f98183">
  <div class="row">
    <div class="align-content-center col-md-6">
      <h3 class="text-white">Grab your yearbook now!</h3>
      <div class="mt-2">
        <a href="view-profile.php?image=pdf/fundas50_yearbook_2025.pdf" download="fundas50_yearbook_2025.pdf">
            <button type="submit" class="bg-white btn btn-round p-2 p-3 rounded shadow-sm text-dark w-50">
                Download Now
            </button>
        </a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="d-flex justify-content-center">
        <img src="images/yearbook_cover.png" class="w-25">
      </div>
    </div>
  </div>      
</section> -->
<!-- yearbook section end -->
<!-- About section end -->

<!-- Team section start -->
<section class="team team_section" id="yearbook" style="background-color: #fff9f8;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="sec-heading">
          <h2>FUNDAS NETWORK:</h2>
          <!-- <img src="images/fundas_logo.png" alt=""> -->
          <p> Our Journeys. Memories. Achievements. Messages.</p>
        </div>
        <div class="search-container main-container">
          <i class="fa fa-search"></i>
          <input type="text" id="search-input" placeholder="Search..." autocomplete="off" />
        </div>
        <div class="justify-content-center main-container">
          <div id="nothing-alert">Nothing Found</div>
          <!-- ===================================== -->

          <?php
          $folder = 'fundas'; // Path to the folder
          $images = array_diff(scandir($folder), array('.', '..')); // Fetch all files, exclude . and ..

          foreach ($images as $image) {
            // Remove the file extension and replace underscores with spaces
            $displayName = str_replace('_', ' ', pathinfo($image, PATHINFO_FILENAME));
            echo "
               
                <a href='view-profile.php?image=$image' target='_blank' class='members_of_fundas'>
                <div class='cards'>
                  <h2 class='icon-name'>$displayName</h2>
                </div>
              </a>
            ";
          }
          ?>

          <!-- =========================================== -->

          <!-- <div class="cards"><h2 class="icon-name">Mercedes</h2></div>
        <div class="cards"><h2 class="icon-name">Mini</h2></div> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="team team_section" id="memoriam" style="background-color: #e1e8ff;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="sec-heading">
          <h2>IN MEMORIAM:</h2>
          <p>Remembering our Funda friends who are no more with us in this world.</p>
        </div>
        <div class="justify-content-center main-container">
          <!-- ===================================== -->

          <?php
          $folder = 'memoriam'; // Path to the folder
          $images = array_diff(scandir($folder), array('.', '..')); // Fetch all files, exclude . and ..

          foreach ($images as $image) {
            // Remove the file extension and replace underscores with spaces
            $displayName = str_replace('_', ' ', pathinfo($image, PATHINFO_FILENAME));
            echo "
               
                <a href='view-profile.php?image=$image' class='members_of_fundas'>
                <div class='cards'>
                  <h2 class='icon-name'>$displayName</h2>
                </div>
              </a>
            ";
          }
          ?>

          <!-- =========================================== -->

        </div>
      </div>
    </div>
  </div>
</section>


<?php include('footer.php') ?>
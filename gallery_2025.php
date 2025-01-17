<?php include('header.php');
require 'db_connection.php';

$sql = "SELECT * FROM gallery ORDER BY `id` DESC";
$result = $conn->query($sql);
$row = $result->fetch_all(MYSQLI_ASSOC); ?>
	<section></section>
    <!-- About section start -->
    <!-- <section class="container pb-3 button_section">
      <a href="index.html"><button type="" class="bg-dark btn btn-round go_back_btn p-2 p-3 rounded shadow shadow-sm">Go Back</button></a>
    </section> -->
    <section id="about-us" class="about pt-4">
      <div>
        <h3 class="sec-title">Gallery 2025</h3>
      </div>
       
       <div id="accordion">
        <div class="border-0 card">
          <div class="bg-white border-bottom-0 card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link rounded shadow-sm collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa fa-upload" aria-hidden="true"></i> Upload your photos
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="border card-body m-auto rounded shadow-sm w-75">
              <form id="gallery_form" method="post" enctype="multipart/form-data">
              <div class="d-flex justify-content-center">
                <div class="form-group w-75">
                  <!-- <label for="exampleInputEmail1"></label> -->
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <div class="input-group mb-3 w-75">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input file-input" name="files[]" id="files" multiple required>
                      <label class="custom-file-label" for="inputGroupFile01">Choose files</label>
                  </div>
                </div>
              </div>
              <div class="progress-container">
                        <div class="progress-bar" id="progressBar"></div>
                        <div class="progress-text" id="progressText"></div>
              </div>
              <div class="file-details">
                        <div class="file-name" id="fileName"></div>
                        <button class="clear-button" id="clearButton">
                            <i class="fas fa-times"></i>
                            Clear
                        </button>
              </div>
              <div>
                <button type="submit" class="btn btn-round p-2 rounded shadow-sm" id="submit">Upload Photos</button>
              </div>
              </form>   

              <div class="modal" id="myModal">
                  <span class="close" id="closeModal">&times;</span>
                  <img class="modal-content" id="uploadedImageModal">
              </div> 
            </div>
          </div>
        </div>
      </div>  

    <div class='sprite-svg container'>
      <svg height='64' viewbox='0 0 64 64' width='64'>
        <path d='M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z' id='arrow-left-1'></path>
      </svg>
      <svg height='64' viewbox='0 0 64 64' width='64'>
        <path d='M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z' id='arrow-right-1'></path>
      </svg>
    </div>
    <div class='border-top pt-3 wrapper'>
      <?php foreach ($row as $key => $value) { ?>
        <div class="thumbnail">
          <?php $key = $key + 1; ?>
          <a class='grid-image' href='#img<?=$key?>'>
            <img alt='image 1' src='<?=$value["pic"]?>'>
            <!-- <div class="bottom-left">Bottom Left</div> -->
            <div class="caption pl-3">
                  <p>By: <?=$value['name']?></p>
            </div>
          </a>
        </div>
      <?php } ?>
      <!-- <div class="thumbnail">
        <a class='grid-image' href='#img1'>
          <img alt='image 1' src='images/landscape.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
        <a class='grid-image' href='#img2'>
          <img alt='image 1' src='images/portrait.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
        <a class='grid-image' href='#img3'>
          <img alt='image 1' src='images/landscape.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
        <a class='grid-image' href='#img4'>
          <img alt='image 1' src='images/portrait.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
        <a class='grid-image' href='#img5'>
          <img alt='image 1' src='images/portrait.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
        <a class='grid-image' href='#img5'>
          <img alt='image 1' src='images/landscape_2.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
        <a class='grid-image' href='#img6'>
          <img alt='image 1' src='images/landscape_2.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
        <a class='grid-image' href='#img7'>
          <img alt='image 1' src='images/portrait.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div>
      <div class="thumbnail">
        <a class='grid-image' href='#img8'>
          <img alt='image 1' src='images/landscape_2.jpg'>
          <div class="caption pl-3">
                <p>By: Pranesh Misra</p>
          </div>
        </a>
      </div> -->
    </div>
    <?php foreach ($row as $key => $value) { $key = $key + 1 ;?>
      <div class='zoom-wrapper' id='img<?=$key?>'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 1' class='zoom-image' src='<?=$value["pic"]?>'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__next' href='#img<?= ++$key ?>'>
      <span class='navigation-arrow__image'>
        <img alt='image 2' src='<?=$row[++$key]["pic"]?>'>
      </span>
      <span class='navigation-arrow__icon'>
        <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
          <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
        </svg>
      </span>
      </a>
    </div>
    <?php } ?>
    <!-- <div class='zoom-wrapper' id='img1'>
      <div class='zoom-wrapper__image'>
        <div class='cell' style="">
          <img alt='image 1' class='zoom-image' src='images/landscape.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__next' href='#img2'>
      <span class='navigation-arrow__image'>
        <img alt='image 2' src='images/portrait.jpg' >
      </span>
      <span class='navigation-arrow__icon'>
        <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
          <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
        </svg>
      </span>
      </a>
    </div>
    <div class='zoom-wrapper' id='img2'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 2' class='zoom-image' src='images/portrait.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__prev' href='#img1'>
        <span class='navigation-arrow__image'>
          <img alt='image 1' src='images/landscape.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-left-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
      <a class='navigation-arrow navigation-arrow__next' href='#img3'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/landscape.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
    </div>
    <div class='zoom-wrapper' id='img3'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 3' class='zoom-image' src='images/landscape.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__prev' href='#img2'>
        <span class='navigation-arrow__image'>
          <img alt='image 2' src='images/portrait.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-left-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
      <a class='navigation-arrow navigation-arrow__next' href='#img4'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/portrait.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
    </div>
    <div class='zoom-wrapper' id='img4'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 3' class='zoom-image' src='images/portrait.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__prev' href='#img3'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/landscape.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-left-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
      <a class='navigation-arrow navigation-arrow__next' href='#img5'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/portrait.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
    </div>
    <div class='zoom-wrapper' id='img5'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 3' class='zoom-image' src='images/portrait.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__prev' href='#img4'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/portrait.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-left-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
      <a class='navigation-arrow navigation-arrow__next' href='#img6'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/landscape_2.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
    </div>
    <div class='zoom-wrapper' id='img6'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 3' class='zoom-image' src='images/landscape_2.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__prev' href='#img5'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/portrait.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-left-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
      <a class='navigation-arrow navigation-arrow__next' href='#img7'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/landscape_2.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
    </div>
    <div class='zoom-wrapper' id='img7'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 3' class='zoom-image' src='images/landscape_2.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__prev' href='#img6'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/landscape_2.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-left-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
      <a class='navigation-arrow navigation-arrow__next' href='#img8'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/portrait.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
    </div>
    <div class='zoom-wrapper' id='img8'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 3' class='zoom-image' src='images/portrait.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__prev' href='#img7'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/landscape_2.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-left-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
      <a class='navigation-arrow navigation-arrow__next' href='#img9'>
        <span class='navigation-arrow__image'>
          <img alt='image 4' src='images/landscape_2.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-right-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
    </div>
    <div class='zoom-wrapper' id='img9'>
      <div class='zoom-wrapper__image'>
        <div class='cell'>
          <img alt='image 4' class='zoom-image' src='images/landscape_2.jpg'>
        </div>
      </div>
      <a class='zoom-wrapper__close' href='#'>×</a>
      <a class='navigation-arrow navigation-arrow__prev' href='#img8'>
        <span class='navigation-arrow__image'>
          <img alt='image 3' src='images/portrait.jpg'>
        </span>
        <span class='navigation-arrow__icon'>
          <svg class='icon' height='28' viewbox='0 0 64 64' width='28'>
            <use xlink:href='#arrow-left-1' xmlns:xlink='http://www.w3.org/1999/xlink'></use>
          </svg>
        </span>
      </a>
    </div>    -->
    </section>
<?php include('footer.php') ?>
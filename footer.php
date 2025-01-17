<!-- Footer strat -->
<footer class="footer p-2">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="mb-0"><b>In Case Of Any Queries, Kindly Contact <a href="mailto:pranesh.misra@gmail.com" style="color: white;"><u>pranesh.misra@gmail.com</u></a></b></p>
            <p class="mb-0"><b>Copyright @2025 fundas50. All Rights Reserved</b></p>
            <!-- <div class="">
              <a href="index.html" class="align-content-around logo">
                <img src="images/fundas_logo.png" alt="">
              </a>
            </div> -->
            <!-- <div class="foo-social">
              <a href="#"><i class="ti-facebook"></i></a>
              <a href="#"><i class="ti-twitter-alt"></i></a>
              <a href="#"><i class="ti-vimeo-alt"></i></a>
              <a href="#"><i class="ti-instagram"></i></a>
            </div>
            <p class="copyright">© COPYRIGHT 2019 <a href="https://themeies.com">themeies.com.</a> ALL RIGHTS RESERVED.</p> -->
          </div>
        </div>
      </div>
</footer>
<!-- Footer end -->

    <!-- JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
  document.querySelector('.dropdown').addEventListener('click', function() {
    var dropdownContent = this.querySelector('.dropdown-content');
    dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
  });
</script>

<script>
  document.querySelector('.dropdown-2').addEventListener('click', function() {
    var dropdownContent = this.querySelector('.dropdown-content-2');
    dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
  });
</script>

<script>
  document.querySelector('.dropdown-3').addEventListener('click', function() {
    var dropdownContent = this.querySelector('.dropdown-content-3');
    dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
  });
</script>
<!-- <script>
  document.querySelector('h1').remove();
</script> -->

<script type="text/javascript">

document.addEventListener('DOMContentLoaded', () => {
    const fInput = document.getElementById('files');
    const pBar = document.getElementById('progressBar');
    const pText = document.getElementById('progressText');
    const fName = document.getElementById('fileName');
    const modal = document.getElementById('myModal');
    const cModal = document.getElementById('closeModal');
    const uImage = document.getElementById('uploadedImageModal');
    const pContainer = document.getElementById('previewContainer');
    const cBtn = document.getElementById('clearButton');
    //fInput.addEventListener('change', (event) => {
    $("#gallery_form").on('submit',function(e){
          e.preventDefault();
          var formData = new FormData(this);
            var fileInput = document.getElementById('files');
            var file = fileInput.files[0];
        if (file ) {
            const reader = new FileReader();
            reader.onloadstart = () => {
                pBar.style.width = '0%';
                pText.style.display = 'block';
                pText.innerText = '0%';
                pContainer.style.display = 'none';
                cBtn.style.display = 'none';
            };
            reader.onprogress = (event) => {
                if (event.lengthComputable) {
                    const progress = 
                        (event.loaded / event.total) * 100;
                    pBar.style.width = `${progress}%`;
                    pText.innerText = `${Math.round(progress)}%`;
                }
            };
            reader.onload = () => {
                const uploadTime = 4000;
                const interval = 50;
                const steps = uploadTime / interval;
                let currentStep = 0;
                const updateProgress = () => {
                    const progress = (currentStep / steps) * 100;
                    pBar.style.width = `${progress}%`;
                    pText.innerText = `${Math.round(progress)}%`;
                    currentStep++;

                    if (currentStep <= steps) {
                        setTimeout(updateProgress, interval);
                    } else {
                        if(currentStep > steps){
                            $.ajax({
                    url: 'upload.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        pBar.style.width = '100%';
                        pText.innerText = '100%';
                        const fileNames = response.replaceAll(' <br>',',');
                        fName.innerText = `Uploaded Files: ${fileNames}`;
                    },
                    error: function () {
                        $('#message').html('<p style="color: red;">Error uploading files</p>');
                    }
                });
                        }
                        
                    }
                };
                setTimeout(updateProgress, interval);
            };
            reader.readAsDataURL(file);
        } else {
            alert('Please select a valid image file.');
            fInput.value = '';
        }
    });
    pContainer.addEventListener('click', () => {
        modal.style.display = 'block';
        uImage.src = document.getElementById('previewImage').src;
    });
    cModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });
    cBtn.addEventListener('click', () => {
        fInput.value = '';
        pBar.style.width = '0%';
        pText.style.display = 'none';
        fName.innerText = '';
        pContainer.style.display = 'none';
        cBtn.style.display = 'none';
    });
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});

      
    </script>

</body></html>
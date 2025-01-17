(function($) {
    'use strict';

    $('.service-caro').owlCarousel({
        loop:false,
        margin:5,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

    $('.test-caro').owlCarousel({
        autoplay:true,
        dots: true,
        loop:true,
        nav:false,
        items: 1
    })

    $('.mobile-menu').on('click', function() {
        $('.primary-menu ul').slideToggle();
    })


    // ====================================
    //  Contact form
    // ====================================
    $('#contact-form').on("submit", function () {
        var action = $(this).attr('action');
        // console.log('top');
        $("#message").slideUp(750, function () {
            $('#message').hide();
            $('#submit')
                .after('<img src="images/ajax-loader.gif" class="loader" />')
                .attr('disabled', 'disabled');
            // console.log('Attr');
            $.post(action, {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    subject: $('#subject').val(),
                    comments: $('#comments').val()
                },
                function (data) {
                    document.getElementById('message').innerHTML = data;
                    $('#message').slideDown('slow');
                    setTimeout(function () {
                        $('#message').slideUp('slow');
                        console.log('SetTime');
                    }, 2000)

                    $('#contact-form img.loader').fadeOut('slow', function () {
                        $(this).remove()
                    });
                    $('#submit').removeAttr('disabled');
                    if (data.match('success') != null)
                        $('#contact-form').show('slow');
                    // console.log('Down');
                }
            );

        });
        // console.log('outside');
        return false;
    });


    // ====================================
    //  Apint form
    // ====================================
    $('#apoint-form').on("submit", function () {
        var action = $(this).attr('action');
        $("#message").slideUp(750, function () {
            $('#message').hide();
            $('#asubmit')
                .after('<img src="images/ajax-loader.gif" class="loader" />')
                .attr('disabled', 'disabled');
            $.post(action, {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    service: $('#service').val(),
                    number: $('#number').val(),
                    date: $('#date').val(),
                    time: $('#time').val(),
                    comments: $('#comments').val()
                },
                function (data) {
                    document.getElementById('amessage').innerHTML = data;
                    $('#amessage').slideDown('slow');
                    setTimeout(function () {
                        $('#amessage').slideUp('slow');
                        console.log('SetTime');
                    }, 2000)

                    $('#apoint-form img.loader').fadeOut('slow', function () {
                        $(this).remove()
                    });
                    $('#submit').removeAttr('disabled');
                    if (data.match('success') != null)
                        $('#apoint-form').show('slow');
                }
            );

        });
        return false;
    });


}) (jQuery)

document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.getElementById('search-input');
  const cards = document.querySelectorAll('.cards');

  function filterIcons(searchQuery) {
      const nothingfound = document.getElementById("nothing-alert");
      let number = 0;
        cards.forEach(function (card) {
      const name = card.querySelector("h2").textContent.toLowerCase();
      
      if (name.includes(searchQuery.toLowerCase())) {
         nothingfound.style.display = "none";
        card.style.display = "flex";
        number++;
      } else {
        card.style.display = "none";
      }
    });
    if(number == 0){
        nothingfound.style.display = "block";
    }
  }

  searchInput.addEventListener("input", function () {
    const searchQuery = searchInput.value.trim();
    filterIcons(searchQuery);
  });
});



document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.getElementById('search-input-1');
  const cards1 = document.querySelectorAll('.cards-1');

  function filterIcons(searchQuery) {
      const nothingfound = document.getElementById("nothing-alert-1");
      let number = 0;
        cards1.forEach(function (card) {
      const name = card.querySelector("h2").textContent.toLowerCase();
      
      if (name.includes(searchQuery.toLowerCase())) {
         nothingfound.style.display = "none";
        card.style.display = "flex";
        number++;
      } else {
        card.style.display = "none";
      }
    });
    if(number == 0){
        nothingfound.style.display = "block";
    }
  }

  searchInput.addEventListener("input", function () {
    const searchQuery = searchInput.value.trim();
    filterIcons(searchQuery);
  });
});

  $(document).ready(function() {
            const fileUploadBox = $('.file-upload-box');
            const fileList = $('.file-list');
            const fileInput = $('.file-upload-input');

            // Handle drag and drop events
            fileUploadBox
                .on('dragover dragenter', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    $(this).addClass('drag-over');
                })
                .on('dragleave dragend drop', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    $(this).removeClass('drag-over');
                });

            // Handle file selection
            fileInput.on('change', function(e) {
                const files = e.target.files;
                handleFiles(files);
            });

            // Handle dropped files
            fileUploadBox.on('drop', function(e) {
                const files = e.originalEvent.dataTransfer.files;
                handleFiles(files);
            });

            function handleFiles(files) {
                Array.from(files).forEach(file => {
                    // Create progress bar element
                    const progressBar = $('<div class="upload-progress"></div>');
                    
                    const fileItem = $(`
                        <div class="file-item">
                            <i class="fas fa-file file-icon"></i>
                            <span class="file-name" title="${file.name}">${file.name}</span>
                            <i class="fa fa-times remove-file" aria-hidden="true"></i>
                            ${progressBar.prop('outerHTML')}
                        </div>
                    `);

                    fileList.append(fileItem);

                    // Remove progress bar after animation
                    setTimeout(() => {
                        fileItem.find('.upload-progress').remove();
                    }, 1000);

                    // Handle file removal
                    fileItem.find('.remove-file').on('click', function(e) {
                        e.stopPropagation();
                        fileItem.fadeOut(300, function() {
                            $(this).remove();
                        });
                    });

                    // Get appropriate FontAwesome icon based on file type
                    const fileIcon = fileItem.find('.file-icon');
                    const fileExtension = file.name.split('.').pop().toLowerCase();
                    
                    const iconMap = {
                        'pdf': 'fa-file-pdf',
                        'doc': 'fa-file-word',
                        'docx': 'fa-file-word',
                        'xls': 'fa-file-excel',
                        'xlsx': 'fa-file-excel',
                        'ppt': 'fa-file-powerpoint',
                        'pptx': 'fa-file-powerpoint',
                        'jpg': 'fa-file-image',
                        'jpeg': 'fa-file-image',
                        'png': 'fa-file-image',
                        'gif': 'fa-file-image',
                        'zip': 'fa-file-archive',
                        'rar': 'fa-file-archive',
                        'txt': 'fa-file-alt'
                    };

                    if (iconMap[fileExtension]) {
                        fileIcon.removeClass('fa-file').addClass(iconMap[fileExtension]);
                    }
                });
            }
        });

  // Event listener for file input change
  document.getElementById('inputGroupFile01').addEventListener('change', function (event) {
    var fileNames = [];
    // Loop through the selected files and store their names
    for (var i = 0; i < event.target.files.length; i++) {
      fileNames.push(event.target.files[i].name);
    }
    
    // Update the label with the list of file names
    var fileLabel = fileNames.length > 0 ? fileNames.join(', ') : 'Choose files';
    event.target.nextElementSibling.innerText = fileLabel;
  });



  


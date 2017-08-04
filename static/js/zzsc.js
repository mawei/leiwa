$(function () {
    var galleries = $('.ad-gallery').adGallery({
        slideshow: {
            enable: true,
            autostart: true
        },
        callbacks: {
            // Executes right after the internal init, can be used to choose which images
            // you want to preload
            init: function() {
              // preloadAll uses recursion to preload each image right after one another
              // this.preloadAll();
              // Or, just preload the first three
              this.preloadImage(0);
              // this.preloadImage(1);
              // this.preloadImage(2);
            }
        },
        afterImageVisible: function() {
          // For example, preload the next image
          var context = this;
          this.loading(true);
          this.preloadImage(this.current_index + 1,
            function() {
              // This function gets executed after the image has been loaded
              context.loading(false);
            }
          );
        },
    });
    $('#switch-effect').change(function () {
        galleries[0].settings.effect = $(this).val();
        return false;
    });
    $('#toggle-slideshow').click(function () {
        galleries[0].slideshow.toggle();
        return false;
    });
    $('#toggle-description').click(function () {
        if (!galleries[0].settings.description_wrapper) {
            galleries[0].settings.description_wrapper = $('#descriptions');
        } else {
            galleries[0].settings.description_wrapper = false;
        }
        return false;
    });
});
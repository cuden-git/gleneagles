import Swiper from './swiper';

export default function initCarousels() {

    // Image Carousel Module
    $(".cb-image-carousel .swiper-container").each(function (index, element) {
      var $this = $(this);
      $this.addClass("image-carousel-" + index);
      $this.next('.swiper-button-next').addClass("swiper-button-next-image-carousel-" + index);
      var imageCarousel = new Swiper(".image-carousel-" + index, {
        init: false,
        loop: true,
        simulateTouch: false,
        speed: 750,
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 32,
        breakpoints: {
        768: {
          slidesPerView: 2,
          slidesPerGroup: 1,
        },
        1024: {
          slidesPerView: 2,
          slidesPerGroup: 1,
        }
      },
        mousewheel: {
          sensitivity: 1,
          forceToAxis: true,
          invert: true
        },
        keyboard: {
          enabled: true,
          onlyInViewport: true
        },
        pagination: {
          el: '.swiper-pagination',
          type: 'progressbar',
        },
        navigation: {
          nextEl: '.swiper-button-next.swiper-button-next-image-carousel-' + index,
        },
        on: {
          init: function () {
            if ($(window).width() >= 768) {
              var totalSlides = imageCarousel.slides.length - 4;
            } else {
              var totalSlides = imageCarousel.slides.length - 2;
            }
            var currentSlide = imageCarousel.realIndex + 1;
            var slideTotalEl;
            var slideNumEl;
            slideTotalEl = $this.find('.swiper-slide-total');
            slideNumEl = $this.find('.swiper-slide-number');
            slideTotalEl.text(totalSlides);
            slideNumEl.text(currentSlide);
          },
          slideChangeTransitionStart: function () {
            if ($(window).width() >= 768) {
              var totalSlides = imageCarousel.slides.length - 4;
            } else {
              var totalSlides = imageCarousel.slides.length - 2;
            }
            var currentSlide = imageCarousel.realIndex + 1;
            var slideTotalEl;
            var slideNumEl;
            slideTotalEl = $this.find('.swiper-slide-total');
            slideNumEl = $this.find('.swiper-slide-number');
            slideTotalEl.text(totalSlides);
            slideNumEl.text(currentSlide);
          },
        },
      });
      imageCarousel.init();
    });


        // Cards Module
        $(".cb-cards .swiper-container").each(function (index, element) {
          var $this = $(this);
          $this.addClass("cards-" + index);
          $this.next('.swiper-button-next').addClass("swiper-button-next-cards-carousel-" + index);
          var cards = new Swiper(".cards-" + index, {
            init: false,
            loop: true,
            simulateTouch: false,
            speed: 750,
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 32,
            mousewheel: {
              sensitivity: 1,
              forceToAxis: true,
              invert: true
            },
            keyboard: {
              enabled: true,
              onlyInViewport: true
            },
            pagination: {
              el: '.swiper-pagination',
              type: 'progressbar',
            },
            navigation: {
              nextEl: '.swiper-button-next.swiper-button-next-cards-carousel-' + index,
            },
            on: {
              init: function () {
                var totalSlides = cards.slides.length - 2;
                var currentSlide = cards.realIndex + 1;
                var slideTotalEl;
                var slideNumEl;
                slideTotalEl = $this.find('.swiper-slide-total');
                slideNumEl = $this.find('.swiper-slide-number');
                slideTotalEl.text(totalSlides);
                slideNumEl.text(currentSlide);
              },
              slideChangeTransitionStart: function () {
                  var totalSlides = cards.slides.length - 2;
                var currentSlide = cards.realIndex + 1;
                var slideTotalEl;
                var slideNumEl;
                slideTotalEl = $this.find('.swiper-slide-total');
                slideNumEl = $this.find('.swiper-slide-number');
                slideTotalEl.text(totalSlides);
                slideNumEl.text(currentSlide);
              },
            },
          });
          cards.init();
        });

  // Media Carousel Module
  $(".cb-media-carousel .swiper-container").each(function (index, element) {
    var $this = $(this);
    $this.addClass("media-carousel-" + index);
    $this.next('.swiper-button-next').addClass("swiper-button-next-media-carousel-" + index);

    var mediaCarousel = new Swiper(".media-carousel-" + index, {
      init: false,
      loop: true,
      simulateTouch: false,
      speed: 750,
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 32,
      mousewheel: {
        sensitivity: 1,
        forceToAxis: true,
        invert: true
      },
      keyboard: {
        enabled: true,
        onlyInViewport: true
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      navigation: {
        nextEl: '.swiper-button-next.swiper-button-next-media-carousel-' + index,
      },
      on: {
        init: function () {
          var totalSlides = mediaCarousel.slides.length - 2;
          var currentSlide = mediaCarousel.realIndex + 1;
          var slideTotalEl;
          var slideNumEl;
          slideTotalEl = $this.find('.swiper-slide-total');
          slideNumEl = $this.find('.swiper-slide-number');
          slideTotalEl.text(totalSlides);
          slideNumEl.text(currentSlide);
        },
        slideChangeTransitionStart: function () {
          $this.find('.c-video-container.playing button.video-button').click();
          var totalSlides = mediaCarousel.slides.length - 2;
          var currentSlide = mediaCarousel.realIndex + 1;
          var slideTotalEl;
          var slideNumEl;
          slideTotalEl = $this.find('.swiper-slide-total');
          slideNumEl = $this.find('.swiper-slide-number');
          slideTotalEl.text(totalSlides);
          slideNumEl.text(currentSlide);
        },
      },
    });
    mediaCarousel.init();
  });

  // Perks Carousel Module
  $(".cb-perks-carousel .swiper-container").each(function (index, element) {
    var $this = $(this);
    $this.addClass("perks-carousel-" + index);
    $this.next('.swiper-button-next').addClass("swiper-button-next-perks-carousel-" + index);

    var perksCarousel = new Swiper(".perks-carousel-" + index, {
      init: false,
      loop: false,
      simulateTouch: false,
      speed: 750,
      slidesPerView: 1,
      direction: 'horizontal',
      breakpoints: {
        768: {
          releaseOnEdges: false,
          direction: 'horizontal',
          loop: true,
          slidesPerView: 2,
          slidesPerGroup: 1,
          mousewheel: {
            sensitivity: 1,
            forceToAxis: true,
            invert: true,
            releaseOnEdges: false
          },
        }
      },
      spaceBetween: 32,
      mousewheel: {
        sensitivity: 1,
        forceToAxis: true,
        invert: true,
        releaseOnEdges: true
      },
      keyboard: {
        enabled: true,
        onlyInViewport: true
      },
      pagination: {
        progressbarOpposite: false,
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      navigation: {
        nextEl: '.swiper-button-next.swiper-button-next-perks-carousel-' + index,
      },
      on: {
        init: function () {
          var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
          var totalSlides = perksCarousel.slides.length;
          totalSlides = perksCarousel.slides.length - slideDuplicates;
          var currentSlide = perksCarousel.realIndex + 1;
          var slideTotalEl;
          var slideNumEl;
          slideTotalEl = $this.find('.swiper-slide-total');
          slideNumEl = $this.find('.swiper-slide-number');
          slideTotalEl.text(totalSlides);
          slideNumEl.text(currentSlide);
        },
        slideChangeTransitionStart: function () {
          var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
          var totalSlides = perksCarousel.slides.length;
          totalSlides = perksCarousel.slides.length - slideDuplicates;
          var currentSlide = perksCarousel.realIndex + 1;
          var slideTotalEl;
          var slideNumEl;
          slideTotalEl = $this.find('.swiper-slide-total');
          slideNumEl = $this.find('.swiper-slide-number');
          slideTotalEl.text(totalSlides);
          slideNumEl.text(currentSlide);
        },
        resize: function () {
          if ($(window).width() >= 768) {
            $this.find('.swiper-slide-duplicate').show();
          } else {
            $this.find('.swiper-slide-duplicate').hide();
          }

          perksCarousel.update()
        },
        slideNextTransitionStart: function () {
          // Add extra classes to determing swipe direction in order to animate loop/duplicate slides
          $this.find('.swiper-slide-active-next-direction').removeClass('swiper-slide-active-next-direction');
          $this.find('.swiper-slide-active').addClass('swiper-slide-active-next-direction');
        },
        slideNextTransitionEnd: function () {
          // Add extra classes to determing swipe direction in order to animate loop/duplicate slides
          $this.find('.swiper-slide-prev-next-direction').removeClass('swiper-slide-prev-next-direction');
          $this.find('.swiper-slide-prev').addClass('swiper-slide-prev-next-direction');
        },
        slidePrevTransitionStart: function () {
          // Add extra classes to determing swipe direction in order to animate loop/duplicate slides
          $this.find('.swiper-slide-active-next-direction').removeClass('swiper-slide-active-next-direction');
          $this.find('.swiper-slide-active-prev-direction').removeClass('swiper-slide-active-prev-direction');
          $this.find('.swiper-slide-active').addClass('swiper-slide-active-prev-direction');
        },
      },
    });
    perksCarousel.init();
  });


  // Frame Carousel Module
  $(".cb-frame-carousel .swiper-container").each(function (index, element) {
    var $this = $(this);
    $this.addClass("frame-carousel-" + index);
    var frameCarousel = new Swiper(".frame-carousel-" + index, {
      init: false,
      loop: true,
      simulateTouch: true,
      speed: 750,
      slidesPerView: 1,
      breakpoints: {
        768: {
          slidesPerView: 2,
          slidesPerGroup: 1,
        },
        1024: {
          slidesPerView: 3,
          slidesPerGroup: 1,
        }
      },
      spaceBetween: 32,
      mousewheel: {
        sensitivity: 1,
        forceToAxis: true,
        invert: true,
        releaseOnEdges: true
      },
      keyboard: {
        enabled: true,
        onlyInViewport: true
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      on: {
        init: function () {
          var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
          var totalSlides = frameCarousel.slides.length;
          totalSlides = frameCarousel.slides.length - slideDuplicates;
          var currentSlide = frameCarousel.realIndex + 1;
          var slideTotalEl;
          var slideNumEl;
          slideTotalEl = $this.find('.swiper-slide-total');
          slideNumEl = $this.find('.swiper-slide-number');
          slideTotalEl.text(totalSlides);
          slideNumEl.text(currentSlide);
        },
        slideChangeTransitionStart: function () {
          var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
          var totalSlides = frameCarousel.slides.length;
          totalSlides = frameCarousel.slides.length - slideDuplicates;
          var currentSlide = frameCarousel.realIndex + 1;
          var slideTotalEl;
          var slideNumEl;
          slideTotalEl = $this.find('.swiper-slide-total');
          slideNumEl = $this.find('.swiper-slide-number');
          slideTotalEl.text(totalSlides);
          slideNumEl.text(currentSlide);
        },
        resize: function () {
          if ($(window).width() >= 768) {
            $this.find('.swiper-slide-duplicate').show();
          } else {
            $this.find('.swiper-slide-duplicate').hide();
          }

          frameCarousel.update()
        },
      },
    });
    frameCarousel.init();
  });

    // Offers Module
    $(".cb-offers .swiper-container").each(function (index, element) {
      var $this = $(this);
      $this.addClass("offers-" + index);
      var offers = new Swiper(".offers-" + index, {
        init: false,
        loop: false,
        simulateTouch: false,
        speed: 750,
        slidesPerView: 1,
        breakpoints: {
          768: {
            slidesPerView: 2,
            slidesPerGroup: 1,
          },
          1024: {
            slidesPerView: 3,
            slidesPerGroup: 1,
          }
        },
        spaceBetween: 32,
        mousewheel: {
          sensitivity: 1,
          forceToAxis: true,
          invert: true,
          releaseOnEdges: true
        },
        keyboard: {
          enabled: true,
          onlyInViewport: true
        },
        pagination: {
          el: '.swiper-pagination',
          type: 'progressbar',
        },
        on: {
          init: function () {
            var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
            var totalSlides = offers.slides.length;
            totalSlides = offers.slides.length - slideDuplicates;
            var currentSlide = offers.realIndex + 1;
            var slideTotalEl;
            var slideNumEl;
            slideTotalEl = $this.find('.swiper-slide-total');
            slideNumEl = $this.find('.swiper-slide-number');
            slideTotalEl.text(totalSlides);
            slideNumEl.text(currentSlide);
          },
          slideChangeTransitionStart: function () {
            var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
            var totalSlides = offers.slides.length;
            totalSlides = offers.slides.length - slideDuplicates;
            var currentSlide = offers.realIndex + 1;
            var slideTotalEl;
            var slideNumEl;
            slideTotalEl = $this.find('.swiper-slide-total');
            slideNumEl = $this.find('.swiper-slide-number');
            slideTotalEl.text(totalSlides);
            slideNumEl.text(currentSlide);
          },
          resize: function () {
            if ($(window).width() >= 768) {
              $this.find('.swiper-slide-duplicate').show();
            } else {
              $this.find('.swiper-slide-duplicate').hide();
            }

            offers.update()
          },
        },
      });
      offers.init();
    });

    // Column Content Module
    $(".cb-column-content .swiper-container").each(function (index, element) {
      var $this = $(this);
      $this.addClass("column-content-" + index);
      var columnContent = new Swiper(".column-content-" + index, {
        init: false,
        loop: false,
        simulateTouch: false,
        speed: 750,
        slidesPerView: 1,
        breakpoints: {
          768: {
            loop: false,
            slidesPerView: 2,
            slidesPerGroup: 1,
          },
          1024: {
            loop: false,
            slidesPerView: 3,
            slidesPerGroup: 1,
          }
        },
        spaceBetween: 32,
        mousewheel: {
          sensitivity: 1,
          forceToAxis: true,
          invert: true,
          releaseOnEdges: true
        },
        keyboard: {
          enabled: true,
          onlyInViewport: true
        },
        pagination: {
          el: '.swiper-pagination',
          type: 'progressbar',
        },
        on: {
          init: function () {
            var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
            var totalSlides = columnContent.slides.length;
            totalSlides = columnContent.slides.length - slideDuplicates;
            var currentSlide = columnContent.realIndex + 1;
            var slideTotalEl;
            var slideNumEl;
            slideTotalEl = $this.find('.swiper-slide-total');
            slideNumEl = $this.find('.swiper-slide-number');
            slideTotalEl.text(totalSlides);
            slideNumEl.text(currentSlide);
          },
          slideChangeTransitionStart: function () {
            var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
            var totalSlides = columnContent.slides.length;
            totalSlides = columnContent.slides.length - slideDuplicates;
            var currentSlide = columnContent.realIndex + 1;
            var slideTotalEl;
            var slideNumEl;
            slideTotalEl = $this.find('.swiper-slide-total');
            slideNumEl = $this.find('.swiper-slide-number');
            slideTotalEl.text(totalSlides);
            slideNumEl.text(currentSlide);
          },
          resize: function () {
            if ($(window).width() >= 768) {
              $this.find('.swiper-slide-duplicate').show();
            } else {
              $this.find('.swiper-slide-duplicate').hide();
            }

            columnContent.update()
          },
        },
      });
      columnContent.init();
    });


      // Image & Text Module
      $(".cb-image-text-carousel .swiper-container").each(function (index, element) {
        var $this = $(this);
        $this.addClass("image-text-" + index);
        $this.next('.swiper-button-next').addClass("swiper-button-next-image-text-carousel-" + index);
        var imageTextCarousel = new Swiper(".image-text-" + index, {
          init: false,
          loop: true,
          simulateTouch: true,
          speed: 750,
          slidesPerView: 1.3,
          centeredSlides: true,
          loopedSlides: 4,
          slidesPerGroup: 1,
          spaceBetween: 16,
          breakpoints: {
            768: {
              slidesPerView: 1,
              centeredSlides: false,
              spaceBetween: 32,
            }
          },
          mousewheel: {
            sensitivity: 1,
            forceToAxis: true,
            invert: true
          },
          keyboard: {
            enabled: true,
            onlyInViewport: true
          },
          pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
          },
          navigation: {
            nextEl: '.swiper-button-next.swiper-button-next-image-text-carousel-' + index,
          },
          on: {
            init: function () {
          var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
          var totalSlides = imageTextCarousel.slides.length;
          totalSlides = imageTextCarousel.slides.length - slideDuplicates;
          var currentSlide = imageTextCarousel.realIndex + 1;
          var slideTotalEl;
          var slideNumEl;
          slideTotalEl = $this.find('.swiper-slide-total');
          slideNumEl = $this.find('.swiper-slide-number');
          slideTotalEl.text(totalSlides);
          slideNumEl.text(currentSlide);
            },
            slideChangeTransitionStart: function () {
            var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
          var totalSlides = imageTextCarousel.slides.length;
          totalSlides = imageTextCarousel.slides.length - slideDuplicates;
          var currentSlide = imageTextCarousel.realIndex + 1;
          var slideTotalEl;
          var slideNumEl;
          slideTotalEl = $this.find('.swiper-slide-total');
          slideNumEl = $this.find('.swiper-slide-number');
          slideTotalEl.text(totalSlides);
          slideNumEl.text(currentSlide);
            },
          },
        });
        imageTextCarousel.init();
      });


      // Featured Carousel Type 1 Module
      $(".cb-featured-carousel.cb-featured-carousel--type-one .swiper-container").each(function (index, element) {
        var $this = $(this);
        $this.addClass("featured-carousel-type-one-" + index);
        $this.next('.swiper-button-next').addClass("swiper-button-next-featured-carousel-type-one-" + index);
        $this.next().next('.swiper-button-prev').addClass("swiper-button-prev-featured-carousel-type-one-" + index);
        var featuredCarouselTypeOne = new Swiper(".featured-carousel-type-one-" + index, {
          init: false,
          loop: true,
          simulateTouch: false,
          speed: 750,
          slidesPerView: 1,
          slidesPerGroup: 1,
          spaceBetween: 32,
          mousewheel: {
            sensitivity: 1,
            forceToAxis: true,
            invert: true
          },
          keyboard: {
            enabled: true,
            onlyInViewport: true
          },
          pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
          },
          navigation: {
            nextEl: '.swiper-button-next.swiper-button-next-featured-carousel-type-one-' + index,
            prevEl: '.swiper-button-prev.swiper-button-prev-featured-carousel-type-one-' + index,
          },
          on: {
            init: function () {
                var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
                var totalSlides = featuredCarouselTypeOne.slides.length;
                totalSlides = featuredCarouselTypeOne.slides.length - slideDuplicates;
                var currentSlide = featuredCarouselTypeOne.realIndex + 1;
                var slideTotalEl;
                var slideNumEl;
                slideTotalEl = $this.find('.swiper-slide-total');
                slideNumEl = $this.find('.swiper-slide-number');
                slideTotalEl.text(totalSlides);
                slideNumEl.text(currentSlide);
            },
            slideChangeTransitionStart: function () {
                var slideDuplicates = $this.find('.swiper-slide-duplicate').length;
                var totalSlides = featuredCarouselTypeOne.slides.length;
                totalSlides = featuredCarouselTypeOne.slides.length - slideDuplicates;
                var currentSlide = featuredCarouselTypeOne.realIndex + 1;
                var slideTotalEl;
                var slideNumEl;
                slideTotalEl = $this.find('.swiper-slide-total');
                slideNumEl = $this.find('.swiper-slide-number');
                slideTotalEl.text(totalSlides);
                slideNumEl.text(currentSlide);
            },
          },
        });
        featuredCarouselTypeOne.init();
      });


      // Pursuits Carousel
      $(".swiper-container--pursuits").each(function (index, element) {
        var $this = $(this);
        $this.addClass("pursuits-" + index);
        var pursuits = new Swiper(".pursuits-" + index, {
          init: false,
          loop: true,
          simulateTouch: false,
          speed: 750,
          slidesPerView: 1,
          slidesPerGroup: 1,
          spaceBetween: 32,
          mousewheel: {
            sensitivity: 1,
            forceToAxis: true,
            invert: true
          },
          keyboard: {
            enabled: true,
            onlyInViewport: true
          },
          pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
          },
          on: {
            init: function () {
              var totalSlides = pursuits.slides.length - 2;
              var currentSlide = pursuits.realIndex + 1;
              var slideTotalEl;
              var slideNumEl;
              slideTotalEl = $this.find('.swiper-slide-total');
              slideNumEl = $this.find('.swiper-slide-number');
              slideTotalEl.text(totalSlides);
              slideNumEl.text(currentSlide);
            },
            slideChangeTransitionStart: function () {
              var totalSlides = pursuits.slides.length - 2;
              var currentSlide = pursuits.realIndex + 1;
              var slideTotalEl;
              var slideNumEl;
              slideTotalEl = $this.find('.swiper-slide-total');
              slideNumEl = $this.find('.swiper-slide-number');
              slideTotalEl.text(totalSlides);
              slideNumEl.text(currentSlide);
            },
          },
        });
        pursuits.init();
      });


      // Spa Wellness Carousel
      $(".swiper-container--spa-wellness").each(function (index, element) {
        var $this = $(this);
        $this.addClass("spa-wellness-" + index);
        var spaWellness = new Swiper(".spa-wellness-" + index, {
          init: false,
          loop: true,
          simulateTouch: false,
          speed: 750,
          slidesPerView: 1,
          slidesPerGroup: 1,
          spaceBetween: 32,
          mousewheel: {
            sensitivity: 1,
            forceToAxis: true,
            invert: true
          },
          keyboard: {
            enabled: true,
            onlyInViewport: true
          },
          pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
          },
          on: {
            init: function () {
              var totalSlides = spaWellness.slides.length - 2;
              var currentSlide = spaWellness.realIndex + 1;
              var slideTotalEl;
              var slideNumEl;
              slideTotalEl = $this.find('.swiper-slide-total');
              slideNumEl = $this.find('.swiper-slide-number');
              slideTotalEl.text(totalSlides);
              slideNumEl.text(currentSlide);
            },
            slideChangeTransitionStart: function () {
              var totalSlides = spaWellness.slides.length - 2;
              var currentSlide = spaWellness.realIndex + 1;
              var slideTotalEl;
              var slideNumEl;
              slideTotalEl = $this.find('.swiper-slide-total');
              slideNumEl = $this.find('.swiper-slide-number');
              slideTotalEl.text(totalSlides);
              slideNumEl.text(currentSlide);
            },
          },
        });
        spaWellness.init();
      });

}

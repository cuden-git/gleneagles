<?php
/**
 * Template Name: Home
 *
 * Template Post Type: page
 */
?>
<?php get_template_part('views/layouts/main-top'); ?>

<section id="" class="cb-hero cb-hero--type-four cb-hero--text-colour-one" style="background: #e6e9e6;">
  <div class="cb-hero__container d-flex flex-column align-items-center ">
    <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/hero-bg.png'); ?>" alt="">
    <div class="cb-hero__spacer"></div>

    <div class="cb-hero__text-block">
      <div class="cb-hero__pre-heading">
        <span>Welcome to</span>
      </div>
      <div class="cb-hero__heading">
        <h1>The Glorious Playground</h1>
      </div>
    </div>
    <div class="cb-hero__booking">
      <div class="cb-hero__booking-option">
        <label for="">Arriving</label>
        <select name="" id="" class="cb-hero__booking-option--cal">
          <option value="0">16th Oct</option>
          <option value="1">17th Oct</option>
          <option value="2">18th Oct</option>
        </select>
      </div>
      <div class="cb-hero__booking-option">
        <label for="">Departing</label>
        <select name="" id="" class="cb-hero__booking-option--cal">
          <option value="0">16th Oct</option>
          <option value="1">17th Oct</option>
          <option value="2">18th Oct</option>
        </select>
      </div>
      <div class="cb-hero__booking-option">
        <label for="">Adults</label>
        <select name="" id="" class="cb-hero__booking-option--drop-down">
          <option value="">2</option>
        </select>
      </div>
      <div class="cb-hero__booking-option">
        <label for="">Children</label>
        <select name="" id="" class="cb-hero__booking-option--drop-down">
          <option value="">0</option>
        </select>
      </div>
      <div class="cb-hero__booking-option">
        <label for="">No Rooms</label>
        <select name="" id="" class="cb-hero__booking-option--drop-down">
          <option value="">0</option>
        </select>
      </div>
      <a href="#" target="" class="c-button c-button--type-secondary c-button--colour-two">Book <span class="cb-hero__booking-cta-text-mobile">now</span><span class="cb-hero__booking-cta-text-desktop">your stay</span></a>
    </div>
  </div>
</section>

<!-- INTRO START -->
<section class="intro reveal-item">
    <img class="intro__flourish lazyload" data-src="<?php App\Utilities\the_asset('images/flourish.svg'); ?>" alt="...">
    <h5 class="intro__heading">When we first opened our doors in 1924, someone described the destination as a "Rivera in the Highlands".<br>They weren't wrong.</h5>
</section>
<!-- INTRO END -->

<!-- STAY START -->
<section class="stay">
    <div class="stay__top">
        <div class="sticky-container sticky-container__stay">
            <div class="stay__text stay__text--one sticky sticky__stay">
                <div class="stay__pre-heading">
                    <span>Stay</span>
                </div>
                <div class="stay__heading stay__heading--top">
                    <h2>Stay for a while</h2>
                </div>
                <div class="stay__paragraph">
                    <p>Our 205 luxury bedrooms and 27 suites await your arrival. Explore one of the world's most renowned hotels to choose a space that's perfect for you.</p>
                </div>
                <a href="#" target="_blank" class="c-button c-button--type-secondary c-button--colour-one">Stay with us</a>
            </div>
        </div>
        <div>
            <div class="fixed-image-grandparent">
                <div class="fixed-image-parent">
                    <div class="stay__image stay__image--one frame-hover-effect">
                        <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/stay-1.jpg'); ?>" alt="...">
                    </div>
                </div>
            </div>
            <div class="fixed-image-grandparent">
                <div class="fixed-image-parent">
                    <div class="stay__image stay__image--two frame-hover-effect">
                        <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/stay-2.jpg'); ?>" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="stay__bottom">
        <div>
            <div class="stay__image stay__image--three frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/stay-3.jpg'); ?>" alt="...">
            </div>
            <div class="stay__image stay__image--four frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/stay-4.jpg'); ?>" alt="...">
            </div>
        </div>
        <div>
            <div class="stay__text stay__text--two">
                <div class="stay__pre-heading">
                    <span>Seasonal Offer</span>
                </div>
                <div class="stay__heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                </div>
                <a href="#" target="_blank" class="c-button c-button--type-tertiary c-button--colour-one">View offer</a>
                <div class="frame">
                    <div></div><div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- STAY END -->

<!-- PULL QUOTE START -->
<section class="pull-quote">
    <div class="pull-quote__text">
        <h2 class="pull-quote__heading">Each of our rooms is as glorious as the landscape that frames them.</h2>
        <h3 class="pull-quote__sub-heading">LOREM IPSUM SIT DOLOR</h3>
        <span class="mask" style="background-image: linear-gradient(rgba(0, 0, 0, 0), #192620);"></span>
    </div>
</section>
<!-- PULL QUOTE END -->

<!-- NEWS START -->
<section class="news">
    <div class="news__top">
        <h2 class="news__heading">The Latest from <br>The Glorious Playground</h2>
        <img class="news__flourish lazyload" data-src="<?php App\Utilities\the_asset('images/flourish-2.svg'); ?>" alt="...">
    </div>
    <div class="news__bottom">
        <div>
            <a href="#" target="" class="c-button c-button--type-quaternary c-button--colour-one c-button--news">Read more</a>
            <div class="news__image news__image--one frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/news-1.jpg'); ?>">
            </div>
            <h4 class="news__image__pre-heading">Culture</h4>
            <h3 class="news__image__heading">Gather for Glamour</h3>
            <p class="news__image__paragraph">Ready to unleash your inner Bette Davis, Katharine Hepburn and Grace Kelly? It’s time to gather with friends for a late afternoon and evening of grooming.</p>
        </div>
        <div>
            <a href="#" target="" class="c-button c-button--type-quaternary c-button--colour-one c-button--news">Read more</a>
            <div class="news__image news__image--two frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/news-2.jpg'); ?>">
            </div>
            <h4 class="news__image__pre-heading">Family/lifestyle</h4>
            <h3 class="news__image__heading">Gleneagles nominated in the Virtuoso Best of the Best Awards 2019</h3>
        </div>
    </div>
</section>
<!-- NEWS END -->

<!-- EAT DRINK START -->
<section class="eat-drink">
    <div class="eat-drink__top">
        <div class="eat-drink__text sticky sticky__eat-drink">
            <h3 class="eat-drink__pre-heading">Eat & drink</h3>
            <h2 class="eat-drink__heading">Scotland’s best fine dining experiences</h2>
            <p class="eat-drink__paragraph">We're incredibly proud to offer a number of Scotland’s top drinking and dining destinationson our grounds. From two Michelin-starred restaurant experiences, to elegant bars inspired by the roaring 20s, we have someplace for you.</p>
            <a href="#" target="" class="c-button c-button--type-secondary c-button--colour-one">Dine with us</a>
            <div class="frame">
                <div></div><div></div>
            </div>
        </div>
    </div>
    <div class="eat-drink__bottom">
        <div>
            <div class="fixed-image-grandparent">
                <div class="fixed-image-parent">
                    <div class="eat-drink__image eat-drink__image--one frame-hover-effect">
                        <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/eat-drink-1.jpg'); ?>">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="eat-drink__image eat-drink__image--two frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/eat-drink-2.jpg'); ?>">
            </div>
            <div class="eat-drink__image eat-drink__image--three frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/eat-drink-3.jpg'); ?>">
            </div>
        </div>
    </div>
</section>
<!-- EAT DRINK END -->

<!-- GOLF START -->
<section class="golf">
    <div class="golf__top">
        <div class="golf__text golf__text--one">
            <h3 class="golf__pre-heading">Golf</h3>
            <h2 class="golf__heading">The home of golf <br>in Scotland</h2>
        </div>
        <div class="fixed-image-grandparent">
            <div class="fixed-image-parent">
                <div class="golf__image golf__image--one">
                    <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/golf-1.jpg'); ?>">
                </div>
            </div>
        </div>
        <div class="golf__image golf__image--two">
            <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/golf-2.jpg'); ?>">
        </div>
        <div class="golf__text golf__text--two">
            <p class="golf__paragraph">A blend of natural beauty and adventure, the three championship golf courses at Gleneagles are regarded the best in the world.</p>
            <a href="#" target="" class="c-button c-button--type-secondary c-button--colour-one">Golf with us</a>
        </div>
    </div>
    <div class="golf__bottom">
        <div>
            <div class="golf__image golf__image--three frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/golf-2.jpg'); ?>">
            </div>
        </div>
        <div>
            <div class="golf__image golf__image--four frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/golf-1.jpg'); ?>">
            </div>
            <div class="golf__image golf__image--five">
                <img class="image-cover lazyload" data-object-fit="contain" data-src="<?php App\Utilities\the_asset('images/golf-3.png'); ?>">
            </div>
            <div class="golf__image golf__image--six frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/golf-4.jpg'); ?>">
            </div>
        </div>
    </div>
</section>
<!-- GOLF END -->

<!-- PURSUITS START -->
<section class="pursuits">
    <div class="pursuits__top">
        <div class="pursuits__image pursuits__image--one frame-hover-effect">
            <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/pursuits-1.jpg'); ?>">
        </div>
        <div class="pursuits__image pursuits__image--two frame-hover-effect">
            <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/pursuits-2.jpg'); ?>">
        </div>
        <div class="pursuits__image pursuits__image--three frame-hover-effect">
            <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/pursuits-3.jpg'); ?>">
        </div>
    </div>
    <div class="pursuits__bottom">
        <div class="pursuits__text sticky sticky__pursuits">
            <h3 class="pursuits__pre-heading">Pursuits</h3>
            <h2 class="pursuits__heading">Enjoy an extensive range of Pursuits</h2>
            <p class="pursuits__paragraph">At Gleneagles, guests can enjoy a range of pursuits and leisure activities, all of which take place within the estate.</p>
            <a href="#" target="" class="c-button c-button--type-secondary c-button--colour-one">Explore pursuits</a>
        </div>
    </div>
    <!-- SWIPER START -->
    <div class="swiper-container swiper-container--pursuits">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/pursuits-1.jpg'); ?>">
            </div>
            <div class="swiper-slide">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/pursuits-2.jpg'); ?>">
            </div>
            <div class="swiper-slide">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/pursuits-3.jpg'); ?>">
            </div>
        </div>
        <div class="swiper-pagination-container">
            <div class="swiper-slide-number">1</div>
            <div class="swiper-pagination swiper-progress"></div>
            <div class="swiper-slide-total"></div>
        </div>
    </div>
    <!-- SWIPER END -->
</section>
<!-- PURSUITS END -->

<!-- SPA WELLNESS START -->
<section class="spa-wellness">
    <div class="spa-wellness__top sticky-container sticky-container__spa-wellness">
        <div class="spa-wellness__text sticky sticky__spa-wellness">
            <h3 class="spa-wellness__pre-heading">Spa & wellness</h3>
            <h2 class="spa-wellness__heading">Relax in soothing surroundings</h2>
            <p class="spa-wellness__paragraph">We'll be the first to admit it – not everyone wants to spend their stay on the golf course. Or with a fishing rod, gun, riding rein or falconer's glove in hand, for that matter... so we've made a place for you to break from your everyday routine, and truly relax.</p>
            <a href="#" target="" class="c-button c-button--type-secondary c-button--colour-one">Relax with us</a>
            <div class="frame">
                <div></div><div></div>
            </div>
        </div>
    </div>
    <div class="spa-wellness__bottom">
        <div>
            <div class="spa-wellness__image spa-wellness__image--one frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/spa-wellness-1.jpg'); ?>">
            </div>
        </div>
        <div>
            <div class="spa-wellness__image spa-wellness__image--two frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/spa-wellness-2.jpg'); ?>">
            </div>
            <div class="spa-wellness__image spa-wellness__image--three frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/spa-wellness-3.jpg'); ?>">
            </div>
        </div>
    </div>
    <!-- SWIPER START -->
    <div class="swiper-container swiper-container--spa-wellness">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/spa-wellness-1.jpg'); ?>">
            </div>
            <div class="swiper-slide">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/spa-wellness-2.jpg'); ?>">
            </div>
            <div class="swiper-slide">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/spa-wellness-3.jpg'); ?>">
            </div>
        </div>
        <div class="swiper-pagination-container">
            <div class="swiper-slide-number">1</div>
            <div class="swiper-pagination swiper-progress"></div>
            <div class="swiper-slide-total"></div>
        </div>
    </div>
    <!-- SWIPER END -->
</section>
<!-- SPA WELLNESS END -->

<!-- MEETINGS START -->
<section class="meetings">
    <div class="meetings__top">
        <div class="meetings__text">
            <h3 class="meetings__pre-heading">Meetings</h3>
            <h2 class="meetings__heading">Destination for historic meetings</h2>
            <p class="meetings__paragraph">Whether you’re plannings a product launch for 1000 or an intimate board meeting for 10 our team will help you.</p>
            <a href="#" target="" class="c-button c-button--type-secondary c-button--colour-one">Meet with us</a>
        </div>
    </div>
    <div class="meetings__bottom">
        <div class="meetings__image frame-hover-effect">
            <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/meetings-1.jpg'); ?>">
        </div>
    </div>
</section>
<!-- MEETINGS END -->

<!-- CELEBRATIONS START -->
<section class="celebrations">
    <div class="celebrations__top">
        <div class="celebrations__image-container">
            <div class="celebrations__image frame-hover-effect">
                <img class="image-cover lazyload" data-object-fit="cover" data-src="<?php App\Utilities\the_asset('images/celebrations-1.jpg'); ?>">
            </div>
            <div class="frame"><div></div><div></div></div>
        </div>
    </div>
    <div class="celebrations__bottom">
        <div class="celebrations__text">
            <h3 class="celebrations__pre-heading">Celebrations</h3>
            <h2 class="celebrations__heading">Put together an unforgettable experience</h2>
            <p class="celebrations__paragraph">Whether you’re celebrating a special milestone or tying the knot, our team will help you create something unforgettable.</p>
            <a href="#" target="" class="c-button c-button--type-secondary c-button--colour-one">Celebrate with us</a>
        </div>
    </div>
</section>
<!-- CELEBRATIONS END -->



<br><br><br>

<?php get_template_part('views/layouts/main-bottom'); ?>

<a href="#" target="" class="c-button c-button--type-primary c-button--colour-one c-button--main">Book your stay</a>

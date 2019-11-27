<header class="header-mobile">
  <div class="header-mobile__container-top">
    <div class="header-mobile__link-account">
      <a href="#"></a>
    </div>
    <div class="header-mobile__logo">
      <a href="<?php echo home_url(); ?>">Gleneagles</a>
    </div>
    <div class="header-mobile__cta-hamburger header-mobile__cta-hamburger--uncrossed">
      <div></div>
    </div>
  </div>

  <div class="header-mobile__container-bottom">
    <nav class="header-mobile__page-navigation" id="header-mobile__page-navigation">
      <ul id="scroll-target">
        <li>
          <a href="#">Offers</a>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Stay</a>
          <ul class="sub-menu">
              <li class="return"><a href="#">Stay</a></li>
              <li><a href="<?php echo home_url(); ?>/accommodation">Explore All</a></li>
              <li><a href="<?php echo home_url(); ?>/accommodation/bedrooms">Bedrooms</a></li>
              <li><a href="<?php echo home_url(); ?>/accommodation/suites">Suites</a></li>
              <li><a href="#<?php echo home_url(); ?>/accommodation/family-rooms">Family Rooms</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Eat & Drink</a>
          <ul class="sub-menu">
            <li class="return"><a href="#">Eat & Drink</a></li>
            <li><a href="<?php echo home_url(); ?>/dine-drink">Explore All</a></li>
            <li><a href="#">Afternoon Tea</a></li>
            <li><a href="#">Birnam Brasserie</a></li>
            <li><a href="<?php echo home_url(); ?>/dine-drink/the-strathearn">The Strathearn</a></li>
            <li><a href="<?php echo home_url(); ?>/dine-drink/andrew-fairlie">Andrew Fairlie</a></li>
            <li><a href="#">The Dormy</a></li>
            <li><a href="#">The Garden Cafe</a></li>
            <li><a href="<?php echo home_url(); ?>/dine-drink/the-century-bar">The Century Bar</a></li>
            <li><a href="#">The American Bar</a></li>
            <li><a href="#">Auchterarder 70</a></li>
            <li><a href="#">Blue Bar</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Golf</a>
          <ul class="sub-menu">
            <li class="return"><a href="#">Golf</a></li>
            <li><a href="#">Explore All</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">PGA Academy</a></li>
            <li><a href="#">Corporate Days</a></li>
            <li><a href="#">Membership</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Pursuits</a>
          <ul class="sub-menu">
            <li class="return"><a href="#">Pursuits</a></li>
            <li><a href="#">Explore All</a></li>
            <li><a href="#">Shooting & Fishing</a></li>
            <li><a href="#">Gundogs & Falconry</a></li>
            <li><a href="#">Off-road Driving</a></li>
            <li><a href="#">Walking & Cycling</a></li>
            <li><a href="#">Riding</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Spa & Wellness</a>
          <ul class="sub-menu">
            <li class="return"><a href="#">Spa & Wellness</a></li>
            <li><a href="#">Explore All</a></li>
            <li><a href="#">Spa</a></li>
            <li><a href="#">Day Spa</a></li>
            <li><a href="#">The Health Club</a></li>
            <li><a href="#">The Beauty Lodge</a></li>
            <li><a href="#">Treatments</a></li>
            <li><a href="#">Classes</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Meetings</a>
          <ul class="sub-menu">
            <li class="return"><a href="#">Meetings</a></li>
            <li><a href="#">Explore All</a></li>
            <li><a href="#">Meeting Spaces</a></li>
            <li><a href="#">Group Pursuits</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Occasions</a>
          <ul class="sub-menu">
            <li class="return"><a href="#">Occasions</a></li>
            <li><a href="#">Explore All</a></li>
            <li><a href="#">Occasions Spaces</a></li>
            <li><a href="#">Weddings</a></li>
          </ul>
        </li>
        <li class="menu-item-has-children">
          <a href="#">Explore</a>
          <ul class="sub-menu">
            <li class="return"><a href="#">Explore</a></li>
            <li><a href="#">Explore All</a></li>
            <li><a href="#">Hotel & Grounds</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Retail</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <nav class="header-mobile__utilities-navigation">
      <ul>
        

        <li class="link-search-container">
        <div class="mobile-site-search">
          <form class="site-search__form" action="<?php echo esc_attr(home_url('/')); ?>" autocomplete="off">
              <label>
                  <input type="text" name="s" placeholder="Search">
              </label>
              <input type="submit" value="">
              <div class="site-search__results"></div>
          </form>
        </div>
        </li>
        <li class="link-search" data-search-trigger="">
          <a href="#"></a>
        </li>
        <li class="link-shop">
          <a href="#"></a>
        </li>
        <li class="link-gift">
          <a href="#"></a>
        </li>
        <li class="link-language">
          <ul class="language-switcher">
            <li class="active-lang"><?php echo pll_current_language('slug'); ?></li>
            <?php pll_the_languages();?>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>

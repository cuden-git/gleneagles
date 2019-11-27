<header class="header-desktop">
  <div class="header-desktop__container-top">
    <div class="header-desktop__logo">
    <a href="<?php echo home_url(); ?>">Gleneagles</a>
    </div>
    <nav class="header-desktop__utilities-navigation">
      <ul>
        <li class="link-search" data-search-trigger>
          <a href="#"></a>
        </li>
        <li class="link-account">
          <a href="#"></a>
        </li>
        <li class="link-gift">
          <a href="#"></a>
        </li>
        <li class="link-shop">
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
  <div class="header-desktop__container-bottom">
    <?php 
    // wp_nav_menu( 
    //   array( 'menu' => 'Page Navigation', 
    //   'menu_class' => 'menu-page-navigation', 
    //   'theme_location' => 'page-navigation', 
    //   'container' => 'nav', 
    //   'container_class' => 
    //   'header-desktop__page-navigation', 
    //   'walker' => new subMenu ) 
    //   ); 
      ?>

    <?php
      class subMenu extends Walker_Nav_Menu {
        
        // function start_lvl(&$output, $depth = 0, $args = array()) {
          
        //   $indent = str_repeat("\t", $depth);
        //   $output .= "\n$indent<div class=\"header-desktop__mega-menu\"><ul class=\"sub-menu\">\n";
        // }

        function end_lvl(&$output, $depth = 0, $args = array()) {
            $indent = str_repeat("\t", $depth);
            $output .= "$indent</div>\n";
        }


        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
          $item_html = '';
          parent::start_el($item_html, $item, $depth, $args);
          $locations = get_nav_menu_locations();
          $menu = wp_get_nav_menu_object( $locations['page-navigation'] );
          $menu_items = wp_get_nav_menu_items($menu->term_id);
          $count = 0;

          foreach( $menu_items as $menu_item ){
              if( $menu_item->menu_item_parent == $item->ID ){
                  $count++;    
              }       
          }
          if ($args->walker->has_children) {
            // echo "3333333333---";
            // print_r($item);
            $item_html = str_replace('</a>', ' </a><div class="header-desktop__mega-menu items-'.$count.'"><span>'.$item->title.'</span>', $item_html);
            
          }
          if ($args->walker->has_children && ($depth === 0)) {
            // $item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" data-target="#"', $item_html);
            // $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html);
          }
          // elseif (stristr($item_html, 'li class="divider')) {
          //   $item_html = preg_replace('/<a[^>]*>.*?<\/a>/iU', '', $item_html);
          // }
          // elseif (stristr($item_html, 'li class="nav-header')) {
          //   $item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '$1', $item_html);
          // }
      
          $output .= $item_html;
        }
        

      }
    ?>

    <nav class="header-desktop__page-navigation">
      <ul>
        <li><a href="/">Offers</a></li>
        <li><a href="#">Stay</a>
          <div class="header-desktop__mega-menu  header-desktop__mega-menu--items-list header-desktop__mega-menu--items-3 header-desktop__mega-menu--show-offer">
            <div class="header-desktop__mega-menu-container">
              <nav class="sub-menu">
              <ul>
                  <li><a href="<?php echo home_url(); ?>/accommodation">Explore All</a></li>
                  <li>
                    <div class="header-desktop__sub-menu-image-block">
                      <div class="header-desktop__sub-menu-image">
                        <a href="#">
                          <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/header-stay-bedrooms.jpg'); ?>" alt="">
                        </a>
                      </div>
                    </div>
                    <a href="<?php echo home_url(); ?>/accommodation/bedrooms">Bedrooms</a>
                  </li>
                  <li>
                    <div class="header-desktop__sub-menu-image-block">
                      <div class="header-desktop__sub-menu-image">
                        <a href="#">
                          <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/header-stay-suites.jpg'); ?>" alt="">
                        </a>                      </div>
                    </div>
                    <a href="<?php echo home_url(); ?>/accommodation/suites">Suites</a>
                  </li>
                  <li>
                    <div class="header-desktop__sub-menu-image-block">
                      <div class="header-desktop__sub-menu-image">
                        <a href="#">
                          <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/header-stay-family-rooms.jpg'); ?>" alt="">
                        </a>                      </div>
                    </div>
                    <a href="<?php echo home_url(); ?>/accommodation/family-rooms">Family Rooms</a>
                  </li>
              </ul>
              </nav>
              <div class="header-desktop__offer">
                <div class="header-desktop__offer-image-block">
                  <div class="header-desktop__offer-image">
                    <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="header-desktop__offer-text-block">
                  <div class="header-desktop__offer-pre-heading">
                    <span>Offer</span>
                  </div>
                  <div class="header-desktop__offer-heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                  </div>
                  <a href="#" target="_blank" class="c-button c-button--type-quaternary c-button--colour-one">See offer</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#">Eat & Drink</a>
          <div class="header-desktop__mega-menu header-desktop__mega-menu--items-list header-desktop__mega-menu--items-10 header-desktop__mega-menu--show-offer">
            <div class="header-desktop__mega-menu-container">
              <nav class="sub-menu">
              <ul>
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
              </nav>
              <div class="header-desktop__offer">
                <div class="header-desktop__offer-image-block">
                  <div class="header-desktop__offer-image">
                    <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="header-desktop__offer-text-block">
                  <div class="header-desktop__offer-pre-heading">
                    <span>Offer</span>
                  </div>
                  <div class="header-desktop__offer-heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                  </div>
                  <a href="#" target="_blank" class="c-button c-button--type-quaternary c-button--colour-one">See offer</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#">Golf</a>
          <div class="header-desktop__mega-menu header-desktop__mega-menu--items-list header-desktop__mega-menu--items-4 header-desktop__mega-menu--show-offer">
            <div class="header-desktop__mega-menu-container">
              <nav class="sub-menu">
              <ul>
                <li><a href="#">Explore All</a></li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <a href="#">Courses</a></li>
                <li>
                <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <a href="#">PGA Academy</a></li>
                <li>
                <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>  
                <a href="#">Corporate Days</a></li>
                <li>
                <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>  
                <a href="#">Membership</a></li>
              </ul>
              </nav>
              <div class="header-desktop__offer">
                <div class="header-desktop__offer-image-block">
                  <div class="header-desktop__offer-image">
                    <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="header-desktop__offer-text-block">
                  <div class="header-desktop__offer-pre-heading">
                    <span>Offer</span>
                  </div>
                  <div class="header-desktop__offer-heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                  </div>
                  <a href="#" target="_blank" class="c-button c-button--type-quaternary c-button--colour-one">See offer</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#">Pursuits</a>
          <div class="header-desktop__mega-menu header-desktop__mega-menu--items-list header-desktop__mega-menu--items-5">
            <div class="header-desktop__mega-menu-container">
              <nav class="sub-menu">
              <ul>
                <li>
                  <a href="#">Explore All</a>
                </li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <a href="#">Shooting & Fishing</a>
                </li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <a href="#">Gundogs & Falconry</a>
                </li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <a href="#">Off-road Driving</a>
                </li>
                <li>
                <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <a href="#">Walking & Cycling</a>
                </li>
                <li>
                <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <a href="#">Riding</a>
                </li>
              </ul>
              </nav>
              <div class="header-desktop__offer">
                <div class="header-desktop__offer-image-block">
                  <div class="header-desktop__offer-image">
                    <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="header-desktop__offer-text-block">
                  <div class="header-desktop__offer-pre-heading">
                    <span>Offer</span>
                  </div>
                  <div class="header-desktop__offer-heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                  </div>
                  <a href="#" target="_blank" class="c-button c-button--type-quaternary c-button--colour-one">See offer</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#">Spa & Wellness</a>
          <div class="header-desktop__mega-menu header-desktop__mega-menu--items-list header-desktop__mega-menu--items-6">
            <div class="header-desktop__mega-menu-container">
              <nav class="sub-menu">
              <ul>
                <li><a href="#">Explore All</a></li>
                <li><a href="#">Spa</a></li>
                <li><a href="#">Day Spa</a></li>
                <li><a href="#">The Health Club</a></li>
                <li><a href="#">The Beauty Lodge</a></li>
                <li><a href="#">Treatments</a></li>
                <li><a href="#">Classes</a></li>
              </ul>
              </nav>
              <div class="header-desktop__offer">
                <div class="header-desktop__offer-image-block">
                  <div class="header-desktop__offer-image">
                    <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="header-desktop__offer-text-block">
                  <div class="header-desktop__offer-pre-heading">
                    <span>Offer</span>
                  </div>
                  <div class="header-desktop__offer-heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                  </div>
                  <a href="#" target="_blank" class="c-button c-button--type-quaternary c-button--colour-one">See offer</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#">Meetings</a>
        <div class="header-desktop__mega-menu header-desktop__mega-menu--items-list header-desktop__mega-menu--items-2">
            <div class="header-desktop__mega-menu-container">
              <nav class="sub-menu">
              <ul>
                <li><a href="#">Explore All</a></li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>  
                  <a href="#">Meeting Spaces</a>
                </li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>    
                  <a href="#">Group Pursuits</a>
                </li>
              </ul>
              </nav>
              <div class="header-desktop__offer">
                <div class="header-desktop__offer-image-block">
                  <div class="header-desktop__offer-image">
                    <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="header-desktop__offer-text-block">
                  <div class="header-desktop__offer-pre-heading">
                    <span>Offer</span>
                  </div>
                  <div class="header-desktop__offer-heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                  </div>
                  <a href="#" target="_blank" class="c-button c-button--type-quaternary c-button--colour-one">See offer</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#">Occasions</a>
          <div class="header-desktop__mega-menu header-desktop__mega-menu--items-list header-desktop__mega-menu--items-2 header-desktop__mega-menu--show-offer">
            <div class="header-desktop__mega-menu-container">
              <nav class="sub-menu">
              <ul>
                <li><a href="#">Explore All</a></li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/header-occasions-private-celebrations.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <a href="#">Occasions Spaces</a>
                </li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                      <div class="header-desktop__sub-menu-image">
                        <a href="#">
                          <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/header-occasions-weddings.jpg'); ?>" alt="">
                        </a>
                      </div>
                    </div>  
                  <a href="#">Weddings</a>
              </li>
              </ul>
              </nav>
              <div class="header-desktop__offer">
                <div class="header-desktop__offer-image-block">
                  <div class="header-desktop__offer-image">
                    <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="header-desktop__offer-text-block">
                  <div class="header-desktop__offer-pre-heading">
                    <span>Offer</span>
                  </div>
                  <div class="header-desktop__offer-heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                  </div>
                  <a href="#" target="_blank" class="c-button c-button--type-quaternary c-button--colour-one">See offer</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li><a href="#">Explore</a>
          <div class="header-desktop__mega-menu header-desktop__mega-menu--items-list header-desktop__mega-menu--items-4">
            <div class="header-desktop__mega-menu-container">
              <nav class="sub-menu">
              <ul>
                <li><a href="#">Explore All</a></li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>  
                  <a href="#">Hotel & Grounds</a>
                </li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>    
                  <a href="#">History</a>
                </li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>    
                  <a href="#">Blog</a>
                </li>
                <li>
                  <div class="header-desktop__sub-menu-image-block">
                    <div class="header-desktop__sub-menu-image">
                      <a href="#">
                        <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                      </a>
                    </div>
                  </div>    
                  <a href="#">Retail</a>
                </li>
              </ul>
              </nav>
              <div class="header-desktop__offer">
                <div class="header-desktop__offer-image-block">
                  <div class="header-desktop__offer-image">
                    <img class="image-cover" data-object-fit="cover" src="<?php App\Utilities\the_asset('images/champagne.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="header-desktop__offer-text-block">
                  <div class="header-desktop__offer-pre-heading">
                    <span>Offer</span>
                  </div>
                  <div class="header-desktop__offer-heading">
                    <h5>A bottle of premium reserve champagne for all room bookings.</h5>
                  </div>
                  <a href="#" target="_blank" class="c-button c-button--type-quaternary c-button--colour-one">See offer</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </nav>
    <a href="#" class="header-desktop__cta c-button c-button--type-primary c-button--colour-one">Book</a>
  </div>
</header>
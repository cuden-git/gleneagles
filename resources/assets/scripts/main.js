// import external dependencies
import "jquery";
import 'babel-polyfill';
import 'whatwg-fetch';
import Promise from 'promise-polyfill';
import './utilities/polyfill-template-tag';
import "picturefill";
import "lazysizes";
import RevealOnScroll from './utilities/RevealOnScroll';
import stickybits from "./utilities/stickybits";
import objectFitPolyfill from "./utilities/objectFitPolyfill.min.js";
import { hammer } from "./utilities/pinchzoomer/hammer.min.js";
import { tooltipster } from "./utilities/pinchzoomer/tooltipster.bundle.min.js";
import { tweenMax } from "./utilities/pinchzoomer/TweenMax.min.js";
import { jQueryPinchzoomer } from "./utilities/pinchzoomer/jquery.pinchzoomer.min.js";
import initCarousels from "./utilities/carousels";
import videoControls from "./utilities/video-controls";
import easyzoom from "./utilities/easyzoom";
import checkCookie from "./utilities/cookieDisclaimer_check";
import approveCookie from "./utilities/cookieDisclaimer_set";
import { SiteSearch } from "./components/site-search";
import { SearchListings } from "./components/search-listings";
import { disableBodyScroll, enableBodyScroll } from "body-scroll-lock";


//var Promise = require('promise-polyfill').default;

initCarousels();

// Put span around last word in homepage pull quote heading
$(".pull-quote__heading").html(function(){
    var text = $(this).text().trim().split(" ");
    var last = text.pop();
    return text.join(" ") + (text.length > 0 ? " <span class='quote-closing-container'>" + last + "</span>" : last);
});

// Calculate homepage pull quote sub-heading width and position
$(window).on("load resize", function() {
    var quoteClosingContainerWidth = $(".quote-closing-container").width() - 64;
    var quoteClosingContainerOffset = $(".quote-closing-container").position().left;
    var pullQuoteSubHeadingWidth = quoteClosingContainerWidth + quoteClosingContainerOffset;
    if (pullQuoteSubHeadingWidth < 150) {
        $(".pull-quote__sub-heading").css({ 'width': '100%', 'margin-top': '4.25rem' });
    } else {
        $(".pull-quote__sub-heading").css({ 'width': pullQuoteSubHeadingWidth + 'px', 'margin-top': '1rem' });
    }
});

// Put span around last word in editorial type 1 heading
$(".cb-editorial__heading > *").html(function(){
    var text = $(this).text().trim().split(" ");
    var last = text.pop();
    return text.join(" ") + (text.length > 0 ? " <span>" + last + "</span>" : last);
});

// Cookie Disclaimer Banner - Run checkCookie function

checkCookie();

// document.getElementsByTagName("body")[0].addEventListener("load", () => {
//   checkCookie();
// });

document.getElementById("close").addEventListener("click", () => {
  approveCookie();
});

// Instantiate EasyZoom instances
//var $easyzoom = $(".easyzoom").easyZoom();

new RevealOnScroll($(".intro, .stay__text--one, .stay__image, .pull-quote__text, .news__image, .eat-drink__image, .golf__text, .golf__image, .pursuits__image, .spa-wellness__image, .meetings__image, .celebrations__image-container"), "85%");

// Instantiate stickybits instances
$('.header-desktop').stickybits();

// Calculate sticky homepage elements position
$(window).on('load resize', function () {
    var eStay = $(".home .stay .sticky");
    var hStay = eStay.height() / $(this).height() * 100;
    var pStay = (50 - (hStay / 2));
    $(eStay).css({ top: pStay + 'vh' });
});

$(window).on('load resize', function () {
    var eEatDrink = $(".home .eat-drink .sticky");
    var hEatDrink = eEatDrink.height() / $(this).height() * 100;
    var pEatDrink = (40 - (hEatDrink / 2));
    $(eEatDrink).css({ top: pEatDrink + 'vh' });
    // console.log(hEatDrink);
});

$(window).on('load resize', function () {
    var ePursuits = $(".home .pursuits .sticky");
    var hPursuits = ePursuits.height() / $(this).height() * 100;
    var pPursuits = (40 - (hPursuits / 2));
    $(ePursuits).css({ top: pPursuits + 'vh' });
});

$(window).on('load resize', function () {
    var eSpaWellness = $(".home .spa-wellness .sticky");
    var hSpaWellness = eSpaWellness.height() / $(this).height() * 100;
    var pSpaWellness = (50 - (hSpaWellness / 2));
    $(eSpaWellness).css({ top: pSpaWellness + 'vh' });
});

// Inpage navigation
function scrollToAnchor(aid) {
  var aTag = $(aid);
  $("html,body").animate(
    {
      scrollTop: aTag.offset().top
    },
    "1000"
  );
}
$(".scroll-link").on("click", function(event) {
  event.preventDefault();
  var anchorID = $(this).attr("href");
  scrollToAnchor(anchorID);
});

// Switching content when Geo-targeting link is clicked
$(".geo-targeting-link").on("click", function(event) {
  $("body").toggleClass("geo-targeting--usa--show");
  $(this).toggleClass("active");
});

// Filter module funtionality. Hiding/Showing sections.
$(".cb-filter li").click(function() {
  if ($(this).hasClass("is-active")) {
    return false;
  }
  $(".cb-filter li").removeClass("is-active");
  $(this).addClass("is-active");
  var showIDs = $(this).data("show-ids");
  showIDs = eval(showIDs);
  var hideIDs = $(filter_ids_all)
    .not(showIDs)
    .get();

  var IDscount = hideIDs.length;

  $(eval(hideIDs)).each(function(index, element) {
    $("#" + element).fadeOut(200, function() {
      if (!--IDscount) {
        $(eval(showIDs)).each(function(index, element) {
          $("#" + element).fadeIn();
        });
      }
    });
  });
});

$(".menu-item-has-children > a").click(function() {
  event.preventDefault();
  $(".header-mobile__page-navigation").addClass('show-sub-menu');
  $(this).next('.sub-menu').addClass('active');
  $(".header-mobile__page-navigation").animate({ scrollTop: 0 }, 250);
  
});

$(".menu-item-has-children .return").click(function() {
  event.preventDefault();
  $(".header-mobile__page-navigation").removeClass('show-sub-menu');
  $(this).closest('.sub-menu').removeClass('active');
});

$(".header-mobile__utilities-navigation .site-search__form input[type=text]").focus(function() {
  $(this).closest('.header-mobile__utilities-navigation').addClass('header-mobile__utilities-navigation--active');
});

$(".header-mobile__utilities-navigation .site-search__form input[type=text]").focusout(function() {
  $(this).closest('.header-mobile__utilities-navigation').removeClass('header-mobile__utilities-navigation--active');
});




// var scrollPosition = 0;

// Open menu from the hamburger
// $('.header-mobile__cta-hamburger').click(function() {
//   event.preventDefault();

//   var targetElement = $("#header-mobile__page-navigation");
//   console.log(targetElement);

//   console.log(scrollPosition);

//   $(this).toggleClass('header-mobile__cta-hamburger--crossed');
//   $(".header-mobile__container-bottom").toggleClass('show');
//   $('.header-mobile__page-navigation').removeClass('show-sub-menu');
//   $('.header-mobile__page-navigation .sub-menu.active').removeClass('active');

//   if($(this).hasClass('header-mobile__cta-hamburger--crossed')){
//  $(this).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
//  function(e) {
//    if ($(document).scrollTop()!=0) {
//      scrollPosition = $(document).scrollTop();
//    }

//  console.log(scrollPosition);
//    $('body').addClass('no-scroll');
//  });
//   } else {
//     $('body').removeClass('no-scroll');
//     $(document).scrollTop(scrollPosition);
//   }
// });

$('.header-mobile__cta-hamburger').click(function() {
  event.preventDefault();
  var targetElement = document.querySelector("#header-mobile__page-navigation");

  if($(this).hasClass('header-mobile__cta-hamburger--uncrossed')) {
    $(this).removeClass('header-mobile__cta-hamburger--uncrossed');
    $(this).addClass('header-mobile__cta-hamburger--crossed');
    disableBodyScroll(targetElement);
    $(".header-mobile__container-bottom").addClass('show');
    $('.header-mobile__page-navigation').removeClass('show-sub-menu');
    $('.header-mobile__page-navigation .sub-menu.active').removeClass('active');
  } else {
    $(this).removeClass('header-mobile__cta-hamburger--crossed');
    $(this).addClass('header-mobile__cta-hamburger--uncrossed');
    enableBodyScroll(targetElement);
    $(".header-mobile__container-bottom").removeClass('show');
    $('.header-mobile__page-navigation').removeClass('show-sub-menu');
    $('.header-mobile__page-navigation .sub-menu.active').removeClass('active');
  }
});




logoSizer();
var lastScrollTop = 0;

$(window).on("resize", function() {
  logoSizer();
});

$(document).on("scroll", function() {
  scrollDirection();
});

$(document).ready(function() {
  logoSizer();

  var siteSearch = new SiteSearch('site-search',
  {
    endpoints: '/wp-json/site-search/v1/search-term/-1/0/',
    formClass: 'site-search__form',
    formActiveClass: 'site-search__form--active',
    showSubmitClass: 'site-search__form--show-submit',
    resultsStageClass: 'site-search__results',
    viewAllClass: 'site-search__view-all',
    charTrigger: 3,
    resultsMax: 3,
    resultsActiveClass: 'active',
    noResultsMessage: 'No Results Found',
  });

  var mobileSiteSearch = new SiteSearch('mobile-site-search',
  {
    endpoints: '/wp-json/site-search/v1/search-term/-1/0/',
    formClass: 'site-search__form',
    formActiveClass: 'site-search__form--active',
    showSubmitClass: 'site-search__form--show-submit',
    resultsStageClass: 'site-search__results',
    viewAllClass: 'site-search__view-all',
    charTrigger: 3,
    resultsMax: 3,
    resultsActiveClass: 'active',
    noResultsMessage: 'No Results Found',
  });

  var searchListings = new SearchListings(
    {
      'endpoints': '/wp-json/site-search/v1/search-term/',
      'resultsStageId': 'search-results-stage',
      'resultsMax': 3,
      'searchTemplateId': 'search-result-template',
      'searchItemLinkClass': '.search-results__item-link'
    }
  );

  if ($("section").hasClass("cb-filter")) {
    $('*[data-show-ids="filter_show_ids_0"]').click();
  }
});

$(window).on('load', function() {
  logoSizer();
});

// Touch Device Detection
if ("ontouchstart" in document.documentElement) {
  $(".cb-floorplan__container > p").addClass("touch-device");
}

function scrollDirection() {
  var st = window.pageYOffset || document.documentElement.scrollTop;
  if (st > lastScrollTop){
    $('.header-desktop').removeClass('show');
  } else {
    $('.header-desktop').addClass('show');
  }
  lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}

// Resizing Hero Type 3 logo to make it retina. Need to find better solution.
function logoSizer() {
  var logo = document.getElementById("logo");
  if (typeof logo != "undefined" && logo != null) {
    var logo = document.getElementById("logo");
    var logoImageOrig = document.getElementById("logo-image-orig");
    var logoImageHeight = logoImageOrig.offsetHeight;
    var logoImageWidth = logoImageOrig.offsetWidth;


    if (window.innerWidth >= 768) {
      logo.style.height = logoImageHeight * 1 + "px";
      logo.style.width = logoImageWidth * 1 + "px";
    } else {
      logo.style.height = logoImageHeight * 0.7 + "px";
      logo.style.width = logoImageWidth * 0.7 + "px";
    }
  }
}

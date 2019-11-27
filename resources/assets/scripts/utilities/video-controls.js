$(document.body).on('click', 'button.video-button' ,function(){
  var videoContainer = $(this).parent('.c-video-container');
  let currentTime = 0;
  if (videoContainer.hasClass('playing')) {
    videoContainer.find('video').get(0).pause();
    videoContainer.find('video').get(0).load();
    videoContainer.removeClass('playing');
  } else {
    videoContainer.find('video').get(0).play();
    videoContainer.addClass('playing');
    // videoContainer.requestFullscreen();
  }
});

$('.c-video-container video').on('ended', function () {
  var videoContainer = $(this).parent('.c-video-container');
  videoContainer.removeClass('playing');
  videoContainer.find('video').get(0).load();
});
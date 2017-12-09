$(document).ready(function(){
  // at start
  console.log("child js ok");
  $scrollTop = 0;
  
  // on window resize
  $(window).resize(function() {
    $scrollTop = $(document).scrollTop();
    $viewHeight = $(window).height();
    console.log("height:"+$viewHeight+"px");
  }); // resize end
  
  // on scroll
  $(window).scroll(function() {
    $scrollTop = $(document).scrollTop();
    $viewHeight = $(window).height();
    console.log("top:"+$scrollTop+"px");
    // topbar
    if ($("#map").length) {
      if ($scrollTop >= $viewHeight) {
        $("#nav").addClass("tophide");
      } else {
        $("#nav").removeClass("tophide");
      }
    }
  }); // scroll end
  
});
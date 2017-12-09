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
    if ($scrollTop == 0) {
      $("#nav").addClass("tophide");
      $("#homeinner").removeClass("forceshow");
      $("#homeinner").css("display","hidden");
    } else {
      $("#nav").removeClass("tophide");
      $("#homeinner").addClass("forceshow");
      $("#homeinner").css("display","inline-block");
    }
    // bg video
    if ($scrollTop >= (($viewHeight/3)*2)) {
      $(".bgvideo").addClass("nopacity");
    } else {
      $(".bgvideo").removeClass("nopacity");
    } 
  }); // scroll end
  
});
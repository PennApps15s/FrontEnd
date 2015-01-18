(function() {
  var i = 0;
  var itemWidth = 0;
  var itemMargin = 0;
  var l = 0;
  var slide = 300;
  var fade = 500;

  $(function() { 
    itemWidth = $("#0").width();

    $(document).bind('keyup', 'right', right);
    $(document).bind('keyup', 'd', right);

    $(document).bind('keyup', 'left', left);
    $(document).bind('keyup', 'a', left);

    $(document).bind('keyup', 'return', like);
    $(document).bind('keyup', 'up', like);

    $(document).bind('keyup', 'backspace', dislike);
    $(document).bind('keyup', 'down', dislike);

    itemMargin = $("#0").css("margin-right");

    l = ($(window).width()/2-(itemWidth+10)/2);

    $("#carousel").width(($(".item").length)*(itemWidth+10+parseInt(itemMargin))+"px");
    $("#carousel").css("margin-left", ($(window).width()/2-(itemWidth+10)/2));

    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $(window).animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });

    layout();
    $(window).resize(function() {
        layout();
    });
  });

  function layout() {
    $("#dashboard").height($(window).height());
    $("#stage").height($(window).height());
  }

  function right() {
    if(i < ($(".item").length-2)) {
      l -= (parseInt(itemWidth)+10+0+parseInt(itemMargin));
      console.log("L", l);
      $("<div class=\"dark\"></div>").hide().prependTo("#"+i).fadeIn(fade);
      $("#"+i).children(".mark").addClass( "d", fade, "linear");
      $("#carousel").animate({
        marginLeft: l+"px"
      }, slide, "linear", function() {
      });
      i++;
      $("#"+i).children(".dark").fadeOut(fade);
      $("#"+i).children(".d").removeClass( "d", fade, "linear");
    }
    console.log("I", $("#"+i).position());
  }

  function left() {
    if(i>=1) {
      l += (parseInt(itemWidth)+10+0+parseInt(itemMargin));
      console.log("L", l);
      $("<div class=\"dark\"></div>").hide().prependTo("#"+i).fadeIn(fade);
      $("#"+i).children(".mark").addClass( "d", fade, "linear");
      $("#carousel").animate({
        marginLeft: l+"px"
      }, slide, "linear", function() {
      });
      i--;
      $("#"+i).children(".dark").fadeOut(slide);
      $("#"+i).children(".d").removeClass( "d", fade, "linear");
    }
    console.log("I", $("#"+i).position());
  }

  function like() {
    var $mark = $('#'+i).children(".mark");
    if($mark.hasClass("x")) {
      console.log("x");
      $mark.removeClass("x", fade, "linear");
      $mark.addClass("default");
    }
    if($mark.hasClass("check")) {
      $mark.removeClass("check", fade, "linear");
      $mark.addClass("default");
    }
    else {
      $mark.addClass("check", fade, "linear");
      $mark.removeClass("default");
    }
    right();
  }

  function dislike() {
    var $mark = $('#'+i).children(".mark");
    if($mark.hasClass("check")) {
      $mark.removeClass("check", fade, "linear");
      $mark.addClass("default");
    }
    if($mark.hasClass("x")) {
      $mark.removeClass("x", fade, "linear");
      $mark.addClass("default");
    }
    else {
      $mark.addClass("x", fade, "linear");
      $mark.removeClass("default");
    }
    right();
  }

})();
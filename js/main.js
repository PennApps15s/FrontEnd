(function() {
  var i = 0;
  var itemWidth = 0;
  var itemMargin = 0;
  var l = 0;
  var slide = 300;
  var fade = 500;

  $(function() { 
    itemWidth = $("#0").width();

    $("#rb").click(right);
    $(document).bind('keyup', 'right', right);

    $("#lb").click(left);
    $(document).bind('keyup', 'left', left);

    $("#up button").click(like);
    $(document).bind('keyup', 'up', like);

    $("#down button").click(dislike);
    $(document).bind('keyup', 'down', dislike);

    $(document).bind('keyup', 'return', s2d);

    itemMargin = $("#0").css("margin-right");

    l = ($(window).width()/2-(itemWidth+10)/2);

    $("#carousel").width(($(".item").length)*(itemWidth+10+parseInt(itemMargin))+"px");
    $("#carousel").css("margin-left", ($(window).width()/2-(itemWidth+10)/2));

    layout();
    $(window).resize(function() {
        layout();
    });

    $('#scrollToStage').click(s2s);
    $('#scrollToDash').click(s2d);

    $("li").hover(function(){
      $(this).children(".overlay").fadeToggle('fast');
    });

  });

  function s2s() {
    $("#stage").prependTo("body").slideDown(700, function() {
      $("#dashboard").hide();
    });   
  }

  function s2d() {
    $("#dashboard").show();

    $('html,body').animate({
      scrollTop: $("#dashboard").offset().top
    }, 700, function() {
      $("#stage").hide();
    });
  }

  function layout() {
    $("#dashboard").height($(window).height());
    $("#stage").height($(window).height());
  }

  function right(y) {
    if(i < ($(".item").length-2)) {
      l -= (parseInt(itemWidth)+10+0+parseInt(itemMargin));
      
      if(!!y) {
        $('#right').addClass('white');
        $('#right button').addClass('active');
        setTimeout(function() {
          $('#right').removeClass('white', fade);
          $('#right button').removeClass('active', fade);
        }, slide);
      }

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
  }

  function left() {
    if(i>=1) {
      l += (parseInt(itemWidth)+10+0+parseInt(itemMargin));
      $('#left').addClass('white');
      $('#left button').addClass('active');
      setTimeout(function() {
        $('#left').removeClass('white', fade);
        $('#left button').removeClass('active', fade);
      }, slide);

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
  }

  function like() {
    var $mark = $('#'+i).children(".mark");
    
    $('#up').addClass('white');
    $('#up button').addClass('active');
    setTimeout(function() {
      $('#up').removeClass('white', slide);
      $('#up button').removeClass('active', slide);
    }, slide);

    if($mark.hasClass("x")) {

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
    right(false);
  }

  function dislike() {
    var $mark = $('#'+i).children(".mark");
    
    $('#down').addClass('white', fade);
    $('#down button').addClass('active', slide);
    setTimeout(function() {
      $('#down').removeClass('white', slide);
      $('#down button').removeClass('active', fade);
    }, slide);

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
    right(false);
  }

})();
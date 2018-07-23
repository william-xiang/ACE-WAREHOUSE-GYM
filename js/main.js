$(document).ready(function(){
    $("a").on('click', function(event) {
  
      if (this.hash !== "") {
        event.preventDefault();
  
        var hash = this.hash;
  
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
     
          window.location.hash = hash;
        });
      } 
    });

    $(".businesstop").click(function() {
      $(".businesstop").removeClass(" activebusinesstop");
      $(this).addClass(" activebusinesstop");
    });

    $(".businesstop").mouseover(function() {
      $(".businesstop").removeClass(" activebusinesstop");
      $(this).addClass(" activebusinesstop");
    });

    $(".businesstop").mouseleave(function() {
      $(".businesstop").removeClass(" activebusinesstop");
    });

    $(".businesstoggle").mouseover(function() {
      $(".businesstop").removeClass(" activebusinesstop");
      $(this).siblings().addClass(" activebusinesstop");
    });

    $(".businesstoggle").mouseleave(function() {
      $(".businesstop").removeClass(" activebusinesstop");
    });

    var part2_1 = $("#part2_1");
    var newpart2_1 = $("#newpart2_1");

    $(".part2_1").mouseover(function() {
      part2_1.addClass("part2_1_hide").removeClass("part2_1_show");
      newpart2_1.addClass("newpart2_1_show").removeClass("newpart2_1_hide");
    });

    $(".part2_1").mouseleave(function() {
      part2_1.removeClass("part2_1_hide").addClass("part2_1_show");
      newpart2_1.removeClass("newpart2_1_show").addClass("newpart2_1_hide");
    });  

    var part2_2 = $("#part2_2");
    var newpart2_2 = $("#newpart2_2");

    $(".part2_2").mouseover(function() {
      part2_2.addClass("part2_2_hide").removeClass("part2_2_show");
      newpart2_2.addClass("newpart2_2_show").removeClass("newpart2_2_hide");
    });

    $(".part2_2").mouseleave(function() {
      part2_2.removeClass("part2_2_hide").addClass("part2_2_show");
      newpart2_2.removeClass("newpart2_2_show").addClass("newpart2_2_hide");
    });
    
    var title_pos = $("#title").position();
    var details_pos = $("#details").position();
    var diff1 = details_pos.top - title_pos.top + 150;
    $("#classesPart4").css("height", diff1);

    var img1_pos = $("#img1").position();
    var img2_pos = $("#img2").position();
    var img_height = $("#img2").height();
    var diff2 = img2_pos.top - img1_pos.top + img_height;
    console.log(diff2);
    $("#classesPart3").css("height", diff2);
  });

document.addEventListener('scroll', function() {
  var circle = document.getElementsByClassName("circle");
  var indexcircle = document.getElementsByClassName("indexcircle");
  var businesscircle = document.getElementsByClassName("businesscircle");
  var classescircle = document.getElementsByClassName("classescircle");

  if (circle.length != 0) {
    for (i = 0; i < circle.length; i++) {
      circle[i].className = circle[i].className.replace(" activeslide", "");
    }
  }

  if (indexcircle.length != 0) {
    for (i = 0; i < indexcircle.length; i++) {
      indexcircle[i].className = indexcircle[i].className.replace(" indexactiveslide", "");
    }
  }

  if (businesscircle.length != 0) {
    for (i = 0; i < businesscircle.length; i++) {
      businesscircle[i].className = businesscircle[i].className.replace(" businessactiveslide", "");
    }
  }

  if (classescircle.length != 0) {
    for (i = 0; i < classescircle.length; i++) {
      classescircle[i].className = classescircle[i].className.replace(" classesactiveslide", "");
    }
  }


  var y_scroll_pos = window.pageYOffset;

  if(y_scroll_pos < 630) {
    index = 1;
  }
  else if (y_scroll_pos >= 630 && y_scroll_pos < 1680) {
    index = 2;
  }
  else {
    index = 3;
  }

  if(y_scroll_pos < 1330) {
    indexindex = 1;
  }
  else if (y_scroll_pos >= 1330 && y_scroll_pos < 2180) {
    indexindex = 2;
  }
  else if (y_scroll_pos >= 2180 && y_scroll_pos < 2680) {
    indexindex = 3;
  }
  else {
    indexindex = 4;
  }

  if(y_scroll_pos < 130) {
    businessindex = 1;
  }
  else {
    businessindex = 2;
  }

  if(y_scroll_pos < 630) {
    classesindex = 1;
  }
  else if (y_scroll_pos >= 630 && y_scroll_pos < 1180) {
    classesindex = 2;
  }
  else {
    classesindex = 3;
  }

  if (businesscircle.length != 0) {
    businesscircle[businessindex - 1].className += " businessactiveslide";
  }

  if (indexcircle.length != 0) {
    indexcircle[indexindex - 1].className += " indexactiveslide";
  }

  if (classescircle.length != 0) {
    classescircle[classesindex - 1].className += " classesactiveslide";
  }

  if (circle.length != 0) {
    circle[index - 1].className += " activeslide";
  }
}, false);

var slideIndex = 1;

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slideshow");
  var circle = document.getElementsByClassName("circle");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
   for (i = 0; i < circle.length; i++) {
    circle[i].className = circle[i].className.replace(" activeslide", "");
  }
  circle[slideIndex-1].className += " activeslide";
}

function contact() {
  alert("Thank you for contacting with us!");
}

function validateForm() {
  var x = document.forms["contactus"]["name"].value;
  var y = document.forms["contactus"]["email"].value;

  if (x == "") {
      alert("Name must be filled out");
      return false;
  }
  if (y == "") {
    alert("Email must be filled out");
    return false;
}

  alert("Thank you for contacting with us!");
}

function overPart1() {
  var content = document.getElementsByClassName("content");
  content[0].className += " contentActive";
}

function outPart1() {
  var content = document.getElementsByClassName("content");
  content[0].className = content[0].className.replace(" contentActive", "");
}


//slider in business
function slide() {
  carousel();
}

var slideIndex = 0;
var x = document.getElementsByClassName("slides");
var timer;

function carousel() {
    var i;
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}    
    x[slideIndex-1].style.display = "block";  
    timer = setTimeout(carousel, 4000); // Change image every 2 seconds
}

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function pause() {
  clearTimeout(timer);
}

function resume() {
  timer = setTimeout(carousel, 4000);
}

window.onclick = function(event) {
  if (event.target.className != "businesstoptext") {
    $(".businesstop").removeClass(" activebusinesstop");
  }
}





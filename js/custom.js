$(document).ready(function(){

  //Get the button
    // var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    // window.onscroll = function() {scrollFunction()};

    // function scrollFunction() {
    //   if (document.body.scrollTop > 650 || document.documentElement.scrollTop > 650) {
    //     mybutton.style.display = "block";
    //   } else {
    //     mybutton.style.display = "none";
    //   }
    // }

    $(window).scroll(function() {
        if ($(this).scrollTop() > 650) {
            $('#myBtn').css("display","block");
        } else {
            $('#myBtn').css("display","none");
        }

    });


  var image = document.getElementsByClassName('parallax-bg');
      new simpleParallax(image, {
        delay: .6,
        transition: 'cubic-bezier(0,0,0,1)'
      });
  
  $('.nav_a').click(function(){
    $('.navbar-collapse').removeClass('in');
  });
  
  //$('video').prop('muted',true).play();

});

// clock
$(document).ready(function(){

  $('.kp1').bind('click mouseover', function () {
    $('.pc1').toggleClass('show');
    $(this).toggleClass('fa-plus');
    $(this).toggleClass('fa-minus');
  })

  $('.kp2').bind('click mouseover', function () {
    $('.pc2').toggleClass('show');
    $(this).toggleClass('fa-plus');
    $(this).toggleClass('fa-minus');
  })

  $('.kp3').bind('click mouseover', function () {
    $('.pc3').toggleClass('show');
    $(this).toggleClass('fa-plus');
    $(this).toggleClass('fa-minus');
  })

  var audioElement = new Audio("");

  //clock plugin constructor
  $('#myclock').thooClock({
    size:$(document).height()/2.4,
    dialColor: 'transparent',
    dialBackgroundColor:'transparent',
    secondHandColor: '#fff',
    minuteHandColor: '#fff',
    hourHandColor: '#fff',
    alarmHandColor: '#FF0000',
    alarmHandTipColor: '#ff0000',
    sweepingMinutes:true,
    sweepingSeconds:true,
    showNumerals:false,
    //brandText:'Bloomingdale',
    //brandText2:'Germany',

  });

  $('.case-block').matchHeight();


});
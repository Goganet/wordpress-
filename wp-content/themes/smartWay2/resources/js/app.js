// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});



$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});

// add header color
$(window).scroll(function() {    
      let scroll = $(window).scrollTop();    
      if (scroll <= 20) {
          $("header").removeClass("color-header");
      }
      else {
          $("header").addClass("color-header");
      }
    });
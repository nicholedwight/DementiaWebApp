// document.querySelector( "#nav-toggle" )
//   .addEventListener( "click", function() {
//     this.classList.toggle( "active" );
//   });
//
//   $(function () {
//     $('.click-nav > ul').toggleClass('no-js js');
//     $('.click-nav .js ul').hide();
//     $('.click-nav .js').click(function(e) {
//       $('.click-nav .js ul').slideToggle(200);
//       $('.clicker').toggleClass('active');
//       e.stopPropagation();
//     });
//     $(document).click(function() {
//       if ($('.click-nav .js ul').is(':visible')) {
//         $('.click-nav .js ul', this).slideUp();
//         $('.clicker').removeClass('active');
//       }
//     });
//   });

  $(document).ready(function () {
  			  $(".navbar-toggle").on("click", function () {
  				    $(".navbar-collapsible").toggleClass("collapsed");
  			  });
          $(".has-dropdown").on("click", function () {
  				    $(this).find(".dropdown").toggleClass("collapsed");
  			  });
  		});
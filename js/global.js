document.querySelector( "#nav-toggle" )
  .addEventListener( "click", function() {
    this.classList.toggle( "active" );
  });

$('body').removeClass('nojs').addClass('js'); //*Enables .js * CSS classes when JavaScript is disabled

$(document).ready(function () {
			  $(".navbar-toggle").on("click", function () {
				    $(".navbar-collapsible").toggleClass("collapsed");
			  });
        $(".has-dropdown").on("click", function () {
            $(this).parent().toggleClass("js-expandable-active");
            $(this).toggleClass("current");
            $(this).find(">:first-child").toggleClass("active");
				    $(this).next().toggleClass("collapsed");
			  });
		});

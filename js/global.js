window.addEventListener('load', function() {
    new FastClick(document.body);
}, false);

$(document).ready(function () {
        $('body').removeClass('nojs').addClass('js'); //*Enables .js * CSS classes when JavaScript is disabled

			  $(".navbar-toggle").on("click", function () {
				    $(".navbar-collapsible").toggleClass("collapsed");
            $(".search-container").addClass("collapsed");
            $("#nav-toggle").toggleClass("active");
            $(".advanced-search-container").addClass("collapsed");
            $(".search-btn").removeClass("active");
			  });
        $(document).on('click', function(event) {
          if (!$(event.target).closest('.navbar-collapsible').length &&
              !$(event.target).closest('.navbar-toggle').length &&
              !$(event.target).closest('.search-btn').length &&
              !$(event.target).closest('.search-container').length &&
              !$(event.target).closest('.advanced-search-container').length &&
              !$(event.target).closest('.advanced').length) {
                $(".navbar-collapsible").addClass("collapsed");
                $("#nav-toggle").removeClass("active");
                $(".search-container").addClass("collapsed");
                $(".advanced-search-container").addClass("collapsed");
                $(".search-btn").removeClass("active");
          }
        });

        $(".has-dropdown").on("click", function () {
            $(this).parent().toggleClass("js-expandable-active");
            $(this).toggleClass("current");
            $(this).find(">:first-child").toggleClass("active");
				    $(this).next().toggleClass("collapsed");
			  });
        $(".search-btn").on("click", function () {
				    $(".search-container").toggleClass("collapsed");
            $(".navbar-collapsible").addClass("collapsed");
            $("#nav-toggle").removeClass("active");
            $(".advanced-search-container").addClass("collapsed");
            if (!$(".search-btn").hasClass("active")) {
              $(".search-btn").addClass("active");
            }
            if ($(".search-btn").hasClass("active") && $(".advanced-search-container").hasClass("collapsed") && $(".search-container").hasClass("collapsed")) {
                $(".search-btn").removeClass("active");
            }
			  });

        $(".advanced").on("click", function () {
				    $(".advanced-search-container").toggleClass("collapsed");
            $(".search-container").toggleClass("collapsed");
            $(".search-btn").addClass("active");
			  });

        $(".opt-btn").on("click", function() {
          $(".opt-btn").removeClass("current-btn");
          $(this).toggleClass("current-btn");
        });

        $(".show-all").on("click", function() {
          $(".hidden").removeClass("hidden");
        });

        var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substrRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        // the typeahead jQuery plugin expects suggestions to a
        // JavaScript object, refer to typeahead docs for more info
        matches.push({ value: str });
      }
    });

    cb(matches);
  };
};

var states = ['Alzheimers Society', 'Primary Care Navigators', 'Care Direct', 'Local Council', 'Council Tax Office',
  'Benefits help and Advice', 'Age UK Bristol Financial', 'Avon and Bristol Law Centre', 'Bristol Advice Point', 'Gov.uk', 'North Bristol Advice Centre',
  'St Pauls Advice Centre', 'Talking Money', 'Local Support', 'Activity Group', 'Befriending Service', 'Memory Cafe', 'Peer Support Group',
  'Sports and Social Club', 'Community Links', 'British Red Cross', 'Support for Family, Friends, and Carers', 'Bristol Black Carers',
  'Carers Support Centre', 'EighteenPlus', 'Well Aware', 'Dementia Friends', 'Alternative Therapies', 'Holistic Therapists',
  'Continence', 'Dentist', 'Dieticians', 'Hearing', 'Mental Health',
  'Opticians', 'Visioncall', 'NHS Choices', 'Physiotherapists', 'Podiatry',
  'Speech and Language Therapists', 'Activity Groups and Organisations', 'Community Transport', 'Frozen Meals', 'Other Services', 'Counselling Directory',
  'Dementia Adventure', 'Forget Me Not Book', 'Leisure Centres', 'Libraries', 'Volunteer'
];

$('#the-basics .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  displayKey: 'value',
  source: substringMatcher(states)
});

		});

<?php include('inc/header.php');?>
  <div class="main" role="main">
    <div class="banner">
      <img src="./img/banner.jpg">
    </div>

    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <span></span>
      <li><a href="#" class="advanced">Advanced Search</a></li>
      <span></span>
      <li>Search Results</li>
    </ul>

    <div class="wrapper" id="content" tabindex="0">
      <p class="heading">Showing all <strong><?= $group;?></strong> near <strong><?= $postcode;?></strong>. <a href="#" class="advanced">Refine Search.</a></p>
      <input type="hidden" value="<?= $postcode;?>" id="address">
      <div id="map-canvas"></div>

      <section class="results-wrapper">
        <article class="search-result">
          <p class="heading"><a href="#">Lorem ipsum dolor sit amet</a></p>
          <p class="distance"><span></span>0.3 miles away</p>
          <a href="#" class="email">
            <span></span>
            <?= strtolower(str_replace(" ", "", $group));?>@dementia.com
          </a>
          <p class="phone"><span></span>01234 567 8910</p>
          <p>Living well with dementia</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix. pri et.
          </p>
        </article>
        <hr>
        <article class="search-result">
          <p class="heading"><a href="#">Lorem ipsum dolor sit amet</a></p>
          <p class="distance"><span></span>0.6 miles away</p>
          <p class="phone"><span></span>01234 567 8910</p>
          <p class="phone"><span></span>01987 654 3210</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix. Eu veniam qualisque vel...
          </p>
          <p class="address"><span></span>Lorem House, 10 Ipsum Road, Bristol, <?= $postcode;?></p>
        </article>
        <article class="search-result hidden">
          <hr>
          <p class="heading"><a href="#">Lorem ipsum dolor sit amet</a></p>
          <p class="distance"><span></span>1.2 miles away</p>
          <p class="phone"><span></span>01234 567 8910</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix. Eu veniam qualisque vel, mutat affert sententiae ei mei.
          </p>
          <a href="#" class="email">
            <span></span>www.<?= strtolower(str_replace(" ", "", $group));?>.com
          </a>
        </article>
        <article class="search-result hidden">
          <hr>
          <p class="heading"><a href="#">Lorem ipsum dolor sit amet</a></p>
          <p class="distance"><span></span>0.4 miles away</p>
          <p class="phone"><span></span>01234 567 8910  -  John Smith</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix...
          </p>
        </article>
        <article class="search-result hidden">
          <hr>
          <p class="heading"><a href="#">Lorem ipsum dolor sit amet</a></p>
          <p class="distance"><span></span>0.8 miles away</p>
          <p class="phone"><span></span>01234 567 8910</p>
          <p class="phone"><span></span>01987 654 3210</p>
          <p>
            Lorem ipsum dolor sit amet, cu nonumy consul graeco pri. Cu enim legere mea. His delectus lucilius torquatos ei, ad alia aliquam vix. Eu veniam qualisque vel.
          </p>
          <p class="address"><span></span>Lorem House, 10 Ipsum Road, Bristol, <?= $postcode;?></p>
        </article>
        <button class="show-all">Show All</button>
      </section>
    </div>
  </div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlPin7__n--nRfzTaWIsCkcB9YOw_NdWA">
    </script>
    <script type="text/javascript">
      var geocoder;
      var map;
      function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(51.468489, -2.5907094);
        var mapOptions = {
          center: latlng,
          zoom: 13

        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
        codeAddress();
      }

      function codeAddress() {
        var address = document.getElementById('address').value;
        geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            // Sets focus and bounds to searched PostCode. Array below adds various markers around the centre.
            var locations = [
              ['Your location',
                JSON.stringify(results[0].geometry.location.k), JSON.stringify(results[0].geometry.location.D)],
              ['Example Result',
                JSON.stringify(results[0].geometry.location.k + 0.0045),
                JSON.stringify(results[0].geometry.location.D + 0.0015)],
              ['Example Result',
                JSON.stringify(results[0].geometry.location.k + 0.008),
                JSON.stringify(results[0].geometry.location.D + 0.005)],
              ['Example Result',
                JSON.stringify(results[0].geometry.location.k - 0.0095),
                JSON.stringify(results[0].geometry.location.D - 0.008)],
              ['Example Result',
                JSON.stringify(results[0].geometry.location.k - 0.0095),
                JSON.stringify(results[0].geometry.location.D)],
              ['Example Result',
                JSON.stringify(results[0].geometry.location.k),
                JSON.stringify(results[0].geometry.location.D + 0.008)],
              ['Example Result',
                JSON.stringify(results[0].geometry.location.k + 0.0085),
                JSON.stringify(results[0].geometry.location.D - 0.018)]
            ];

            var infowindow = new google.maps.InfoWindow();
            var marker, i;

            for (i = 0; i < locations.length; i++) {
              marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
              });

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, this);
                }
              })(marker, i));
            }
          } else {
            alert('Location was not found! :(');
          }
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<?php include('inc/footer.php');?>

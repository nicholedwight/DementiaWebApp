<?php include('inc/header.php');
  $postcode = $_GET['location'];
?>
  <div class="main" role="main">
    <div class="banner">
      <img src="./img/banner.jpg">
    </div>
    <input type="hidden" value="<?php echo $postcode;?>" id="address">
    <div id="map-canvas"></div>
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
          zoom: 14
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
            // console.log(location);
        codeAddress();
      }

      function codeAddress() {
        var address = document.getElementById('address').value;
        geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
          } else {
            alert('Location was not found! :(');
          }
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<?php include('inc/footer.php');?>

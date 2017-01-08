<div class="map">
  <div id="map"></div>
  <script>
    var map;
    function initMap() {
      var justSpacePosition = {lat: 54.179975, lng: 37.603910};

      map = new google.maps.Map(document.getElementById('map'), {
        center: justSpacePosition,
        scrollwheel: false,
        zoom: 15
      });

      var pinImage = {
        url: '/img/pinLogo.svg',
      }

      var marker = new google.maps.Marker({
        map: map,
        icon: pinImage,
        place: {
          location: justSpacePosition,
          query: 'Just Space, Россия, Тула, пр. Ленина'
        },
        attribution: {
          source: 'Digital-агентство Just Space',
          webUrl: 'http://www.just-space.ru'
        },
        title: 'Тут создают сайты'
      });

      var infoWindow = new google.maps.InfoWindow({
        content: 'Digital-агентство Just Space'
      });

      marker.addListener('click', function() {
        infoWindow.open(map, marker);
      });

      var styles = [
      {
        stylers: [
          { hue: '#0097ba' },
          { saturation: -20 }
        ]
      },{
        featureType: 'road',
        elementType: 'geometry',
        stylers: [
          { lightness: 100 },
          { visibility: 'simplified' }
        ]
      }
    ];

    map.setOptions({styles: styles});

    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFE_Bixd44cRvT7dS9qk8NN92t2Cgkd1I&callback=initMap" async defer></script>
</div>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/geral2.css?a=<?php echo time() ?>" type="text/css" />

<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<style>
#capa-site {position:relative;}
#capa-site h1{text-align: left; margin-top: 40px; font-size: 24px; margin-bottom: 20px;}
#form-map{float: left;width:540px;position: absolute;z-index: 1;right: -20px;top: 20px;}
 .barra-grade{margin-bottom: 51px;}
 .barra-grade .tit {width: 95%;padding: 0 10px;}
 .lista-calendario .barra-grade .tit {width:100%;}
 .mapa{height:750px; border: 1px solid #333;background:#ccc;clear:both; margin-top:20px;}
 .toggle{width:100%;}
 .lista-calendario .barra-grade .botao {position: relative; margin: 0; right: 5px; top: -22px;}
 .search-map{margin: 20px -3px 5px 20px;border: none;padding: 5px 15px;width: 400px;float: left;}
 #search{border: none;display:block;width: 70px;height: 30px;float: left;margin-top: 20px;background:#4a8cf6 url(http://cmais.com.br/portal/images/lupa-azul-branca.jpg) no-repeat center center;float: left;}
#map-canvas{top: -40px; z-index: 0;}
#map-canvas, #map_canvas {height: 500px;}
@media print {
  html, body {
    height: auto;
  }
  #map-canvas, #map_canvas {
    height: 650px;
  }
}
</style>
<div id="capa-site">
  <h1>TV Cultura - Mapa de Cobertura</h1>
  
  
    
  <div class="lista-calendario">
    <div class="barra-grade">                    
      <a href="#" class="btn-toggle tit">Cobertura Nacional</a>
      <a href="#" class="botao btn-toggle"></a>
    </div>
    <div class="grade toggle" style="background:none; padding-bottom: 25px; display: none;">
      teste de conteudo
    </div>
    
    <form id="form-map" action="" method="post">
      <input type="text" id="address" name="address" placeholder="nome da cidade" class="search-map" />
      <input type="button" id="search" name="search" value="" />
    </form>
    <div id="map-canvas" class="mapa"></div>
      
  </div>
</div>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBCqgD-rJZd7IKtu1D3nFUqM0kdrn_fOzA&sensor=false&language=pt" type="text/javascript"></script>

<script>
//980
  (function () {
    google.maps.Map.prototype.markers = new Array();
    google.maps.Map.prototype.addMarker = function(marker) {
      this.markers[this.markers.length] = marker;
    };
    google.maps.Map.prototype.getMarkers = function() {
      return this.markers
    };
    google.maps.Map.prototype.clearMarkers = function() {
      if(infowindow) {
        infowindow.close();
      }
      for(var i=0; i<this.markers.length; i++){
        this.markers[i].set_map(null);
      }
    };
  })();

  // Define Marker properties
  var image = new google.maps.MarkerImage('http://cmais.com.br/portal/images/marker.png',
    // This marker is 129 pixels wide by 42 pixels tall.
    new google.maps.Size(36, 30),
    // The origin for this image is 0,0.
    new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 18,42.
    new google.maps.Point(18, 30)
  );

  // Enable the visual refresh
  google.maps.visualRefresh = true;
  var new_marker;
  var markers = [];
  var contents = [];
  var infowindow = null;
  var geocoder;
  var map;
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-14.235004, -51.92527999999999);
    var mapOptions = {
      zoom: 4,
      center: latlng,
      streetViewControl: false,
      //mapTypeId: google.maps.MapTypeId.HYBRID
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  <?php
  $i = 0;
  foreach($assets as $asset){
    ?>
    //add markers
    var contentString = '<?php echo str_replace(array("\n", "\r"), array("", ""), html_entity_decode($asset->AssetContent->getContent()))?>';
    
    markers.push({
      id: '<?php echo $asset->getId()?>',
      position: new google.maps.LatLng(<?php echo $asset->getDescription()?>),
      name: '<?php echo $asset->getTitle()?>',
      content: contentString
    });

    <?php
  }
  ?>

    for(var i=0; i<markers.length; i++){
      map.addMarker(createMarker(markers[i].id, markers[i].name, markers[i].content, markers[i].position));
    }
    
    $("#address").focus();

    /*
    // Try HTML5 geolocation
    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        var infowindow = new google.maps.InfoWindow({
          map: map,
          position: pos,
          title: 'Your position',
          content: 'Location found using HTML5.'
        });
        var marker = new google.maps.Marker({
          map: map,
          position: pos,
          title: 'Your position',
          content: 'Location found using HTML5.'
        });

        map.setCenter(pos);
      }, function() {
        handleNoGeolocation(true);
      });
    } else {
      // Browser doesn't support Geolocation
      handleNoGeolocation(false);
    }
    // Try HTML5 geolocation
    */
  }
  
  function cobertura(num){
    if(num==1){
      $('.grade.toggle').slideDown("slow");
      $('.barra-grade').addClass('escura');
    }
    if(num==0){
      $('.grade.toggle').slideUp("slow");
      $('.barra-grade').removeClass('escura');
    }
  }

  function createMarker(id, name, content, pos) {
    //console.log('content:');
    //console.log(id);

    var marker = new google.maps.Marker({
      position: pos,
      map: map,
      title: name,
      icon: image
    });

    google.maps.event.addListener(marker, "click", function() {
      if (new_marker) new_marker.setMap(null);
      if (infowindow) infowindow.close();
      infowindow = new google.maps.InfoWindow({content: content});
      infowindow.open(map, marker);
    });

    return marker;
  }

  function codeAddress() {
    cobertura(0);
    if(document.getElementById('address').value != ""){
      var address = document.getElementById('address').value+", Brasil";
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          var exists = -1;
          var t1 = new String($.trim(results[0].geometry.location.jb+results[0].geometry.location.kb));
          var t2 = t1.replace(".","");
          var t3 = t2.replace("-","");
          for(var i=0; i<markers.length; i++){
            var j1 = new String($.trim(markers[i].position.jb+markers[i].position.kb));
            var j2 = j1.replace(".","");
            var j3 = j2.replace("-","");
            //console.log('"'+t3+'" == "'+j3+'"');
            //console.log("B: "+markers[i].position.jb+","+markers[i].position.kb);
            if(t3 == j3)
              exists = i;
          }
          map.setCenter(results[0].geometry.location);
          map.setZoom(7);
          if(exists == -1){
            //console.log(results[0].geometry.location);
            if (new_marker) new_marker.setMap(null);
            if (infowindow) infowindow.close();
            new_marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location,
              icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 3
              },
            });
            cobertura(1);
          }else{
            //alert('Coordenada já existente!');
            //$("#address").val("").focus();
            //console.log(exists);
            //console.log(markers[exists].content);
            //console.log(markers[exists]);
            if (new_marker) new_marker.setMap(null);
            if (infowindow) infowindow.close();
            mks = google.maps.Map.prototype.getMarkers();
            //console.log(">>>"+exists);
            //console.log(mks[exists]);
            infowindow = new google.maps.InfoWindow({content: markers[exists].content});
            infowindow.open(map, mks[exists]);
          }
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
    }
    else{
      alert('Geocode was not successful for the following reason: Address is null');
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);

  $('#address').keypress(function (e) {
    if(e.which == 13) {
      codeAddress();
      return false;
    }
  });
   
  $("#search").click(function() {
    codeAddress();
  });
  
  //$("#map-canvas").hide().delay(1000).fadeIn("slow");

</script>
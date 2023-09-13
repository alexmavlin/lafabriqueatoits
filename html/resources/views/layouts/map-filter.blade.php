<!-- Filter & Map Page scripts -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQ3c_R3gppyKvlIlmpN1IHkc0v2k_2zEM&callback=initMap&v=weekly" async defer></script>

<script>
    // Initialize and add the map
    function initMap() {
        function locationData(locationURL, locationCategory, locationImg, locationTitle, locationAddress, locationPrice, locationStatus, locationDate) {
            return ('<div class="map-popup-wrap"><div class="map-popup"><div style="top: 68px" class="mp-cat  color-bg">' + locationDate + '</div><div class="map-popup-status mp-cat  color-bg">' + locationStatus + '</div><div class="map-popup-category mp-cat  color-bg">' + locationCategory + '</div><div class="infoBox-close"><i class="fal fa-times"></i></div> <a title="'+ locationTitle +'" href="' + locationURL + '" class="listing-img-content" style="background-image: url(' + locationImg + ')"> </a> <div class="listing-content">  <div class="listing-title">   <h4><a title="'+ locationTitle +'" href=' + locationURL + '>' + locationTitle + '</a></h4><span class="map-popup-location-info"> ' + locationAddress + '</span> </div><span class="map-popup-price fl-wrap">  à partir de  ' + locationPrice + ' €  </span></div>    </div></div>')
        }
        //   locations ------------------
        var locations = JSON.parse($('#map').attr('data-items'));
        console.log(locations.data)
        //   Map Infoboxes end ------------------
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: new google.maps.LatLng(48.76, 2.32),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            panControl: true,
            fullscreenControl: false,
            navigationControl: false,
            streetViewControl: false,
            animation: google.maps.Animation.BOUNCE,
            gestureHandling: 'cooperative',
            styles: [{
                featureType: "administrative",
                elementType: "geometry.fill",
                stylers: [{visibility: "on"}, {color: "#ffffff"}]
            }, {
                featureType: "administrative",
                elementType: "labels.text.fill",
                stylers: [{gamma: "0.00"}, {weight: "0.01"}, {visibility: "on"}, {color: "#8c8c8c"}]
            }, {
                featureType: "administrative.neighborhood",
                elementType: "labels.text",
                stylers: [{visibility: "on"}]
            }, {
                featureType: "administrative.neighborhood",
                elementType: "labels.text.fill",
                stylers: [{color: "#898989"}]
            }, {
                featureType: "administrative.neighborhood",
                elementType: "labels.text.stroke",
                stylers: [{color: "#ffffff"}, {weight: "4.00"}]
            }, {
                featureType: "landscape",
                elementType: "all",
                stylers: [{color: "#ffffff"}]
            }, {
                featureType: "landscape.man_made",
                elementType: "geometry.fill",
                stylers: [{visibility: "simplified"}, {color: "#ffffff"}]
            }, {
                featureType: "landscape.natural",
                elementType: "geometry",
                stylers: [{visibility: "on"}]
            }, {
                featureType: "landscape.natural",
                elementType: "labels.text.fill",
                stylers: [{color: "#8d8d8d"}]
            }, {
                featureType: "landscape.natural.terrain",
                elementType: "geometry.stroke",
                stylers: [{visibility: "on"}]
            }, {featureType: "poi", elementType: "all", stylers: [{visibility: "off"}]}, {
                featureType: "poi.park",
                elementType: "geometry.fill",
                stylers: [{color: "#cef8d5"}, {visibility: "on"}]
            }, {
                featureType: "poi.park",
                elementType: "labels.text.fill",
                stylers: [{visibility: "on"}, {color: "#60b36c"}]
            }, {
                featureType: "poi.park",
                elementType: "labels.text.stroke",
                stylers: [{visibility: "on"}, {color: "#ffffff"}]
            }, {
                featureType: "poi.park",
                elementType: "labels.icon",
                stylers: [{visibility: "off"}]
            }, {
                featureType: "road",
                elementType: "all",
                stylers: [{saturation: "-100"}, {lightness: "32"}, {visibility: "on"}]
            }, {
                featureType: "road",
                elementType: "geometry.fill",
                stylers: [{color: "#f3f3f3"}]
            }, {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [{color: "#e1e1e1"}]
            }, {
                featureType: "road",
                elementType: "labels.text",
                stylers: [{visibility: "on"}]
            }, {
                featureType: "road.highway",
                elementType: "all",
                stylers: [{visibility: "simplified"}]
            }, {
                featureType: "road.highway",
                elementType: "geometry",
                stylers: [{visibility: "on"}, {lightness: "63"}]
            }, {
                featureType: "road.highway",
                elementType: "geometry.fill",
                stylers: [{color: "#f3f3f3"}]
            }, {
                featureType: "road.highway",
                elementType: "geometry.stroke",
                stylers: [{color: "#e1e1e1"}]
            }, {
                featureType: "road.highway",
                elementType: "labels.text",
                stylers: [{visibility: "off"}]
            }, {
                featureType: "road.highway",
                elementType: "labels.icon",
                stylers: [{visibility: "off"}]
            }, {
                featureType: "road.arterial",
                elementType: "labels.icon",
                stylers: [{visibility: "off"}]
            }, {
                featureType: "transit",
                elementType: "all",
                stylers: [{visibility: "off"}]
            }, {
                featureType: "transit.station",
                elementType: "all",
                stylers: [{visibility: "off"}]
            }, {
                featureType: "water",
                elementType: "all",
                stylers: [{visibility: "on"}, {color: "#eeeeee"}]
            }, {
                featureType: "water",
                elementType: "geometry.fill",
                stylers: [{color: "#cce4ff"}]
            }, {
                featureType: "water",
                elementType: "labels.text.fill",
                stylers: [{visibility: "on"}, {color: "#6095a5"}]
            }]
        });

        var boxText = document.createElement("div");
        boxText.className = 'map-box'
        var currentInfobox;
        var boxOptions = {
            content: boxText,
            disableAutoPan: true,
            alignBottom: true,
            maxWidth: 0,
            // pixelOffset: new google.maps.Size(-110, -45),
            // zIndex: null,
            // boxStyle: {
            //     width: "260px"
            // },
            // closeBoxMargin: "0",
            // closeBoxURL: "",
            // infoBoxClearance: new google.maps.Size(1, 1),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false,
        };
        var markerCluster, marker, i;
        var allMarkers = [];
        var clusterStyles = [{
            textColor: 'white',
            url: '',
            height: 50,
            width: 50
        }];

        // Markers
        for (i = 0; i < locations.data.length; i++) {
            if(locations.data[i]['type'] == 'Maison') {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations.data[i]['lat'], locations.data[i]['lon']),
                    id: i,
                    icon: '../images/marker-single.webp',
                    map: map,
                });
            } else {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations.data[i]['lat'], locations.data[i]['lon']),
                    id: i,
                    icon: '../images/marker-appartement.webp',
                    map: map,
                });
            }
            
            allMarkers.push(marker);
            var ib = new google.maps.InfoWindow();
            console.log(ib)
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    ib.setOptions(boxOptions);
                    // boxText.innerHTML = locations.data[i]['mini_descreption'];
                    boxText.innerHTML = '<div style="display:flex">' + 
                                            '<a href="immobilier-neuf-ile-de-france/' + locations.data[i].department.dpt_slug + '/programme-immobilier-appartement-neuf.php?programme=' + locations.data[i].slug + '&ville=' + locations.data[i].city + '" title="" style="display:flex;flex-wrap:wrap;">' + 
                                                '<img width="180" height="110" src="../' + locations.data[i]['images'][0]['src'] + '" title="' + locations.data[i]['images'][0]['alt'] + '" alt="' + locations.data[i]['images'][0]['alt'] + '" style="object-fit:cover;margin-bottom:10px;margin-left:12px;">' + 
                                                '<div style="display:flex;flex-direction:column;margin-left:12px;max-width:300px;width:100%;">' + 
                                                    '<p style="font-size:16px;font-weight:600;">' + locations.data[i]['title'] + '</p>' + 
                                                    '<p style="font-size:14px;">' + locations.data[i]['mini_descreption'] + '</p>' + 
                                                    '<p style="font-size:14px;">à partir de ' + locations.data[i]['min_price'] + ' € TTC</p>' + 
                                                    '<p style="font-size:14px;text-align:right;">En Savoir +</p>' + 
                                                '</div>'
                                            '</a>' +
                                        '</div>'
                    ib.close();
                    ib.open(map, marker);
                    currentInfobox = marker.id;
                    var latLng = new google.maps.LatLng(locations.data[i]['lat'], locations.data[i]['lon']);
                    map.panTo(latLng);
                    map.panBy(0, -180);
                    google.maps.event.addListener(ib, 'domready', function () {
                        $('.infoBox-close').click(function (e) {
                            e.preventDefault();
                            ib.close();
                        });
                    });
                }
            })(marker, i));
        }
    }

window.initMap = initMap;
</script>

<!-- // Filter & Map Page scripts -->
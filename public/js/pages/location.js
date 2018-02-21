(function($) {
    // Data for the markers consisting of a name, a LatLng and a zIndex for the
    // order in which these markers should display on top of each other.
    var contentString1,
        contentString2,
        contentString3,
        contentString4,
        contentString5,
        mapmakerBig,
        mapmakerSmall;

    contentString1 = '<div id="content" class="map-content">' +
        '<div class="text-center">' +
        '<div class="logo"><a href="index.html" class="header-logo"><img src="assets/images/logo/logo-default.png" alt=""></a></div>' +
        // '<h1 id="firstHeading" class="firstHeading medic-title"></h1>' +
        '<div class="g-address medic-text"><i class="fa fa-home"></i>30 Mortensen Avenue, Salinas, CA 93905</div>' +
        '<div class="g-phone-num medic-phone"><i class="fa fa-phone"></i>+1 - 831 - 758 7214</div>' +
        '</div>' +
        '</div>';
    contentString2 = '<div id="content" class="map-content">' +
        '<div class="text-center">' +
        '<div class="logo"><a href="index.html" class="header-logo"><img src="assets/images/logo/logo-default.png" alt=""></a></div>' +
        // '<h1 id="firstHeading" class="firstHeading medic-title"></h1>' +
        '<div class="g-address medic-text"><i class="fa fa-home"></i>30 Mortensen Avenue, Salinas, CA 93905</div>' +
        '<div class="g-phone-num medic-phone"><i class="fa fa-phone"></i>+1 - 831 - 758 7214</div>' +
        '</div>' +
        '</div>';
    contentString3 = '<div id="content" class="map-content">' +
        '<div class="text-center">' +
        '<div class="logo"><a href="index.html" class="header-logo"><img src="assets/images/logo/logo-default.png" alt=""></a></div>' +
        // '<h1 id="firstHeading" class="firstHeading medic-title"></h1>' +
        '<div class="g-address medic-text"><i class="fa fa-home"></i>30 Mortensen Avenue, Salinas, CA 93905</div>' +
        '<div class="g-phone-num medic-phone"><i class="fa fa-phone"></i>+1 - 831 - 758 7214</div>' +
        '</div>' +
        '</div>';
    contentString4 = '<div id="content" class="map-content">' +
        '<div class="text-center">' +
        '<div class="logo"><a href="index.html" class="header-logo"><img src="assets/images/logo/logo-default.png" alt=""></a></div>' +
        // '<h1 id="firstHeading" class="firstHeading medic-title"></h1>' +
        '<div class="g-address medic-text"><i class="fa fa-home"></i>30 Mortensen Avenue, Salinas, CA 93905</div>' +
        '<div class="g-phone-num medic-phone"><i class="fa fa-phone"></i>+1 - 831 - 758 7214</div>' +
        '</div>' +
        '</div>';
    contentString5 = '<div id="content" class="map-content">' +
        '<div class="text-center">' +
        '<div class="logo"><a href="index.html" class="header-logo"><img src="assets/images/logo/logo-default.png" alt=""></a></div>' +
        // '<h1 id="firstHeading" class="firstHeading medic-title"></h1>' +
        '<div class="g-address medic-text"><i class="fa fa-home"></i>30 Mortensen Avenue, Salinas, CA 93905</div>' +
        '<div class="g-phone-num medic-phone"><i class="fa fa-phone"></i>+1 - 831 - 758 7214</div>' +
        '</div>' +
        '</div>';
    mapmakerBig = 'assets/images/common/map-maker/map-maker.png';
    mapmakerSmall = 'assets/images/common/map-maker/map-maker-small.png';
    var locations = [
        ['Philadelphia', 39.9679831, -75.1641189, 4, contentString1, mapmakerBig],
        ['Upper Darby', 39.9430821, -75.3247042, 5, contentString2, mapmakerSmall],
        ['Upper Providence Township', 39.9381246, -75.4130321, 3, contentString3, mapmakerSmall],
        ['Pennsauken Township', 39.9562293, -75.0571992, 2, contentString4, mapmakerSmall],
        ['North Philadelphia', 40.013489, -75.168425, 1, contentString5, mapmakerSmall]
    ];

    function init() {
        var myLatlng = new google.maps.LatLng(39.9679831, -75.1641189);
        var center_in_screen = new google.maps.LatLng(39.9679831, -75.1641189);
        // If document (your website) is wider than 767px, isDraggable = true, else isDraggable = false
        var isDraggable = true;
        var styles = [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e9e9e9"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 29
            }, {
                "weight": 0.2
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 18
            }]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }, {
                "lightness": 21
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#dedede"
            }, {
                "lightness": 21
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "saturation": 36
            }, {
                "color": "#333333"
            }, {
                "lightness": 40
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f2f2f2"
            }, {
                "lightness": 19
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 17
            }, {
                "weight": 1.2
            }]
        }];
        var styledMap = new google.maps.StyledMapType(styles, { name: "Styled Map" });
        var myOptions = {
            zoom: 11,
            center: center_in_screen,
            mapTypeControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: isDraggable,
            scrollwheel: false,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }

        };

        var map = new google.maps.Map(document.getElementById('map'), myOptions);


        var infowindow = new google.maps.InfoWindow({
            // content: contentString
        });

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: locations[i][5],
                title: 'medic plus'
            });
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');
            console.log(locations[i][4]);
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][4]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
            // map.mapTypes.set('map_style', styledMap);
            // map.setMapTypeId('map_style');
            // marker.addListener('click', function() {
            //     infowindow.open(map, marker);
            // });
        }

        // var marker = new google.maps.Marker({
        //     position: myLatlng,
        //     map: map,
        //     icon: 'assets/images/common/map-maker/map-maker.png',
        //     title: 'medic plus',
        // });


        google.maps.event.addListener(infowindow, 'domready', function() {

            // Reference to the DIV which receives the contents of the infowindow using jQuery
            var iwOuter = $('.gm-style-iw');

            /* The DIV we want to change is above the .gm-style-iw DIV.
             * So, we use jQuery and create a iwBackground variable,
             * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
             */
            var iwBackground = iwOuter.prev();

            // Remove the background shadow DIV
            // iwBackground.css({'display' : 'none'});
            iwBackground.children(':nth-child(2)').css({
                'box-shadow': 'none',
                'background-color': 'transparent',
            });

            //Remove close button
            var iwCloseBtn = iwOuter.next();

            // Remove the white background DIV
            iwBackground.children(':nth-child(4)').css({
                'border': '2px solid #07932e',
            });
            iwBackground.children(':nth-child(3)').find('div').children().css({
                'box-shadow': '#07932e 1px 2px 6px',
                'z-index': '1',
            });

        });

        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;



        $('.location-link').on('click', function() {

            var destination = $(this).data('attr');
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    calculateAndDisplayRoute(directionsService, directionsDisplay, pos, destination);
                });
            }
            directionsDisplay.setMap(map);
        });
    }
    google.maps.event.addDomListener(window, 'load', init);

    //END GOOGLE MAP

    // Set isotope for info-location-content
    setTimeout(function() {
        $('.location-wrapper .row').isotope({
            // options
            itemSelector: '.location-address-content',
            layoutMode: 'masonry'
        });
    }, 1500);

    function calculateAndDisplayRoute(directionsService, directionsDisplay, pos, destination) {
        directionsService.route({
            origin: pos,
            destination: destination,
            travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
            if (status === google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                setTimeout(function() {
                    $('html, body').animate({
                        scrollTop: $("#map").offset().top
                    }, 500);
                }, 500);

            } else {
                window.alert('Directions request failed due to ' + status);
            }

        });
    }
})(jQuery);

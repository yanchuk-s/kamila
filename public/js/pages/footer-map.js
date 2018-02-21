(function ($) {
    // Data for the markers consisting of a name, a LatLng and a zIndex for the
    // order in which these markers should display on top of each other.
    var beaches = [
        ['Bondi Beach', -33.9, 151.151, 1]
    ];
    function init() {
        if($(window).width() > 1199) {
            var center_in_screen = new google.maps.LatLng(39.9765235, -75.1606152 + 0.015); 
        }
        if($(window).width() > 991 && $(window).width() <= 1199) {
            var center_in_screen = new google.maps.LatLng(39.9765235, -75.1606152 + 0.01); 
        }
        if($(window).width() > 767 && $(window).width() <= 991) {
            var center_in_screen = new google.maps.LatLng(39.9765235, -75.1606152 + 0.008); 
        }
        if($(window).width() < 768) {
            var center_in_screen = new google.maps.LatLng(39.9765235, -75.1606152); 
        }
        var myLatlng = new google.maps.LatLng(39.9765235, -75.1606152); 
        // If document (your website) is wider than 767px, isDraggable = true, else isDraggable = false
        var isDraggable = $(document).width() > 767 ? true : false;
        var styles = [
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e9e9e9"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dedede"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#333333"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            }
        ];
        var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});
        var myOptions = {
            zoom: 15,
            center: center_in_screen,
            mapTypeControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: isDraggable,
            scrollwheel: false,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }

        };
        var contentString = '<div id="content">' +
            '</div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var map = new google.maps.Map(document.getElementById('map'), myOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: 'assets/images/common/map-maker/map-maker.png',
            title: 'medic plus',
        });
        var contentString = '<div id="content" class="map-content">' +
            '<div class="text-center">' +
            '<div class="logo"><a href="index.html" class="header-logo"><img src="assets/images/logo/logo-default.png" alt=""></a></div>'+
            // '<h1 id="firstHeading" class="firstHeading medic-title"></h1>' +
            '<div class="g-address medic-text"><i class="fa fa-home"></i>30 Mortensen Avenue, Salinas, CA 93905</div>' +
            '<div class="g-phone-num medic-phone"><i class="fa fa-phone"></i>+1 - 831 - 758 7214</div>' +
            '</div>' +
            '</div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
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
                'box-shadow' : 'none',
                'background-color': 'transparent',
            });

            //Remove close button
            var iwCloseBtn = iwOuter.next();

            // Remove the white background DIV
            iwBackground.children(':nth-child(4)').css({
                'border' : '2px solid #07932e',
            });
            iwBackground.children(':nth-child(3)').find('div').children().css({
                'box-shadow': '#07932e 1px 2px 6px', 
                'z-index' : '1',
            });

        });
    }
    google.maps.event.addDomListener(window, 'load', init);

    //END GOOGLE MAP

    // HEIGHT EQUAL
    $(window).on('resize load', function() {
        var HeightContactForm = $('.contact-form-wrapper').height(),
            offsetContact = $('.contact-form-wrapper').offset().left;
        if($(window).width() < 768) {
           $('#map').css({
                'height': $('.contact-form-wrapper .contact-form-content.right').height()*0.9,
                "left": -offsetContact
            }); 
        }
        else {
            $('#map').css({
                'height': HeightContactForm,
                "left": -offsetContact
            });
        }
    });
})(jQuery);
@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">

            <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                    <!-- main content -->
                    <div class="container-fluid">
                        <h2>Maps</h2>
                        <p class="lead">
                            Customize maps with your own content and imagery.
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Base Maps
                                        </h4>
                                        <div>
                                            Basic default maps.
                                        </div>
                                    </div>
                                    <div id="map"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Styled Maps
                                        </h4>
                                        <div>
                                            Custom styled maps with controls.
                                        </div>
                                    </div>
                                    <div id="style-selector-control" class="map-control">
                                        <select id="style-selector" class="selector-control">
            <option value="default">Default</option>
            <option value="silver">Silver</option>
            <option value="night">Night mode</option>
            <option value="retro" selected="selected">Retro</option>
            <option value="hiding">Hide features</option>
          </select>
                                    </div>
                                    <div id="styled-map"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Satellite-map
                                        </h4>
                                        <div>
                                            View maps as seen from the satellites in orbit.
                                        </div>
                                    </div>
                                    <div id="satellite-map"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Directions Map
                                        </h4>
                                        <div>
                                            Maps that show directions to specific places.
                                        </div>
                                    </div>
                                    <div id="directions-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



    <script>
            (function() {
                'use strict';
                // Self Initialize DOM Factory Components
                domFactory.handler.autoInit()


                // Connect button(s) to drawer(s)
                var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')

                sidebarToggle.forEach(function(toggle) {
                    toggle.addEventListener('click', function(e) {
                        var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                        var drawer = document.querySelector(selector)
                        if (drawer) {
                            if (selector == '#default-drawer') {
                                $('.container-fluid').toggleClass('container--max');
                            }
                            drawer.mdkDrawer.toggle();
                        }
                    })
                })
            })()
        </script>


        <script>
            function initMap() {
                const uluru = {
                    lat: -25.363,
                    lng: 131.044
                }
                let map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: uluru,
                    gestureHandling: 'cooperative'
                })

                let uluruMarker = new google.maps.Marker({
                    position: uluru,
                    map: map
                })

                const styles = {
                    default: null,
                    silver: [{
                            elementType: 'geometry',
                            stylers: [{
                                color: '#f5f5f5'
                            }]
                        },
                        {
                            elementType: 'labels.icon',
                            stylers: [{
                                visibility: 'off'
                            }]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#616161'
                            }]
                        },
                        {
                            elementType: 'labels.text.stroke',
                            stylers: [{
                                color: '#f5f5f5'
                            }]
                        },
                        {
                            featureType: 'administrative.land_parcel',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#bdbdbd'
                            }]
                        },
                        {
                            featureType: 'poi',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#eeeeee'
                            }]
                        },
                        {
                            featureType: 'poi',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#757575'
                            }]
                        },
                        {
                            featureType: 'poi.park',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#e5e5e5'
                            }]
                        },
                        {
                            featureType: 'poi.park',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#9e9e9e'
                            }]
                        },
                        {
                            featureType: 'road',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#ffffff'
                            }]
                        },
                        {
                            featureType: 'road.arterial',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#757575'
                            }]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#dadada'
                            }]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#616161'
                            }]
                        },
                        {
                            featureType: 'road.local',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#9e9e9e'
                            }]
                        },
                        {
                            featureType: 'transit.line',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#e5e5e5'
                            }]
                        },
                        {
                            featureType: 'transit.station',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#eeeeee'
                            }]
                        },
                        {
                            featureType: 'water',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#c9c9c9'
                            }]
                        },
                        {
                            featureType: 'water',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#9e9e9e'
                            }]
                        }
                    ],

                    night: [{
                            elementType: 'geometry',
                            stylers: [{
                                color: '#242f3e'
                            }]
                        },
                        {
                            elementType: 'labels.text.stroke',
                            stylers: [{
                                color: '#242f3e'
                            }]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#746855'
                            }]
                        },
                        {
                            featureType: 'administrative.locality',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#d59563'
                            }]
                        },
                        {
                            featureType: 'poi',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#d59563'
                            }]
                        },
                        {
                            featureType: 'poi.park',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#263c3f'
                            }]
                        },
                        {
                            featureType: 'poi.park',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#6b9a76'
                            }]
                        },
                        {
                            featureType: 'road',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#38414e'
                            }]
                        },
                        {
                            featureType: 'road',
                            elementType: 'geometry.stroke',
                            stylers: [{
                                color: '#212a37'
                            }]
                        },
                        {
                            featureType: 'road',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#9ca5b3'
                            }]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#746855'
                            }]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'geometry.stroke',
                            stylers: [{
                                color: '#1f2835'
                            }]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#f3d19c'
                            }]
                        },
                        {
                            featureType: 'transit',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#2f3948'
                            }]
                        },
                        {
                            featureType: 'transit.station',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#d59563'
                            }]
                        },
                        {
                            featureType: 'water',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#17263c'
                            }]
                        },
                        {
                            featureType: 'water',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#515c6d'
                            }]
                        },
                        {
                            featureType: 'water',
                            elementType: 'labels.text.stroke',
                            stylers: [{
                                color: '#17263c'
                            }]
                        }
                    ],

                    retro: [{
                            elementType: 'geometry',
                            stylers: [{
                                color: '#ebe3cd'
                            }]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#523735'
                            }]
                        },
                        {
                            elementType: 'labels.text.stroke',
                            stylers: [{
                                color: '#f5f1e6'
                            }]
                        },
                        {
                            featureType: 'administrative',
                            elementType: 'geometry.stroke',
                            stylers: [{
                                color: '#c9b2a6'
                            }]
                        },
                        {
                            featureType: 'administrative.land_parcel',
                            elementType: 'geometry.stroke',
                            stylers: [{
                                color: '#dcd2be'
                            }]
                        },
                        {
                            featureType: 'administrative.land_parcel',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ae9e90'
                            }]
                        },
                        {
                            featureType: 'landscape.natural',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#dfd2ae'
                            }]
                        },
                        {
                            featureType: 'poi',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#dfd2ae'
                            }]
                        },
                        {
                            featureType: 'poi',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#93817c'
                            }]
                        },
                        {
                            featureType: 'poi.park',
                            elementType: 'geometry.fill',
                            stylers: [{
                                color: '#a5b076'
                            }]
                        },
                        {
                            featureType: 'poi.park',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#447530'
                            }]
                        },
                        {
                            featureType: 'road',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#f5f1e6'
                            }]
                        },
                        {
                            featureType: 'road.arterial',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#fdfcf8'
                            }]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#f8c967'
                            }]
                        },
                        {
                            featureType: 'road.highway',
                            elementType: 'geometry.stroke',
                            stylers: [{
                                color: '#e9bc62'
                            }]
                        },
                        {
                            featureType: 'road.highway.controlled_access',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#e98d58'
                            }]
                        },
                        {
                            featureType: 'road.highway.controlled_access',
                            elementType: 'geometry.stroke',
                            stylers: [{
                                color: '#db8555'
                            }]
                        },
                        {
                            featureType: 'road.local',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#806b63'
                            }]
                        },
                        {
                            featureType: 'transit.line',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#dfd2ae'
                            }]
                        },
                        {
                            featureType: 'transit.line',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#8f7d77'
                            }]
                        },
                        {
                            featureType: 'transit.line',
                            elementType: 'labels.text.stroke',
                            stylers: [{
                                color: '#ebe3cd'
                            }]
                        },
                        {
                            featureType: 'transit.station',
                            elementType: 'geometry',
                            stylers: [{
                                color: '#dfd2ae'
                            }]
                        },
                        {
                            featureType: 'water',
                            elementType: 'geometry.fill',
                            stylers: [{
                                color: '#b9d3c2'
                            }]
                        },
                        {
                            featureType: 'water',
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#92998d'
                            }]
                        }
                    ],

                    hiding: [{
                            featureType: 'poi.business',
                            stylers: [{
                                visibility: 'off'
                            }]
                        },
                        {
                            featureType: 'transit',
                            elementType: 'labels.icon',
                            stylers: [{
                                visibility: 'off'
                            }]
                        }
                    ]
                }

                const sydney = {
                    lat: -33.86,
                    lng: 151.209
                }
                let styledMap = new google.maps.Map(document.getElementById('styled-map'), {
                    center: sydney,
                    gestureHandling: 'cooperative',
                    zoom: 13,
                    mapTypeControl: false
                })

                let sydneyMarker = new google.maps.Marker({
                    position: sydney,
                    map: styledMap
                })

                let styleControl = document.getElementById('style-selector-control')
                styledMap.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl)

                let styleSelector = document.getElementById('style-selector')
                styledMap.setOptions({
                    styles: styles[styleSelector.value]
                })

                styleSelector.addEventListener('change', function() {
                    styledMap.setOptions({
                        styles: styles[styleSelector.value]
                    })
                })

                const satellite = {
                    lat: -34.397,
                    lng: 150.644
                }
                let satelliteMap = new google.maps.Map(document.getElementById('satellite-map'), {
                    center: satellite,
                    gestureHandling: 'cooperative',
                    mapTypeId: 'satellite',
                    zoom: 8
                })

                let satelliteMarker = new google.maps.Marker({
                    position: satellite,
                    map: satelliteMap
                })

                const chicago = {
                    lat: 41.85,
                    lng: -87.65
                }
                const indianapolis = {
                    lat: 39.79,
                    lng: -86.14
                }

                let directionsMap = new google.maps.Map(document.getElementById('directions-map'), {
                    center: chicago,
                    gestureHandling: 'cooperative',
                    zoom: 7
                })

                let directionsDisplay = new google.maps.DirectionsRenderer({
                    map: directionsMap
                })

                const request = {
                    destination: indianapolis,
                    origin: chicago,
                    travelMode: 'DRIVING'
                }

                let directionsService = new google.maps.DirectionsService()
                directionsService.route(request, function(response, status) {
                    if (status == 'OK') {
                        directionsDisplay.setDirections(response)
                    }
                })
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYpjo2t906ezz24mEyWfaon8UFwJdwHzY&amp;callback=initMap" async defer></script>



    </div>
</div>
@stop

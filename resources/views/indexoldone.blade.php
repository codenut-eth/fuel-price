<?php header("Access-Control-Allow-Origin: *"); ?>

@extends('layouts.app')

@section('title', 'Fuel Prices')

@section('content')
    <style>
        @media (max-width: 767px) {
            .form-control {
                /* Padding for mobile devices */
            }
        }

        /* Default behavior (visible on larger screens) */
        .nav-link.active.show.sidebara.sidebar18 {
            display: block;
        }

        /* Media query for mobile devices */
        @media (max-width: 767px) {
            li.nav-item18 {
                display: none;
            }
        }

        @media (max-width: 767px) {
            span.select2-selection.select2-selection--single {
                width: 85%;
                /* Apply 70% width on mobile devices */
            }
        }

        @media (max-width: 767px) {
            .custom-file {
                width: 85%;
                /* Apply 70% width on mobile devices */
            }
        }

        @media (max-width: 767px) {
            .modal-footer {
                display: block;
                /* Override flex display on mobile devices */
            }
        }

        @media (max-width: 767px) {
            button.btn.btn-primary {
                margin-top: -67px;
                margin-left: 225px;
            }
        }

        @media (max-width: 767px) {
            input#searchadd {
            }
        }

        @media (max-width: 767px) {
            .col-lg-6.mb-6.mb-lg-0 {
                margin-left: 10px;
            }
        }

        .searchbar {
            margin-top: 80px !important;
        }
	
    </style>
		
	<div class="container-fluid d-sm-none d-block no-float">
    	
		<div class="row" style="margin-top:30px;">
		<div class="cols-xs-12">
		@foreach($advertisements as $advertisement)
			<img id="topadvertisement" class="img-fluid" src="{{asset('assets/img/advertisement.jpg')}}" width="1450" height="60px"/>	
		@endforeach
		</div>
		</div>
		
		<div class="row">
		<div class="col-xs-8">
		 <div class="tab-content">
                        <div class="tab-pane active show" id="">
                            <figure>
                                <div id="">

                                </div>
                            </figure>
                        </div>

         </div>
         </div>
			<div class="col-xs-2 no-float">
				@foreach($advertisements as $advertisement)
					<img class="img-fluid img-responsive" src="{{asset('assets/img/advertisement1.jpg')}}" width="30px" height="300px"/>	
				@endforeach
			</div>
		</div>
	
	</div>
	
	
	
  <div class="container-fluid  searchbar d-sm-block d-none">
    	<div class="row">
		<div class="cols-md-12 cols-xs-12">
		@foreach($advertisements as $advertisement)
			<img id="topadvertisement" class="img-fluid" src="{{asset('assets/img/advertisement.jpg')}}" width="1450" height="50"/>	
		@endforeach
		</div>
		</div>
    
        <div class="row">
            <div class="col-md-3 sidebarUSER2">
                <div class="mb-3 mb-lg-0 stationresults">
                    {{--<ul class="nav nav-tabs flex-column" id="showresults">--}}
                    {{--<ul class="nav nav-tabs" id="showresults">
                    </ul>--}}
                    <div id="showresults" class="row"></div>
                </div>
            </div>
            <div class="col-md-8 col-xs-10 rightUSER">
                <div class=" ml-auto" data-aos="fade-left">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="">
                            <figure>
                                <div id="map">

                                </div>
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
			<div class="col-md-1 col-xs-2 rightUSER">
				@foreach($advertisements as $advertisement)
					<img class="img-fluid img-responsive" src="{{asset('assets/img/advertisement1.jpg')}}" style=""  width="100%" height="auto"/>	
				@endforeach
			</div>
			
        </div>

</div>

	<!-- End Features Section -->
    @include('partials.add_modal')

@endsection

@push('scripts')
    <script src="https://maps.gomaps.pro/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMap&loading=async"
        async defer onerror="handleMapError()"></script>
    {{--<script async defer src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&sensor=true&libraries=places&callback=initMap"></script>--}}
    <script>
        //console.log('ready');

        var map;
        var InforObj = [];
        var markersOnMap = [];
        let selectedMarker = null; // Store the currently selected marker
			window.initMap = initMap; // important!

		async function initMap() 
		{
			
			const { Map } = await google.maps.importLibrary("maps");
			const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
			const {PinElement} = await google.maps.importLibrary("marker");

			var mapElement = document.getElementById('map');
            if (!mapElement) {
                console.log('Map element not found');
                return;
            }
	
				if (navigator.geolocation) 
				{		
						var pos={
							lat: 0,
							lng: 0
						}; // Default center
						
						navigator.geolocation.getCurrentPosition(function(position) 
						{
						  var pos = 
						  {
							lat: position.coords.latitude,
							lng: position.coords.longitude
						  };
						  
						
						/*
						var centerCords = {
							lat: lat1,
							lng: lng1
						}; // Default center
						
						if (markersOnMap.length > 0) 
						{
							centerCords = markersOnMap[0].LatLng; // Center on first marker
						}
						*/
						
						map = new google.maps.Map(mapElement, {
							zoom: 17,
							mapId: "DEMO_MAP_ID", 
							center: pos
						});
				});
				
							  const { Place } = await google.maps.importLibrary("places");
					
							const place = new Place({
							  id: "ChIJN5Nz71W3j4ARhx5bwpTQEGg",
							});

							// Call fetchFields, passing the desired data fields.
							await place.fetchFields({
							  fields: [
								"location",
								"displayName",
								"svgIconMaskURI",
								"iconBackgroundColor",
							  ],
							});
							
							
							const pin = new PinElement({
							  background: place.iconBackgroundColor,
							  glyph: new URL(String(place.svgIconMaskURI)),
							});
							const pinElement = pin.Element;

					  const marker = new AdvancedMarkerElement({
						  map,
						  position: pos,
						  content: pinElement,
						  title:'Current_Position'
					  });				  

				markersOnMap.forEach(function(markerData) {
				
				const htmlString = `<div style="cursor: pointer;" class="contentmarker" onclick="myFunction(${markerData.idofmap})" id="content${markerData.idofmap}">
                        ${markerData.placeName}
                    </div`;

				// Create a DOM element
				const wrapper = document.createElement('div');
				wrapper.innerHTML = htmlString;
				const contentElement = wrapper.firstElementChild;

				
				const marker = new AdvancedMarkerElement({
						  map,
						  position:markerData.LatLng,
					   content:contentElement
					  });				  

                var infowindow = new google.maps.InfoWindow({
                    content: contentElement,
                    maxWidth: 200
                });

                // marker.set('infowindow', infowindow);
					infowindow.open({
					  map: map,
					  position: marker.position
					});

                InforObj[0] = infowindow;
				marker.addEventListener('gmp-click', () => {
                    // closeOtherInfo();
                    infowindow.open(map, marker);
                    InforObj[0] = infowindow;
                });

                // marker.addListener('mouseover', function () {
                //     updatePriceListByVisibleMarkers();
                //
                // });
                // marker.addListener('mouseout', function () {
                //     updatePriceListByVisibleMarkers();
                // });

                // You can also listen for zoom or drag events on the map to update the price list
                google.maps.event.addListener(map, 'bounds_changed', function() {
                    updatePriceListByVisibleMarkers();
                });
            });
				   
				}
				
		 
		}
		window.initMap = initMap; // important!

		
        // Add markers to the map
        function addMarkerInfo() {
            markersOnMap.forEach(function(markerData) {
				
				var contentString = `
                    <div style="cursor: pointer;" class="contentmarker" onclick="myFunction(${markerData.idofmap})" id="content${markerData.idofmap}">
                        ${markerData.placeName}
                    </div>
                `;
				
				const marker = new AdvancedMarkerElement({
						  map,
						  position:markerData.LatLng,
					    icon:null,
						content:contentString
					  });				  

              
                var infowindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 200
                });

                // marker.set('infowindow', infowindow);
                infowindow.open(marker.get('map'), marker);
                InforObj[0] = infowindow;

                marker.addListener('click', function() {
                    // closeOtherInfo();
                    infowindow.open(map, marker);
                    InforObj[0] = infowindow;
                });

                // marker.addListener('mouseover', function () {
                //     updatePriceListByVisibleMarkers();
                //
                // });
                // marker.addListener('mouseout', function () {
                //     updatePriceListByVisibleMarkers();
                // });

                // You can also listen for zoom or drag events on the map to update the price list
                google.maps.event.addListener(map, 'bounds_changed', function() {
                    updatePriceListByVisibleMarkers();
                });
            });
        }


        // Function to update the price list based on visible markers
        function updatePriceListByVisibleMarkers() {
            // Get current map bounds (visible area)
            var bounds = map.getBounds();

            // Filter markers that are within the current bounds
            var visibleMarkers = markersOnMap.filter(function(markerData) {
                var position = new google.maps.LatLng(markerData.LatLng.lat, markerData.LatLng.lng);
                return bounds.contains(position);
            });

            // Render the visible markers' stations in the sidebar
            makeVisiblePricesUpdate(visibleMarkers);
        }


        // Function to render only the visible stations
        function makeVisiblePricesUpdate(visibleMarkers) {
            // Create a Set of visible marker IDs for easy lookup
            var visibleMarkerIds = new Set(visibleMarkers.map(function(marker) {
                return marker.idofmap;
            }));

            // Get all sidebar items
            var allSidebarItems = document.querySelectorAll('.sidebara');

            // // Loop through all sidebar items
            allSidebarItems.forEach(function(sidebarItem) {
                // Extract the station ID from the sidebar item's class name
                var stationId = sidebarItem.className.match(/sidebar(\d+)/)[1];

                // Check if the station ID exists in the visible markers set
                if (visibleMarkerIds.has(parseInt(stationId))) {
                    // If the station ID is in the visible markers, show the item
                    // sidebarItem.parentElement.style.display = 'block';
                    sidebarItem.style.display = 'block';
                } else {
                    // If the station ID is not in the visible markers, hide the item
                    // sidebarItem.parentElement.style.display = 'none';
                    sidebarItem.style.display = 'block';
                }
            });
        }


        function myFunction(p1) {
            // alert(p1);
            //jQuery(".sidebarcontents").hide();
            //document.getElementsByClassName("sidebarcontents").style.visibility = 'hidden';
            /*var y =document.getElementsByClassName("sidebarcontents");
            x.style.display = "none";*/
            for (var h = 0; h < markersOnMap.length; h++) {
                document.getElementsByClassName('sidebarcontents')[h].style.display = 'none';
                document.getElementsByClassName('sidebara')[h].style.display = 'none';
            }
            var x = document.getElementsByClassName("sidebarcontent" + p1)[0];
            x.style.display = "block";
        }
        // Close any open InfoWindow
        function closeOtherInfo() {
            if (InforObj.length > 0) {
                /* detach the info-window from the marker ... undocumented in the API docs */
                InforObj[0].set("marker", null);
                /* and close it */
                InforObj[0].close();
                /* blank the array */
                InforObj.length = 0;
            }
        }


        // Initialize Autocomplete
        // window.initAutocomplete = function() {
        //     var autocomplete = new google.maps.places.Autocomplete(
        //         document.getElementById('searchadd'),
        //         { types: ['geocode'] }
        //     );
        //
        //     autocomplete.addListener('place_changed', function () {
        //         var place = autocomplete.getPlace();
        //         if (!place.geometry) {
        //             alert("No details available for input: '" + place.name + "'");
        //             return;
        //         }
        //
        //         map.setCenter(place.geometry.location);
        //         map.setZoom(17);
        //
        //
        //     });
        // }

        // Fetch and render 
		
        function fetchPrices(searchadd = '') {
	        $.ajax({
                type: "POST",
                url: "{{ route('fuel_prices.results') }}",
                data: {
                    searchadd: searchadd,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // console.log(response.stations);
                    if (response.stations.length > 0) {
                        renderPrices(response.stations);
                    } else {
                        $('#showresults').html(
                            '<p style="text-align:center;margin-top:200px;color:red;font-weight:900">No Data Found</p>'
                        );
						
						var pos={
							lat: 0,
							lng: 0
						}; // Default center
						
						navigator.geolocation.getCurrentPosition(function(position) 
						{
						  var pos = 
						  {
							lat: position.coords.latitude,
							lng: position.coords.longitude
						  };
						  
                        if (map) {
                            map.setCenter(	pos	);
                        }
						});
						
                    }
          
		  },
                error: function() {
                    alert('An error occurred while fetching data.');
                }
            });
        }
		
        // Render stations in the sidebar and set markers
        function renderPrices(stations) {
            var html = '';
            markersOnMap = []; // Reset markers

            stations.forEach(function(station) {
					var lat1;
					var lng1;
				navigator.geolocation.getCurrentPosition(function(position) 
						{
						lat1=position.coords.latitude;
						lng1=position.coords.longitude;
						localStorage.setItem("lat1",lat1);
						localStorage.setItem("lng1",lng1);
				var geolocation = station.geolocation ? station.geolocation.split(',') : [0, 0];
                var lat = parseFloat(geolocation[0]);
                var lng = parseFloat(geolocation[1]);
			    if (lat !== 0 && lng !== 0 && !isNaN(lat) && !isNaN(lng)) 
				{
                    // Add to markersOnMap array	
						if ( parseFloat(lat1) < 0 && parseFloat(lat) < 0  && parseFloat(lat1-1) <= parseFloat(lat)
							&&
							parseFloat(lng1) < 0 && parseFloat(lng) < 0  && parseFloat(lng1-1) <= parseFloat(lng)
							&& station.approver=='super_admin'
							)
						{
							html += makePriceItem(station);
							markersOnMap.push({
								placeName: `<div id='markerDiv${station.id}'><div class='pumpbefore6am'>${station.before6amprice}</div><div class='pumpafter6am'>${station.after6amprice}</div><div class='pumpname'>${station.station_name}</div></div>`,
								LatLng: {
									lat: lat,
									lng: lng
								},
								idofmap: station.id
							});
						}
						else if( parseFloat(lat1) > 0 && parseFloat(lat) > 0  && parseFloat(lat1+1) >= parseFloat(lat)
							&&
							parseFloat(lng1) > 0 && parseFloat(lng) > 0  && parseFloat(lng1-1) >= parseFloat(lng)
								&& station.approver=='super_admin'
						
							)
							{
							markersOnMap.push({
								placeName: `<div id='markerDiv${station.id}'><div class='pumpbefore6am'>${station.before6amprice}</div><div class='pumpafter6am'>${station.after6amprice}</div><div class='pumpname'>${station.station_name}</div></div>`,
								LatLng: {
									lat: lat,
									lng: lng
								},
								idofmap: station.id
							});
						}
						else if( parseFloat(lat1) < 0 && parseFloat(lat) < 0  && parseFloat(lat1-1) <= parseFloat(lat)
							&&
							parseFloat(lng1) > 0 && parseFloat(lng) > 0  && parseFloat(lng1+1) >= parseFloat(lng)
								&& station.approver=='super_admin'
						
							)
							{
						
							markersOnMap.push({
								placeName: `<div id='markerDiv${station.id}'><div class='pumpbefore6am'>${station.before6amprice}</div><div class='pumpafter6am'>${station.after6amprice}</div><div class='pumpname'>${station.station_name}</div></div>`,
								LatLng: {
									lat: lat,
									lng: lng
								},
								idofmap: station.id
							});
						}
						else if( parseFloat(lat1) > 0 && parseFloat(lat) > 0  && parseFloat(lat1+1) >= parseFloat(lat)
							&&
							parseFloat(lng1) < 0 && parseFloat(lng) < 0  && parseFloat(lng1-1) <= parseFloat(lng)
								&& station.approver=='super_admin'
						
							)
							{
						
							markersOnMap.push({
								placeName: `<div id='markerDiv${station.id}'><div class='pumpbefore6am'>${station.before6amprice}</div><div class='pumpafter6am'>${station.after6amprice}</div><div class='pumpname'>${station.station_name}</div></div>`,
								LatLng: {
									lat: lat,
									lng: lng
								},
								idofmap: station.id
							});
						}
						
						
                    console.log('lat: ' + lat);
                    console.log('lng: ' + lng);
					}
                		});
				
                // Sidebar content
			
		//html += makePriceItem(station);
		    
                // colorStars(station.averageRating); // Dynamically color the stars based on the average rating
            });


			stations.forEach(function(station) 
			{
				var geolocation = station.geolocation ? station.geolocation.split(',') : [0, 0];
                var lat = parseFloat(geolocation[0]);
                var lng = parseFloat(geolocation[1]);
				var lat1= localStorage.getItem("lat1");
				var lng1= localStorage.getItem("lng1");
				
			    if (lat !== 0 && lng !== 0 && !isNaN(lat) && !isNaN(lng)) 
				{
                    // Add to markersOnMap array	
					if ( parseFloat(lat1) < 0 && parseFloat(lat) < 0  && parseFloat(lat1-1) <= parseFloat(lat)
							&&
							parseFloat(lng1) < 0 && parseFloat(lng) < 0  && parseFloat(lng1-1) <= parseFloat(lng)
							&& station.approver=='super_admin'
							)
							{
								html += makePriceItem(station);
							}
					else if( parseFloat(lat1) > 0 && parseFloat(lat) > 0  && parseFloat(lat1+1) >= parseFloat(lat)
							&&
							parseFloat(lng1) > 0 && parseFloat(lng) > 0  && parseFloat(lng1-1) >= parseFloat(lng)
								&& station.approver=='super_admin'
						
							)
							{
								html += makePriceItem(station);
							}
							else if( parseFloat(lat1) < 0 && parseFloat(lat) < 0  && parseFloat(lat1-1) <= parseFloat(lat)
							&&
							parseFloat(lng1) > 0 && parseFloat(lng) > 0  && parseFloat(lng1+1) >= parseFloat(lng)
								&& station.approver=='super_admin'
						
							)
							{
								html += makePriceItem(station);
						
							}
					else if( parseFloat(lat1) > 0 && parseFloat(lat) > 0  && parseFloat(lat1+1) >= parseFloat(lat)
							&&
							parseFloat(lng1) < 0 && parseFloat(lng) < 0  && parseFloat(lng1-1) <= parseFloat(lng)
								&& station.approver=='super_admin'
						
							)
							{
								html += makePriceItem(station);
							}
				}	

			});
		    // Inject HTML
            $('#showresults').html(html);

            // Now that the map container (#map) is in the DOM, initialize the map
            initMap();

            // Attach event listeners
            attachEventListeners();
        }

        function makePriceItem(station) {
			
            return `<div class="col-md-12 ${station.id}">
                    <a class="nav-link active show sidebara sidebar${station.id}" data-toggle="tab" href="#tab-${station.id}">
						   <div class="container mt-0" style="margin-left:-50px;height:100px;">
							  <div class="d-flex p-3 bg-white">  
								<div class="p-2 bg-default">
								
								<div class="station-prices" style="text-align: left;">
									<div class="price-today">
										<h4 style="color: #e63946; font-size: 15px; margin-bottom: 5px;">
											${station.before6amprice ? station.before6amprice : 'N/A'}
										</h4>
										<small style="font-size: 12px; font-weight: bold;">Today</small>
									</div>
									<div class="price-tomorrow">
										<h4 style="font-size: 14px; margin-bottom: 5px;">
											${station.after6amprice ? station.after6amprice : 'N/A'}
										</h4>
										<small style="font-size: 10px;">Tomorrow</small>
									</div>
								</div>

								</div>
								<div class="p-2 bg-default">
									<div class="station-info" style="text-align: center;width:100px;">
									<p style="font-size: 15px; font-weight: bold;">
										${station.station_name}
									</p>
									<p style="font-size: 12px; margin-top: 5px;">
										${station.street_address}
									</p>
									</div>
								</div>
								<div class="p-2 bg-default">
									<div class="station-logo" style="">
									<img src="{{ asset('assets/img/fuel-logo.png') }}" alt="${station.station_name} Logo" style="height: 50px; width:auto; align:right;" />
									</div>
								</div>
							  </div>
							</div>
                    </a>
                    <div class="sidebarcontents sidebarcontent${station.id}" style="padding:15px; border:none; background: transparent; display:none">
                        <div class="row">
                            <div class="col-sm-4" style="margin-top:15px;margin-bottom:15px">
                                <button class="btn btn-primary backbtn" style="font-size: 11px;line-height: 0.5;border:1px solid lightgrey">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                </button>
                            </div>
                            <div class="col-sm-8" style="margin-top:15px;margin-bottom:15px">
                                <p>${station.station_name}</p>
                            </div>
                            <div class="col-sm-12" style="border-top:1px solid lightgrey;border-bottom:1px solid lightgrey">
                                <p style="margin-bottom: 0px;padding-top: 10px;padding-bottom:10px">
                                    <i class="fa fa-location-arrow"></i> ${station.street_address}
                                </p>
                            </div>
                            <div class="col-sm-12" style="border-top:1px solid lightgrey;border-bottom:1px solid lightgrey">
                                <p style="margin-bottom: 0px;padding-top: 10px;padding-bottom:10px">
                                    <i class="fa fa-phone" aria-hidden="true"></i> ${station.phone_no}
                                </p>
                            </div>
                        </div>
                    <div class="row" style="margin-top:15px;margin-bottom:15px;">
                        <div class="col-sm-12" style=""><h4 style="margin-bottom: 0px;font-family: sans-serif;font-size: 18px;font-weight: 700;padding-bottom:20px">ULP prices</h4>

                        </div>
                        <div class="col-sm-6" style="text-align: center;"><h4 style="    margin-bottom: 0px;    font-family: sans-serif;">${station.before6amprice}</h4>
                            <small>Before 6am</small>
                        </div>


                        <div class="col-sm-6" style="text-align: center;"><h4 style="    margin-bottom: 0px;    font-family: sans-serif;">${station.after6amprice}</h4>
                            <small>After 6am</small>
                        </div>

                        </div>
                        <div class="row" style="padding-top:30px;padding-bottom:30px;border-top:1px solid lightgrey;border-bottom:1px solid lightgrey;">
                            <div class="col-sm-12">
                                <a class='btn btn-danger' style="background: rebeccapurple;width: 100%;" target="_blank" href='https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(station.geolocation)}'>
                                    Get Directions
                                </a>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <a class='btn btn-danger' style="background: #299ef4;width: 100%;" href='#'>
                                    Update Prices
                                </a>
                            </div>
                            <div class="col-sm-12 mt-2">
                                ${getStarsHtml(station.averageRating)}  <!-- Display stars dynamically -->
                                <span class="ml-2 feedback-count" style="cursor: pointer;" data-station-id="${station.station_id}" onclick="showFeedbacks(${station.id})">
                                    (${station.feedbackCount} reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Modal for Feedback -->
                    <div class="modal fade" id="feedbackModal${station.id}"  tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel${station.id}" aria-hidden="true" data-station-id="${station.station_id}">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="feedbackModalLabel${station.id}">Feedback for ${station.station_name}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Feedback list will be loaded here dynamically -->
                                    <ul id="feedbackList${station.id}">
                                        <!-- Feedback items will be inserted here -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`
		}

        // Attach event listeners for sidebar navigation using event delegation
        function attachEventListeners() {
            // Handle sidebar item clicks
            $(document).on('click', '.sidebara', function() {
                var id = $(this).attr('class').match(/sidebar(\d+)/)[1];

                // Hide all .nav-item elements (sidebar list items)
                // $('.nav-item').hide();

                $(".sidebara").hide();

                // Hide all .sidebarcontents elements (detailed content)
                $('.sidebarcontents').hide();

                // Show the specific sidebarcontent for the clicked station
                $('.sidebarcontent' + id).show();

                // here I need to add border as actual selected into marker item on map
                // Add a border to the corresponding marker on the map
                highlightMarker(id);
            });

            // Handle back button clicks using delegation
            $(document).on('click', '.backbtn', function() {
                // Hide all .sidebarcontents elements
                //$('.sidebarcontents').hide();
                $(this).closest('.sidebarcontents').hide();
                $(".sidebara").show();
                $('.sidebarcontents').hide();
                $(".stationresults").show();
                // $(".sidebara").show();
                // Remove the highlighted border from the selected marker
                if (selectedMarker) {
                    resetMarkerStyle(selectedMarker);
                    selectedMarker = null; // Reset the selected marker
                }

                updatePriceListByVisibleMarkers();

                // Show all .nav-item elements (restore the sidebar list)
                // $('.nav-item').show();
            });
			

            // Handle marker content clicks
            $(document).on('click', '.contentmarker', function() {
                var id = $(this).attr('id').replace('content', '');

                // Hide all .nav-item elements (sidebar list items)
                // $('.nav-item').hide();

                $(".sidebara").hide();

                // Hide all .sidebarcontents elements
                $('.sidebarcontents').hide();

                // Show the specific sidebarcontent for the clicked marker
                $('.sidebarcontent' + id).show();

                // Add a border to the corresponding marker on the map99997
                highlightMarker(id);
            });
        }


        // Function to add a highlight (border) to the selected marker
        function highlightMarker(id) {
            if (selectedMarker) {
                resetMarkerStyle(selectedMarker); // Reset the previously selected marker
            }

            // Find the marker corresponding to the stationId
            let marker = markersOnMap.find(function(markerData) {
                return markerData.idofmap == id;
            });

            // console.log(marker)

            if (marker) {
                // Highlight the sidebar element for the marker
                var markerDiv = document.getElementById('markerDiv' + id);
                if (markerDiv) {
                    markerDiv.style.border = "2px solid red"; // Set border to highlight
                }

                selectedMarker = marker; // Store the selected marker
            }
        }

        // Function to reset the marker style to its default
        function resetMarkerStyle(markerData) {
            if (markerData) {
                // Reset the border of the corresponding markerDiv
                var markerDiv = document.getElementById('markerDiv' + markerData.idofmap);
                if (markerDiv) {
                    markerDiv.style.border = "none"; // Remove border to reset
                }
            }
        }

        window.onload = function() {
            fetchPrices();
        }

        // Function to generate stars based on rating
        function getStarsHtml(rating) {
            let starsHtml = '';
            for (let i = 1; i <= 5; i++) {
                // Check rating and apply appropriate class to color stars
                let cls = "star";
                if (i === 1) cls = "one";
                else if (i === 2) cls = "two";
                else if (i === 3) cls = "three";
                else if (i === 4) cls = "four";
                else if (i === 5) cls = "five";

                // Apply class only if the star index is less than or equal to the rating
                starsHtml += `<span class="star ${i <= rating ? cls : ''}">★</span>`;
            }
            return starsHtml;
        }

            // Search by address
            $(document).on("keypress",function(e) {
			    var searchadd = $("#searchadd").val();
                fetchPrices(searchadd);
			});
      
        // Function to show feedbacks in a modal
        function showFeedbacks(stationId) {
            // Open the modal
            $('#feedbackModal' + stationId).modal('show');

            var stationIdOfStation = $('#feedbackModal' + stationId).data('station-id');

            // Make an AJAX call to fetch the feedbacks for the station
            $.ajax({
                url: `/feedbacks/${stationIdOfStation}`, // Replace with the actual route
                method: 'GET',
                success: function(data) {
                    // Clear the previous feedbacks
                    $('#feedbackList' + stationId).empty();

                    // Append each feedback to the list
                    data.feedbacks.forEach(function(feedback) {
                        $('#feedbackList' + stationId).append(`
                            <li>
                                ${feedback.comment}
                                <span style="float: right;">${getStarsHtml(feedback.user_rating)}</span>
                            </li>
                        `);
                    });
                },
                error: function() {
                    $('#feedbackList' + stationId).html('<li>No feedbacks available.</li>');
                }
            });
        }
    </script>
    <!-- Google Maps and Places API -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key={{ $GOOGLE_MAPS_API_KEY }}&libraries=places&callback=initAutocomplete" async defer></script> --}}
    {{--<script src="https://maps.gomaps.pro/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initMap"
        async defer onerror="handleMapError()"></script>--}}
    <!--<script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->
    <script>
        $(document).ready(function(){
			
            $('#fuelPriceModal').on('shown.bs.modal', function (e) {
              //alert("{{ request()->ip() }}");
                const userDate = new Date();
                const finalDate = userDate > maxDate ? maxDate : userDate;
                const purchase_date = `${finalDate.getFullYear()}-${String(finalDate.getMonth() + 1).padStart(2, "0")}-${String(finalDate.getDate()).padStart(2, "0")}`;
                const formatTime = (date) => {
                    let hours = String(date.getHours()).padStart(2, "0"); // 24-hour format
                    let minutes = String(date.getMinutes()).padStart(2, "0");
                    let seconds = String(date.getSeconds()).padStart(2, "0");
                
                    
                    return `${hours}:${minutes}`;
                };
                $("#purchase_date").val(purchase_date);
                $("#purchase_time").val(formatTime(userDate));
                //console.clear();`
                //console.log("User's Local Date & Time:", userDate.toString());
                //console.log('Date: '+purchase_date);
                //console.log("Formatted Time:", formatTime(userDate));
            });
        });
    </script>
    <script>
        function handleMapError() {
            alert('Failed to load Google Maps. Please try again later.');
        }
    </script>
@endpush

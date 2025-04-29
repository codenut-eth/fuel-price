<?php header("Access-Control-Allow-Origin: *"); ?>

@extends('layouts.app')

@section('title', 'Fuel Prices')

@section('content')

<style>
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}

#map {
  width: 100%;
  height: 100vh;
  background-color: #ccc;
}

/* General mobile improvements */
@media (max-width: 767px) {
    .sidebarUSER2, .rightUSER {
        width: 100% !important;
        max-width: 100%;
        flex: 0 0 100%;
        padding: 10px;
    }

    #map {
        height: 50vh;
    }

    /* Hide right side ad in mobile */
    .col-lg-1.d-lg-block {
        display: none !important;
    }

    #topadvertisement {
        max-height: 150px;
        width: 100%;
        object-fit: contain;
    }

    .searchbar {
        margin-top: 30px !important;
    }

    /* Center search bar, buttons, etc */
    button.btn.btn-primary {
        width: 100%;
        margin-top: 10px;
    }

    .stationresults {
        overflow-y: auto;
        max-height: 300px;
    }

    /* Improve spacing inside sidebar */
    .station-info, .station-prices {
        text-align: center;
    }
}

.container-fluid {
  padding-left: 15px;
  padding-right: 15px;
}
</style>
	<style>
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}

#map {
  width: 100%;
  height: 100vh;
  background-color: #ccc;
}




/* Always smooth container padding */
.container-fluid {
  padding-left: 15px;
  padding-right: 15px;
}
</style>


<style>
@media (max-width: 767px) {
    .sidebarUSER2 {
        width: 100% !important;
        max-width: 100%;
        flex: 0 0 100%;
        padding: 10px;
        margin-top: 81px; /* Add margin-top ONLY on mobile */
    }

    #map {
        height: 50vh;
    }

    .col-lg-1.d-lg-block {
        display: none !important;
    }

    #topadvertisement {
        max-height: 150px;
        width: 100%;
        object-fit: contain;
    }

    .searchbar {
        margin-top: 30px !important;
    }

    button.btn.btn-primary {
        width: 100%;
        margin-top: 10px;
    }

    .stationresults {
        overflow-y: auto;
        max-height: 400px;
    }

    .station-info, .station-prices {
        text-align: center;
    }
}


/* Style the right banner to be wide and long on desktop */
#right-banner {
  width: 100%;object-fit: unset;height: 711px;
}

/* Mobile responsiveness */
@media (max-width: 767px) {
    #right-banner {
        height: 250px; /* Shorter height for mobile screens */
    }
}
</style>


	
<div class="container-fluid searchbar">

    <!-- Top Banner for Desktop -->
    <div class="row d-none d-md-block" style="margin-top: 100px;">
        <div class="col-12 mt-3 mb-3">
            @foreach($advertisements as $advertisement)
                <img id="topadvertisement" class="img-fluid" src="{{ asset('assets/img/advertisement.jpg') }}" width="100%" height="50"/>  
            @endforeach
        </div>
    </div>

    <div class="row">
        <!-- Sidebar (Station List) -->
        <div class="col-lg-3 col-md-4 col-12 sidebarUSER2 mb-3">
            <!-- Banner for Mobile under Sidebar -->
            <div class="d-block d-md-none mb-3">
                @foreach($advertisements as $advertisement)
                    <img id="topadvertisement" class="img-fluid" src="{{ asset('assets/img/advertisement.jpg') }}" width="100%" height="50"/>  
                @endforeach
            </div>

            <div class="stationresults">
                <div id="showresults" class="row" style="max-height: 100vh;"></div>
            </div>
        </div>

        <!-- Map Area -->
        <div class="col-lg-8 col-md-8 col-12 rightUSER mb-3">
            <div class="ml-auto" data-aos="fade-left">
                <div class="tab-content">
                    <div class="tab-pane active show">
                        <figure style="margin:0;">
                            <div id="map"></div>
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right-side Banner shown BELOW map on mobile -->
            <div class="d-block d-md-none mt-3">
                @foreach($advertisements as $advertisement)
                    <img class="img-fluid" src="{{ asset('assets/img/advertisement1.jpg') }}" width="100%" style="max-height: 300px;" />
                @endforeach
            </div>
        </div>

           <!-- Advertisement Right Side for Desktop -->
        <div class="col-lg-1 d-lg-block d-none">
            @foreach($advertisements as $advertisement)
                <img id="right-banner" class="img-fluid" src="{{ asset('assets/img/advertisement1.jpg') }}" style="" />
            @endforeach
        </div>
        </div>
    </div>

</div>






	<!-- End Features Section -->
    @include('partials.add_modal')

@endsection

@push('scripts')
   
<script>
    let map;
    let currentMarker = null;
    let currentInfoWindow = null;

    function initMap(lat = 20.0, lng = 0.0) {
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: { lat: lat, lng: lng }
        });

        // Add marker for current location
        currentMarker = new google.maps.Marker({
            position: { lat: lat, lng: lng },
            map: map,
            title: "Your Location",
            icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
        });

        loadStations(); // Add station markers
    }

    function loadStations(searchadd='') {
        $.ajax({
            url: '{{url("get-stations")}}',
            method: 'GET',
            data:{searchadd},
            success: function (data) {
                var htmldata = ''
                if(data.length > 0 ){
                     $('#showresults').empty();
                     data.forEach(dc => {
                     if(dc.before6amprice!=null && dc.after6amprice!=null){
                    const parts = dc.geolocation.split(",");
                    const latitude = parseFloat(parts[0]);
                    const longitude = parseFloat(parts[1]);

                    const marker = new google.maps.Marker({
                        position: { lat: latitude, lng: longitude },
                        map: map,
                        title: dc.name
                    });

                  const infoWindow = new google.maps.InfoWindow({
                        content: `
                            <div style="padding: 10px; font-family: Arial, sans-serif; max-width: 220px;">
                                <div style="margin-bottom: 6px;">
                                    <strong style="font-size: 16px; color: #333;">${dc.station_name}</strong>
                                </div>
                                <div style="margin-bottom: 4px;">
                                    <span style="font-weight: 600; color: #666;">Before 6AM:</span>
                                    <span style="float: right; color: #000;">${dc.before6amprice}</span>
                                </div>
                                <div>
                                    <span style="font-weight: 600; color: #666;">After 6AM:</span>
                                    <span style="float: right; color: #000;">${dc.after6amprice}</span>
                                </div>
                            </div>
                        `
                    });

                    
                    htmldata+= makePriceItem(dc);
                    marker.addListener('click', () => {
                        if (currentInfoWindow) currentInfoWindow.close();
                        infoWindow.open(map, marker);
                        currentInfoWindow = infoWindow;
                    });
                    }
                });
                 $('#showresults').html(htmldata);
                }else{
                 $('#showresults').html('<p style="text-align:center;margin-top:200px;color:red;font-weight:900">No Data Found</p>'); 
                }
                
            },
            error: function (err) {
                console.error("Error fetching stations:", err);
            }
        });
    }

    $(document).ready(function () {
            // Try to get user's current location
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    position => {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        console.log("User location:", lat, lng);
                        initMap(lat, lng); // Set map to user's current location
                    },
                    error => {
                        console.warn("Geolocation failed, using default center.");
                        initMap(); // fallback to default coordinates
                    },
                    { timeout: 10000 } // Optional: set timeout for location request
                );
            } else {
                console.warn("Geolocation not supported by this browser.");
                initMap(); // fallback to default coordinates
            }
    });


      function makePriceItem(station) {
			
			
            const parts = station.geolocation.split(",");
            const latitude = parseFloat(parts[0]);
            const longitude = parseFloat(parts[1]);
                    
            return `<div class="col-md-12 ${station.id}">
                    <a class="nav-link active show sidebara sidebar${station.id}" data-toggle="tab" href="#tab-${station.id}" data-lat="${latitude}" data-lng="${longitude}">
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
		
		
		
        $(document).on("keypress", function (e) {
            if (e.which === 13) { // Enter key
                const searchadd = $("#searchadd").val();
                if (searchadd.trim() !== "") {
                    const geocoder = new google.maps.Geocoder();
        
                    geocoder.geocode({ address: searchadd }, function (results, status) {
                        if (status === "OK") {
                            const location = results[0].geometry.location;
        
                            map.setCenter(location);
                            map.setZoom(12); // Adjust zoom as needed
        
                            if (currentMarker) {
                                currentMarker.setMap(null);
                            }
        
                            currentMarker = new google.maps.Marker({
                                position: location,
                                map: map,
                                title: "Searched Location",
                                icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
                            });
        
                            loadStations(searchadd); // optional if your API supports it
                        } else {
                            alert("Geocode was not successful: " + status);
                        }
                    });
                }
            }
        });
        
                
        $(document).on("click", ".nav-link", function () {
            const lat = parseFloat($(this).data("lat"));
            const lng = parseFloat($(this).data("lng"));
        
            if (!isNaN(lat) && !isNaN(lng)) {
                const location = new google.maps.LatLng(lat, lng);
                map.setCenter(location);
                map.setZoom(14); // optional
        
                if (currentMarker) currentMarker.setMap(null);
        
                currentMarker = new google.maps.Marker({
                    position: location,
                    map: map,
                    icon: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png',
                    title: "Selected Station"
                });
            }
        });


		

</script>


 <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>
    
<script>

		
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
						
						
                    // console.log('lat: ' + lat);
                    // console.log('lng: ' + lng);
					}
                		});
				
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
            // $('#showresults').html(html);

            // Now that the map container (#map) is in the DOM, initialize the map
            // initMap();

            // Attach event listeners
            attachEventListeners();
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
            // fetchPrices();
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
//             $(document).on("keypress",function(e) {
// 			    var searchadd = $("#searchadd").val();
//                 fetchPrices(searchadd);
// 			});
      
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

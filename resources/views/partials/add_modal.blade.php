<div class="modal fade" id="fuelPriceModal" tabindex="-1" role="dialog" aria-labelledby="fuelPriceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="fuelPriceModalLabel">Add Fuel Price</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="aria-hidden">&times;</span>
                </button>
            </div>
            <form method="POST" enctype="multipart/form-data" id="addFuelPrice" class="form-horizontal form-label-left">
                <div class="modal-body">
                    @csrf
                    <!-- Hidden fields to store latitude and longitude -->
                    <input type="hidden" name="latitude" id="latitude">
                    <input type="hidden" name="longitude" id="longitude">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="purchase_date">Purchase Date</label>
                            <input type="date" class="form-control" name="purchase_date" id="purchase_date" max="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}">
                            <small id="purchase_dateError" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="purchase_time">Purchase Time</label>
                            <input type="time" class="form-control" name="purchase_time" id="purchase_time" value="{{ now()->setTimezone('Africa/Lagos')->format('H:i') }}">
                            <small id="purchase_timeError" class="form-text text-danger"></small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="litres">Litres</label>
                            <input type="number" step="0.01" value="0.01" class="form-control" name="litres" id="litres">
                            <small id="litresError" class="form-text text-danger"></small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price">Amount</label>
                            <input type="number" step="0.01" value="0.01" class="form-control" name="price" id="price" max="99999.9">
                            <small id="priceError" class="form-text text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fuel_type">Fuel Type</label>
                        <!--<input type="text" class="form-control" name="fuel_type" id="fuel_type">-->
                        <select class="form-control" name="fuel_type" id="fuel_type">
                            <option value="">Please select</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Super">Super</option>
                            <option value="Diesel">Diesel</option>
                            <option value="CNG">CNG</option>
                            <option value="LPG">LPG</option>
                        </select>
                        <small id="fuel_typeError" class="form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="phone_no">Phone Number<span class="required">*</span></label>
                        <input type="text" 
                           class="form-control" 
                           name="phone_no" 
                           id="phone_no" 
                           value="+234" 
                           pattern="^(\+234)?(7|8|9)\d{9}$" 
                           title="Enter a valid Nigerian phone number starting with 07, 08, or 09">

                        <small id="phone_noError" class="form-text text-danger" style="display: none;">Phone number is required and must start with 07, 08, or 09 and be followed by 9 digits.</small>
                    </div>
                    <div class="form-group">
                        <label for="station_id">Select Station</label>
                        <select class="form-control" id="station_id" name="station_id" style="width: 100%;">
                            <!-- Options will be loaded via AJAX -->
                        </select>
                        <small id="station_idError" class="form-text text-danger"></small>
                        <small id="station_NotVerifiedError" class="form-text text-danger" style="display: none;"> Station not verified. Add an Address and Phone Number</small>
                    </div>
                    <div id="new_station_fields" style="display: none;">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="new_station_address">New Station Address</label>
                                <input type="text" class="form-control" id="new_station_address" name="new_station_address">
                                <small id="new_station_addressError" class="form-text text-danger">Address is required</small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="new_station_phone">New Station Phone Number</label>
                                <input type="text" class="form-control" id="new_station_phone" name="new_station_phone">
                                <small id="new_station_phoneError" class="form-text text-danger">Phone number is required and must start with 07, 08, or 09 and be followed by 9 digits.</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea class="form-control" name="comment" id="comment"></textarea>
                        <small id="commentError" class="form-text text-danger"></small>
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="photo" id="photo">
                        <label class="custom-file-label" for="photo">Upload Photo</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" value="fuelPrice" name="form_type">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
        label .required {
            color: red;
        }
    </style>
@push('scripts')
    <script>
	$("#phone_no").inputmask({"mask": "+999-99-999999999"});
	
        document.addEventListener('DOMContentLoaded', function () {
            const dateInput = document.getElementById('purchase_date');
            const timeInput = document.getElementById('purchase_time');

            function updateTimeMax() {
                const selectedDateValue = dateInput.value;
                if (!selectedDateValue) {
                    // If no date is selected, remove max attribute
                    timeInput.removeAttribute('max');
                    return;
                }

                const selectedDate = new Date(selectedDateValue);
                const today = new Date();
                today.setHours(0, 0, 0, 0); // Set time to midnight

                if (selectedDate.toDateString() === today.toDateString()) {
                    // If selected date is today, set max time to current time
                    const now = new Date();
                    const hours = now.getHours().toString().padStart(2, '0');
                    const minutes = now.getMinutes().toString().padStart(2, '0');
                    timeInput.max = `${hours}:${minutes}`;
                } else {
                    // If selected date is in the past or future, remove max attribute
                    timeInput.removeAttribute('max');
                }
            }

            // Initialize on page load
            updateTimeMax();

            // Listen for changes on the date input
            dateInput.addEventListener('change', updateTimeMax);

            // Check if the Geolocation API is supported by the browser
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        // Success callback: store latitude and longitude in hidden fields
                        document.getElementById('latitude').value = position.coords.latitude;
                        document.getElementById('longitude').value = position.coords.longitude;
                    },
                    function (error) {
                        // Error callback: handle errors if user denies or there are issues
                        console.error("Error getting geolocation: ", error.message);
                    }
                );
            } else {
                console.error("Geolocation is not supported by this browser.");
            }
        });

        $(document).ready(function() {
            // Handle form submission
            $('#addFuelPrice').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                let formData = new FormData(this);
                
                let priceInput = document.getElementById("price");
                let priceValue = parseInt(priceInput.value);
                let errorMessage = document.getElementById("priceError"); // Assuming you have an element with id "priceError" to display the message
            
                if (priceValue > 99999) {
                    errorMessage.textContent = "Price cannot exceed 99999.";
                    event.preventDefault(); // Prevent form submission
                } else {
                    errorMessage.textContent = ""; // Clear the error message if valid
                }

                $.ajax({
                    url: "{{ route('fuel_prices.store') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#addFuelPrice')[0].reset();
                        $('#fuelPriceModal').modal('hide');
                        alert(response.message);
                    },
                    error: function(jqXHR) {
                        if(jqXHR.status === 422) {
                            let errors = jqXHR.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key + 'Error').text(value[0]);
                            });
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });

            // Initialize Select2 on the station select element
            $('#station_id').select2({
                tags: true,
                placeholder: 'Choose station...',
                minimumInputLength: 2,
                ajax: {
                    url: "{{ route('stations.find') }}",
                    dataType: 'json',
                    delay: 250,  // Wait 250ms before triggering the request
                    data: function (params) {
                        return {
                            q: params.term,  // Search term
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data,  // Return the data as results
                        };
                    },
                    cache: true,
                },
                // Optional: Set initial value if editing a record
                // templateResult: formatStation,
                // templateSelection: formatStationSelection,
            });

            // Handle the event when a station is selected or typed in
            $('#station_id').on('select2:select', function() {
                let selectedStationId = $(this).val();

                // console.log(selectedStation)

                // Check if the selected station is from the database or a new entry (custom tag)
                $.ajax({
                    url: "{{ route('stations.check') }}", // Route to check if station exists
                    type: 'GET',
                    data: {
                        station_id: selectedStationId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.exists == true) {
                            // If the station exists, hide the additional fields
                            $('#new_station_fields').hide();
                            $('#station_NotVerifiedError').hide();
                        } else {
                            // If the station doesn't exist, show the additional fields
                            $('#new_station_fields').show();
                            $('#station_NotVerifiedError').show();
                        }
                    },
                    error: function() {
                        console.error('Error checking station existence');
                    }
                });
            });
        });

        // Optional: Format the station result if you need to display more information
        function formatStation(station) {
            if (station.loading) {
                return station.text;
            }

            var $container = $(
                "<div class='select2-result-station clearfix'>" +
                "<div class='select2-result-station__title'></div>" +
                "</div>"
            );

            $container.find(".select2-result-station__title").text(station.text);

            return $container;
        }

        // Optional: Format the selected station
        function formatStationSelection(station) {
            return station.text || station.id;
        }
        
        /** custom code goes here **/
        document.getElementById("price").addEventListener("input", function () {
/*			
		   let value = this.value.replace(/\D/g, ""); // Remove non-numeric characters
            this.value = value; // Update input field
        
            let errorMessage = document.getElementById("priceError"); // Assuming you have an element with id "priceError"
            let numericValue = parseInt(value);
        */
            if (numericValue > 99999) {
                errorMessage.textContent = "Price cannot exceed 99999.";
            } else {
                errorMessage.textContent = ""; // Clear the error message if valid
            }
        });
        
        document.getElementById("phone_no").addEventListener("input", function () {
/*           
		   let value = this.value.replace(/\D/g, ""); // Remove non-numeric characters
        
            if (!/^(07|08|09)/.test(value)) {
                document.getElementById("phone_noError").style.display = "inline";
            } else {
                document.getElementById("phone_noError").style.display = "none";
            }
        
            if (value.length > 9) {
                value = value.slice(0, 9); // Trim to exactly 9 digits
            }
        
            this.value = value; // Update input field
        */
		});
		
        
        document.getElementById("new_station_phone").addEventListener("input", function () {
            let value = this.value.replace(/\D/g, ""); // Remove non-numeric characters
        
            if (!/^(07|08|09)/.test(value)) {
                document.getElementById("new_station_phoneError").style.display = "inline";
            } else {
                document.getElementById("new_station_phoneError").style.display = "none";
            }
        
            if (value.length > 9) {
                value = value.slice(0, 9); // Trim to exactly 9 digits
            }
        
            this.value = value; // Update input field
        });
        
        document.getElementById("new_station_address").addEventListener("input", function () {
            if(this.value==""){
                document.getElementById("new_station_addressError").style.display = "inline";
            } else {
                document.getElementById("new_station_addressError").style.display = "none";
            }
        });
        
        
        
        /*document.getElementById("phone_no").addEventListener("input", function () {
            let value = this.value.replace(/\D/g, ""); // Remove non-numeric characters
        
            if (/^(07|08|09)/.test(value)) {
                // If it starts with 07, 08, or 09 → Limit to 9 digits
                value = value.slice(0, 9);
            } else {
                // If it starts with anything else → Limit to 10 digits
                value = value.slice(0, 10);
            }
        
            this.value = value; // Update input field
        });*/
    </script>
@endpush

@if($prices->isNotEmpty())
    <div class="containercc">
        <div class="row">
            <div class="col-md-3 cl-xs-12 sidebarUSER2">
                <div class="mb-3 mb-lg-0" style="overflow-y: scroll; height: 616px;">
                    <ul class="nav nav-tabs flex-column">
                        @foreach($prices as $price)
                            <li class="nav-item">
                                <a class="nav-link active show sidebara sidebar{{ $price->id }}" data-toggle="tab" href="#tab-{{ $price->id }}">
                                    <h4 style="margin-bottom: 0px;">{{ $price->price }}</h4>
                                    <small>{{ $price->fuel_type }}</small>
                                    <p style="font-weight: 900;"><i class="fa fa-location"></i> {{ $price->station_name }}</p>
                                    <p style="font-size:10px"><i class="fa fa-location"></i> {{ $price->street_address }}</p>
                                </a>
                            </li>
                            <div class="sidebarcontents sidebarcontent{{ $price->id }}" style="padding:15px; border:none; background: transparent; display:none">
                                <!-- Sidebar content goes here -->
                                <div class="row">
                                    <div class="col-sm-4" style="margin-top:15px;margin-bottom:15px">
                                        <button class="btn btn-primary backbtn" style="font-size: 11px;line-height: 0.5;border:1px solid lightgrey">
                                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                        </button>
                                    </div>
                                    <div class="col-sm-8" style="margin-top:15px;margin-bottom:15px">
                                        <p>{{ $price->station_name }}</p>
                                    </div>
                                    <div class="col-sm-12" style="border-top:1px solid lightgrey;border-bottom:1px solid lightgrey">
                                        <p style="margin-bottom: 0px;padding-top: 10px;padding-bottom:10px">
                                            <i class="fa fa-location-arrow"></i> {{ $price->street_address }}
                                        </p>
                                    </div>
                                    <div class="col-sm-12" style="border-top:1px solid lightgrey;border-bottom:1px solid lightgrey">
                                        <p style="margin-bottom: 0px;padding-top: 10px;padding-bottom:10px">
                                            <i class="fa fa-phone" aria-hidden="true"></i> {{ $price->phone_no }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:15px;margin-bottom:15px;">
                                    <div class="col-sm-12">
                                        <h4 style="margin-bottom: 0px;font-family: sans-serif;font-size: 18px;font-weight: 700;padding-bottom:20px">Fuel Price</h4>
                                    </div>
                                    <div class="col-sm-6" style="text-align: center;">
                                        <h4 style="margin-bottom: 0px;font-family: sans-serif;">{{ $price->price }}</h4>
                                        <small>{{ $price->fuel_type }}</small>
                                    </div>
                                </div>
                                <div class="row" style="padding-top:30px;padding-bottom:30px;border-top:1px solid lightgrey;border-bottom:1px solid lightgrey;">
                                    <div class="col-sm-12">
                                        <a class='btn btn-danger' style="background: rebeccapurple;width: 100%;" target="_blank" href='https://maps.google.com/?q={{ urlencode($price->street_address) }}'>
                                            Get Directions
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9 cl-xs-12 rightUSER">
                <div class="ml-auto">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="">
                            <figure>
                                <div id="map"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <p style="text-align: center; margin-top: 200px; color: red; font-weight: 900;">No Data Found</p>
@endif

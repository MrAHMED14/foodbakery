@extends('front.restaurant.master')

@section('title')
    Restaurant || Account Setting
@endsection

@section('content')
<!-- Main Section Start -->
<div class="main-section">
@include('front.restaurant.body.header')

    <div class="page-section account-header buyer-logged-in">
        <div class="container">
            <div class="row">
                <!-- ========== menu Start ========== -->
                @include('front.restaurant.body.menu')
                <!-- menu End -->
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="user-dashboard loader-holder">
                        <div class="user-holder">
                            <form action="restaurant-open-close.html">
                                <ul class="restaurant-settings-nav progressbar-nav">
                                    <li class="cond-restaurant-settings active">
                                        <a href="{{route('restaurant.restaurant')}}">Restaurant Settings</a>
                                    </li>
                                    <li class="cond-restaurant-settings active processing">
                                        <a href="{{route('restaurant.location')}}">Location/Map</a>
                                    </li>
                                    <li class="cond-restaurant-settings">
                                        <a href="{{route('restaurant.open_close')}}">Restaurant Open/Close</a>
                                    </li>
                                </ul>

                                <div class="form-fields-set">
                                    <ul>
                                        <li>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="element-title">
                                                        <h4>Location</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="opt-conts">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Country *</label>
                                                                    <div class="select-holder">
                                                                        <span class="loader-country-restaurant"></span>
                                                                        <select data-placeholder="Select Country" class="chosen-select">
                                                                            <option>Select Country</option>
                                                                            <option value="barry">Barry</option>
                                                                            <option value="cardiff">Cardiff</option>
                                                                            <option value="cowbridge">Cowbridge</option>
                                                                            <option value="england">England</option>
                                                                            <option value="llantwit-major">Llantwit Major</option>
                                                                            <option value="northern-ireland">Northern Ireland</option>
                                                                            <option value="penarth">Penarth</option>
                                                                            <option value="scotland">Scotland</option>
                                                                            <option value="wales">Wales</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>State</label>
                                                                    <div class="select-holder">
                                                                        <select data-placeholder="Select State" class="chosen-select">
                                                                            <option value="">Choose...</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>City</label>
                                                                    <div class="select-holder">
                                                                        <select data-placeholder="Select City" class="chosen-select">
                                                                            <option value="">Select City</option>
                                                                            <option value="ashburton">Ashburton</option>
                                                                            <option value="axminster">Axminster</option>
                                                                            <option value="bampton">Bampton</option>
                                                                            <option value="barnstaple">Barnstaple</option>
                                                                            <option value="bideford">Bideford</option>
                                                                            <option value="bovey-tracey">Bovey Tracey</option>
                                                                            <option value="bradninch">Bradninch</option>
                                                                            <option value="brixham">Brixham</option>
                                                                            <option value="buckfastleigh">Buckfastleigh</option>
                                                                            <option value="budleigh-salterton">Budleigh Salterton</option>
                                                                            <option value="chagford">Chagford</option>
                                                                            <option value="chudleigh">Chudleigh</option>
                                                                            <option value="chulmleigh">Chulmleigh</option>
                                                                            <option value="colyton">Colyton</option>
                                                                            <option value="crediton">Crediton</option>
                                                                            <option value="cullompton">Cullompton</option>
                                                                            <option value="dartmouth">Dartmouth</option>
                                                                            <option value="dawlish">Dawlish</option>
                                                                            <option value="exeter">Exeter</option>
                                                                            <option value="exmouth">Exmouth</option>
                                                                            <option value="great-torrington">Great Torrington</option>
                                                                            <option value="hartland">Hartland</option>
                                                                            <option value="hatherleigh">Hatherleigh</option>
                                                                            <option value="highampton">Highampton</option>
                                                                            <option value="holsworthy">Holsworthy</option>
                                                                            <option value="honiton">Honiton</option>
                                                                            <option value="ilfracombe">Ilfracombe</option>
                                                                            <option value="ivybridge">Ivybridge</option>
                                                                            <option value="kingsbridge">Kingsbridge</option>
                                                                            <option value="kingsteignton">Kingsteignton</option>
                                                                            <option value="lynton">Lynton</option>
                                                                            <option value="modbury">Modbury</option>
                                                                            <option value="moretonhampstead">Moretonhampstead</option>
                                                                            <option value="newton-abbot">Newton Abbot</option>
                                                                            <option value="north-tawton">North Tawton</option>
                                                                            <option value="northam">Northam</option>
                                                                            <option value="okehampton">Okehampton</option>
                                                                            <option value="ottery-st-mary">Ottery St Mary</option>
                                                                            <option value="paignton">Paignton</option>
                                                                            <option value="plymouth">Plymouth</option>
                                                                            <option value="princetown">Princetown</option>
                                                                            <option value="salcombe">Salcombe</option>
                                                                            <option value="seaton">Seaton</option>
                                                                            <option value="sherford">Sherford</option>
                                                                            <option value="sidmouth">Sidmouth</option>
                                                                            <option value="south-molton">South Molton</option>
                                                                            <option value="tavistock">Tavistock</option>
                                                                            <option value="teignmouth">Teignmouth</option>
                                                                            <option value="tiverton">Tiverton</option>
                                                                            <option value="topsham">Topsham</option>
                                                                            <option value="torquay">Torquay</option>
                                                                            <option value="totnes">Totnes</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Latitude</label>
                                                                    <input type="text" placeholder="Latitude" class="form-control gllpLatitude">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Longitude</label>
                                                                    <input type="text" placeholder="Longitude" class="form-control gllpLongitude">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="field-holder">
                                                                    <label>Find On Map</label>
                                                                    <input type="text" placeholder="Type Your Address" class="foodbakery-search-location">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="field-holder"></div>
                                                                <div class="field-holder search-location-map input-button-loader">
                                                                    <input type="button" class="acc-submit cs-section-update cs-color csborder-color gllpSearchButton" value="Search Location">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="cs-map-section">
                                                                    <iframe width="100" height="280" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div>
                                        <div class="field-holder">
                                            <div class="payment-holder input-button-loader">
                                                <input class="update-restaurant" type="submit" value="Update Restaurant" onclick="location.href='restaurant-open-close.html';">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Section End -->
@endsection

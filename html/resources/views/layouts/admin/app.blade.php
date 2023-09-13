<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Homeradar - Real Estate Listing Template</title>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="preload" as="style" href="{{ asset('css/administration/plugins.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/administration/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/administration/dashboard-style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/administration/color.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/administration/fixes.css') }}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="https://www.lafabriqueatoits.com/images/favicon.ico">
    @if (Route::is('admin.programme.create') || Route::is('admin.programme.edit'))
        <style>
            .custom-form input[type="number"], .custom-form textarea, .custom-form input[type="text"], .custom-form input[type="date"], .custom-form input[type=email], .custom-form input[type=password], .custom-form input[type=button], .listsearch-input-item input[type="text"] {
                padding: 15px 20px;
            }
        
            .nice-select.no-search-select .list {
                z-index: 999;
            }
            .add-list {
                float: unset;
                padding: 0 20px;
                height: 40px;
                line-height: 40px;
                color: #fff;
                border-radius: 4px;
                font-weight: 600;
                position: relative;
                top: 15px;
                font-size: 12px;
                margin-left: 34px;
                width: 250px;
                margin: 10px 0 50px 0;
            }
          .custom-form textarea,.nice-select {
                margin: 0 0 20px 0;
            }
        </style>
    @endif
    
    @if (Route::is('amdin.blog.create') || Route::is('amdin.blog.edit'))
        <style>
            .custom-form input[type="number"], .custom-form textarea, .custom-form input[type="text"], .custom-form input[type="date"], .custom-form input[type=email], .custom-form input[type=password], .custom-form input[type=button], .listsearch-input-item input[type="text"] {
                padding: 15px 20px;
            }
        
            .select2-container .select2-selection--multiple .select2-selection__rendered {
                display: flex !important;
            }
        
            .select2-container--default .select2-search--inline .select2-search__field {
                display: none !important;
            }
            .custom-form textarea,.nice-select {
                margin: 0 0 20px 0;
            }
        </style>
    @endif
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQ3c_R3gppyKvlIlmpN1IHkc0v2k_2zEM&callback=initAutocomplete&libraries=places&v=weekly"
            defer></script>
</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="loader-inner">
            <svg>
                <defs>
                    <filter id="goo">
                        <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur"/>
                        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey"/>
                        <fecomposite in="SourceGraphic" in2="gooey" operator="atop"/>
                    </filter>
                </defs>
            </svg>
        </div>
    </div>
    <!--loader end-->
<!-- main -->
<div id="main">
    <!-- header -->
    @include('layouts/admin/header')
    <!-- header end  -->
    <div id="wrapper">
        @include('layouts/admin/menu')


        @yield('content')
    
    </div>


<script src="{{ asset('js/admin/jquery.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins.min.js') }}"></script>
<script src="{{ asset('js/admin/scripts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('js/admin/dashboard.js') }}"></script>
<script src="{{ asset('js/admin/fixes.js') }}"></script>
@if (Route::is('admin.programme.create') || Route::is('admin.programme.edit'))
<script>
    let placeSearch;
    let autocomplete;
    const componentForm = {
        street_number: "short_name",
        route: "long_name",
        locality: "long_name",
        administrative_area_level_1: "short_name",
        country: "long_name",
        postal_code: "short_name",
    };

    function initAutocomplete() {
        const center = {lat: 48.858790, lng: 2.347730};
        // Create a bounding box with sides ~10km away from the center point
        const defaultBounds = {
            north: center.lat + 0.5,
            south: center.lat - 0.5,
            east: center.lng + 0.5,
            west: center.lng - 0.5,
        };

        const options = {
            bounds: defaultBounds,
            componentRestrictions: {country: "fr"},
            strictBounds: true,
            fields: ["address_components", "geometry", "icon", "name"],
            types: ["geocode"],
        };

        // Create the autocomplete object, restricting the search predictions to
        // geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById("autocomplete"),
            options
        );

        // Avoid paying for data that you don't need by restricting the set of
        // place fields that are returned to just the address components.
        autocomplete.setFields(["address_component"]);
        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener("place_changed", fillInAddress);
    }


    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                const geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
                const circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy,
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }

    // JavaScript program to calculate Distance Between
    // Two Points on Earth

    function distance(lat1, lat2, lon1, lon2) {

        // The math module contains a function
        // named toRadians which converts from
        // degrees to radians.
        lon1 = lon1 * Math.PI / 180;
        lon2 = lon2 * Math.PI / 180;
        lat1 = lat1 * Math.PI / 180;
        lat2 = lat2 * Math.PI / 180;

        // Haversine formula
        let dlon = lon2 - lon1;
        let dlat = lat2 - lat1;
        let a = Math.pow(Math.sin(dlat / 2), 2)
            + Math.cos(lat1) * Math.cos(lat2)
            * Math.pow(Math.sin(dlon / 2), 2);

        let c = 2 * Math.asin(Math.sqrt(a));

        // Radius of earth in kilometers. Use 3956
        // for miles
        let r = 6371;
        // calculate the result
        return (Math.round(c * r));
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        let city;
        place.address_components.map((e) => {
            if (e.types[0] == 'locality') {
                city = e.short_name
            }
        })
        const lng = place.geometry.location.lng()
        const lat = place.geometry.location.lat()
        $('#lat').val(lat)
        $('#lon').val(lng)
        $('#city').val(city)
    }


</script>
@endif
</body>
</html>
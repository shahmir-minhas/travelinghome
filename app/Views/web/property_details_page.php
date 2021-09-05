<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Properties Detail </h1>
            <ul class="breadcrumbs">
                <li><a href="<?= $path ?>">Home</a></li>
                <li class="active">Properties Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Heading properties 3 start -->
                <div class="heading-properties-3">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h1>Title: <?=ucwords($Record['Title'])?></h1>
                        </div>
                        <div class="pull-right">
                            <h1><span>Rs<?= $Record['Rent'] ?>.00</span></h1>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="pull-left">
                            <p><i class="flaticon-pin"></i> Address: <?=$Record['Address']?> </p>
                        </div>
                        <div class="pull-right">
                            <p>Area: <span><?=$Record['AreaSq']?> sq ft</span></p>
                        </div>
                    </div>
                </div>


                <div class="properties-description mb-40">
                    <h3 class="heading-2">
                        Description
                    </h3>
                    <p><?=$Record['Description']?></p>
                    <p><?=$Record['Status']?></p>
<!--                    <input type="hidden" id="Longitude" value="--><?//=$Record['Longitude']?><!--">-->
<!--                    <input type="hidden" id="Latitude" value="--><?//=$Record['Latitude']?><!--">-->
                 </div>

                <div class="floor-plans mb-50">
                    <h3 class="heading-2">Floor Plans</h3>
                    <table>
                        <tbody>
                        <tr>
                            <td><strong>Size</strong></td>
                            <td><strong>Rooms</strong></td>
                            <td><strong>Bathrooms</strong></td>
                        </tr>
                        <tr>
                            <td><?= $Record['AreaSq'] ?> Sqft</td>
                            <td><?= $Record['Bed'] ?></td>
                            <td><?= $Record['Bath'] ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <img src="<?= $web_template ?>img/floor-plans.png" alt="floor-plans" class="img-fluid">
                </div>
                <!-- Location start -->
                <div class="location mb-50">
                    <div class="map">
                        <h3 class="heading-2">Property Location</h3>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>


            </div>
            <div class="col-lg-12 col-md-12">
                    <button style="float: right !important;" type="submit" class="btn-md btn-theme float-left" onclick="ReviewAddModal();">Add Review
                    </button>
            </div>
        </div>
    </div>
</div>

<?php echo view('web/add_review_modal.php'); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script>

    function LoadMap() {
//      js code for getting log and lat
//      var defaultLat = document.getElementById("Latitude").value;
//        var defaultLng = document.getElementById("Longitude").value;
        //php code for getting log and lat
      var defaultLat =  <?=$Record['Latitude']?>;
      var defaultLng =  <?=$Record['Longitude']?>;
//

//        using static maps lats and longitude of UOH
//      33.97845286325799, 72.91268008760524
//
//        var defaultLat = 33.97845286325799;
//        var defaultLng =  72.91268008760524;


          console.log(defaultLat);
          console.log(defaultLng);
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(defaultLat, defaultLng);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content display-none'>" +
                    "<div class='map-content display-none'>" +
                    "<p class='address'></p>" +
                    "<ul class='map-properties-list'> " +
                    "<li><i class='flaticon-phone'></i>  </li> " +
                    "<li><i class='flaticon-phone'></i>  </li> " +
                    "<li><a href=''><i class='fa fa-globe'></i>  </li></a> " +
                    "</ul>" +
                    "</div>" +
                    "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }

    LoadMap();

</script>
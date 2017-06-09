<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <!-- Include jQuery Mobile stylesheets -->
    <link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
    <!-- Include the jQuery library -->
    <script src="jquery.mobile-1.4.5/demos/js/jquery.js"></script>
    <!-- Include the jQuery Mobile library -->
    <script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <!--" map.data.setStyle(function(feature){
                        var magnitude = feature.getProperty('mag');
                        return{
                        icon: getCircle(magnitude)};
                        });}

                        function getCircle(magnitude){
                        return{
                        path: google.maps.SymbolPath.CIRCLE,
                        fillColor: 'red',
                        fillOpacity: .2,
                        scale: Math.pow(2, magnitude)/2,
                        strokeColor: 'white',
                        strokeWeight:.5};
                        }";
                        -->
</head>
<body>
<div data-role="page" data-theme="b" id="view-earthquake">
    <div data-role="header">
        <h1 class="header-title">EarthQuake Locator</h1>
        <div data-role="navbar">
            <ul>
                <li><a href="main.php" class="ui-btn" data-icon="home">Home</a></li>
                <li><a href="#" class="ui-btn ui-btn-active ui-state-persist" data-icon="search">Near Mauritius</a></li>
                <li><a href="account.php" class="ui-btn" data-icon="arrow-r">My Location</a></li>
                <li><a href="#" class="ui-btn" data-icon="arrow-r">Search Earthquake</a></li>
            </ul>
        </div>
    </div>
    <div data-role="main" class="ui-content">
        <div id="map" style="height:800px; width:auto;">

        </div>
        <?php
        $host = "localhost";
        $username = "Earthquake";
        $password = "Earthquake";
        $db = "Earthquake";
        $errorMsg = "Connection Error.";

        $mysqli = new mysqli($host, $username, $password, $db);
        if (mysqli_connect_error()) {
            echo $errorMsg;
        } else {
            $sql = "SELECT * FROM e_details";
            $result = mysqli_query($mysqli, $sql);
            $rows = mysqli_num_rows($result);

            if ($rows > 0) {
                echo "<script type='text/javascript'>
					    function initMap(){
					    var map;
					    map = new google.maps.Map(document.getElementById('map'), {
					     center: {lat: -20.3484, lng: 57.5522},
					     zoom: 4,
					     mapTypeId: 'terrain'
					    });";

                while ($row = mysqli_fetch_assoc($result)) {
                    $Magnit = $row['magnitude'];
                    if ($Magnit <= 4.9) {
                        echo " 
                        var marker = new google.maps.Marker({
					     position: {lat: " . $row['latitude'] . ", lng: " . $row['longitude'] . "},
					     map: map,
					     draggable: false,
					     url: '_blank',
					     icon: 'http://labs.google.com/ridefinder/images/mm_20_gray.png',
					     animation: google.maps.Animation.BOUNCE,
					     label: 'E',
						    title: ' Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "'
						    });
						  
						    marker.addListener('click', toggleBounce);
					
                                function toggleBounce() {
                                    if (marker.getAnimation() !== null) {
                                        marker.setAnimation(null);
                                        }
                                         else {
                                                marker.setAnimation(google.maps.Animation.BOUNCE);
                                               }
                                        }
						            ";
                    }
                    else {
                        if ($Magnit >= 5.0 && $Magnit <= 5.9) {
                            echo "var contentString=' <h2>Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "</h2>';

                            var marker = new google.maps.Marker({
					     position: {lat: " . $row['latitude'] . ", lng: " . $row['longitude'] . "},
					     map: map,
					      icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
						    title: ' Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "'
						     
						    });
						     var infowindow = new google.maps.InfoWindow({
    content: ' Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "',
    });
						      google.maps.event.addListener(marker, \"mouseover\", function() {
        infowindow.open(map, this);
    });";

                        } else {
                            if ($Magnit >= 6 && $Magnit <= 6.9) {
                                echo "var contentString=' <h2>Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "</h2>';
                                var marker = new google.maps.Marker({
					     position: {lat: " . $row['latitude'] . ", lng: " . $row['longitude'] . "},
					     map: map,
					     icon: 'http://labs.google.com/ridefinder/images/mm_20_orange.png',
						    title: ' Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "'
						     
						    });
						      marker.addListener('click', function(){
						    infowindow.open(map, marker);});";
                            } else {
                                if ($Magnit >= 7 && $Magnit <= 7.9) {
                                    echo "var contentString=' <h2>Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "</h2>';
                                    var marker = new google.maps.Marker({
					     position: {lat: " . $row['latitude'] . ", lng: " . $row['longitude'] . "},
					     map: map,
					     icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png',
						    title: ' Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "'
						     
						    });
						      marker.addListener('click', function(){
						    infowindow.open(map, marker);});";
                                } else {
                                    if ($Magnit >= 8) {
                                        echo "var contentString=' <h2>Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "</h2>';
                                        var marker = new google.maps.Marker({
					     position: {lat: " . $row['latitude'] . ", lng: " . $row['longitude'] . "},
					     map: map,
					     icon: 'http://labs.google.com/ridefinder/images/mm_20_black.png',
						    title: ' Depth:" . $row['depth'] . " Magnitude:" . $row['magnitude'] . "'
						     
						    });
						      marker.addListener('click', function(){
						    infowindow.open(map, marker);});";
                                    }
                                }
                            }
                        }
                    }
                }
                echo "}
					  </script>";
            }
        }
        ?>
    </div>

</div>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYvNvuysumxlVXXE__AjVMnWg3Gu4gF_Q&callback=initMap"
        type="text/javascript">
</script>
</body>
</html>
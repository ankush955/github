<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <!-- Include jQuery Mobile stylesheets -->
    <link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="table.css">
    <!-- Include the jQuery library -->
    <script src="jquery.mobile-1.4.5/demos/js/jquery.js"></script>
    <!-- Include the jQuery Mobile library -->
    <script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page" data-theme="b" id="upload">
    <div data-role="header">
        <h1>Earthquake</h1>
    </div>

    <div data-role="main" class="ui-content">
        <form action="upload.php" method="POST" enctype="multipart/form-data" data-ajax="false">
            <h3>upload quake ml file:</h3>
            <input type="file" name="fileupload" class="custom-btn" id="fileupload"/>
            <div class="submit"><input type="submit" name="submit" value="Upload"/>
            <div>
                <?php
                if (isset($_POST['submit'])) {
                    if (empty($_POST['fileupload'])) {
                        echo "<h1>No files selected</h1>";
                    }
                    else {
                        $dbUsername = "Earthquake";
                        $dbPassword = "Earthquake";
                        $dbServer = "localhost";
                        $dbName = "Earthquake";

                        $connection = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

                        $file = file_get_contents($_POST['fileupload']);
                        $xml = simplexml_load_file($file) or die("bn");
                        print_r($xml);

                        $count_earthquake = count($xml->eventParameters->event);
                        echo "total number of earthquakes is " . $count_earthquake;
                        var_dump($xml);

                        $i = 0;
                        $count = 0;


                        $sql_select_Eid = "SELECT * FROM e_details";
                        set_time_limit(0);//no time limit set

                        $statement = $connection->prepare($sql_select_Eid);
                        $result_select = $statement->execute();
                        $statement->fetch();
                        $statement->close();
                        if ($result_select > 0) {
                            $sql_truncate_table = "TRUNCATE TABLE e_details";
                            $statement = $connection->prepare($sql_truncate_table);
                            $result_truncate = $statement->execute();
                            $statement->fetch();
                            $statement->close();
                        }

                       /* while ($count != $count_earthquake) {
                            foreach ($xml->eventParameters->event[$i]->description as $desc) {
                                foreach ($xml->eventParameters->event[$i]->magnitude as $magnitude_info) {
                                    foreach ($magnitude_info->mag as $mag) {
                                        foreach ($xml->eventParameters->event[$i]->origin as $quake_info) {
                                            $magnitude = $mag->value;
                                            $magType = $magnitude_info->type;
                                            $longitude = $quake_info->longitude->value;
                                            $latitude = $quake_info->latitude->value;
                                            $depth = $quake_info->depth->value;
                                            $time = $quake_info->time->value;
                                            $region = $desc->text;

                                            $date_timeT = explode("T", $time);
                                            $date_timeI = explode(".", $date_timeT[1]);

                                            $impArray = array($date_timeT[0], $date_timeI[0]);
                                            $date_time = implode("/", $impArray);

                                            $sql1 = "INSERT INTO e_details VALUES(DEFAULT,?,?,?,?,?,?)";
                                            set_time_limit(0);
                                            $stmt = $connection->prepare($sql1);
                                            $stmt->bind_param("ssddsds", $region, $date_time, $latitude, $longitude, $depth, $magnitude, $magType);
                                            $result = $stmt->execute();
                                            $stmt->fetch();
                                            $stmt->close();
                                        }
                                        $i++;
                                    }
                                }
                            }
                            $count++;
                        }*/
                        while ($count != $count_earthquake) {
                            foreach ($xml->eventParameters->event[$i]->magnitude->mag as $mag) {
                                foreach ($xml->eventParameters->event[$i]->magnitude as $info) {
                                    foreach ($xml->eventParameters->event[$i]->origin as $information) {
                                        $time = $information->time->value;
                                        $latitude = $information->latitude->value;
                                        $longitude = $information->longitude->value;
                                        $depth = $information->depth->value;
                                        $magnitude = $mag->value;
                                        $magnitudeType = $info->type;


                                        $query_insert = "INSERT INTO e_details(E_time, latitude, longitude, depth, magnitude, mag_type) VALUES ('$time','$latitude','$longitude', '$depth', '$magnitude', '$magnitudeType')";
                                        $result = mysqli_query($connection, $query_insert);
                                    }
                                    $i++;
                                }
                            }
                            $count++;
                        }
                        $connection->close();
                    }
                }
                ?>
            </div>
        </form>

        <table data-role="table" id="earth-custom" data-mode="reflow"
               class=" ui-responsive ui-shadow paginated" style="border:2px solid grey;">
            <?php
            require('connect-dbse.php');
            $sql = "SELECT * FROM e_details";
            $result = mysqli_query($connection, $sql);
            $rows = mysqli_num_rows($result);
            ?>
            <thead>
            <tr>
                <th data-priority="1">#</th>
                <th>E_time</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th data-priority="4">depth</th>
                <th>magnitude</th>
                <th data-priority="5">mag_type</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ($rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<th>" . $row['E_id'] . "</th>";
                    echo "<td>" . $row['E_time'] . "</td>";
                    echo "<td>" . $row['latitude'] . "</td>";
                    echo "<td>" . $row['longitude'] . "</td>";
                    echo "<td>" . $row['depth'] . "</td>";
                    echo "<td>" . $row['magnitude'] . "</td>";
                    echo "<td>" . $row['mag_type'] . "</td>";


                    echo "<td class='name'><a href='viewSingleEarthquake.php?longitude=" . $row['longitude'] . "&latitude=" . $row['latitude'] . "&magnitude=" . $row['magnitude'] . "'>" . $row['magnitude'] . $row['mag_type'] . "</a></td>";
                    echo "</tr>";
                }
            }

            ?>
            </tbody>
        </table>

        <script>


            $('table.paginated').each(function() {
                var currentPage = 0;
                var numPerPage = 10;
                var $table = $(this);
                $table.bind('repaginate', function() {
                    $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
                });
                $table.trigger('repaginate');
                var numRows = $table.find('tbody tr').length;
                var numPages = Math.ceil(numRows / numPerPage);
                var $pager = $('<div class="pager"></div>');
                for (var page = 0; page < numPages; page++) {
                    $('<span class="page-number"></span>').text(page + 1).bind('click', {
                        newPage: page
                    }, function(event) {
                        currentPage = event.data['newPage'];
                        $table.trigger('repaginate');
                        $(this).addClass('active').siblings().removeClass('active');
                    }).appendTo($pager).addClass('clickable');
                }
                $pager.insertBefore($table).find('span.page-number:first').addClass('active');
            });
        </script>

    </div>
</div>
</body>
</html>




<html>
<body>
    <?php

    //Create connection
    $conn = new mysqli('localhost','root','');

    if ($conn->connect_error) {
        die("Connection Failed:".$conn->connect_error);
    }
    echo "Connected successfully!";
    echo "<br>";

    //Select database

    mysqli_select_db($conn,"service");
    echo "DB is selected as Service.";
    echo "<br>";

    //Create new record in database

    $query = "INSERT INTO bookings (location,problem,property,date_time,a_datetime) VALUES ('$_POST[location]','$_POST[problem]','$_POST[property]','$_POST[date_time]','$_POST[a_datetime]')";

    if ($conn->query($query)=== TRUE) {
        echo "New record is created";
    } else {
        echo "Error: ".$query. "<br>" . $query->error;
    }

    mysqli_close($conn);
    ?>
</body>
</html>

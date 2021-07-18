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

    mysqli_select_db($conn,"register");
    echo "\n DB is selected as Register.";
    echo "<br>";

    //Create new record in database

    $query = "INSERT INTO servicepro (name,email,contact,service,summary) VALUES ('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[service]','$_POST[summary]')";

    if ($conn->query($query)=== TRUE) {
        echo "New record is created.";
    } else {
        echo "Error: ".$query. "<br>" . $query->error;
    }

    mysqli_close($conn);
    ?>
</body>
</html>





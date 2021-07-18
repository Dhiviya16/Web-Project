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

    mysqli_select_db($conn,"login");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $s = "select * from users where email = '$email' && username = '$username'";
    $result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if($num == 1) {
        echo "<font color ='red'> Registration Failed! The email or username has already been taken";

        echo" ";
    }else{
        $reg = " insert into users(username,email,password) values ('$username', '$email', '$password')";
        mysqli_query($conn,$reg);
        echo "You have successfully registered.";
    }

    mysqli_close($conn);
?>
</body>
</html>
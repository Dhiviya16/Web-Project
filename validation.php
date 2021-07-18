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


    $s = "select * from users where username = '$username' && email = '$email' && password = '$password'";
    $result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if($num == 1) {
        $_SESSION['username'] = $username;
        header('location:index.php');
    }else{
        echo "<font color ='red'>Login Failed! Please try again";

    }
?>
</body>
</html>



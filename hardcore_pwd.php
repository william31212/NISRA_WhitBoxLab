<?php
$password = getenv('MYSQL_PASSWORD');
// example of an empty password when connecting to a mysql database
$conn = new mysqli($servername, $username $password);
$result = mysqli_query($conn, $query);


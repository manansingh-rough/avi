<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "data_dashboard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$file = fopen('Data.csv', 'r');
fgetcsv($file); // Skip header row

while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
    $sql = "INSERT INTO data (intensity, likelihood, relevance, year, country, topics, region, city, sector, pest, source, swot) 
            VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]', '$data[11]')";
    $conn->query($sql);
}

fclose($file);
echo "Data imported successfully.";
$conn->close();
?>

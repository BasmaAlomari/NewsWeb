
<?php
require "connection.php";
$sql = "SELECT * FROM news";
$result = mysqli_query($conn, $sql);
$newsData = array();
while ($row = mysqli_fetch_assoc($result)) {
    $newsData[] = $row;
}
mysqli_close($conn);
header("Content-Type: application/json");
echo json_encode($newsData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'connection.php';

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];

    $sql = "UPDATE news SET title='$title', description='$description', date='$date' ";
    if(isset($_FILES['imageToUpload']) && $_FILES['imageToUpload']['error'] === 0){
        $imageFileName = $_FILES['imageToUpload']['name'];
        $imageTempPath = $_FILES['imageToUpload']['tmp_name'];
        $imagePath = "images/" . $imageFileName;
        move_uploaded_file($imageTempPath, $imagePath);
        $sql .= ", pictures='$imagePath'";
    }

    $sql .= " WHERE id=$id";
    if(mysqli_query($conn, $sql)) {
        header("Location: card.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

</body>
</html>
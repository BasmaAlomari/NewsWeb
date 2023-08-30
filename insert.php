<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
require"connection.php";
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    
      if(isset($_FILES['imageToUpload'])){
          $imageFileName = $_FILES['imageToUpload']['name'];
          $imageTempPath = $_FILES['imageToUpload']['tmp_name'];
          $imagePath = "images/" . $imageFileName;
          move_uploaded_file($imageTempPath, $imagePath);

      }
      else{
          echo "image not found!";
      }

    $sql = "INSERT INTO `news` (`id`, `title`,`pictures` ,`description`, `date`) VALUES (NULL, '$title','$imagePath' ,'$description', '$date');";
    $result= mysqli_query($conn, $sql);
     if($result) {
       header("Location: card.php");
       exit();
     } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
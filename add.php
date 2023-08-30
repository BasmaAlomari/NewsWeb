<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="d-flex align-items-center justify-content-center vh-100 " >
    <form action="insert.php" method="POST" class="p-4 border" style="width: 400px;" enctype="multipart/form-data" > 
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" >
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Date:</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="date">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" class="form-control" id="exampleFormControlInput1">Upload Image:</label>
        <input type="file" name="imageToUpload">
        </div>

        <div class="mb-3" >
        <input class="btn btn-primary" type="submit" value="Add Your Record" name="submit">
        </div>
    </form>
</div>
    
< /body>
</html>
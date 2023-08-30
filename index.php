<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
  <div >
    <button type="button" onclick="LoadNews()">get latest news</button>
  </div>
  <div class="container mt-5 d-flex justify-content-end">
        <div >
        <a class="btn btn-primary  " href="add.php" role="button">Add New Record</a>
        <a class="btn btn-primary" href="logout.php" role="button">Logout</a>


        </div>
    </div>
  <table class="table table-striped table align-middle">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col" class="col-4">Title</th>
      <th scope="col" class="col-4">Description</th>
      <th scope="col">Date</th>
      <th scope="col" colspan="2">Action</th>


    </tr>
  </thead>
  <tbody id="newsTableBody">

  </tbody>
</table>
</body>
</html>
<script>
  $( document ).ready(function() {
    LoadNews();
});

function LoadNews() {
    console.time("Load News ");
    var tableBody = $("#newsTableBody");
    tableBody.html("");
    $.ajax({ 
        type: "GET",
        url: "getNews.php", 
    }).done(function(newsData) {
      
      newsData.forEach(function(news) {
        var row = `
            <tr>
                <td>${news.id}</td>
                <td>${news.title}</td>
                <td>${news.description}</td>
                <td>${news.date}</td>
                <td><a href="edit.php?id=${news.id}">Update</a></td>
                <td><a href="delete.php?id=${news.id}">Delete</a></td>
            </tr>
        `;

        tableBody.append(row);
    });
});

}  
</script>
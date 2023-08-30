<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>News Cards</title>
</head>
<body>
<div class="container">
    <div class="row" id="card-container">
    </div>
</div>
<script>
  $( document ).ready(function() {
    fetchCardData();
});

function fetchCardData(){
    console.time("Load News ");
    var cardcontainer = $("#card-container");
    cardcontainer.html("");
    $.ajax({ 
        type: "GET",
        url: "getNews.php", 
    }).done(function(newsData) {
      
      newsData.forEach(function(item) {
        var card = `
        <div class="col-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="${item.pictures}" class="card-img-top" alt="Image"> 
                        <h5 class="card-title">${item.title}</h5>
                        <p class="card-text">${item.description}</p>
                        <p class="card-text"><small class="text-muted">${item.date}</small></p>
                    </div>
                </div>
                </div>
        `;
        cardcontainer.append(card);
    });
});

}  
</script>

</body>
</html>

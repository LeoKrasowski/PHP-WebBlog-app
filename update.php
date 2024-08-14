<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Edit publication</title>
    <button type="button" class="collapsible">Edit publication</button>
      <div class="content">
        <form action="vendor/create.php" method="post">
            <h4 class="title-form">Edit</h4>
          
            <p class="li-form">Title</p>
            <input type="text" name="title">
            
            <p class="li-form">Author</p>
            <input type="text" name="author">
            
            <p class="li-form">Description</p>
            <textarea name="description"></textarea>
            
            <p class="li-form">Publisher</p>
            <input type="text" name="publisher">
            
            <p class="li-form">Year</p>
            <input type="text" name="year">
          
          <button type="submit" class="btn-submit">Submit</button>
          </form>  
        </div>
      </div>
      <script>
    document.addEventListener("DOMContentLoaded", function () {
        var coll = document.querySelectorAll(".collapsible");
        coll.forEach(function (button) {
            button.addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        });
    });
</script>  
</head>
<body>
    
</body>
</html>
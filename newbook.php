<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="css/newBookStyle.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="admin.php">Home</a></li>
            <li><a href="manageBooks.php">Manage New Books</a></li>
        </ul>
    </nav>
</header>
<section class="book-list">
    <h1><center><span style="color:#525354;">Books That Are In The Book Store</span></center></h1>
    <section class="categories">
        <div class="category-item">
            <h3>History Stories</h3>
            <p>Explore books on historical events and famous personalities.</p>
        </div>
        <div class="category-item">
            <h3>Science Fiction Stories</h3>
            <p>Travel to distant worlds and futuristic societies.</p>
        </div>
        <div class="category-item">
            <h3>Mystery Stories</h3>
            <p>Fiction filled with love and relationship stories.</p>
        </div>
        <div class="category-item">
            <h3>Life Style Stories</h3>
            <p>Intriguing tales of crime, suspense, and detective work.</p>
        </div>
    </section>
    <div class="newbook">
        <h2>Add a New Book</h2>
        <p>In this selection you can only add a book that is not in our Book Store.</p>
        <div class="container">
            <form action="newbookaction.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Book Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="bname" name="txtname" placeholder="Book Name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Author</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="auth" name="txtauthor" placeholder="Author of the book..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">Category</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="cat" name="txtcategory" placeholder="What's the type of the book..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="country">About the Story</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="cat" name="txtabout" placeholder="What's the book talks about..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="subject">Price</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="price" name="txtprice" placeholder="Price of the book..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fileToUpload">Book Image</label>
                    </div>
                    <div class="col-75">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Add" class="btn-add">
                </div>
            </form>
        </div>
    </div>
</section>
<style>
            .col-25 {
    flex: 30%;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    color: #525354;
}

.col-75 {
    flex: 70%;
    padding: 10px;
}


input[type="text"], input[type="file"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-sizing: border-box;
    font-size: 16px;
}

input[type="file"] {
    padding: 5px;
    cursor: pointer;
    background-color: #f9f9f9;
}

input[type="file"]:hover {
    border-color: #525354;
    background-color: #f0f0f0;
}

.btn-add {
    background-color: #525354;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
</body>
</html>

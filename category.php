
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="newbook.php">Add New Book</a></li>
            <li><a href="manageBooks.php">Manage New Books</a></li>
        </ul>
    </nav>
</header>
<h1><center><span style=color:#716868>Stories In Rfouf Book Store</span></center></h1>
        <section class="categories">
    <div class="category-item">
        <img src="imgs/history.png" alt="History Books">
        <h3>History Stories</h3>
        <p>Explore books on historical events and famous personalities.</p>
    </div>
    <div class="category-item">
        <img src="imgs/sciencee.png" alt="Science Fiction">
        <h3>Science Fiction Stories</h3>
        <p>Travel to distant worlds and futuristic societies.</p>
    </div>
    <div class="category-item">
        <img src="imgs/mys.png" alt="Life style">
        <h3>Mystery Stories</h3>
        <p>Fiction filled with love and relationship stories.</p>
    </div>
    <div class="category-item">
        <img src="imgs/lifestyle.png" alt="Mystery">
        <h3>Life Style Stories</h3>
        <p>Intriguing tales of crime, suspense, and detective work.</p>
    </div>
</section>
<style>
  /* Header Style */
header { 
    display: flex;
    justify-content: center; 
    align-items: center;
    padding: 10px 20px;
    background-color: #963f7f;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
}

.logo h1 {
    font-size: 20px;
    color: white;
}

nav ul {
    display: flex;
    gap: 15px;
    list-style:none;
}

nav ul li a {
    text-decoration: solid;
    color: white;
    font-weight: bold;
}

nav ul li a:hover {
    color: #4d4d4e;
    text-decoration: underline;
}

.actions {
    display: flex;
    align-items: center;
    gap: 10px;
}

.btn-login {
    padding: 5px 10px;
    color: white;
    text-decoration: none;
    border-radius: 4px;
}

.btn-login:hover {
    padding: 5px 10px;
    background-color: white;
    color: #716868;
    text-decoration: none;
    border-radius: 10px;
}

/* Categories Section */
.categories {
    display: flex;
    justify-content: center;  /* Center category items */
    gap: 20px;  /* Space between categories */
    flex-wrap: wrap;  /* Wraps categories on smaller screens */
    width: 100%;  /* Full width */
    padding: 20px;
    background-color: #f8f8f8;  /* Light background color */
}

.category-item {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    width: 220px;  /* Fixed width for category items */
}

.category-item img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.category-item h3 {
    font-size: 1.2rem;
    margin: 10px 0;
}

.category-item p {
    font-size: 1rem;
    color: #555;
    margin: 5px 0;
}

/* Book List Style */
.book-list {
    padding: 20px;
    background-color: #f8f8f8;
    text-align: center;
}

.book-list h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #4d4d4e;
}

.book-cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    justify-items: center;
}

.book-card img {
    width: 200px;
    height: 300px;
    object-fit: cover;
}

.book-card {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    width: 100%;
}

.book-card h3 {
    font-size: 1.2rem;
    margin: 10px 0;
}

.book-card .author {
    font-size: 1rem;
    color: #555;
    margin: 5px 0;
}

.book-card .price {
    font-size: 1.2rem;
    color: #963f7f;
    font-weight: bold;
    margin: 10px 0;
}

.book-card button {
    background-color: #454545;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.book-card button:hover {
    background-color: #525354;
}

.book-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

/* Button Styles */
.btn2 {
    background-color: #963f7f;
    color: #f8f8f8;
    margin-left: 1000px;
    height: 50px;
    width: 150px;
    cursor: pointer;
    border-color: #525354;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    border-radius: 5px;
}

.btn2 a {
    text-decoration: none;
    color: #f8f8f8;
}

.btn2:hover {
    background-color: #525354;
}

.btns {
    display: block;
    background-color: #963f7f;
    height: 50px;
    width: 150px;
    cursor: pointer;
    border-color: #525354;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    border-radius: 5px;
}

.btns a {
    text-decoration: none;
    color: #f8f8f8;
}

.btns:hover {
    background-color: #716868;
}

.btn-container {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-left: 100px;
}

</style>
</body>
</html>


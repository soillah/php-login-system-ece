<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }


        .myDiv{
            border: 5px outset blue ;
            background-color: lightpink;
            text-align: left
        
        body {
            
            font-family: Arial, sans-serif;
        }
        .recipe {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        h2 {
            color: #4CAF50;
        }
        ul, ol {
            list-style-type: disc;
            margin-left: 20px;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>


    <div>

    <div class="recipe">
                <header>
            <h1>Pilau and Beef Recipe</h1>
        </header>
        <div class="myDiv">
        <section id="ingredients">
            <h2>Ingredients:</h2>
            <ul>
                <li>2 cups of rice</li>
                <li>300 grams of beef, cubed</li>
                <li>1 onion, chopped</li>
                <li>2 cloves of garlic, minced</li>
                <li>2 tablespoons of pilau masala</li>
                <li>4 cups of water</li>
                <li>Salt and pepper to taste</li>
            </ul>
        </section>
        </div>
        <div class="myDiv">
        <section id="instructions">
            <h2>Instructions:</h2>
            <ol>
                <li>Heat oil in a pan and sauté the onions and garlic until they are translucent.</li>
                <li>Add the beef and cook until browned.</li>
                <li>Stir in the pilau masala, salt, and pepper.</li>
                <li>Add the rice and mix well with the spices and beef.</li>
                <li>Pour in the water and bring to a boil.</li>
                <li>Reduce heat, cover, and simmer for 20 minutes or until the rice is cooked and the water is absorbed.</li>
                <li>Fluff the pilau with a fork, and it's ready to serve!</li>
            </ol>
        </section>
    </div>
    <div class="myDiv">
        <section id="drinks">
            <h2>Serving suggestion: Passion and Mango Juice Cocktail</h2>
            <p>Pair your delicious pilaau with a refreshing cocktail made from equal parts passion fruit and mango juice. Serve chilled!</p>
            </div>
        <footer>Enjoy your Pilau and Beef meal with a delightful cocktail!Visit our website for more recipes. </footer>


    </div>
</body>
</html>
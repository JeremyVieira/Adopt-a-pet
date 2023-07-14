<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Question 7</title>
    <link rel="stylesheet" href="Styles.css">
    <script src="Q7.js">
    </script>
</head>

<body onload="myTime()">
    <header>
        <p id="time">
            <?php echo "Date and Time: " . date("F j, Y, g:i a T"); ?>
        </p>
        <a id="create" href="create.html">Create an account</a>
        <h1>
            <?php echo "Furry Friends"; ?>
        </h1>
        <a href="https://jeremy-vieira.000webhostapp.com">
            <img src="https://cdn.pixabay.com/photo/2021/01/28/17/37/scruffy-5958600_960_720.png" alt="logo">
        </a>
        

    </header>
    <div class="container">
        <aside id="sidenav" class="sidenav">
            <a id="active" href="index.php">Home</a><br><br>
            <a href="Find.php">Find a dog/cat</a><br><br>
            <a href="DogCare.php">Dog Care</a><br><br>
            <a href="CatCare.php">Cat Care</a><br><br>
            <a href="GiveAway.php">Have a pet to give away</a><br><br>
            <a href="Contact.php">Contact Us</a><br><br>
        </aside>
        <main>
            <div>
                <h2>Welcome to Adopt A-Cat/Dog</h2>
                <p>Welcome to our pet adoption website!. Here at Furry Friends, we believe every pet deserves a second
                    chance.
                    Our goal is to help connect families to their perfect pet so everyone lives happily ever after.<br>
                    Feel free to explore our website, browse through our selection of animals and read all about
                    them.<br>
                    If you have any questions, our contact information can be found in the contact us page.<br></p>
                <img src="https://cdn.pixabay.com/photo/2017/04/11/15/55/animals-2222007_960_720.jpg" alt="pets">
            </div>
        </main>
    </div>
    <footer>
        <p>Privacy/Disclaimer Statement: <a href="#" onclick="<?php echo " alert('Your information will not be sold or
                misused, and we protect the website builder from any incorrect information posted by a pet owner and so
                on.')"; ?>">Click here</a></p>
    </footer>

</body>

</html>
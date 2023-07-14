<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Question 7</title>
    <link rel="stylesheet" href="Styles.css">
    <script src="Q7.js"></script>
</head>

<body onload="myTime()">
    <header>
        <p id="time">
            <?php echo "Date and Time: " . date("F j, Y, g:i a T"); ?>
        </p>
        <h1>
            <?php echo "Furry Friends"; ?>
        </h1>
        <a href="https://jeremy-vieira.000webhostapp.com">
            <img src="https://cdn.pixabay.com/photo/2021/01/28/17/37/scruffy-5958600_960_720.png" alt="logo">
        </a>

    </header>
    <div class="container">
        <aside id="sidenav" class="sidenav">
            <a href="index.php">Home</a><br><br>
            <a href="Find.php">Find a dog/cat</a><br><br>
            <a href="DogCare.php">Dog Care</a><br><br>
            <a href="CatCare.php">Cat Care</a><br><br>
            <a href="GiveAway.php">Have a pet to give away</a><br><br>
            <a id="active" href="Contact.php">Contact Us</a><br><br>
        </aside>
        <main>
            <div>
                <h2>About Me:</h2>
                <p><b>Name:</b> Jeremy Vieira</p>
                <p><b>Student ID:</b> 40246737</p><br>
                <p><b>Course:</b> SOEN 287 (Web Development)</p>
                <p><b>Assignment:</b> Assignment 1</p><br>
                <p><b>Email:</b> jervie2002@gmail.com </p>
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
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
            <a id="active" href="GiveAway.php">Have a pet to give away</a><br><br>
            <a href="Contact.php">Contact Us</a><br><br>
        </aside>
        <main>
            <div>
                <form class="myForm" action="submitForm.php" method="post">
                    <fieldset name="Give Away a Pet">
                        <legend>
                            <h2>Give Away</h2>
                        </legend>
                        <label>Animal Type:</label>
                        <input type="radio" id="cat" name="animal" value="cat">
                        <label for="cat">Cat</label>
                        <input type="radio" id="dog" name="animal" value="dog">
                        <label for="dog">Dog</label><br><br>

                        <label>Breed:</label>
                        <input type="text" id="breedGiveAway">
                        <input type="radio" id="mixed" value="mixed">
                        <label for="mixed">Mixed Breed</label><br><br>

                        <label>Pet age:</label>
                        <select name="age" id="age">
                            <option value="less_than_2">Less than 2</option>
                            <option value="2-4">2-4</option>
                            <option value="4-6">4-6</option>
                            <option value="older than 6">6+</option>
                        </select><br><br>

                        <label>Gender:</label>
                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female">Female</label><br><br>

                        <label>Does get along with other pets?</label>
                        <select name="niceness" id="niceness">
                            <option value="dogs">With other dogs</option>
                            <option value="cats">With other cats</option>
                            <option value="both">Both</option>
                            <option value="neither">Neither</option>
                        </select><br><br>

                        <label>Does it get along with children?</label>
                        <input type="radio" id="yes" name="kids" value="Yes">
                        <label for="yes">Yes</label>
                        <input type="radio" id="no" name="kids" value="No">
                        <label for="no">No</label><br><br>

                        <label>Tell us about your pet:</label><br>
                        <input type="text" name="about" id="about"><br><br>

                        <label>Your Name:</label>
                        <input type="text" name="name" id="name"><br>

                        <label>Your Email:</label>
                        <input type="email" name="email" id="email"><br><br>

                        <label>Thank you for taking the time to fill out our survey!</label><br>
                        <input type="submit" onClick="submitForm(this.form)">
                        <input type="reset">

                    </fieldset>
                </form>
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
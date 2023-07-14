document.getElementById("createForm").addEventListener("submit", function (event) {
    event.preventDefault();

    // Get the entered username and password
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Validate the entered username and password using regex
    var usernameRegex = /^[a-zA-Z0-9]+$/;
    var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;

    if (!usernameRegex.test(username) || !passwordRegex.test(password)) {
        // Display error message for invalid username or password
        document.getElementById("message").innerHTML = "Invalid username or password format.";
    } else {
        // Send the form data to the server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "create.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=UTF-8");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Display success or error message returned from the server
                    document.getElementById("message").innerHTML = xhr.responseText;
                } else {
                    // Display error message for server error
                    document.getElementById("message").innerHTML = "Error: " + xhr.statusText;
                }
            }
        };
        xhr.send("username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password));
    }
});
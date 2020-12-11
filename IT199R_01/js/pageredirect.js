
    // Total seconds to wait
    var seconds = 3;

    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = "login.php";
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }

    // Run countdown function
    countdown();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

    <div class="profile-container">
        <div class="profile-picture">
            <img src="profile.jpg" alt="Profile Picture">
        </div>

        <div class="wrap">

            <div class = "design">
            <?php

            include "variables.php";
           
            $username = $_GET['username'];
    
            echo "<h2>{$username}</h2>";
            echo " <p>{$email}</p>";
            echo "<p>{$location}</p>";

            ?>
            </div>

        </div>


        <button class="logout-button" onclick="logout()">Logout</button>
    </div>


    <script>
        function logout() {
            // Implement your logout logic here (e.g., redirect to logout endpoint)
            alert("You clicked the log out button");
            location.href = "index.php";
        }
    </script>


</body>



</html>

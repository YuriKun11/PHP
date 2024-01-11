<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
        
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input autocomplete="off" type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input  type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
      
            <?php

                include "variables.php";

                $username = $_POST["username"] ?? null;

                if(isset($username)){
                    header("Location: profile.php?username=" . $username);
                   
                }else{
                    
                }

            ?>

</body>
</html>


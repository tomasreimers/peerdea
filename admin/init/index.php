<?php 
    
    if (isset($_POST["submit"])){

    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Install Peerdea</title>
    </head>
    <body>
        <div class="login_box">
            <h2>Install Peerdea</h2>
            <form action="" method="POST">
                <div class="login_field">
                    <label for="name" class="login_label">Name</label>
                    <input type="text" class="login_input" name="name" id="name" />
                </div>
                <div class="login_field">
                    <label for="email" class="login_label">Email</label>
                    <input type="text" class="login_input" name="email" id="email" />
                </div>
                <div class="login_field">
                    <label for="password" class="login_label">Password</label>
                    <input type="text" class="login_input" name="password" id="password" />
                </div>
                <input type="submit" value="Done!" name="submit" id="submit" />
            </form>
        </div>
    </body>
</html>
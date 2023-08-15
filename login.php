<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form">
        <section class="container">
            <header>Login</header>
            <form class="form" action="action_login.php" method="POST">

                <div class="input-box">
                    <label for="user">UserName</label>
                    <input type="text" id="user" name="user"><br><br>
                </div>
                <div class="input-box">
                    <label for="pass">Password</label>
                    <input type="password" id="pass" name="pass" required><br><br>
                </div>
                <div class="input-box">
                    <button type="submit" id="butt">Submit</button>
                </div>
            </form>
            <div id="result"></div>
        </section>
    </div>
</body>

</html>

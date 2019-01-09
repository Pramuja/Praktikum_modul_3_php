<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div>
            <div id="particles-js">
                    <div class="box">
                        <h2>Login</h2>
                        <form action="sistem.php" method="POST">
                            <div class="inputBox">
                                <input type="text" required="" name="nama">
                                <label for="">Username</label>
                            </div>
                            <div class="inputBox">
                                    <input type="text" required="" name="email">
                                    <label for="">Email</label>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script type="text/javascript" src="particles.js"></script>
            <script type="text/javascript" src="app.js"></script>
    </div>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="navigation">
            <label class="logo">EXPATRA <ion-icon name="happy-outline"></ion-icon></label>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><button class="login">Login</button></li>
            </ul>
        </div>
    </header>
    <div class="cover_box">
        <!-- login form start -->

        <span class="icon_close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form_box">
            <h2>LOG IN</h2>
            <form action="login_db.php" method="post">
                <div class="input_box">
                    <span class="ic1"><ion-icon name="mail-outline"></ion-icon></span>
                    <label for="uid"><b>UserID</b></label>
                    <input type="email" placeholder="Enter Username" name="uid" required>
                </div>

                <div class="input_box">
                    <span class="ic1"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <label for="pwd"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pwd" required>
                </div>
                <div class="forget">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password ?</a>
                </div>
                <button type="submit" class="btn1">Submit</button>
                <div class="register">
                    <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>

                </div>
            </form>
        </div>
     <!-- registration box start here. -->
    
        
        <div class="reg_box">
            <h2>REGISTER</h2>
            <form action="register_db.php" method="post">
                <div class="input_box">
                    <span class="ic1"><ion-icon name="person-outline"></ion-icon></span>
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                </div>
                <div class="input_box">
                    <span class="ic1"><ion-icon name="mail-outline"></ion-icon></span>
                    <label for="uid"><b>Email ID</b></label>
                    <input type="email" placeholder="Enter Username" name="uid" required>
                </div>
                <div class="input_box">
                    <span class="ic1"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <label for="pwd"><b>Choose Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pwd" required>
                </div>
                <div class="forget">
                    <label><input type="checkbox">Agree terms and conditions.</label>
                    <a href="#">Forgot Password ?</a>
                </div>
                <button type="submit" class="btn1">Register</button>
                <div class="register">
                    <p>Already have an account ? <a href="#" class="login-link">login</a></p>

                </div>
            </form>
        </div> 
    
    </div>
    <div class="footer">
        <footer>
            <div class="foot_contain">
                <p>&copy; All right reserved.</p>
                <div class="social">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="script1.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>

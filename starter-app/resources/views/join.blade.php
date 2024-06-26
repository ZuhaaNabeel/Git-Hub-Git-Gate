<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up - GitHub</title>
    <link rel="stylesheet" href="joinstyle.css">
</head>
<body>
   
 <header>
    <div class="header">
    <ul>
        <li><a href="Home page.html">Home</a></li>
        <li><a href="register.html">Join</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="contact.html">Contact Us</a></li>
    </ul>
</div>
</header>

    <main class="signup-page">
        <div class="container">
            <h1>Welcome to GitHub!</h1>
            <p class="sub-heading">Let’s begin the adventure</p>

            <form id="signupForm" action="#" method="post" onsubmit="return validateSignupForm()">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="agreeTerms" required>
                    <label for="agreeTerms">By creating an account, you agree to the Terms of Service. For more information about GitHub's privacy practices, see the GitHub Privacy Statement. We'll occasionally send you account-related emails.</label>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </main>
</body>
</html>

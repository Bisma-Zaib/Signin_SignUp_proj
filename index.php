<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register and Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- SIGN UP FORM -->
  <div class="container" id="signup" style="display: none;">
    <h1 class="from-title">Register</h1>
    <form method="post" action="register.php" onsubmit="return validateSignUp()">

      <div class="input-group">
        <i class="fas fa-user"></i>
        <input 
          type="text" 
          name="fName" 
          id="fName" 
          placeholder="First Name" 
          required
          oninvalid="this.setCustomValidity('Please enter your first name')"
          oninput="this.setCustomValidity('')"
        >
        <label for="fName">First name</label>
      </div>

      <div class="input-group">
        <i class="fas fa-user"></i>
        <input 
          type="text" 
          name="lName" 
          id="lName" 
          placeholder="Last Name" 
          required
          oninvalid="this.setCustomValidity('Please enter your last name')"
          oninput="this.setCustomValidity('')"
        >
        <label for="lName">Last name</label>
      </div>

      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input 
          type="email" 
          name="email" 
          id="signupEmail" 
          placeholder="Email Address" 
          required
          oninvalid="this.setCustomValidity('Please enter a valid email')"
          oninput="this.setCustomValidity('')"
        >
        <label for="signupEmail">Email Address</label>
      </div>

      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input 
          type="password"
          name="password" 
          id="signupPassword" 
          placeholder="Password" 
          required
          minlength="8"
          oninvalid="this.setCustomValidity('Password must be at least 8 characters')"
          oninput="this.setCustomValidity('')"
        >
        <label for="signupPassword">Password</label>
      </div>

      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">--------or---------</p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Already Have Account?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>

  <!-- SIGN IN FORM -->
  <div class="container" id="signIn">
    <h1 class="from-title">Sign In</h1>
    <form method="post" action="register.php" onsubmit="return validateSignIn()">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input 
          type="email" 
          name="email" 
          id="signinEmail" 
          placeholder="Email Address" 
          required
          oninvalid="this.setCustomValidity('Please enter your email')"
          oninput="this.setCustomValidity('')"
        >
        <label for="signinEmail">Email Address</label>
      </div>
  
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input 
          type="password" 
          name="password" 
          id="signinPassword" 
          placeholder="Password" 
          required
          oninvalid="this.setCustomValidity('Please enter your password')"
          oninput="this.setCustomValidity('')"
        >
        <label for="signinPassword">Password</label>
      </div>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
  
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p class="or">--------or---------</p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Don't have account yet?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>

  <script src="script.js"></script>
  <script>
    // Basic form validation
    function validateSignUp() {
      const password = document.getElementById('signupPassword').value;
      if (password.length < 8) {
        alert('Password must be at least 8 characters');
        return false;
      }
      return true;
    }

    function validateSignIn() {
      // Add additional validation if needed
      return true;
    }
  </script>
</body>
</html>
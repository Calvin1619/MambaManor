<div class="overlay" id="overlay" onclick="closePopup()"></div>

<div class="popup" id="popup">
  <h2>Welcome to MambaManor</h2>
  
  <div class="button-container">
    <button class="button active" onclick="showSignupPanel()">Sign Up</button>
    <button class="button" onclick="showLoginPanel()">Login</button>
    <div class="indicator"></div> <!-- Indicator bar -->
  </div>
  <!-- Signin Panel -->
  <div id="signup-panel" style="display:none;">
  <h3>Sign Up</h3>
  <form id="signup-form" action="data.php" method="POST" onsubmit="return validateSignup()">
    <div class="form-field">
      <label for="signup-username">Username:</label>
      <input type="text" id="signup-username" name="username" placeholder="Enter your username">
    </div>
    <div class="form-field">
      <label for="signup-email">Email:</label>
      <input type="email" id="signup-email" name="email" placeholder="Enter your email">
    </div>
    <div class="form-field">
      <label for="signup-password">Password:</label>
      <input type="password" id="signup-password" name="password" placeholder="Enter your password">
    </div>
    <div class="form-field">
      <label for="signup-confirm-password">Confirm Password:</label>
      <input type="password" id="signup-confirm-password" name="confirmPassword" placeholder="Confirm your password">
    </div>
  <button type="submit" class="button">Sign Up</button>
  </div>
</form>
  <!-- Login Panel -->
<div id="login-panel" style="display:none;">
  <h3>Login</h3>
  <form id="login-form" action="data2.php" method="POST" onsubmit="return validateLogin()">
    <div class="form-field">
      <label for="login-username">Username:</label>
      <input type="text" id="login-username" name="login-username" placeholder="Enter your username">
    </div>
    <div class="form-field">
      <label for="login-password">Password:</label>
      <input type="password" id="login-password" name="login-password" placeholder="Enter your password">
    </div>
    <button type="submit" class="button">Login</button>
  </div>
  </form>
</div>

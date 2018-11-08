<?php
 echo 'TEST';
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Slotify</title>
  </head>
  <body>
    <div id='inputContainer'>
      <form id='loginForm' action="register.php" method="post">
        <h1>Login to your account</h1>
        <p>
          <label for="loginUsername">Username</label>
          <input id='loginUsername' type="text" name="loginUsername" value="" placeholder="e.g. Testuser" required>
        </p>
        <p>
         <label for="loginPassword">Password</label>
         <input id='loginPassword' type="password" name="loginUsername" value="" required>
        </p>
        <button type="submit" name="loginButton">Log In</button>
      </form>

      <form id='loginForm' action="register.php" method="post">
        <h1>Create your free account</h1>
        <p>
          <label for="username">Username</label>
          <input id='username' type="text" name="username" value="" placeholder="e.g. Testuser" required>
        </p>
        <p>
          <label for="firstName">First Name</label>
          <input id='firstName' type="text" name="firstName" value="" placeholder="e.g. Testuser" required>
        </p>
        <p>
          <label for="lastName">Last Name</label>
          <input id='lastName' type="text" name="lastName" value="" placeholder="e.g. Testuser" required>
        </p>
        <p>
          <label for="email">Email Address</label>
          <input id='email' type="email" name="email" value="" placeholder="e.g. Testuser@dasd" required>
        </p>
        <p>
          <label for="confirmEmail">Confirm Email</label>
          <input id='confirmEmail' type="text" name="confirmEmail" value="" placeholder="e.g. Testuser" required>
        </p>
        <p>
         <label for="password">Password</label>
         <input id='password' type="password" name="password" value="" placeholder="Password" required>
        </p>
        <p>
         <label for="password2">Confirm Password</label>
         <input id='password2' type="password" name="password" value="" placeholder="Confirm Password" required>
        </p>
        <p>
          <label for='tel'>Telefone</label>
          <input type='number' id='tel' name='telefone' placeholder="Your phonenumber"/>
        </p>
        <button type="submit" name="loginButton">Log In</button>
      </form>
    </div>
  </body>
</html>

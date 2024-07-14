<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="styles.css">
  <style>
  body {
  font-family: Arial, sans-serif;
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-image: url('https://static.vecteezy.com/system/resources/previews/000/655/001/original/vector-farmers-working-in-farm-cartoons.jpg');
  background-size: 62rem;
  background-position: center;
  background-repeat: no-repeat;
}

.login-container {
  background-color: #967f8f21;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 300px;
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
}

h2 {
  margin-bottom: 20px;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 4px;
    font-size: 20px;
    border: 4px solid lightgray;
    border-radius: 6px;
    column-gap: 30px;
}

input[type="text"], input[type="email"] {
    width: 100%;
    padding: 4px;
    font-size: 20px;
    border: 4px solid lightgray;
    border-radius: 6px;
    column-gap: 30px;
}

button {
    width: 60%;
    padding: 10px;
    background-color: palevioletred;
    color: white;
    border: 4px solid;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 15px;
    box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.1);

}

button:hover {
  background-color: lavender;
}

.signup-link {
  margin-top: 15px;
}

.signup-link a {
  color:#fefefe;
  text-decoration: none;
}

.signup-link a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>
  <div class="login-container">
    <form action="db2.php" method="POST" class="login-form">
    <!-- <img src="('https://image.freepik.com/free-vector/farmers-group-agricultural-workers-farmer-team-standing-together-with-fresh-farm-food-field_53562-10964.jpg'); -->

      <h2>Login</h2>
      <input type="email" placeholder="Email" name="email" required><br>
      <input type="password" placeholder="Password" name="password" required>
      <button type="submit">Login</button>
      <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
  </div>
</body>
</html>

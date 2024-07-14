<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Farmer's Market</title>
    <link rel="stylesheet" href="styles.css">
   <style>
* {
    margin: 20;
    padding: 20;
    box-sizing: border-box;
}

/* body {
    font-family: Arial, sans-serif;
    background-color: lavender;
} */

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


.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.signup-form {
    background-color: #967f8f21;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.1);
    width: 350px;
}

.signup-form h2 {
    text-align: center;
    margin-bottom: 25px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
}

.form-group input {
    width: 100%;
    padding: 4px;
    font-size: 15px;
    border: 4px solid lightgray;
    border-radius: 6px;
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
    background-color: lightskyblue;
}

.login-link {
    text-align: center;
    margin-top: 15px;
}

.login-link a {
    color: #fefefe;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <div class="container">
        <form class="signup-form" action="db1.php" method="POST">
            <h2>Sign Up</h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm password">Confirm Password:</label>
                <input type="password" id="password" name="confirm" required>
            </div>
            <button type="submit">Sign Up</button>
            <p class="login-link">Already have an account? <a href="#">Log in here</a></p>
        </form>
    </div>
</body>
</html>

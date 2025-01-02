<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Signup</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, name, password FROM customer WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Set session or cookie for user login
            setcookie("user_email", $email, time() + 3600, "/"); // 1-hour cookie
            echo "Login successful! Welcome, " . $row['name'];
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with that email.";
    }

    $stmt->close();
    $conn->close();
}
?>

  <div class="container">
    <div class="form-container">
      <!-- Buttons to switch between forms -->
      <div class="button-container">
        <button id="login-btn" class="active">Login</button>
        <button id="signup-btn">Signup</button>
      </div>

      <!-- Forms -->
      <div class="form-wrapper">
        <!-- Login Form -->
        <form id="login-form" class="form active">
          <h2>Login</h2>
          <input type="email" placeholder="Email" required>
          <input type="password" placeholder="Password" required>
          <button type="submit">Login</button>
        </form>

        <!-- Signup Form -->
        <form id="signup-form" class="form">
          <h2>Signup</h2>
          <input type="text" placeholder="Full Name" required>
          <input type="email" placeholder="Email" required>
          <input type="password" placeholder="Password" required>
          <button type="submit">Signup</button>
        </form>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>

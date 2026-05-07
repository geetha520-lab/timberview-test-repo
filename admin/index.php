<?php
// admin/index.php
session_start();

// If already logged in, go to dashboard
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

// ==== DB CONNECTION SETTINGS ====
// Change these if your XAMPP/MySQL is different
$host = "localhost";
$db_username = "staidlog_timberview";
$db_password = "EhC3TtWPzguNkJXdAZWa";       // default empty in XAMPP
$db_name = "staidlog_timberview";

// Create connection
$conn = new mysqli($host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Prepare query to check username
    $sql = "SELECT id, username, password FROM admin_users WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // For now, simple plain text compare
        if ($password === $row['password']) {
            // Set session
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $row['username'];

            // Redirect to dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid username or password";
        }
    } else {
        $error = "Invalid username or password";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f5f7;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            width: 100%;
            max-width: 380px;
        }

        .login-container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #007bff;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            border: none;
            background: #007bff;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #0056b3;
        }

        .error {
            margin-bottom: 10px;
            color: #d9534f;
            font-size: 13px;
            text-align: center;
        }

        .hint {
            margin-top: 12px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>

    <?php if (!empty($error)): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" action="index.php">
        <div class="form-group">
            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                required
                autocomplete="off"
            >
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >
        </div>

        <button type="submit" class="btn-login">Login</button>

        <!-- <div class="hint">
            Credentials are now checked from <b>timberview.admin_users</b> table.
        </div> -->
    </form>
</div>

</body>
</html>

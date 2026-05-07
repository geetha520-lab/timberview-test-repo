<?php
// admin/edit-project.php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
$adminName = $_SESSION['admin_username'] ?? 'Admin';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid project ID.");
}
$project_id = (int) $_GET['id'];

// DB connection
$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "kinstride";

$conn = new mysqli($host, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$success = "";
$error = "";
$errors = [];

// First: fetch existing project data
$sql = "SELECT * FROM projects WHERE id = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Failed to prepare statement: " . $conn->error);
}
$stmt->bind_param("i", $project_id);
$stmt->execute();
$result = $stmt->get_result();
$project = $result->fetch_assoc();
$stmt->close();

if (!$project) {
    die("Project not found.");
}

// Fill variables from existing data (to use in form)
$title = $project['title'];
$content1 = $project['content1'];
$location = $project['location'];
$client = $project['client'];
$plot_size = $project['plot_size'];
$contract_value = $project['contract_value'];
$content2 = $project['content2'];
$image_path = $project['image_path'];
$creation_date = $project['creation_date'];

// If form submitted (update)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST['title'] ?? '');
    $content1 = trim($_POST['content1'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $client = trim($_POST['client'] ?? '');
    $plot_size = trim($_POST['plot_size'] ?? '');
    $contract_value = trim($_POST['contract_value'] ?? '');
    $content2 = trim($_POST['content2'] ?? '');
    $creation_date = $_POST['creation_date'] ?? '';
    $old_image_path = $_POST['old_image_path'] ?? null;

    if ($title === "") {
        $errors[] = "Title is required.";
    }
    if ($creation_date === "") {
        $errors[] = "Creation date is required.";
    }

    // Handle new image upload (optional)
    $new_image_path = $old_image_path;

    if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
        if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES['image']['tmp_name'];
            $original_name = $_FILES['image']['name'];

            $ext = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

            if (!in_array($ext, $allowed)) {
                $errors[] = "Invalid image type. Allowed: jpg, jpeg, png, gif, webp.";
            } else {
                $upload_dir = __DIR__ . "/../uploads/projects/";
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }

                $new_name = "project_" . time() . "_" . mt_rand(1000, 9999) . "." . $ext;
                $target_path = $upload_dir . $new_name;

                if (move_uploaded_file($tmp_name, $target_path)) {
                    $new_image_path = "uploads/projects/" . $new_name;
                } else {
                    $errors[] = "Failed to upload image.";
                }
            }
        } else {
            $errors[] = "Error uploading image.";
        }
    }

    if (empty($errors)) {
        $sql = "UPDATE projects
                SET title = ?, content1 = ?, location = ?, client = ?, plot_size = ?, contract_value = ?, content2 = ?, image_path = ?, creation_date = ?
                WHERE id = ?";

        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param(
                "sssssssssi",
                $title,
                $content1,
                $location,
                $client,
                $plot_size,
                $contract_value,
                $content2,
                $new_image_path,
                $creation_date,
                $project_id
            );

            if ($stmt->execute()) {
                $success = "Project updated successfully.";
                $image_path = $new_image_path; // update current variable
            } else {
                $error = "Failed to update project: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $error = "Failed to prepare update statement: " . $conn->error;
        }
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Project - Kinstride Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: Arial, sans-serif;
            background: #f4f5f7;
            color: #333;
        }
        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 240px;
            background: #111827;
            color: #e5e7eb;
            display: flex;
            flex-direction: column;
            padding: 20px 15px;
        }
        .sidebar-logo {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
            letter-spacing: 1px;
        }
        .sidebar nav { flex: 1; }
        .menu-item,
        .submenu a {
            display: block;
            padding: 10px 12px;
            margin-bottom: 6px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }
        .menu-item {
            color: #e5e7eb;
            background: transparent;
            border: none;
            width: 100%;
            text-align: left;
        }
        .menu-item:hover,
        .submenu a:hover {
            background: #1f2937;
        }
        .menu-item.active {
            background: #2563eb;
        }
        .menu-group { margin-top: 10px; }
        .menu-item.has-children {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .submenu {
            margin-left: 8px;
            margin-top: 4px;
            display: none;
        }
        .submenu a {
            color: #d1d5db;
            font-size: 13px;
        }
        .submenu.open { display: block; }

        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .topbar {
            background: #ffffff;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 4px rgba(0,0,0,0.08);
        }
        .topbar-title {
            font-size: 18px;
            font-weight: bold;
        }
        .topbar-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .admin-name {
            font-size: 14px;
            color: #555;
        }
        .logout-btn {
            background: #ef4444;
            color: #fff;
            border: none;
            padding: 7px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 13px;
        }
        .logout-btn:hover { background: #dc2626; }

        .content {
            padding: 20px;
        }
        .card {
            background: #ffffff;
            border-radius: 6px;
            padding: 18px 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
            max-width: 900px;
        }
        .card h3 { margin-bottom: 15px; }

        .form-row {
            display: flex;
            gap: 15px;
        }
        .form-group {
            margin-bottom: 12px;
            width: 100%;
        }
        label {
            display: block;
            font-size: 13px;
            margin-bottom: 4px;
            font-weight: 600;
        }
        input[type="text"],
        input[type="date"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 13px;
        }
        textarea {
            resize: vertical;
            min-height: 80px;
        }
        .btn-submit {
            margin-top: 10px;
            padding: 9px 18px;
            font-size: 14px;
            border-radius: 4px;
            border: none;
            background: #2563eb;
            color: #fff;
            cursor: pointer;
        }
        .btn-submit:hover {
            background: #1d4ed8;
        }
        .alert-success {
            background: #dcfce7;
            color: #166534;
            padding: 8px 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 13px;
        }
        .alert-error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 8px 10px;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 13px;
        }
        ul.error-list {
            margin: 5px 0 0 18px;
            font-size: 13px;
        }
        .current-image {
            font-size: 12px;
            color: #555;
            margin-top: 4px;
        }
        .current-image img {
            max-width: 150px;
            margin-top: 4px;
            border-radius: 4px;
        }

        @media (max-width: 768px) {
            .layout { flex-direction: column; }
            .sidebar { width: 100%; flex-direction: row; overflow-x: auto; }
            .sidebar nav { display: flex; align-items: center; gap: 8px; }
            .form-row { flex-direction: column; }
        }
    </style>
</head>
<body>

<div class="layout">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">
            Kinstride Admin
        </div>

        <nav>
            <a href="dashboard.php" class="menu-item">Dashboard</a>

            <div class="menu-group">
                <button type="button" class="menu-item has-children" onclick="toggleServices()">
                    Services
                    <span id="servicesArrow">▲</span>
                </button>
                <div class="submenu open" id="servicesSubmenu">
                    <a href="add-project.php">Add Project Details</a>
                    <a href="project-list.php" class="menu-item active" style="background:#2563eb;">Project Details Table</a>
                </div>
            </div>
        </nav>
    </aside>

    <!-- Main -->
    <div class="main">
        <header class="topbar">
            <div class="topbar-title">
                Edit Project
            </div>
            <div class="topbar-right">
                <span class="admin-name">Logged in as: <?php echo htmlspecialchars($adminName); ?></span>
                <form action="logout.php" method="POST">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </header>

        <main class="content">
            <div class="card">
                <h3>Edit Project Details</h3>

                <?php if ($success): ?>
                    <div class="alert-success"><?php echo htmlspecialchars($success); ?></div>
                <?php endif; ?>

                <?php if ($error): ?>
                    <div class="alert-error"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>

                <?php if (!empty($errors)): ?>
                    <div class="alert-error">
                        Please fix the following:
                        <ul class="error-list">
                            <?php foreach ($errors as $e): ?>
                                <li><?php echo htmlspecialchars($e); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="edit-project.php?id=<?php echo $project_id; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title *</label>
                        <input type="text" id="title" name="title" required
                               value="<?php echo htmlspecialchars($title); ?>">
                    </div>

                    <div class="form-group">
                        <label for="content1">Content 1</label>
                        <textarea id="content1" name="content1"><?php echo htmlspecialchars($content1); ?></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location"
                                   value="<?php echo htmlspecialchars($location); ?>">
                        </div>
                        <div class="form-group">
                            <label for="client">Client</label>
                            <input type="text" id="client" name="client"
                                   value="<?php echo htmlspecialchars($client); ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="plot_size">Plot Size</label>
                            <input type="text" id="plot_size" name="plot_size"
                                   value="<?php echo htmlspecialchars($plot_size); ?>">
                        </div>
                        <div class="form-group">
                            <label for="contract_value">Contract Value</label>
                            <input type="text" id="contract_value" name="contract_value"
                                   value="<?php echo htmlspecialchars($contract_value); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content2">Content 2</label>
                        <textarea id="content2" name="content2"><?php echo htmlspecialchars($content2); ?></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="image">Image (leave empty to keep existing)</label>
                            <input type="file" id="image" name="image" accept="image/*">
                            <div class="current-image">
                                Current image:
                                <?php if ($image_path): ?>
                                    <br>
                                    <img src="../<?php echo htmlspecialchars($image_path); ?>" alt="Current image">
                                <?php else: ?>
                                    <span>Not set</span>
                                <?php endif; ?>
                            </div>
                            <input type="hidden" name="old_image_path"
                                   value="<?php echo htmlspecialchars($image_path); ?>">
                        </div>
                        <div class="form-group">
                            <label for="creation_date">Creation Date *</label>
                            <input type="date" id="creation_date" name="creation_date" required
                                   value="<?php echo htmlspecialchars($creation_date); ?>">
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Update Project</button>
                </form>
            </div>
        </main>
    </div>
</div>

<script>
    function toggleServices() {
        const submenu = document.getElementById('servicesSubmenu');
        const arrow = document.getElementById('servicesArrow');

        submenu.classList.toggle('open');
        if (submenu.classList.contains('open')) {
            arrow.textContent = '▲';
        } else {
            arrow.textContent = '▼';
        }
    }
</script>

</body>
</html>

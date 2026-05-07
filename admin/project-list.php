<?php
// admin/project-list.php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
$adminName = $_SESSION['admin_username'] ?? 'Admin';

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

// Handle delete
if (isset($_GET['delete'])) {
    $delete_id = (int) $_GET['delete'];

    $stmt = $conn->prepare("DELETE FROM projects WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $delete_id);
        if ($stmt->execute()) {
            $success = "Project deleted successfully.";
        } else {
            $error = "Failed to delete project.";
        }
        $stmt->close();
    } else {
        $error = "Failed to prepare delete statement.";
    }
}

// Fetch all projects
$projects = [];
$result = $conn->query("SELECT id, title, creation_date FROM projects ORDER BY id DESC");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
    $result->free();
} else {
    $error = "Failed to fetch projects.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project List - Kinstride Admin</title>
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

        /* Sidebar */
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

        /* Main */
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
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }
        .card-header h3 { margin: 0; }

        .btn-add {
            padding: 7px 12px;
            font-size: 13px;
            border-radius: 4px;
            border: none;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
        }
        .btn-add:hover {
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
        }
        th, td {
            padding: 8px 10px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }
        th {
            background: #f3f4f6;
        }
        tr:hover td {
            background: #f9fafb;
        }

        .actions {
            display: flex;
            gap: 6px;
        }
        .btn-edit,
        .btn-delete {
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-edit {
            background: #10b981;
            color: #fff;
        }
        .btn-edit:hover {
            background: #059669;
        }
        .btn-delete {
            background: #ef4444;
            color: #fff;
        }
        .btn-delete:hover {
            background: #dc2626;
        }

        @media (max-width: 768px) {
            .layout { flex-direction: column; }
            .sidebar { width: 100%; flex-direction: row; overflow-x: auto; }
            .sidebar nav {
                display: flex;
                align-items: center;
                gap: 8px;
            }
            table {
                font-size: 12px;
            }
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
                Project List
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
                <div class="card-header">
                    <h3>Projects</h3>
                    <a href="add-project.php" class="btn-add">+ Add New Project</a>
                </div>

                <?php if ($success): ?>
                    <div class="alert-success"><?php echo htmlspecialchars($success); ?></div>
                <?php endif; ?>

                <?php if ($error): ?>
                    <div class="alert-error"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>

                <?php if (count($projects) === 0): ?>
                    <p>No projects found.</p>
                <?php else: ?>
                    <table>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Creation Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sn = 1;
                        foreach ($projects as $p): ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo htmlspecialchars($p['title']); ?></td>
                                <td><?php echo htmlspecialchars($p['creation_date']); ?></td>
                                <td>
                                    <div class="actions">
                                        <a href="edit-project.php?id=<?php echo $p['id']; ?>"
                                           class="btn-edit">Edit</a>

                                        <a href="project-list.php?delete=<?php echo $p['id']; ?>"
                                           class="btn-delete"
                                           onclick="return confirm('Are you sure you want to delete this project?');">
                                            Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
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

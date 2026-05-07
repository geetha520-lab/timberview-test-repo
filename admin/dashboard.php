<?php
// admin/dashboard.php
session_start();

// If not logged in, redirect to login page (index.php)
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
$adminName = $_SESSION['admin_username'] ?? 'Admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timberview Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

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

        .sidebar nav {
            flex: 1;
        }

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

        .menu-group {
            margin-top: 10px;
        }

        .menu-item.has-children {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .submenu {
            margin-left: 8px;
            margin-top: 4px;
            display: none; /* hidden by default */
        }

        .submenu a {
            color: #d1d5db;
            font-size: 13px;
        }

        .submenu.open {
            display: block;
        }

        /* Main area */
        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Header / Topbar */
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

        .logout-btn:hover {
            background: #dc2626;
        }

        /* Content */
        .content {
            padding: 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 6px;
            padding: 18px 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #555;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-top: 10px;
        }

        .stat-box {
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: 0.3s ease;
        }

        .stat-box:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .stat-box h3 {
            font-size: 32px;
            margin: 0;
            color: #2563eb;
            font-weight: bold;
        }

        .stat-box p {
            margin-top: 8px;
            font-size: 14px;
            color: #666;
        }


        /* Responsive */
        @media (max-width: 768px) {
            .layout {
                flex-direction: column;
            }
            .sidebar {
                width: 100%;
                flex-direction: row;
                overflow-x: auto;
            }
            .sidebar nav {
                display: flex;
                align-items: center;
                gap: 8px;
            }
            .submenu {
                position: relative;
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
            <!-- Dashboard link -->
            <a href="dashboard.php" class="menu-item active">
                Dashboard
            </a>
            <!-- Add under Services or where appropriate -->
<a href="contact-list.php" class="menu-item">Contact Leads</a>


            <!-- Services group -->
           <!-- <div class="menu-group">
                <button type="button" class="menu-item has-children" onclick="toggleServices()">
                    Services
                    <span id="servicesArrow">▼</span>
                </button>
                <div class="submenu" id="servicesSubmenu">
                    
                    <a href="add-project.php">Add Project Details</a>
                    <a href="project-list.php">Project Details Table</a>
                </div>
            </div> -->
        </nav>
    </aside>

    <!-- Main area -->
    <div class="main">
        <!-- Top header -->
        <header class="topbar">
            <div class="topbar-title">
                
            </div>
            <div class="topbar-right">
                <span class="admin-name">Logged in as: <?php echo htmlspecialchars($adminName); ?></span>
                <form action="logout.php" method="POST">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </header>

        <!-- Content -->
      <!--  <main class="content">

            <h2 style="margin-bottom:15px;">Overview</h2>

            <div class="stats-grid">
                <div class="stat-box">
                    <h3>10</h3>
                    <p>Total Projects</p>
                </div>

                <div class="stat-box">
                    <h3>20</h3>
                    <p>Future Projects</p>
                </div>

                <div class="stat-box">
                    <h3>5</h3>
                    <p>Completed Projects</p>
                </div>

                <div class="stat-box">
                    <h3>3</h3>
                    <p>Ongoing Projects</p>
                </div>
            </div>

        </main> -->

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

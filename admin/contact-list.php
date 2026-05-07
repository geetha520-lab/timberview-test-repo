<?php
// admin/contact-list.php
session_start();

// Restrict access
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
$adminName = $_SESSION['admin_username'] ?? 'Admin';

/*
 DB connection - update these if your MySQL credentials or DB name differ
*/
$host = "localhost";
$db_username = "staidlog_timberview";
$db_password = "EhC3TtWPzguNkJXdAZWa";
$db_name = "staidlog_timberview"; // change if different

$conn = new mysqli($host, $db_username, $db_password, $db_name);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetch messages from contact_form table (read-only)
$messages = [];
$sql = "SELECT id, name, email, subject, number, message, created_at FROM contact_form ORDER BY id DESC";
$res = $conn->query($sql);
if ($res) {
    while ($r = $res->fetch_assoc()) {
        $messages[] = $r;
    }
    $res->free();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Leads - Timberview Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Keep styling consistent with your admin UI */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f4f5f7; color: #333; }
        .layout { display: flex; min-height: 100vh; }

        /* Sidebar */
        .sidebar { width: 240px; background: #111827; color: #e5e7eb; display: flex; flex-direction: column; padding: 20px 15px; }
        .sidebar-logo { font-size: 20px; font-weight: bold; margin-bottom: 25px; text-align:center; letter-spacing:1px; }
        .menu-item { display:block; padding:10px 12px; margin-bottom:6px; border-radius:4px; color:#e5e7eb; text-decoration:none; font-size:14px; }
        .menu-item:hover { background:#1f2937; }
        .menu-item.active { background:#2563eb; }

        .main { flex:1; display:flex; flex-direction:column; }
        .topbar { background:#fff; padding:12px 20px; display:flex; justify-content:space-between; align-items:center; box-shadow:0 1px 4px rgba(0,0,0,0.08); }
        .topbar-title { font-size:18px; font-weight:bold; }
        .topbar-right { display:flex; align-items:center; gap:10px; }
        .admin-name { font-size:14px; color:#555; }
        .logout-btn { background:#ef4444; color:#fff; border:none; padding:7px 12px; border-radius:4px; cursor:pointer; }

        .content { padding:20px; }
        .card { background:#fff; border-radius:6px; padding:18px 20px; box-shadow:0 2px 6px rgba(0,0,0,0.08); }

        .card-header { display:flex; justify-content:space-between; align-items:center; margin-bottom:12px; }
        .card-header h3 { margin:0; }
        .total-count { font-size:13px; color:#666; }

        table { width:100%; border-collapse:collapse; margin-top:10px; font-size:14px; }
        th, td { padding:10px 12px; border-bottom:1px solid #e5e7eb; text-align:left; vertical-align:top; }
        th { background:#f3f4f6; font-weight:600; }
        tr:hover td { background:#f9fafb; }

        /* allow long messages to wrap nicely */
        .msg-cell { max-width:600px; white-space:pre-wrap; word-wrap:break-word; color:#444; }

        @media (max-width: 900px) {
            .msg-cell { max-width:320px; }
        }
        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr { display:block; }
            thead { display:none; }
            tr { margin-bottom: 12px; border-radius:6px; background:#fff; padding:10px; box-shadow:0 1px 4px rgba(0,0,0,0.04); }
            td { border:0; padding:6px 0; }
            td.label { font-weight:600; color:#666; width:120px; display:inline-block; }
            td.value { display:inline-block; }
        }
    </style>
</head>
<body>

<div class="layout">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">Kinstride Admin</div>

        <nav>
            <a href="dashboard.php" class="menu-item">Dashboard</a>



            <div style="margin-top:12px;">
                <!-- Contact/Lead page link (active) -->
                <a href="contact-list.php" class="menu-item active" style="background:#2563eb;">Contact Leads</a>
            </div>
        </nav>
    </aside>

    <!-- Main area -->
    <div class="main">
        <header class="topbar">
            <div class="topbar-title">Contact Leads</div>
            <div class="topbar-right">
                <span class="admin-name">Logged in as: <?php echo htmlspecialchars($adminName); ?></span>
                <form action="logout.php" method="POST" style="margin:0;">
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </div>
        </header>

        <main class="content">
            <div class="card">
                <div class="card-header">
                    <h3>Contact / Lead Records</h3>
                    <div class="total-count">Total: <?php echo count($messages); ?></div>
                </div>

                <?php if (count($messages) === 0): ?>
                    <p>No contact messages found.</p>
                <?php else: ?>
                    <table aria-describedby="contact-records">
                        <thead>
                            <tr>
                                <th style="width:60px;">S.No</th>
                                <th style="width:160px;">Name</th>
                                <th style="width:200px;">Email</th>
                                <th style="width:120px;">Subject</th>
                                <th style="width:120px;">Phone</th>
                                <th>Message</th>
                                <th style="width:160px;">Submitted At</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $sn = 1; foreach ($messages as $m): ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo htmlspecialchars($m['name']); ?></td>
                                <td><?php echo htmlspecialchars($m['email']); ?></td>
                                <td><?php echo htmlspecialchars($m['subject']); ?></td>
                                <td><?php echo htmlspecialchars($m['number']); ?></td>
                                <td class="msg-cell"><?php echo htmlspecialchars($m['message']); ?></td>
                                <td><?php echo htmlspecialchars($m['created_at']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </main>
    </div>
</div>

</body>
</html>

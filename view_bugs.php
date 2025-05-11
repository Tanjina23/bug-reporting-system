<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>All Bug Reports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">
<div class="container mt-5">
    <h2 class="mb-4">Bug Reports</h2>
    <a href="index.php" class="btn btn-success mb-3">Submit New Bug</a>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Severity</th>
                <th>Status</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM bugs ORDER BY created_at DESC");
        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= htmlspecialchars($row['title']); ?></td>
                <td><?= $row['severity']; ?></td>
                <td><?= $row['status']; ?></td>
                <td><?= $row['created_at']; ?></td>
            </tr>
        <?php endwhile; else: ?>
            <tr><td colspan="5">No bug reports found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>

<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bug Reporting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Submit a Bug Report</h2>
    <form action="submit_bug.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Bug Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Bug Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Severity</label>
            <select name="severity" class="form-select" required>
                <option value="">-- Select Severity --</option>
                <option>Low</option>
                <option>Medium</option>
                <option>High</option>
                <option>Critical</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit Bug</button>
        <a href="view_bugs.php" class="btn btn-secondary">View Reports</a>
    </form>
</div>
</body>
</html>
